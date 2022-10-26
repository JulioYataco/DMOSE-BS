$(document).ready(function () {
  //VARIABLES
  var ubigeo = "";


  // Renderizar tabla
  function renderDataTable(selector) {
    $(selector).DataTable({
      orderCellsTop: true,
      fixedHeader: false,
      language: {
        url: '//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json'
      },
      searching: true,
      responsive: true,
      lengthChange: false,
      autoWidth: false,
      info: false,
      paging: false,
      ordering: true,
      dom: 'Bfrtip',
      buttons: [{
        extend: 'excel',
        text: 'Excel <i class="fas fa-file-excel"></i>',
        titleAttr: 'Exportar a Excel',
        className: 'btn btn-secondary'
      },
      {
        extend: 'csv',
        text: ' CSV <i class="fas fa-file-excel"></i>',
        titleAttr: 'CSV',
        className: 'btn btn-secondary'
      },
      {
        extend: 'pdf',
        text: 'PDF <i class="fas fa-file-pdf"></i>',
        titleAttr: 'Exportar a PDF',
        className: 'btn btn-secondary'
      },
      {
        extend: 'copy',
        text: ' COPIAR <i class="fas fa-copy"></i>',
        titleAttr: 'Copy',
        className: 'btn btn-secondary'
      },
      {
        extend: 'print',
        text: ' Imprimir <i class="fas fa-print"></i>',
        titleAttr: 'Imprimir',
        className: 'btn btn-secondary'
      },
      {
        extend: 'colvis',
        text: ' Columna Visible',
        titleAttr: 'Col Visible',
        className: 'btn btn-secondary'
      },
      ]

    });
  }

  // Generar Html y Asignar al contenedor
  function generateTableHtml(jsonArray, template, selector) {
    return new Promise((resolve, reject) => {
      // Recorrer cada registro del array
      jsonArray.forEach(element => {
        let tmp = template;

        // Recorrer las columnas de un registro
        for (let key in element) {
          tmp = tmp.replaceAll('{' + key + '}', element[key]);
        }

        // Agregar cada registro al contenedor
        $(selector).append(tmp);
      });

      resolve(true);
    });
  }


  // Listar registros de empresas con paginación
  function listBusinessPagination() {
    $.ajax({
      url: 'controllers/Business.controller.php',
      type: 'GET',
      data: {
        operation: 'listBusinessPagination',
        offset: 0,
        limit: 5
      },
      success: function (res) {

        // Destruir la tabla - Obligatorio para mostrar datos asincronos
        $("#tableBusiness").DataTable().destroy();

        let dataJsonArray = JSON.parse(res);

        // Incluir promesa
        generateTableHtml(dataJsonArray, templateBusiness, "#tableBusiness tbody").then(callback => {
          if (callback) {
            renderDataTable("#tableBusiness");
          }
        });
      }
    });
  }

  

  // Busqueda utilizando ajax(access db)
  $("#ubigeo").autoComplete({
    resolver: 'custom',
    minLength: 3,
    noResultsText: 'No encontrado',
    events: {
      search: function (query, callback) {
        $.ajax({
          url: 'controllers/Ubigeo.controller.php',
          type: 'GET',
          dataType: 'JSON',
          data: {
            'operation': 'getUbigeo',
            'search': query
          }

        }).done(function (res) {
          callback(res);
          // Res => Representa la respuesta obtenida BLOQUE JSON
          //console.log(res[0]['ubigeo'])
        });
      }
    }
  });

  // Elemento seleccionado
  $("#ubigeo").on("autocomplete.select", function (event, item) {
    ubigeo = item.ubigeo;
  });
  
  // Detecectar beliminación de dato de la caja
  $("#ubigeo").keyup(function () {
    if ($(this).val() === "") {
      ubigeo = "";
    }
  });

  /**
   * REGISTRAR EMPRESA
   */
  function sentDataServer(type, controller, data, dataType = "true") {
    return new Promise((resolve, reject) => {
      let url = 'controllers/' + controller + '.controller.php';
      let iCache = dataType == "JSON"? false: true;

      $.ajax({
        url: url,
        type: type,
        data: data,
        dataType: dataType,
        contentType: iCache,
        processData: iCache,
        cache: iCache,
        success: function (res) {
          resolve(res);
        },
        error: function (res) {
          reject(res);
        }
      });
    });
  }


  // Validar campos vacios
  function emptyInputs(array){
    let res = false;

    array.forEach(elem => {
      if(elem.trim().length == 0){
        res = true;
      } 
    });

    return res;
  }


  // VALIDAR CAMPOS DEL FORMULARIO 1
  function validateDataForm1(){
    let empresa = $("#empresa").val();
    let ruc = $("#ruc").val();
    let razonsocial = $("#razonsocial").val();
    let direccion = $("#direccion").val();
    let correo = $("#correo").val();
    let diascredito = $("#diascredito").val();

    return [empresa, ruc, razonsocial, direccion, correo, diascredito];
  }


  // Botón siguienge








  // Funciones ejecutadas
  if(getParamUrl("view") == "lists/empresa.list"){
    listBusinessPagination();
  }

});