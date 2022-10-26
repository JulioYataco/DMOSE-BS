<div id="processes">
  <!-- Registros  - ANTECEDENTES OCUPACIONALES -->
  <div class="card card-outline card-primary">
    <div class="card-header">
      <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
        <h4 class="text-bold text-primary"><i class="fas fa-clipboard-list mr-1"></i> ANTECEDENTES OCUPACIONALES</h4>
        <div class="text-right">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#"><i class="fas fa-plus-square mr-1"></i> Nuevo</button>
          <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#collapseOne"><i class="fas fa-stream"></i></button>
        </div>
      </div>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#processes">
      <div class="card-body">
        <table class="table table-striped table-responsive table-responsive-sm">
          <thead>
            <tr>
              <th>EMPRESA</th>
              <th>AREA DE TRABAJO</th>
              <th>OCUPACIÓN</th>
              <th>FECHA INICIO</th>
              <th>FECHA FIN</th>
              <th>TIEMPO</th>
              <th>EXPOSICIÓN OCUPACIONAL</th>
              <th>EPP %</th>
              <th>OPERACIONES</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Diamante</td>
              <td>Tripulante</td>
              <td>Tripulante</td>
              <td>1999</td>
              <td>2000</td>
              <td>1 año</td>
              <td>Frio, Corte</td>
              <td>100%</td>
              <td>
                <button type="button" class="btn btn-outline-info"><i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- ANTECEDNTES PATOLOGICOS -->
  <div class="card card-success card-outline">
    <div class="card-header">
      <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
        <h4 class="text-bold text-success"><i class="far fa-keyboard mr-1"></i> ANTECEDENTES PATOLOGICOS PERSONALES</h4>
        <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#collapseTwo"><i class="fas fa-stream"></i></button>
      </div>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#processes">
      <div class="card-body">
        <form autocomplete="off">

          <div class="row">
            <div class="col-md-3 form-group">
              <label for="">Alergias:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>
            <div class="col-md-3 form-group">
              <label for="">RAM:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>
            <div class="col-md-3 form-group">
              <label for="">Asma:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>
            <div class="col-md-3 form-group">
              <label for="">Bronquitis:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>

          </div> <!-- End row -->

          <div class="row">
            <div class="col-md-3 form-group">
              <label for="">Diabetes:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>
            <div class="col-md-3 form-group">
              <label for="">HTA:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>
            <div class="col-md-3 form-group">
              <label for="">Neoplasia:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>
            <div class="col-md-3 form-group">
              <label for="">TBC:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>
          </div> <!-- End row -->

          <div class="row">
            <div class="col-md-3 form-group">
              <label for="">ITS:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>
            <div class="col-md-3 form-group">
              <label for="">Convulsiones:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>
            <div class="col-md-3 form-group">
              <label for="">Hepatitis B:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>
            <div class="col-md-3 form-group">
              <label for="">Tifoidea:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>
          </div> <!-- End row -->

          <div class="row">
            <div class="col-md-3 form-group">
              <label for="">Quemaduras:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>
            <div class="col-md-3 form-group">
              <label for="">Cirugías:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>
            <div class="col-md-3 form-group">
              <label for="">Intoxicaciones:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>
            <div class="col-md-3 form-group">
              <label for="">Otros:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>
          </div> <!-- End row -->

        </form>
      </div>
    </div>
  </div>

  <!-- HÁBITOS NOCIVOS -->
  <div class="card card-success card-outline">
    <div class="card-header">
      <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
        <h4 class="text-bold text-success"><i class="far fa-keyboard mr-1"></i> HÁBITOS NOCIVOS</h4>
        <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#collapseThree"><i class="fas fa-stream"></i></button>
      </div>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#processes">
      <div class="card-body">
        <form autocomplete="off">
          <div class="row">
            <div class="col-md-12">
              <label for="">ALCOHOL</label>              
            </div>
            <div class="col-md-4 form-group">
              <label for="">Tipo:</label>
              <input type="text" class="form-control form-control-border">
            </div>
            <div class="col-md-4 form-group">
              <label for="">Cantidad:</label>
              <input type="text" class="form-control form-control-border">
            </div>
            <div class="col-md-4 form-group">
              <label for="">Frecuencia:</label>
              <input type="text" class="form-control form-control-border">
            </div>
          </div> <!-- End row -->

          <div class="row">
            <div class="col-md-12">
              <label for="">TABACO</label>              
            </div>
            <div class="col-md-4 form-group">
              <label for="">Tipo:</label>
              <input type="text" class="form-control form-control-border">
            </div>
            <div class="col-md-4 form-group">
              <label for="">Cantidad:</label>
              <input type="text" class="form-control form-control-border">
            </div>
            <div class="col-md-4 form-group">
              <label for="">Frecuencia:</label>
              <input type="text" class="form-control form-control-border">
            </div>
          </div> <!-- End row -->

          <div class="row">
            <div class="col-md-12">
              <label for="">DROGAS</label>              
            </div>
            <div class="col-md-4 form-group">
              <label for="">Tipo:</label>
              <input type="text" class="form-control form-control-border">
            </div>
            <div class="col-md-4 form-group">
              <label for="">Cantidad:</label>
              <input type="text" class="form-control form-control-border">
            </div>
            <div class="col-md-4 form-group">
              <label for="">Frecuencia:</label>
              <input type="text" class="form-control form-control-border">
            </div>
          </div> <!-- End row -->

          <div class="row">
            <div class="col-md-12">
              <label for="">MEDICAMENTOS</label>              
            </div>
            <div class="col-md-4 form-group">
              <label for="">Tipo:</label>
              <input type="text" class="form-control form-control-border">
            </div>
            <div class="col-md-4 form-group">
              <label for="">Cantidad:</label>
              <input type="text" class="form-control form-control-border">
            </div>
            <div class="col-md-4 form-group">
              <label for="">Frecuencia:</label>
              <input type="text" class="form-control form-control-border">
            </div>
          </div> <!-- End row -->
        </form>
      </div>
    </div>
  </div>
</div>