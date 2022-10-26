<div class="card card-outline card-primary">
  <div class="card-body">
    <!-- Migajas de pan -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent p-0">
        <li class="breadcrumb-item"><a href="main.php?view=business/business.list" class="text-primary">Clientes</a></li>
        <li class="breadcrumb-item active" aria-current="page">Nuevo</li>
      </ol>
    </nav> <!-- End breadcrumb -->

    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <div class="form-group-md-none">
        <h3 class="text-bold text-primary">
          <i class="icon fas fa-users mr-1"></i>
          REGISTRAR EMPRESA
        </h3>
      </div>
      <div class="text-md-right">
        <button type="button" class="btn btn-success"><i class="fas fa-upload mr-1"></i> Importar Datos</button>
        <a class="btn btn-primary btn-md" href="main.php?view=business/business.list" role="button">
          <i class="fas fa-clipboard-list mr-1"></i>
          Registros
        </a>
      </div>
    </div>

  </div>
</div>

<div class="card card-primary">
  <div class="card-header">
    <h4 class="text-bold text-uppercase card-title">
      <i class="fas fa-tags mr-1"></i>
      Procesos
    </h4>
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
    </div>
  </div>
  <div class="card-body p-0">

    <div id="wizardBusiness" class="mt-4">
      <ul class="nav mx-2">
        <li class="nav-item">
          <a class="nav-link" href="#step-1">
            <div class="num">1</div>
            Paso 1
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#step-2">
            <span class="num">2</span>
            Paso 2
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#step-3">
            <span class="num">3</span>
            Paso 3
          </a>
        </li>
      </ul>

      <div class="tab-content">
        <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
          <?php include 'forms/form1.php'; ?>
        </div>
        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
          <?php include 'forms/form2.php'; ?>
        </div>
        <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
          <?php include 'forms/form3.php'; ?>
        </div>
      </div>

      <!-- Include optional progressbar HTML -->
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
  </div>
</div>

<!-- Modal para agregar servicio-->
<div class="modal fade" id="modalServicio" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title text-bold text-uppercase text-primary"><i class="far fa-keyboard mr-1"></i> FORMULARIO SERVICIO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form autocomplete="off">
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="">Buscar servicio:</label>
              <input type="search" class="form-control" aria-describedby="helpId" placeholder="">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-long-arrow-alt-left mr-1"></i> Cancelar</button>
        <button type="button" class="btn btn-info d-none"><i class="fas fa-redo-alt mr-1"></i> Actualizar</button>
        <button type="button" class="btn btn-primary"><i class="fas fa-plus-square mr-1"></i> Añadir</button>
      </div>
    </div>
  </div>
</div>

<!-- Taps formulario -->
<script src="dist/js/pages/business.js"></script>
<script>
  $(document).ready(function() {
    $('#wizardBusiness').smartWizard(smartWizardBasic);

    $("#tableServicios").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "info": false
      //"language": { url : '//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json'},
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>