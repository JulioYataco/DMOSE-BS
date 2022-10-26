<div class="card card-outline card-primary">
  <div class="card-header border-bottom-0">
    <!-- Migajas de pan -->
    <?php include '../breadcrumb/breadcrumb.php'; ?>

    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <div class="form-group-md-none">
        <h3 class='text-uppercase text-bold text-primary'>
          <i class="fas fa-notes-medical mr-1"></i>
          TRIAJE
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

<!-- Registros  - DATOS  -->
<div class="card card-outline card-success">
  <div class="card-header">
    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <h4 class="text-bold text-success"><i class="far fa-keyboard mr-1"></i> DATOS</h4>
      <div class="text-right">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-stream"></i></button>
      </div>
    </div>
  </div>
  <div class="card-body">
    <form autocomplete="off">
      <div class="row">
        <div class="col-md-3 form-group">
          <label for="">FC x min</label>
          <input type="text" maxlength="10" class="form-control form-control-border">
        </div>
        <div class="col-md-3 form-group">
          <label for="">FR x min</label>
          <input type="text" maxlength="10" class="form-control form-control-border">
        </div>
        <div class="col-md-3 form-group">
          <label for="">PA mmHg</label>
          <input type="text" maxlength="10" class="form-control form-control-border">
        </div>
        <div class="col-md-3 form-group">
          <label for="">Sat. O2</label>
          <input type="text" maxlength="10" class="form-control form-control-border">
        </div>
      </div> <!-- End row -->

      <div class="row">
        <div class="col-md-3 form-group">
          <label for="">Peso Kg</label>
          <input type="text" maxlength="10" class="form-control form-control-border">
        </div>
        <div class="col-md-3 form-group">
          <label for="">Talla m.</label>
          <input type="text" maxlength="10" class="form-control form-control-border">
        </div>
        <div class="col-md-3 form-group">
          <label for="">IMC</label>
          <input type="text" maxlength="10" class="form-control form-control-border">
        </div>
        <div class="col-md-3 form-group">
          <label for="">Tº</label>
          <input type="text" maxlength="10" class="form-control form-control-border">
        </div>
      </div> <!-- End row -->

      <div class="row">
        <div class="col-md-3 form-group">
          <label for="">Cintura cm.</label>
          <input type="text" maxlength="10" class="form-control form-control-border">
        </div>
        <div class="col-md-3 form-group">
          <label for="">Cadera cm.</label>
          <input type="text" maxlength="10" class="form-control form-control-border">
        </div>
        <div class="col-md-3 form-group">
          <label for="">ICC</label>
          <input type="text" maxlength="10" class="form-control form-control-border">
        </div>
        <div class="col-md-3 form-group">
          <label for="">Grasa Corporal %</label>
          <input type="text" maxlength="10" class="form-control form-control-border">
        </div>
      </div> <!-- End row -->

      <div class="row">
        <div class="col-md-3 form-group">
          <label for="">PerTorax:</label>
          <input type="text" maxlength="10" class="form-control form-control-border">
        </div>
        <div class="col-md-3 form-group">
          <label for="">MInsp:</label>
          <input type="text" maxlength="10" class="form-control form-control-border">
        </div>
        <div class="col-md-3 form-group">
          <label for="">Per. Abdominal:</label>
          <input type="text" maxlength="10" class="form-control form-control-border">
        </div>
        <div class="col-md-3 form-group">
          <label for="">EspFor:</label>
          <input type="text" maxlength="10" class="form-control form-control-border">
        </div>
      </div> <!-- End row -->

    </form>
  </div>
  <div class="card-footer text-right">
    <button type="button" class="btn btn-secondary"><i class="fas fa-long-arrow-alt-left mr-1"></i> Cancelar</button>
    <button type="button" class="btn btn-info d-none"><i class="fas fa-redo-alt mr-1"></i> Actualizar</button>
    <button type="button" class="btn btn-success"><i class="fas  mr-1 fa-save"></i> Guardar</button>
  </div>
</div>