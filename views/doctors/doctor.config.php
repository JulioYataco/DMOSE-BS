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
      <li class="nav-item"><a href="#doctors" id="tabDoctor" data-toggle="pill" role="tab" class="nav-link active"><i class="fas fa-user-md mr-1"></i> Medicos Interconsulta</a></li>
      <li class="nav-item"><a href="#signs" id="tabSign" data-toggle="pill" role="tab" class="nav-link"><i class="fas fa-signature mr-1"></i> Firmas</a></li>
    </ul>
  </div>
  <div class="card-body">
    <div class="tab-content">
      <!-- Contenedor especialidades -->
      <div class="tab-pane show active" id="doctors" role="tabpanel" area-labelledby="tabDoctor">
        <?php include 'processes/doctors.php'; ?>
      </div>
      
      <!-- Contenedor tipo examenes -->
      <div class="tab-pane" id="signs" role="tabpanel" area-labelledby="tabSign">
        <?php include 'processes/signs.php'; ?>           
      </div>     
    </div>
  </div>
</div>


<!-- Modal doctor -->
<div class="modal fade" id="modalDoctor" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title text-bold text-uppercase text-success"><i class="far fa-keyboard mr-1"></i> FORMULARIO <span>TITULO</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario especialidad -->
        <?php include 'forms/sign.form.php'; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-long-arrow-alt-left mr-1"></i> Cancelar</button>
        <button type="button" class="btn btn-info d-none"><i class="fas fa-redo-alt mr-1"></i> Actualizar</button>
        <button type="button" class="btn btn-success"><i class="fas  mr-1 fa-save"></i> Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal visualizar firma -->
<div class="modal fade" id="modalSign" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title text-bold text-uppercase text-primary"><i class="fas fa-signature mr-1"></i> FIRMA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario especialidad -->
        <div class="content-sign">
          <img src="views/images/favicon.png" class="image-responsive image-sign">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-long-arrow-alt-left mr-1"></i> Volver</button>
      </div>
    </div>
  </div>
</div>