$(document).ready(function () {

    var nomtabla = "";
    

    /**
   * ==============================================================
   *                    PARA ESPECIALIDADES
   * ==============================================================
   */
    //Capturar ID y contenido para poder modificar
    $("#Especialidad").on("click", ".btnEditarEspecialidad", function () {

        //Para mostrar contenido en el modal
        $("#formSpecialty").removeClass("d-none");
        $("#formService").addClass("d-none");
        $("#formExamtype").addClass("d-none");

        idespecialidad = $(this).attr('data-idespecialidad');

        $.ajax({
            url: 'controllers/Specialty.controller.php',
            type: 'GET',
            data: 'operacion=listOneDataSpecialty&idespecialidad=' + idespecialidad,
            success: function (e) {
                //console.log(e);

                if (e != "") {
                    var data = JSON.parse(e);

                    $("#txtNomEspecialidad").val(data.especialidad);

                    $("#modalAttentionConfig").modal("show");
                    $("#modalBtnModificar").removeClass("d-none");
                    $("#modalBtnGuardar").addClass("d-none");


                }
            }
        });
    });

    //Modificar
    $("#modalBtnModificar").click(function () {

        especialidad = $("#txtNomEspecialidad").val();

        var datos = {
            'operacion': 'modifySpecialty',
            'idespecialidad': idespecialidad,
            'especialidad': especialidad
        };

        sweetAlertConfirmQuestionSave("¿Estas seguro de modificar este especialidad?").then(confirm => {
            if (confirm.isConfirmed) {

                $.ajax({
                    url: 'controllers/Specialty.controller.php',
                    type: 'GET',
                    data: datos,
                    success: function (e) {
                        //console.log(e);
                        listSpecialty();
                        $("#modalAttentionConfig").modal('hide');
                        sweetAlertSuccess("Se a modificado Correctamente");
                    }

                });
            }
        });


    });

    //Eliminar
    $("#Especialidad").on("click", ".btnEliminarEspecialidad", function () {

        //Capturamos el id
        idespecialidad = $(this).attr('data-idespecialidad');
        //console.log(idespecialidad);
        var datos = {
            'operacion': 'removeSpecialty',
            'idespecialidad': idespecialidad
        };

        if (confirm("¿Estas seguro de eliminar este especialidad?")) {

            $.ajax({
                url: 'controllers/Specialty.controller.php',
                type: 'GET',
                data: datos,
                success: function (e) {
                    console.log(e);
                    if (e == "") {
                        listSpecialty();
                        sweetAlertSuccess("Se elimino correctamente");
                    }
                }
            });
        }
    });

    //Boton que ejecuta la funcion registrar tipo de examen
    $("#modalBtnGuardar").click(function () {
        if (nomtabla == 'especialidad') {
            registerSpecialty();
        }
    });

    //Para el modal
    $("#btnAbrirModalEspecialidad").click(function () {
        //Solo se muestra el formulario de especialidad
        $("#formSpecialty").removeClass("d-none");
        $("#formService").addClass("d-none");
        $("#formExamtype").addClass("d-none");

        //El boton "guardar" aparece y el "Actualizar" desaparece
        $("#modalBtnGuardar").removeClass("d-none");
        $("#modalBtnModificar").addClass("d-none");

        //Limpiamos el la caja de texto
        $("#txtNomEspecialidad").val("");

        nomtabla = 'especialidad';
    });

    /**
     * ==============================================================
     *                   PARA TIPO DE EXAMENES
     * ==============================================================
     */
    //Capturar ID y contenido para poder modificar
    $("#TipoExamen").on("click", ".btnEditarTipoExamen", function () {

        //Para mostrar contenido en el modal
        $("#formExamtype").removeClass("d-none");
        $("#formSpecialty").addClass("d-none");
        $("#formService").addClass("d-none");

        idtipoexamen = $(this).attr('data-idtipoexamen');

        $.ajax({
            url: 'controllers/Examtype.controller.php',
            type: 'GET',
            data: 'operacion=listOneDataExamType&idtipoexamen=' + idtipoexamen,
            success: function (e) {
                console.log(e);

                if (e != "") {
                    var data = JSON.parse(e);

                    $("#txtNomTipoexamen").val(data.nomtipoexamen);

                    $("#modalAttentionConfig").modal('show');
                    $("#modalBtnModificar").removeClass("d-none");
                    $("#modalBtnGuardar").addClass("d-none");
                }
            }
        });
    });

    //Modificar
    $("#modalBtnModificar").click(function () {

        nomtipoexamen = $("#txtNomTipoexamen").val();

        var datos = {
            'operacion': 'modifyExamType',
            'idtipoexamen': idtipoexamen,
            'nomtipoexamen': nomtipoexamen
        };

        sweetAlertConfirmQuestionSave("¿Estas seguro de modificar este tipo de examen?").then(confirm => {
            if (confirm.isConfirmed) {
                $.ajax({
                    url: 'controllers/Examtype.controller.php',
                    type: 'GET',
                    data: datos,
                    success: function (e) {
                        //console.log(e);
                        listExamType();
                        $("#modalAttentionConfig").modal('hide');
                        sweetAlertSuccess("Se a modificado Correctamente");
                    }
                });
            }
        });
    });

    //Eliminar tipo de examen
    $("#TipoExamen").on("click", ".btnEliminarTipoExamen", function () {

        //Capturamos el id
        idtipoexamen = $(this).attr('data-idtipoexamen');
        //console.log(idtipoexamen);
        var datos = {
            'operacion': 'removeExamType',
            'idtipoexamen': idtipoexamen
        };

        if (confirm("¿Estas seguro de eliminar este tipo de examen?")) {

            $.ajax({
                url: 'controllers/Tipoexamen.controller.php',
                type: 'GET',
                data: datos,
                success: function (e) {
                    console.log(e);
                    if (e == "") {
                        listExamType();
                        sweetAlertSuccess("Se elimino correctamente");
                    }
                }
            });
        }
    });

    //Boton que ejecuta la funcion registrar tipo de examen
    $("#modalBtnGuardar").click(function () {
        if (nomtabla == 'tipoexamen') {
            registerExamType();
        }
    });


    $("#btnAbrirModalTipoexamen").click(function () {
        //Solo se muestra el formulario de tipo de examen
        $("#formExamtype").removeClass("d-none");
        $("#formSpecialty").addClass("d-none");
        $("#formService").addClass("d-none");

        //El boton "guardar" aparece y el "Actualizar" desaparece
        $("#modalBtnGuardar").removeClass("d-none");
        $("#modalBtnModificar").addClass("d-none");

        //Limpiamos el la caja de texto
        $("#txtNomTipoexamen").val("");

        nomtabla = 'tipoexamen';
    });


    /**
   * ==============================================================
   *                   PARA SERVICIOS
   * ==============================================================
   */
    //Capturar ID y contenido para poder modificar
    $("#Servicio").on("click", ".btnEditarServicio", function () {

        //Para mostrar contenido en el modal
        $("#formService").removeClass("d-none");
        $("#formExamtype").addClass("d-none");
        $("#formSpecialty").addClass("d-none");

        idservicio = $(this).attr('data-idservicio');

        $.ajax({
            url: 'controllers/Service.controller.php',
            type: 'GET',
            data: 'operacion=listOneDataService&idservicio=' + idservicio,
            success: function (e) {
                console.log(e);

                if (e != "") {
                    var data = JSON.parse(e);

                    $("#txtModNomServicio").val(data.servicio);

                    $("#modalAttentionConfig").modal('show');
                    $("#modalBtnModificar").removeClass("d-none");
                    $("#modalBtnGuardar").addClass("d-none");
                }
            }
        });
    });

    $("#Servicio").on("click", ".btnIrSubServicio", function () {

        idservicio = $(this).attr('data-idservicio');
        //console.log(idservicio);

        
    });

    //Modificar
    $("#modalBtnModificar").click(function () {

        servicio = $("#txtNomServicio").val();

        var datos = {
            'operacion': 'modifyService',
            'idservicio': idservicio,
            'servicio': servicio
        };

        sweetAlertConfirmQuestionSave("¿Estas seguro de modificar este servicio?").then(confirm => {
            if (confirm.isConfirmed) {
                $.ajax({
                    url: 'controllers/Service.controller.php',
                    type: 'GET',
                    data: datos,
                    success: function (e) {
                        //console.log(e);
                        listService();
                        sweetAlertSuccess("Se a modificado Correctamente");
                        $("#modalAttentionConfig").modal('hide');
                    }
                });
            }
        });
    });

    //Eliminar
    $("#Servicio").on("click", ".btnEliminarServicio", function () {

        //Capturamos el id
        idservicio = $(this).attr('data-idservicio');
        //console.log(idservicio);
        var datos = {
            'operacion': 'removeService',
            'idservicio': idservicio
        };

        if (confirm("¿Estas seguro de eliminar este servicio?")) {

            $.ajax({
                url: 'controllers/Service.controller.php',
                type: 'GET',
                data: datos,
                success: function (e) {
                    console.log(e);
                    if (e == "") {
                        listService();
                        alert("Se elimino correctamente");
                    }
                }
            });
        }
    })

    //Boton que ejecuta la funcion registrar tipo de examen
    $("#modalBtnGuardar").click(function () {
        if (nomtabla == 'servicios') {
            registerService();
        }
    });

    //Para el modal
    $("#btnAbrirModalServicio").click(function () {
        //Solo se muestra el formulario de servicio
        $("#formService").removeClass("d-none");
        $("#formExamtype").addClass("d-none");
        $("#formSpecialty").addClass("d-none");

        //El boton "guardar" aparece y el "Actualizar" desaparece
        $("#modalBtnGuardar").removeClass("d-none");
        $("#modalBtnModificar").addClass("d-none");

        //Limpiamos el la caja de texto
        $("#txtNomServicio").val("");

        nomtabla = 'servicios';
    });



});