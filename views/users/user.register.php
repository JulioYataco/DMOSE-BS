<!-- Cabecera -->
<div class="card card-outline card-primary">
  <div class="card-body">

    <div class="row">
      <div class="col-md-7 form-group-md-none">
        <h3 class="text-bold text-primary">
          <i class="icon fas fa-users mr-1"></i>
          CUENTAS DE USUARIO
        </h3>
      </div>
      <div class="col-md-5 text-md-right">
        <a class="btn btn-primary btn-md" href="main.php?view=users/user.list" role="button">
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

    <!-- Pasos para registrar -->
    <div id="wizardUser" class="mt-4">
      <ul class="nav mx-2 nav-progress">
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
      </ul>

      <div class="tab-content">
        <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
          <?php include 'forms/form1.php'; ?>
        </div>
        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
          <?php include 'forms/form2.php'; ?>
        </div>
      </div>

      <!-- Include optional progressbar HTML -->
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
  </div>
</div>


<!-- Taps formulario -->
<script>
  $(document).ready(function() {
    $('#wizardUser').smartWizard(smartWizardBasic);
  });
</script>