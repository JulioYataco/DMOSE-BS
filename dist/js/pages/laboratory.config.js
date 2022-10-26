$(document).ready(function (){

    var nomtablalab = "";
    var nametablemod = "";

    function CambiarbtnAActualizar(){
        //El boton "guardar" desaparece y el "Actualizar" aparece
        $("#btnModificarLab").removeClass("d-none");
        $("#btnRegistrarLab").addClass("d-none");
    }

    function resetbtnandbox(){
        //El boton "guardar" aparece y el "Actualizar" desaparece
        $("#btnRegistrarLab").removeClass("d-none");
        $("#btnModificarLab").addClass("d-none");

        //Limpiamos el la caja de texto
        $("#txtNomLab").val("");
    }

    /**
   * ==============================================================
   *                PARA AREA LABORATORIO
   * ==============================================================
   */

    //Capturar ID y contenido para poder modificar
    $("#AreaLaboratorio").on("click", ".btnEditarAreaLaboratorio", function(){

        idarealaboratorio = $(this).attr('data-idarealaboratorio');

        $.ajax({
            url: 'controllers/LaboratoryArea.controller.php',
            type: 'GET',
            data: 'operacion=listOneDataLaboratoryArea&idarealaboratorio=' + idarealaboratorio,
            success: function(e){
                console.log(e);
                    
                if(e != ""){
                    var data = JSON.parse(e);

                    $("#txtNomLab").val(data.nombrearea);
                    
                    //Abrimos el modal
                    $("#modalLaboratorioConfig").modal("show");
                    CambiarbtnAActualizar();
                }
            }
        });   
    });

    //Eliminar un tipo de red social
    $("#AreaLaboratorio").on("click", ".btnEliminarAreaLaboratorio", function(){

        //Capturamos el id
        idarealaboratorio = $(this).attr('data-idarealaboratorio');
        //console.log(idtipoexamen);
        var datos = {
        'operacion'         : 'removeLaboratoryArea',
        'idarealaboratorio' : idarealaboratorio
        };

        sweetAlertConfirmQuestionSave("¿Estas seguro de eliminar esta área?").then(confirm => {
            if (confirm.isConfirmed) {
                $.ajax({
                    url: 'controllers/LaboratoryArea.controller.php',
                    type: 'GET',
                    data: datos,
                    success: function(e){
                        //console.log(e);
                        if(e == ""){
                            listLaboratoryArea();
                            sweetAlertSuccess("Se elimino correctamente");
                        }
                    }
                });
            }
        });
    });

    //Boton que ejecuta la funcion registrar AREA
    $("#btnRegistrarLab").click(function () {
        if(nomtablalab == 'area'){
            registerLaboratoryArea();
        }
    });

    $("#btnModificarLab").click(function() {
        nametablemod = 'area';

        if(nametablemod == 'area'){
            modificarLaboratoryArea();
        }
    }); 

    //Abrir modal y asignar valor a variable para cumplir condición
    $("#btnAbrirModalArea").click(function() {
        nomtablalab = 'area';
        resetbtnandbox();

        //Cambiar titulo y subtitulo
        $("#titulomodal").html('Area');
        $("#subtitulomodal").html('Area');
        
    });
    
    /**
   * ==============================================================
   *                PARA METODO LABORATORIO
   * ==============================================================
   */

    //Capturar ID y contenido para poder modificar
    $("#MetodoLaboratorio").on("click", ".btnEditarMetodoLaboratorio", function(){

        idarealaboratorio = $(this).attr('data-idmetodolaboratorio');

        $.ajax({
            url: 'controllers/LaboratoryArea.controller.php',
            type: 'GET',
            data: 'operacion=listOneDataLaboratoryArea&idarealaboratorio=' + idarealaboratorio,
            success: function(e){
                console.log(e);
                    
                if(e != ""){
                    var data = JSON.parse(e);

                    $("#txtNomLab").val(data.nombrearea);

                    $("#modalLaboratorioConfig").modal("show");
                }
            }
        });   
    });

    //Modificar
    $("#btnModificarLab").click(function(){

        nombrearea = $("#txtNomLab").val();

        var datos = {
        'operacion'         : 'modifyLaboratoryArea',
        'idarealaboratorio' : idarealaboratorio,
        'nombrearea'        : nombrearea
        };

        sweetAlertConfirmQuestionSave("¿Estas seguro de modificar este método?").then(confirm => {
            if (confirm.isConfirmed) {
                $.ajax({
                    url: 'controllers/LaboratoryArea.controller.php',
                    type: 'GET',
                    data: datos,
                    success: function(e){
                        //console.log(e);
                        listMethodLab();
                        sweetAlertSuccess("Se a modificado Correctamente");
                        $("#modalLaboratorioConfig").modal('hide');
                    }
                });
            }
        });
    });

    //Eliminar metodo
    $("#MetodoLaboratorio").on("click", ".btnEliminarMetodoLaboratorio", function(){

        //Capturamos el id
        idarealaboratorio = $(this).attr('data-idmetodolaboratorio');
        //console.log(idtipoexamen);
        var datos = {
        'operacion'         : 'removeLaboratoryArea',
        'idarealaboratorio' : idarealaboratorio
        };

        sweetAlertConfirmQuestionSave("¿Estas seguro de eliminar este método?").then(confirm => {
            if (confirm.isConfirmed) {
                $.ajax({
                    url: 'controllers/LaboratoryArea.controller.php',
                    type: 'GET',
                    data: datos,
                    success: function(e){
                        console.log(e);
                        if(e == ""){
                            listMethodLab();
                            sweetAlertSuccess("Se elimino correctamente");
                        }
                    }
                });
            }
        });        
    });

    //Boton que ejecuta la funcion registrar METODO
    $("#btnRegistrarLab").click(function (){
        if(nomtablalab == 'metodo'){
            registerMethodLab();
        }
    });

    //Abrir modal y asignar valor a variable para cumplir condición
    $("#btnAbrirModalMetodo").click(function() {
        nomtablalab = 'metodo';

        resetbtnandbox();

        //Cambiar titulo y subtitulo
        $("#titulomodal").html('Método');
        $("#subtitulomodal").html('Método');
    });

    /**
   * ==============================================================
   *                PARA METODO LABORATORIO
   * ==============================================================
   */

    //Capturar ID y contenido para poder modificar
    $("#MuestraLaboratorio").on("click", ".btnEditarMuestraLaboratorio", function(){

        idarealaboratorio = $(this).attr('data-idmuestralaboratorio');

        $.ajax({
            url: 'controllers/LaboratoryArea.controller.php',
            type: 'GET',
            data: 'operacion=listOneDataLaboratoryArea&idarealaboratorio=' + idarealaboratorio,
            success: function(e){
                console.log(e);
                    
                if(e != ""){
                    var data = JSON.parse(e);

                    $("#txtNomLab").val(data.nombrearea);

                    $("#modalLaboratorioConfig").modal("show");
                }
            }
        });   
    });

    //Modificar muestra
    $("#btnModificarLab").click(function(){

        nombrearea = $("#txtNomLab").val();

        var datos = {
        'operacion'         : 'modifyLaboratoryArea',
        'idarealaboratorio' : idarealaboratorio,
        'nombrearea'        : nombrearea
        };
        
        sweetAlertConfirmQuestionSave("¿Estas seguro de modificar esta muestra?").then(confirm => {
            if (confirm.isConfirmed) {
                $.ajax({
                    url: 'controllers/LaboratoryArea.controller.php',
                    type: 'GET',
                    data: datos,
                    success: function(e){
                        //console.log(e);
                        listSampleLab();
                        sweetAlertSuccess("Se a modificado Correctamente");
                        $("#modalLaboratorioConfig").modal('hide');
                    }
                });
            }
        });
    });

    //Eliminar muestra
    $("#MuestraLaboratorio").on("click", ".btnEliminarMuestraLaboratorio", function(){

        //Capturamos el id
        idarealaboratorio = $(this).attr('data-idmuestralaboratorio');
        //console.log(idtipoexamen);
        var datos = {
        'operacion'         : 'removeLaboratoryArea',
        'idarealaboratorio' : idarealaboratorio
        };

        sweetAlertConfirmQuestionSave("¿Estas seguro de eliminar esta muestra?").then(confirm => {
            if (confirm.isConfirmed) {
                $.ajax({
                    url: 'controllers/LaboratoryArea.controller.php',
                    type: 'GET',
                    data: datos,
                    success: function(e){
                        console.log(e);
                        if(e == ""){
                            listSampleLab();
                            sweetAlertSuccess("Se elimino correctamente");
                        }
                    }
                });
            }
        });
    });

    //Boton que ejecuta la funcion registrar MUESTRA
    $("#btnRegistrarLab").click(function (){
        if(nomtablalab == 'muestra'){
            registerSampleLab();
        }
    });

    //Abrir modal y asignar valor a variable para cumplir condición
    $("#btnAbrirModalMuestra").click(function() {
        nomtablalab = 'muestra';

        resetbtnandbox();

        //Cambiar titulo y subtitulo
        $("#titulomodal").html('Muestra');
        $("#subtitulomodal").html('Muestra');
    });

});