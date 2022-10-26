<div class="card  bg-primary">
  <div class="card-body">
    <h3 class="text-bold">
      <i class="nav-icon fas fa-diagnoses"></i>
      CONFIGURACIÓN DE ATENCIONES
    </h3>
  </div>
</div>


<!-- Contenedor de: AREA | MÉTODOS | MUESTRAS -->
<div class="card card-tabs card-  card-primary">
  <div class="card-header p-0 pt-1">
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item"><a href="#especialidades" id="tabEspecialidad" data-toggle="pill" role="tab" class="nav-link active"><i class="fas fa-layer-group mr-1"></i> Especialidades</a></li>
      <li class="nav-item"><a href="#tipoExamenes" id="tabTipoExamen" data-toggle="pill" role="tab" class="nav-link"><i class="fas fa-vial mr-1"></i> Tipo de Exámenes</a></li>
      <li class="nav-item"><a href="#servicios" id="tabServicio" data-toggle="pill" role="tab" class="nav-link "><i class="fas fa-layer-group mr-1"></i> Servicios</a></li>
      <li class="nav-item"><a href="#subservicios" id="tabSubservicio" data-toggle="pill" role="tab" class="nav-link"><i class="fas fa-vials mr-1"></i> SubServicios</a></li>
      <li class="nav-item"><a href="#cie10" id="tabCie10" data-toggle="pill" role="tab" class="nav-link"><i class="fas fa-vial mr-1"></i> CIE10 </a></li>
    </ul>
  </div>
  <div class="card-body">
    <div class="tab-content">
      <!-- Contenedor especialidades -->
      <div class="tab-pane show active" id="especialidades" role="tabpanel" area-labelledby="tabEspecialidad">
        <?php include 'processes/specialty.php'; ?>
      </div>
      
      <!-- Contenedor tipo examenes -->
      <div class="tab-pane" id="tipoExamenes" role="tabpanel" area-labelledby="tabTipoExamen">
        <?php include 'processes/examtype.php'; ?>             
      </div>
      
      <!-- Contenedor servicios -->
      <div class="tab-pane" id="servicios" role="tabpanel" area-labelledby="tabServicio">
        <?php include 'processes/service.php'; ?>     
      </div>
      
      <!-- Contenedor Subservicios -->
      <div class="tab-pane" id="subservicios" role="tabpanel" area-labelledby="tabSubservicio">
        <?php include 'processes/subservice.php'; ?>             
      </div>
      
      <!-- Contenedor cie10 -->
      <div class="tab-pane" id="cie10" role="tabpanel" area-labelledby="tabCie10">
        <?php include 'processes/cie10.php'; ?>     
       
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalAttentionConfig" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title text-bold text-uppercase text-success"><i class="far fa-keyboard mr-1"></i> FORMULARIO <span>TITULO</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario especialidad -->
        <div id="formSpecialty" class="d-none">
          <?php include 'forms/specialty.form.php';  ?>
        </div>
        <!-- Formulario servicios -->
        <div id="formService" class="d-none">
          <?php include 'forms/service.form.php';  ?>
        </div>
        <!-- Formulario de tipo de examen -->
        <div id="formExamtype" class="d-none">
          <?php include 'forms/examtype.form.php';  ?>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-long-arrow-alt-left mr-1"></i> Cancelar</button>
        <button type="button" class="btn btn-info d-none" id="modalBtnModificar"><i class="fas fa-redo-alt mr-1"></i> Actualizar</button>
        <button type="button" class="btn btn-success" id="modalBtnGuardar"><i class="fas  mr-1 fa-save"></i> Guardar</button>
      </div>
    </div>
  </div>
</div>

<script src="dist/js/pages/specialty.js"></script>
<script src="dist/js/pages/examtype.js"></script>
<script src="dist/js/pages/service.js"></script>
<script src="dist/js/pages/subservice.js"></script>
<script src="dist/js/pages/attention.config.js"></script>