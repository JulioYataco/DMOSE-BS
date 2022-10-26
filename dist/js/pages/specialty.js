
    var idespecialidad = "";

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
    function listSpecialty() {
        $.ajax({
            url: 'controllers/Specialty.controller.php',
            type: 'GET',
            data: 'operacion=listSpecialty',
            success: function (e) {
                //console.log(e);
                var tabla = $("#TablaEspecialidad").DataTable();
                //Destruimos al DataTable anterior
                tabla.destroy();
                //Enviamos nuevas filas al cuerpo de la tabla
                $("#Especialidad").html(e);
                //Volver a cargar el DataTable
                renderDataTable("#TablaEspecialidad");
            }
        });
    }

    //Registrar
    function registerSpecialty() {

        //Capturamos al input
        let especialidad = $("#txtNomEspecialidad").val();

        if (especialidad == "") {
            alert("Por favor, complete los datos");
        }
        else {
            // Creamos un array asosciativo
            var datos = {
                'operacion': 'registerSpecialty',
                'especialidad': especialidad
            };

            sweetAlertConfirmQuestionSave("¿Estas seguro de agregar este especialidad?").then(confirm => {
                if (confirm.isConfirmed) {
        
                    $.ajax({
                        url: 'controllers/Specialty.controller.php',
                        type: 'GET',
                        data: datos,
                        success: function (e) {
                            
                            listSpecialty();
                            $("#modalAttentionConfig").modal('hide');
                            sweetAlertSuccess("Especialidad guardado correctamente");
                                
                        }
                    });
                
                }
            });

        }
    }

    listSpecialty();

    /* sweetAlertConfirmQuestionSave("¿Estas seguro de agregar este especialidad?").then(confirm => {
        if (confirm.isConfirmed) {
        }
    }); */