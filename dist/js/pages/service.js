
    var idservicio = "";


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