<div class="card card-success card-outline">
  <div class="card-header">
    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <h4 class="text-bold text-success"><i class="far fa-keyboard mr-1"></i> ANTECEDENTE </h4>
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-stream"></i></button>
    </div>
  </div>
  <div class="card-body">
    <form autocomplete="off">
      <div class="row">
        <div class="col-md-12 form-group">
          <label for="">Empresa:</label>
          <input type="text" class="form-control form-control-border">
        </div>
        <div class="col-md-6 form-group">
          <label for="">Area de Trabajo:</label>
          <input type="text" class="form-control form-control-border">
        </div>
        <div class="col-md-6 form-group">
          <label for="">Ocupacion:</label>
          <input type="text" class="form-control form-control-border">
        </div>
      </div> <!-- end row -->

      <div class="row">
        <div class="col-md-4 form-group">
          <label for="">Fecha Inicio::</label>
          <input type="date" class="form-control form-control-border">
        </div>
        <div class="col-md-4 form-group">
          <label for="">Fecha Fin:</label>
          <input type="date" class="form-control form-control-border">
        </div>
        <div class="col-md-4 form-group">
          <label for="">EPP %:</label>
          <input type="text" class="form-control form-control-border">
        </div>
      </div> <!-- end row -->

      <div class="row">
        <div class="col-md-12 form-group">
          <label for="">Exposición Ocupacional:</label>
          <input type="text" class="form-control form-control-border">
        </div>
      </div> <!-- end row -->
    </form>
  </div>
  <div class="card-footer text-right">
    <button type="button" class="btn btn-secondary"><i class="fas fa-long-arrow-alt-left mr-1"></i> Cancelar</button>
    <button type="button" class="btn btn-info d-none"><i class="fas fa-redo-alt mr-1"></i> Actualizar</button>
    <button type="button" class="btn btn-success"><i class="fas  mr-1 fa-save"></i> Guardar</button>
  </div>
</div>

<!-- REgistros  -->
<div class="card card-outline card-primary">
  <div class="card-header">
    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <h4 class="text-bold text-primary"><i class="fas fa-clipboard-list mr-1"></i> ANTECEDENTES </h4>
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-stream"></i></button>
    </div>
  </div>
  <div class="card-body">
    <table class="table table-striped table-responsive">
      <thead class="">
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