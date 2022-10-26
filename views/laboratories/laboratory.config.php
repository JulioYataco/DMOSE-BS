<div class="card  bg-primary">
  <div class="card-body">
    <h3 class="text-bold">
      <i class="nav-icon fas fa-flask"></i>
      <!-- <i class="nav-icon fas fa-cogs"></i> -->
      CONFIGURACIÓN DE LABORATORIO
    </h3>
  </div>
</div>


<!-- Contenedor de: AREA | MÉTODOS | MUESTRAS -->
<div class="card card-tabs card-  card-primary">
  <div class="card-header p-0 pt-1">
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item"><a href="#areas" id="tabArea" data-toggle="pill" role="tab" class="nav-link active"><i class="fas fa-layer-group mr-1"></i> Areas</a></li>
      <li class="nav-item"><a href="#metodos" id="tabMetodo" data-toggle="pill" role="tab" class="nav-link"><i class="fas fa-vials mr-1"></i> Metodos</a></li>
      <li class="nav-item"><a href="#muestras" id="tabMuestra" data-toggle="pill" role="tab" class="nav-link"><i class="fas fa-vial mr-1"></i> Muestras</a></li>
    </ul>
  </div>
  <div class="card-body">
    <div class="tab-content">
      <!-- Contenedor areas -->
      <div class="tab-pane show active" id="areas" role="tabpanel" area-labelledby="tabArea">
        <?php include 'processes/areas.php'; ?>
      </div>

      <!-- Contenedor métodos -->
      <div class="tab-pane" id="metodos" role="tabpanel" area-labelledby="tabMetodo">
        <?php include 'processes/methods.php'; ?>
      </div>

      <!-- Contenedor muestras -->
      <div class="tab-pane" id="muestras" role="tabpanel" area-labelledby="tabMuestra">
        <?php include 'processes/samples.php'; ?>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalLaboratorioConfig" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title text-bold text-uppercase text-success"><i class="far fa-keyboard mr-1"></i> FORMULARIO <span id="titulomodal">ÁREA</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form autocomplete="off">
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="txtNomLab">Nombre <span id="subtitulomodal">Area</span>:</label>
              <input type="text" id="txtNomLab" class="form-control form-control-border" maxlength="25" placeholder="">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-long-arrow-alt-left mr-1"></i> Cancelar</button>
        <button type="button" id="btnModificarLab"class="btn btn-info d-none"><i class="fas fa-redo-alt mr-1"></i> Actualizar</button>
        <button type="button" id="btnRegistrarLab" class="btn btn-success"><i class="fas  mr-1 fa-save"></i> Guardar</button>
      </div>
    </div>
  </div>
</div>

<script src="dist/js/pages/areaLab.js"></script>
<script src="dist/js/pages/methodLab.js"></script>
<script src="dist/js/pages/sampleLab.js"></script>
<script src="dist/js/pages/laboratory.config.js"></script>