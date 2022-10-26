<div id="processesData2">

  <!-- ANTECEDNTES PATOLOGICOS FAMILIARES-->
  <div class="card card-success card-outline">
    <div class="card-header">
      <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
        <h4 class="text-bold text-success"><i class="far fa-keyboard mr-1"></i> ANTECEDENTES PATOLOGICOS FAMILIARES</h4>
        <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#collapseOne"><i class="fas fa-stream"></i></button>
      </div>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#processesData2">
      <div class="card-body">
        <form autocomplete="off">

          <div class="row">
            <div class="col-md-3 form-group">
              <label for="">Padre:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>
            <div class="col-md-3 form-group">
              <label for="">Madre:</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>
            <div class="col-md-3 form-group">
              <label for="">Hermanos:</label>
              <input type="number" min="0" max="15" class="form-control form-control-border">
            </div>
            <div class="col-md-3 form-group">
              <label for="">Esposa (o):</label>
              <input type="text" maxlength="250" class="form-control form-control-border">
            </div>

          </div> <!-- End row -->

          <div class="row">
            <div class="col-md-3 form-group">
              <label for="">Hijos vivos:</label>
              <input type="number" min="0" max="15" class="form-control form-control-border">
            </div>
            <div class="col-md-3 form-group">
              <label for="">Hijos fallecidos:</label>
              <input type="text" min="0" max="15" class="form-control form-control-border">
            </div>
          </div> <!-- End row -->

          <table class="table table-striped">
            <thead>
                <tr>
                    <th>Enfermedad/Accidente</th>
                    <th>Asociados al Trabajo</th>
                    <th>Año</th>
                    <th>Dias de Descanso</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="checkbox" class="form-control"></td>
                    <td><input type="date" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="checkbox" class="form-control"></td>
                    <td><input type="date" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="checkbox" class="form-control"></td>
                    <td><input type="date" class="form-control"></td>
                    <td><input type="number" class="form-control"></td>
                </tr>
            </tbody>
          </table>

        </form>
      </div>
    </div>
  </div>

  <!-- HÁBITOS NOCIVOS -->
  <div class="card card-success card-outline">
    <div class="card-header">
      <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
        <h4 class="text-bold text-success"><i class="far fa-keyboard mr-1"></i> EVALUACIÓN MÉDICA</h4>
        <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#collapseTwo"><i class="fas fa-stream"></i></button>
      </div>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#processesData2">
      <div class="card-body">
        <form autocomplete="off">

          <div class="row">
            <div class="col-md-12 form-group">
                <label for="">Anamnesis:</label>
                <textarea rows="2" maxlength="250" class="form-control form-control-border"></textarea>
            </div>
            <div class="col-md-8 form-group">
                <label for="">Menarquia:</label>
                <input type="text" maxlength="200" class="form-control form-control-border"></input>
            </div>
            <div class="col-md-4 form-group">
                <label for="">RUR:</label>
                <input type="text" class="form-control form-control-border"></input>
            </div>

            <div class="col-md-12 form-group">
                <label for="">Ectoscopia:</label>
                <textarea rows="2" maxlength="250" class="form-control form-control-border"></textarea>
            </div>
            <div class="col-md-12 form-group">
                <label for="">Estado mental::</label>
                <textarea rows="2" maxlength="250" class="form-control form-control-border"></textarea>
            </div>
          </div> <!-- End row -->
        </form>
      </div>
    </div>
  </div>
</div>