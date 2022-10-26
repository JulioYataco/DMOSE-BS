<div id="processes">

  <!-- Datos -->
  <div class="card card-outline card-success">
    <div class="card-header">
      <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
        <h4 class="text-bold text-success"><i class="far fa-keyboard mr-1"></i> DATOS RADIOGRAFÍA</h4>
        <div class="text-right">
          <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#collapseOne"><i class="fas fa-stream"></i></button>
        </div>
      </div>
    </div>
    <div class="collapse show" id="collapseOne" data-parent="#processes">
      <div class="card-body">
        <form autocomplete="off">
          <div class="row">
            <div class="col-md-4 form-group">
              <label for="">PLACA N°:</label>
              <input type="text" class="form-control form-control-border">
            </div>
            <div class="col-md-4 form-group">
              <label for="">Fecha de Lectura:</label>
              <input type="date" class="form-control form-control-border">
            </div>
            <div class="col-md-4 form-group">
              <label for="">Fecha de Radiografía:</label>
              <input type="date" class="form-control form-control-border">
            </div>
          </div> <!-- End row -->

          <div class="row">
            <div class="col-md-6 form-group">
              <label for="">Calidad Radiografica:</label>
              <select class="custom-select form-control-border">
                <option value="">Buena</option>
                <option value="" selected>Aceptable</option>
                <option value="">Baja Calidad</option>
                <option value="">Inaceptable</option>
              </select>
            </div>
            <div class="col-md-6 form-group">
              <label for="">Causas:</label>
              <select class="custom-select form-control-border">
                <option value="">Sobreexposición</option>
                <option value="" selected>Posición Centrado</option>
                <option value="">Inspiración Insuficiente</option>
                <option value="">Escapulas</option>
                <option value="">Artefacto</option>
                <option value="">Otros</option>
              </select>
            </div>

            <div class="col-md-12 form-group">
              <label for="">Comentario sobre defectos técnicos:</label>
              <input type="text" class="form-control form-control-border" placeholder="Escriba aquí...">
            </div>
          </div> <!-- End row -->
        </form>
      </div>
    </div>
  </div> <!-- End card one -->

  <!-- Anormalidades -->
  <div class="card card-outline card-success">
    <div class="card-header">
      <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
        <h4 class="text-bold text-success"><i class="far fa-keyboard mr-1"></i> ANORMALIDADES PARENQUIMATOSAS</h4>
        <div class="text-right">
          <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#collapseTwo"><i class="fas fa-stream"></i></button>
        </div>
      </div>
    </div>
    <div class="collapse" id="collapseTwo" data-parent="#processes">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <label for="" class="d-block">Zonas Afectadas (marque TODAS las zonas afectadas)</label>

            <table class="table table-striped">
              <thead>
                <tr>
                  <th></th>
                  <th>DERECHO</th>
                  <th>IZQUIERDO</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Superior</td>
                  <td><input type="checkbox" class="form-control"></td>
                  <td><input type="checkbox" class="form-control"></td>
                </tr>
                <tr>
                  <td>Medio</td>
                  <td><input type="checkbox" class="form-control"></td>
                  <td><input type="checkbox" class="form-control"></td>
                </tr>
                <tr>
                  <td>Bajo</td>
                  <td><input type="checkbox" class="form-control"></td>
                  <td><input type="checkbox" class="form-control"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div> <!-- End row -->

        <div class="row">
          <div class="col-md-12 form-group">
            <label for="" class="d-block">
              Profusión (opacidades pequeñas)(escala de 12 puntos) (Consulte las radiografias estándar - marque la subcategoría de profusión)
            </label>
          </div>
          <div class="col-md-4 form-group">
            <label for="" class="d-block">Escala:</label>
            <select class="custom-select form-control-border">
              <option value="">Seleccione</option>
              <option value="">0/-</option>
              <option value="">0/0</option>
              <option value="">0/1</option>
              <option value="">1/0</option>
              <option value="">1/1</option>
              <option value="">2/1</option>
              <option value="">2/2</option>
              <option value="">2/3</option>
              <option value="">3/2</option>
              <option value="">3/3</option>
              <option value="">3/+</option>
            </select>
          </div>
        </div> <!-- End row -->

        <div class="row">
          <div class="col-md-12 form-group">
            <label for="" class="d-block">
              Forma y tamaño: (Consulte las radiografías estándar; se requieren dos símbolos; marque un primario y un secundario)
            </label>
          </div>

          <div class="col-md-6 form-group">
            <label for="">Primaria:</label>
            <select class="custom-select form-control-border">
              <option value="">Seleccione</option>
              <option value="">P</option>
              <option value="">Q</option>
              <option value="">R</option>
              <option value="">S</option>
              <option value="">T</option>
              <option value="">U</option>
            </select>
          </div>

          <div class="col-md-6 form-group">
            <label for="">Secundaria:</label>
            <select class="custom-select form-control-border">
              <option value="">Seleccione</option>
              <option value="">P</option>
              <option value="">Q</option>
              <option value="">R</option>
              <option value="">S</option>
              <option value="">T</option>
              <option value="">U</option>
            </select>
          </div>
        </div> <!-- End row -->

        <div class="row">
          <div class="col-md-12 form-group">
            <label for="" class="d-block">
              Opacidades Grandes (marque 0 si no hay ninguna o marque A,B o C)
            </label>
          </div>

          <div class="col-md-6 form-group">
            <select class="custom-select form-control-border">
              <option value="">Seleccione</option>
              <option value="">0</option>
              <option value="">A</option>
              <option value="">B</option>
              <option value="">C</option>
            </select>
          </div>
        </div> <!-- End row -->

      </div> <!-- End card-body -->
    </div>
  </div> <!-- End card two -->
</div> <!-- End processes -->