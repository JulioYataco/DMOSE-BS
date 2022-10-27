
$(document).ready(function() {

    var idsubservicio = "";

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
    function listSubservice(){
        $.ajax({
            url: 'controllers/Subservice.controller.php',
            type: 'GET',
            data: 'operacion=listSubservice',
            success: function (e){
                //console.log(e);
                var tabla = $("#TablaSubservicio").DataTable();
                //Destruimos al DataTable anterior
                tabla.destroy();
                //Enviamos nuevas filas al cuerpo de la tabla
                $("#Subservicio").html(e);
                //Volver a cargar el DataTable
                renderDataTable("#TablaSubservicio");
            }
        });
    }

    //Registrar
    function registerSubservice(){

        //Capturamos al input
        let nomsubservicio = $("#txtSubservice").val();
        let tipo = $("#txtTipo").val();
        let idarea = $("#txtArea").val();
        let idmetodo = $("#txtMetodo").val();
        let idmuestra = $("#txtMuestra").val();
        let idespecialidad = $("#txtEspecialidad").val();
        let idfichamedica = $("#txtFichaMedica").val();

        if(tipo == "" || idespecialidad == ""){
            alert("Por favor, complete los datos");
        }
        else{
            // Creamos un array asosciativo
            var datos = {
                'operacion'         : 'registerSubservice',
                'idservicio'        : '12',
                'nomsubservicio'    : nomsubservicio,
                'tipo'              : tipo,
                'idarea'            : idarea,
                'idmetodo'          : idmetodo,
                'idmuestra'         : idmuestra,
                'idespecialidad'    : idespecialidad,
                'idfichamedica'     : idfichamedica
            };

            $.ajax({
                url: 'controllers/Subservice.controller.php',
                type: 'GET',
                data: datos,
                success: function(e){
                    console.log(e);
                    if(confirm("¿Estas seguro de agregar esta subservicio?")){
                        alert("Area guardado correctamente");
                        listSubservice();
                        $("#modalAttentionConfig").modal('hide');
                    }
                }
            });
        }
    }

    //Cargar especialidades
    function cargarEspecialidad(){
        //Enviar datos por ajax, usando el metodo GET
        $.ajax({
            url: 'controllers/Subservice.controller.php',
            type: 'GET',
            data: 'operacion=listSpecialty',
            success: function(e){
                console.log(e);
                //Renderizar las etiquetas que vienen desde controllers
                $("#txtEspecialidad").html(e); //html e Inyecta nuenvas etiquetas e 
            }
        }); // Fin ajax
    }

    //Cargar areas
    function cargarAreas(){
        //Enviar datos por ajax, usando el metodo GET
        $.ajax({
            url: 'controllers/Subservice.controller.php',
            type: 'GET',
            data: 'operacion=listLaboratoryArea',
            success: function(e){
                //console.log(e);
                //Renderizar las etiquetas que vienen desde controllers
                $("#txtArea").html(e); //html e Inyecta nuenvas etiquetas e 
            }
        }); // Fin ajax
    }

    //Cargar metodos
    function cargarMetodo(){
        //Enviar datos por ajax, usando el metodo GET
        $.ajax({
            url: 'controllers/Subservice.controller.php',
            type: 'GET',
            data: 'operacion=listMethodLab',
            success: function(e){
                //console.log(e);
                //Renderizar las etiquetas que vienen desde controllers
                $("#txtMetodo").html(e); //html e Inyecta nuenvas etiquetas e 
            }
        }); // Fin ajax
    }

    //Cargar muestras
    function cargarMuestra(){
        //Enviar datos por ajax, usando el metodo GET
        $.ajax({
            url: 'controllers/Subservice.controller.php',
            type: 'GET',
            data: 'operacion=listSampleLab',
            success: function(e){
                //console.log(e);
                //Renderizar las etiquetas que vienen desde controllers
                $("#txtMuestra").html(e); //html e Inyecta nuenvas etiquetas e 
            }
        }); // Fin ajax
    }

    //Cargar fichas medicas
    function cargarFichaMedica(){
        //Enviar datos por ajax, usando el metodo GET
        $.ajax({
            url: 'controllers/Subservice.controller.php',
            type: 'GET',
            data: 'operacion=listMedicalRecord',
            success: function(e){
                //console.log(e);
                //Renderizar las etiquetas que vienen desde controllers
                $("#txtFichaMedica").html(e); //html e Inyecta nuenvas etiquetas e 
            }
        }); // Fin ajax
    }

    //Al dar click cambiar visibilidad de cajas select
    $("#txtTipo").change(function () {
        
        if($(this).val() == 'AN'){
            $("#txtArea").prop('disabled', false);
            $("#txtMetodo").prop('disabled', false);
            $("#txtMuestra").prop('disabled', false);
            $("#txtFichaMedica").prop('disabled', true);
        }
        else if($(this).val() == 'FM'){
            $("#txtFichaMedica").prop('disabled', false);
            $("#txtArea").prop('disabled', true);
            $("#txtMetodo").prop('disabled', true);
            $("#txtMuestra").prop('disabled', true);
        }else{
            $("#txtFichaMedica").prop('disabled', true);
            $("#txtArea").prop('disabled', true);
            $("#txtMetodo").prop('disabled', true);
            $("#txtMuestra").prop('disabled', true);
        }
        
        
    });
     
    //Capturar ID y contenido para poder modificar
    $("#Subservicio").on("click", ".btnEditarSubservicio", function(){

        idsubservicio = $(this).attr('data-idsubservicio');

        $.ajax({
            url: 'controllers/Subservice.controller.php',
            type: 'GET',
            data: 'operacion=listOneDataSubservice&idsubservicio=' + idsubservicio,
            success: function(e){
                //console.log(e);
                    
                if(e != ""){
                    var data = JSON.parse(e);

                    $("#txtModNomSubservicio").val(data.nomsubservicio);
                    $("#txtModTipoSubservicio").val(data.tipo);
                    $("#txtModAreaLaboratorio").val(data.idarealaboratorio);
                    $("#txtModEspecialidad").val(data.idespecialidad);
                    $("#txtModFichaMedica").val(data.idfichamedica);

                    $("#modelModificarSubservicio").modal('show');
                }
            }
        });   
    });

    //Modificar
    $("#btnModificarSubservicio").click(function(){

        nomsubservicio      = $("#txtModNomSubservicio").val();
        tipo                = $("#txtModTipoSubservicio").val();
        idarealaboratorio   = $("#txtModAreaLaboratorio").val();
        idespecialidad      = $("#txtModEspecialidad").val();
        idfichamedica       = $("#txtModFichaMedica").val();

        var datos = {
            'operacion'         : 'modifySubservice',
            'idsubservicio'     : idsubservicio,
            'nomsubservicio'    : nomsubservicio,
            'tipo'              : tipo,
            'idarealaboratorio' : idarealaboratorio,
            'idespecialidad'    : idespecialidad,
            'idfichamedica'     : idfichamedica
        };

        if(confirm("¿Estas seguro de modificar esta subservicio?")){

            $.ajax({
                url: 'controllers/Subservice.controller.php',
                type: 'GET',
                data: datos,
                success: function(e){
                    console.log(e);
                    listSubservice();
                    alert("Se a modificado Correctamente");
                    $("#modelModificarSubservicio").modal('hide');
                }
            
            });
        }
    });

    //Eliminar un tipo de red social
    $("#Subservicio").on("click", ".btnEliminarSubservicio", function(){

        //Capturamos el id
        idsubservicio = $(this).attr('data-idsubservicio');
        //console.log(idtipoexamen);
        var datos = {
        'operacion'         : 'removeSubservice',
        'idsubservicio' : idsubservicio
        };

        if(confirm("¿Estas seguro de eliminar esta área?")){

            $.ajax({
                url: 'controllers/Subservice.controller.php',
                type: 'GET',
                data: datos,
                success: function(e){
                    console.log(e);
                    if(e == ""){
                        listSubservice();
                        alert("Se elimino correctamente");
                    }
                }
            });
        }
    })

    //Boton que ejecuta la funcion registrar tipo de examen
    $("#btnModalGuardarSubservicio").click(registerSubservice);

    $("#modalsubservicio").click(function(){
        $("#formsSubservice").removeClass("d-none");
        $("#formSpecialty").addClass("d-none");
        $("#formService").addClass("d-none");
        $("#formExamtype").addClass("d-none");
    });
    

    cargarFichaMedica();
    cargarAreas();
    cargarMetodo();
    cargarMuestra();
    cargarEspecialidad();
    listSubservice();
});