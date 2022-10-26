<!-- Registros  - ANTECEDENTES OCUPACIONALES -->
<div class="card card-outline card-success">
  <div class="card-header">
    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <h4 class="text-bold text-success"><i class="far fa-keyboard mr-1"></i> ANAMNESIS (pre ocupacional)</h4>
      <div class="text-right">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-stream"></i></button>
      </div>
    </div>
  </div>
  <div class="card-body">
    <form autocomplete="off">
      <div class="row">
        <div class="col-md-4 form-group">
          <label for="">Puesto:</label>
          <select class="custom-select form-control-border">
            <option value="">Seleccione</option>
            <option value="">Operario</option>
            <option value="">Administrativo</option>
          </select>
        </div>
        <div class="col-md-4 form-group">
          <label for="">Postura Sedente:</label>
          <input type="text" class="form-control form-control-border">
        </div>
        <div class="col-md-4 form-group">
          <label for="">Postura Bipedestación:</label>
          <input type="text" class="form-control form-control-border">
        </div>
      </div> <!-- End row -->

      <div class="row">
        <div class="col-md-4 form-group">
          <div class="custom-control custom-switch mb-1">
            <input class="custom-control-input" type="checkbox" id="">
            <label class="custom-control-label" for="">¿Postura forzada?</label>
          </div>
        </div>
        <div class="col-md-4 form-group">
          <div class="custom-control custom-switch mb-1">
            <input class="custom-control-input" type="checkbox" id="">
            <label class="custom-control-label" for="">¿Movimientos repetitivos?</label>
          </div>
        </div>
        <div class="col-md-4 form-group">
          <div class="custom-control custom-switch mb-1">
            <input class="custom-control-input" type="checkbox" id="">
            <label class="custom-control-label" for="">¿Movimiento manual de carga?</label>
          </div>
        </div>
      </div> <!-- End row -->

      <div class="row">
        <div class="col-md-4 form-group">
          <label for="">Peso Minimo:</label>
          <input type="text" maxlength="5" class="form-control form-control-border">
        </div>
        <div class="col-md-4 form-group">
          <label for="">Peso Maximo:</label>
          <input type="text" maxlength="5" class="form-control form-control-border">
        </div>

      </div> <!-- End row -->


      <div class="row">
        <div class="col-md-12">
          <label for="">MÉTODO</label>

          <div class="row">
            <div class="col-md-4 form-group">
              <div class="custom-control custom-switch mb-1">
                <input class="custom-control-input" type="checkbox" id="">
                <label class="custom-control-label" for="">Levanta</label>
              </div>
            </div>
            <div class="col-md-4 form-group">
              <div class="custom-control custom-switch mb-1">
                <input class="custom-control-input" type="checkbox" id="">
                <label class="custom-control-label" for="">Empuja</label>
              </div>
            </div>
            <div class="col-md-4 form-group">
              <div class="custom-control custom-switch mb-1">
                <input type="checkbox" id="" class="custom-control-input">
                <label for="" class="custom-control-label">Arrastra</label>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- End row -->

      <div class="row">
        <div class="col-md-12 form-group">
          <label for="">¿Usuario de pantalla de visualización de datos (PVD)?</label>
          <input type="text" class="form-control form-control-border">
        </div>
        <div class="col-md-6 form-group">
          <label for="">Nº horas/dia:</label>
          <input type="number" class="form-control form-control-border">
        </div>
        <div class="col-md-6 form-group">
          <label for="" class="d-block">Dominancia:</label>
          <div class="custom-control custom-switch custom-control-inline">
            <input type="radio" id="diestro" name="dominancia" class="custom-control-input" checked>
            <label for="diestro" class="custom-control-label">Diestro</label>
          </div>
          <div class="custom-control custom-switch custom-control-inline">
            <input type="radio" id="zurdo" name="dominancia" class="custom-control-input">
            <label for="zurdo" class="custom-control-label">Zurdo</label>
          </div>
        </div>
      </div> <!-- End row -->

    </form>
  </div>
</div>