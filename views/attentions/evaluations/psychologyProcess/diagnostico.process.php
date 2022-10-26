<!-- Registros  - DIAGNÓSTICO  -->
<div class="card card-outline card-success">
  <div class="card-header">
    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <h4 class="text-bold text-success"><i class="far fa-keyboard mr-1"></i> DIAGNÓSTICO</h4>
      <div class="text-right">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-stream"></i></button>
      </div>
    </div>
  </div>
  <div class="card-body">
    <form autocomplete="off">
      <div class="row">
        <div class="col-md-12 form-group">
          <label for="">Area Cognitiva:</label>
          <textarea rows="3" maxlength="250" class="form-control form-control-border" placeholder="Escriba aquí..."></textarea>
        </div> <!-- End col-12 -->
      </div> <!-- End row -->

      <div class="row">
        <div class="col-md-12 form-group">
          <label for="">Area Emocional:</label>
          <textarea rows="3" maxlength="250" class="form-control form-control-border" placeholder="Escriba aquí..."></textarea>
        </div>
      </div> <!-- End row -->

      <div class="row">
        <div class="col-md-12 form-group">
          <label for="">RECOMENDACIONES:</label>
          <textarea rows="3" maxlength="250" class="form-control form-control-border" placeholder="Escriba aquí..."></textarea>
        </div>
      </div> <!-- End row -->

      <div class="row">
        <div class="col-md-12 form-group">
          <label for="" class="d-block">CONCLUSIÓN:</label>

          <div class="form-check form-check-inline mb-1" checked>
            <input type="radio" id="apto" name="conclusion" class="form-check-input">
            <label for="apto" class="form-check-label">Apto</label>
          </div>
          <div class="form-check form-check-inline mb-1">
            <input type="radio" id="aptoObservacion" name="conclusion" class="form-check-input">
            <label for="aptoObservacion" class="form-check-label">Apto con Observación</label>
          </div>

          <div class="form-check form-check-inline mb-1">
            <input type="radio" id="noApto" name="conclusion" class="form-check-input">
            <label for="noApto" class="form-check-label">No Apto</label>
          </div>
          
        </div>
      </div> <!-- End row -->
    </form>
  </div>
</div>