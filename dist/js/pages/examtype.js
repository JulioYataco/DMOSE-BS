
    var idtipoexamen = "";

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
    function listExamType(){
        $.ajax({
            url: 'controllers/Examtype.controller.php',
            type: 'GET',
            data: 'operacion=listExamType',
            success: function (e){
                //console.log(e);
                var tabla = $("#TablaTipoExamen").DataTable();
                //Destruimos al DataTable anterior
                tabla.destroy();
                //Enviamos nuevas filas al cuerpo de la tabla
                $("#TipoExamen").html(e);
                //Volver a cargar el DataTable
                renderDataTable("#TablaTipoExamen");
            }
        });
    }

    //Registrar
    function registerExamType(){

        //Capturamos al input
        let nomtipoexamen = $("#txtNomTipoexamen").val();

        if(nomtipoexamen == ""){
        alert("Por favor, complete los datos");
        }
        else{
            // Creamos un array asosciativo
            var datos = {
                'operacion'     : 'registerExamType',
                'nomtipoexamen' : nomtipoexamen
            };

            sweetAlertConfirmQuestionSave("¿Estas seguro de agregar este tipo de examen?").then(confirm => {
                if (confirm.isConfirmed) {
        
                    $.ajax({
                        url: 'controllers/Examtype.controller.php',
                        type: 'GET',
                        data: datos,
                        success: function(e){
                            //console.log(e);
                            sweetAlertSuccess("Tipo de examen guardado correctamente");
                            listExamType();
                            $("#modalAttentionConfig").modal('hide');
                            
                        }
                    });
                }
            });
        }
    }


    listExamType();
