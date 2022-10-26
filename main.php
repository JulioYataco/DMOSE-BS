<?php require_once 'views/access/access-security.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FamiSalud | Salud Ocupacional</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="shortcut icon" href="dist/img/app/favicon.png" type="image/x-icon">

  <!-- DATA TABLE -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


  <!-- SmartWizard -->
  <link rel="stylesheet" href="plugins/animate.css/animate.min.css">
  <link href="https://unpkg.com/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">
  <link rel="stylesheet" href="dist/css/user-account.css">
  <link rel="stylesheet" href="dist/css/switch-dark-mode.css">
  <link rel="stylesheet" href="dist/css/themes.css">

  <!-- loader -->
  <!-- <link rel="stylesheet" href="dist/css/preloader.css"> -->
  <link rel="stylesheet" href="dist/css/loader.css">
  <link rel="stylesheet" href="dist/css/loaders/loadpro.css">

  <!-- Datetime css -->
  <link rel="stylesheet" href="dist/css/datetime.css">
  <link rel="stylesheet" href="dist/css/pages/dashboard.css">

  <!-- text lg modificado -->
  <link rel="stylesheet" href="dist/css/custom-responsive.css">
  <link rel="stylesheet" href="dist/css/font-size.css">
  <link rel="stylesheet" href="dist/css/pages/timeline.css">

  <!-- Colores -->
  <link rel="stylesheet" href="dist/css/custom-colors.css">

  <!-- Tiempo -->
  <link rel="stylesheet" href="dist/css/chronometer.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <!-- <div class="content-xbox">
        <div class="loader-xbox"></div>
      </div> -->
      <div class="content-loader-pro">
        <div class="loader"></div>
        <span>Cargando...</span>
      </div>
    </div>

    <!-- Navbar text-sm-->
    <nav class="main-header navbar navbar-expand navbar-light text-sm">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <!-- Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

        <!-- o'clock -->
        <div class="oclock ml-4 hidden-xs ">
          <span id="time"></span>
        </div>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto align-items-center">

        <div class="chronometer">
          <span id="timerTmp">00:00:00</span>
        </div>

        <!-- User Account: style can be found in dropdown.less -->
        <li class="nav-item dropdown user user-menu">
          <a href="#" class="nav-link text-overflow" data-toggle="dropdown" aria-expanded="false">
            <img src="./dist/img/user2-160x160.jpg" class="user-image user-image-top" alt="User Image">
            <span class="hidden-xs text-truncate"> <?php echo $_SESSION['usuario']; ?></span>
          </a>

          <div class="dropdown-menu content-user">
            <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Perfil</a>
            <a class="dropdown-item" href="main.php?view=users/user.list"><i class="fas fa-users-cog"></i> Administrar cuentas</a>
            <hr>
            <a class="dropdown-item" href="controllers/User.controller.php?operation=logout"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
          </div>
        </li>

        <!-- Switch -->
        <li class="nav-item item-switch-darkmode ml-2">
          <div class="theme-switch-wrapper nav-link ">
            <label class="theme-switch" for="checkbox-theme">
              <input type="checkbox" id="checkbox-theme" />
              <span class="slider round">
                <i class="fa fa-solid fa-sun"></i>
                <i class="fa fa-solid fa-moon"></i>
              </span>
            </label>
          </div>
        </li>

        <!-- Config -->
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-navy elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="dist/img/app/favicon.png" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold"> DMOSE-BS</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar ">

        <!-- SidebarSearch Form -->
        <div class="form-inline mt-4">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu text-sm -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar  flex-column  nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-header">MENU</li>
            <li class="nav-item">
              <a href="main.php?view=dashboard" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="main.php?view=affiliations/affiliation.list" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Afiliación
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="main.php?view=laboratories/laboratory.list" class="nav-link">
                <i class="nav-icon fas fa-flask"></i>
                <p>
                  Laboratorio
                </p>
              </a>

            </li>
            <li class="nav-item">
              <a href="main.php?view=attentions/attention.list" class="nav-link">
                <i class="nav-icon fas fa-diagnoses"></i>
                <p>
                  Atención
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="main.php?view=audits/audit.list" class="nav-link">
                <i class="nav-icon far fa-check-square"></i>
                <p>
                  Auditoria
                </p>
              </a>
            </li>

            <li class="nav-header">ADMIN</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                  Configuración

                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="main.php?view=laboratories/laboratory.config" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Laboratorio (Config)</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="main.php?view=attentions/attention.config" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Atención (Config)</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="main.php?view=business/business.list" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Clientes</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="main.php?view=doctors/doctor.config" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Médicos y Firmas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="main.php?view=users/user.list" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Usuarios</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="main.php?view=quotations/quotation.list" class="nav-link">
                <i class="nav-icon fas fa-tty"></i>
                <p>
                  Cotización
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="main.php?view=calendar" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Calendario
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-area"></i>
                <p>
                  Estadisticas
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content - text-md -->
    <div class="content-wrapper text-md" id="content-body">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid" id="content-data">
          <!-- Aqui se cargan los datos dinamicos -->
        </div>
        <!--/. container-fluid -->
      </section>
      <!-- /.content -->

      <!-- Subir al inicio -->
      <a id="back-to-top" href="#content-body" class="btn btn-dark back-to-top d-none" role="button" aria-label="Scroll to top">
        <i class="fas fa-chevron-up"></i>
      </a>
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark" style="overflow: hidden;">
      <!-- Control sidebar content goes here text-sm -->
      <div class="p-3 control-sidebar-content text-sm" style="height: fit-content;">
        <h5 class="title">Configuración</h5>
        <br>

        <h5 class="subtitle">Menu de Navegación</h5>

        <div class="form-group form-check mb-1">
          <input type="checkbox" class="form-check-input" id="cbox-sidebar-mini" checked>
          <label class="form-check-label" for="cbox-sidebar-mini">Comprimido</label>
        </div>
        <div class="form-group form-check mb-3">
          <input type="checkbox" class="form-check-input" id="cbox-sidebar-flat-style" checked>
          <label class="form-check-label" for="cbox-sidebar-flat-style">Estilo Flat</label>
        </div>

        <h5 class="subtitle">Navbar Superior</h5>

        <div class="form-group mb-3">
          <div class="form-check-inline form-check">
            <input class="form-check-input" type="radio" data-fontsize="text-sm" name="fontSizeHeader" checked id="header-text-sm">
            <label class="form-check-label" for="header-text-sm">Texto Pequeño</label>
          </div>
          <div class="form-check-inline form-check">
            <input class="form-check-input" type="radio" data-fontsize="text-md" name="fontSizeHeader" id="header-text-md">
            <label class="form-check-label" for="header-text-md">Texto Mediano</label>
          </div>
        </div>

        <h5 class="subtitle">Sidebars</h5>

        <div class="form-group mb-3">
          <div class="form-check-inline form-check">
            <input class="form-check-input" type="radio" data-fontsize="text-sm" name="fontSizeSidebar" id="sidebar-text-sm">
            <label class="form-check-label" for="sidebar-text-sm">Texto Pequeño</label>
          </div>
          <div class="form-check-inline form-check">
            <input class="form-check-input" type="radio" data-fontsize="text-md" name="fontSizeSidebar" checked id="sidebar-text-md">
            <label class="form-check-label" for="sidebar-text-md">Texto Mediano</label>
          </div>
          <div class="form-check-inline form-check">
            <input class="form-check-input" type="radio" data-fontsize="text-lg" name="fontSizeSidebar" id="sidebar-text-lg">
            <label class="form-check-label" for="sidebar-text-lg">Texto Grande</label>
          </div>
        </div>

        <h5 class="subtitle">Fuente del Contenido</h5>

        <div class="form-group">
          <div class="form-check-inline form-check">
            <input class="form-check-input" type="radio" data-fontsize="text-sm" name="fontSizeContent" id="content-text-sm">
            <label class="form-check-label" for="content-text-sm">Texto Pequeño</label>
          </div>
          <div class="form-check-inline form-check">
            <input class="form-check-input" type="radio" data-fontsize="text-md" name="fontSizeContent" checked id="content-text-md">
            <label class="form-check-label" for="content-text-md">Texto Mediano</label>
          </div>
          <div class="form-check-inline form-check">
            <input class="form-check-input" type="radio" data-fontsize="text-lg" name="fontSizeContent" id="content-text-lg">
            <label class="form-check-label" for="content-text-lg">Texto Grande</label>
          </div>
        </div>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer text-sm">
      <strong>Copyright &copy; 2022-2023 <a href="http://www.famisalud.com.pe/">FamiSalud</a>.</strong>
      Todos los derechos reservados
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


  <!-- Bootstrap autocomplete -->
  <script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.3.7/dist/latest/bootstrap-autocomplete.min.js"></script>


  <!-- Data table & plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  
  <!-- Moment -->
  <script src="plugins/moment/moment.min.js"></script>

  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <!-- Configuración JSON DataTable -->
  <script src="dist/js/scripts/dataTableConfig.js"></script>

  <!-- SmartWizard -->
  <!-- JavaScript -->
  <script src="https://unpkg.com/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>
  <script src="dist/js/scripts/smartwizardConfig.js"></script>

  <!-- SweetAlert 2 -->
  <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
  <script src="dist/js/sweet-alert-2.js"></script>

  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>

  <!-- Cargar pagina incrustada -->
  <script src="./dist/js/loadweb.js"></script>

  <!-- Config theme -->
  <script src="./dist/js/config.js"></script>

  <!-- Date and Time -->
  <script src="./dist/js/getDatetime.js"></script>

  <!-- navbar -->
  <script src="dist/js/menu.js"></script>

  <!-- Utility -->
  <script src="dist/js/utility.js"></script>

  <!-- Cronometro -->
  <script src="dist/js/chronometer.js"></script>

  <script>
    $(document).ready(function() {
      var view = getParam("view");

      if (view != false) {
        $("#content-data").load(`views/${view}.php`);
      } else {
        $("#content-data").load(`views/dashboard.php`);
      }

      // BOTON SUBIR AL INICIO
      $(document).on('scroll', function() {
        var scrollDistance = $(this).scrollTop();

        if (scrollDistance > 450) {
          $('#back-to-top').removeClass('d-none');
          $('#back-to-top').fadeIn();
        } else {
          $('#back-to-top').fadeOut();
        }
      });
    });
  </script>
</body>

</html>