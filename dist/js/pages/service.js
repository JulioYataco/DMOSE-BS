
    var idservicio = "";

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
    function listService(){
        $.ajax({
            url: 'controllers/Service.controller.php',
            type: 'GET',
            data: 'operacion=listService',
            success: function (e){
                //console.log(e);
                var tabla = $("#TablaServicio").DataTable();
                //Destruimos al DataTable anterior
                tabla.destroy();
                //Enviamos nuevas filas al cuerpo de la tabla
                $("#Servicio").html(e);
                //Volver a cargar el DataTable
                $("#TablaServicio").DataTable(dataTableComplete);
            }
        });
    }

    //Cargar sedes
    function cargarSede(){
        //Enviar datos por ajax, usando el metodo GET
        $.ajax({
            url:    'controllers/Service.controller.php',
            type:   'GET',
            data:   'operacion=listHeadquarters',
            success: function(e){
                //console.log(e);
                //Renderizar las etiquetas que vienen desde controllers
                $("#txtSede").html(e); //html e Inyecta nuenvas etiquetas e 
            }
        }); // Fin ajax
    }

    //Registrar
    function registerService(){

        //Capturamos al input
        let idsede = $("#txtSede").val();
        let servicio = $("#txtServicio").val();
        let precio = $("#txtPrecio").val();

        if(idsede == "" || servicio == ""){
        alert("Por favor, complete los datos");
        }
        else{
            // Creamos un array asosciativo
            var datos = {
                'operacion'     : 'registerPrice',
                'idsede'        : idsede,
                'servicio'      : servicio,
                'precio'        : precio
            };

            sweetAlertConfirmQuestionSave("¿Estas seguro de agregar este servicio?").then(confirm => {
                if (confirm.isConfirmed) {
        
                    $.ajax({
                        url: 'controllers/Price.controller.php',
                        type: 'GET',
                        data: datos,
                        success: function(e){
                            console.log(e);
                            sweetAlertSuccess("Servicio guardado correctamente");
                            listService();
                            $("#modalAttentionConfig").modal('hide');
                            
                        }
                    });
                
                }
            });

        }
    }

    cargarSede();
    listService();