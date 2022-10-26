<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Salud Ocupacional</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="shortcut icon" href="dist/img/app/favicon.png" type="image/x-icon">


  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">
  <link rel="stylesheet" href="plugins/animate.css/animate.min.css">
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="dist/css/login.css">
</head>

<body>

  <div class="container-login">
    <div class="card content-login">
      <div class="card-body">
        <h4 class="mb-4 text-center text-primary text-bold title-login">SISTEMA OCUPACIONAL</h4>

        <form autocomplete="off">
          <!-- USUARIO -->
          <div class="form-group">
            <label for="username" class="d-block">Usuario:</label>
            <div class="input-group">
              <div class="input-group-prepend pl-0 absolute-left">
                <button type="button" class="btn text-primary btn-user"><i class="fas fa-user"></i></button>
              </div>
              <input type="text" id="username" maxlength="15" class="overflow-auto text-indent-2 form-control form-control-border">
              <div class="invalid-feedback">
                Usuario Incorrecto!
              </div>
            </div>
          </div>

          <!-- CONTRASEÑA -->
          <div class="form-group">
            <label for="password" class="d-block">Contraseña:</label>

            <div class="input-group">
              <div class="input-group-prepend absolute-left">
                <button type="button" class="btn text-primary btn-password"><i class="fas fa-key"></i></button>
              </div>
              <input type="password" id="password" maxlength="15" class="overflow-auto text-indent-2 form-control form-control-border">
              <div class="invalid-feedback">
                Contraseña Incorrecto!
              </div>
              <div class="input-group-append absolute-right bg-white">
                <button type="button" class="btn border-0 text-info" id="btnShowPassword"><i class="fas fa-eye"></i></button>
              </div>
            </div>
          </div>

          <!-- BOTÓN LOGIN -->
          <div class="form-group">
            <button type="button" id="btAccess" class="btn btn-primary btn-block">Iniciar Sesión</button>
            <div class="invalid-feedback">
              <strong>¡Por favor Complete (USUARIO y CONTRASEÑA)!</strong>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
  <script src="dist/js/sweet-alert-2.js"></script>
  <script>
    $(document).ready(function() {

      // Access User
      function login() {
        let usuario = $("#username").val();
        let clave = $("#password").val();

        if (usuario == "" || clave == "") {
          $("#btAccess").addClass("is-invalid");

          setTimeout(() => {
            $("#btAccess").removeClass("is-invalid");
          }, 3000);
          
        } else {
          $.ajax({
            url: 'controllers/User.controller.php',
            type: 'GET',
            dataType: 'JSON',
            data: {
              operation: 'login',
              usuario: usuario,
              clave: clave
            },
            success: function(res) {
              if (res.access) {
                window.location.href = "main.php";
              } else {

                // Validar usuario
                if(res.message == "El usuario no existe"){
                  $("#username").addClass("is-invalid");
                  $(".btn-user").removeClass("text-primary").addClass("text-danger");
                } else {
                  $("#username").removeClass("is-invalid");
                  $(".btn-user").removeClass("text-danger").addClass("text-primary");
                }
                
                // Validar contraseña
                if(res.message == "La contraseña es incorrecta"){
                  $("#password").addClass("is-invalid");
                  $(".btn-password").removeClass("text-primary").addClass("text-danger");
                } else {
                  $("#password").removeClass("is-invalid");
                  $(".btn-password").removeClass("text-danger").addClass("text-primary");
                }
              }
            }
          });

        }
      }

      $("#btnShowPassword").click(function() {
        if($("#password").attr("type") === "password"){
          $("#password").attr("type", "text");
          $(`#btnShowPassword i`).removeClass("fa-eye").addClass("fa-eye-slash");
        } else {
          $("#password").attr("type", "password");          
          $(`#btnShowPassword i`).removeClass("fa-eye-slash").addClass("fa-eye");
        }
      });

      $("#btAccess").click(function() {
        login();
      });

      $("#password").keypress(function(event) {
        if (event.keyCode == 13) {
          login();
        }
      });

    });
  </script>
</body>

</html>