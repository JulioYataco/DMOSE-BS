<div class="card card-outline card-primary">
  <div class="card-header border-bottom-0">
    <!-- Migajas de pan -->
    <?php include '../breadcrumb/breadcrumb.php'; ?>

    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <div class="form-group-md-none">
        <h3 class='text-uppercase text-bold text-primary'>
          <i class="fas fa-notes-medical mr-1"></i>
          RAYOS X OIT
        </h3>
      </div>
      <div class="text-md-right">
        <button type="button" class="btn btn-warning" class="Reporte"><i class="fas fa-file-pdf"></i> Reporte</button>
        <a class="btn btn-primary btn-md" href="main.php?view=attentions/attention.services" role="button">
          <i class="fas fa-clipboard-list mr-1"></i>
          Servicios
        </a>
      </div>
    </div>
  </div>
  <div class="card-body pb-2">
    <?php include '../../persondata/data.form.php'; ?>
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

    <div id="wizardRayosXOIT" class="mt-4">
      <ul class="nav mx-2 nav-progress">
        <li class="nav-item">
          <a class="nav-link" href="#step-1">
            <div class="num">1</div>
            Anormalidades Parenquimatosas
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#step-2">
            <span class="num">2</span>
            Anormalidades Pleurales
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#step-3">
            <span class="num">3</span>
            Simbolos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#step-4">
            <span class="num">4</span>
            Para 7c
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#step-5">
            <span class="num">5</span>
            CIE-10
          </a>
        </li>
      </ul>

      <div class="tab-content">
        <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
          <?php include 'xRayOITProcess/datos.process.php'; ?>
        </div>
        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
          <?php include 'xRayOITProcess/anormalidadPleural.process.php'; ?>
        </div>
        <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
          <?php include 'xRayOITProcess/simbolos.process.php'; ?>
        </div>
        <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
          <?php include 'xRayOITProcess/para7c.process.php'; ?>
        </div>
        <div id="step-5" class="tab-pane" role="tabpanel" aria-labelledby="step-5">
          <?php include 'pathologies/cie10.php'; ?>
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
    $('#wizardRayosXOIT').smartWizard(smartWizardMedium);
  });
</script>