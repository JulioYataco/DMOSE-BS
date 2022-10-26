
    var idarealaboratorio = "";

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
            text: 'Excel',
            titleAttr: 'Exportar a Excel',
            className: 'btn btn-secondary'
        },
        {
            extend: 'csv',
            text: ' CSV',
            titleAttr: 'CSV',
            className: 'btn btn-secondary'
        },
        {
            extend: 'pdf',
            text: 'PDF',
            titleAttr: 'Exportar a PDF',
            className: 'btn btn-secondary'
        },
        {
            extend: 'copy',
            text: ' COPIAR',
            titleAttr: 'Copy',
            className: 'btn btn-secondary'
        },
        {
            extend: 'print',
            text: ' Imprimir',
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

    //Listar
    function listMethodLab(){
        $.ajax({
            url: 'controllers/LaboratoryArea.controller.php',
            type: 'GET',
            data: 'operacion=listMethodLab',
            success: function (e){
                //console.log(e);
                var tabla = $("#TablaMetodoLaboratorio").DataTable();
                //Destruimos al DataTable anterior
                tabla.destroy();
                //Enviamos nuevas filas al cuerpo de la tabla
                $("#MetodoLaboratorio").html(e);
                //Volver a cargar el DataTable
                renderDataTable("#TablaMetodoLaboratorio");
            }
        });
    }

    //Registrar
    function registerMethodLab(){

        //Capturamos al input
        let nombrearea = $("#txtNomLab").val();

        if(nombrearea == ""){
        alert("Por favor, complete los datos");
        }
        else{
            // Creamos un array asosciativo
            var datos = {
                'operacion' : 'registerLaboratoryArea',
                'tipo'       : 'ME',
                'nombrearea' : nombrearea
            };

            $.ajax({
                url: 'controllers/LaboratoryArea.controller.php',
                type: 'GET',
                data: datos,
                success: function(e){
                    //console.log(e);
                    if(confirm("¿Estas seguro de agregar este método?")){
                        alert("Método guardado correctamente");
                        listMethodLab();
                        $("#modalLaboratorioConfig").modal('hide');
                    }
                }
            });
        }
    }

    listMethodLab();