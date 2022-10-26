<div id="processes">
  <!-- EJERCICIO  -->
  <div class="card card-outline card-success">
    <div class="card-header">
      <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
        <h4 class="text-bold text-success"><i class="far fa-keyboard mr-1"></i> EJERCICIO</h4>
        <div class="text-right">
          <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#collapseOne"><i class="fas fa-stream"></i></button>
        </div>
      </div>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#processes">
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ETAPA</th>
              <th>MIN.</th>
              <th>VELOC. M.P.H.</th>
              <th>INCLINACIÓN %</th>
              <th>P.A.</th>
              <th>F.C.</th>
              <th>ECG.ST.SINTOMAS, ETC.</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- RECUPERACIÓN -->
  <div class="card card-success card-outline">
    <div class="card-header">
      <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
        <h4 class="text-bold text-success"><i class="far fa-keyboard mr-1"></i> RECUPERACIÓN</h4>
        <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#collapseTwo"><i class="fas fa-stream"></i></button>
      </div>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#processes">
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>MINUTOS</th>
              <th>P.A.</th>
              <th>F.C.</th>
              <th>ECG.ST.SINTOMAS, ETC.</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- CONCLUSIÓN -->
  <div class="card card-success card-outline">
    <div class="card-header">
      <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
        <h4 class="text-bold text-success"><i class="far fa-keyboard mr-1"></i> CONCLUSIÓN</h4>
        <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#collapseThree"><i class="fas fa-stream"></i></button>
      </div>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#processes">
      <div class="card-body">
        <form autocomplete="off">
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="">Se termina prueba por:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>
          </div> <!-- End row -->

          <div class="row">
            <div class="col-md-4 form-group">
              <label for="">Max. F.C. Obtenida:</label>
              <input type="text" maxlength="60" class="form-control form-control-border">
            </div>
            <div class="col-md-4 form-group">
              <label for="">Max. P.A. Obtenida:</label>
              <input type="text" maxlength="60" class="form-control form-control-border">
            </div>
            <div class="col-md-4 form-group">
              <label for="">Doble Producto:</label>
              <input type="text" maxlength="60" class="form-control form-control-border">
            </div>
          </div> <!-- End row -->

          <div class="row">
            <div class="col-md-6 form-group">
              <label for="">MeTs Alcanzados:</label>
              <input type="text" maxlength="60" class="form-control form-control-border">
            </div>
            <div class="col-md-6 form-group">
              <label for="">Tiempo de ejercicio:</label>
              <input type="text" maxlength="60" class="form-control form-control-border">
            </div>
          </div> <!-- End row -->

          <div class="row">
            <div class="col-md-6 form-group">
              <label for="">CONCLUSION:</label>
              <textarea id="" cols="30" rows="3" maxlength="300" class="form-control form-control-border"></textarea>
            </div>
            <div class="col-md-6 form-group">
              <label for="">COMENTARIO:</label>
              <textarea id="" cols="30" rows="3" maxlength="300" class="form-control form-control-border"></textarea>
            </div>
          </div> <!-- End row -->
        </form>
      </div>
    </div>
  </div>

</div>