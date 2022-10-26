<!-- Cabecera -->
<div class="card card-outline card-primary">
  <div class="card-body">

    <div class="row">
      <div class="col-md-7 form-group-md-none">
        <h3 class="text-bold text-primary">
          <i class="fas fa-file-invoice-dollar mr-1"></i>
          REALIZAR COTIZACIÓN
        </h3>
      </div>
      <div class="col-md-5 text-md-right">
        <a class="btn btn-primary btn-md" href="main.php?view=quotations/quotation.list" role="button">
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
  </div> <!-- End header -->
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
        <li class="nav-item">
          <a class="nav-link" href="#step-2">
            <span class="num">2</span>
            Paso 2
          </a>
        </li>
      </ul>

      <div class="tab-content">
        <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
          <?php include 'forms/business.form.php'; ?>
        </div>
        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
          <?php include 'forms/employee.form.php'; ?>
        </div>
        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
          <?php include 'forms/quotation.form.php'; ?>
        </div>
      </div>

      <!-- Include optional progressbar HTML -->
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div> <!-- End wizard -->
  </div>
</div>

<!-- Modal -->
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
            <div class="col-md-6 form-group">
              <label for="price">Precio S/:</label>
              <input type="text" id="price" class="form-control" maxlength="5" value="0" disabled>
            </div>
            <div class="col-md-6 form-group">
              <label for="discount">Descuento S/:</label>
              <input type="text" id="discount" class="form-control" maxlength="5" value="0">
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
<script>
  $(document).ready(function() {
    $('#wizardUser').smartWizard(smartWizardBasic);
  });
</script>