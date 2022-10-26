<!-- Contenido del formulario -->
<div class="card card-outline card-success collapsed-card">
  <div class="card-header">
    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <h4 class="text-bold text-center text-success"><i class="far fa-keyboard mr-1"></i> FORMULARIO COMPONENTE</h4>
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
    </div>
  </div>
  <div class="card-body">
    <form autocomplete="off" id="formSubservice">
      <div class="row">
        <div class="col-md-12 form-group">
          <label for="component">Nombre <span>Componente</span>:</label>
          <input type="text" id="component" class="form-control form-control-border" maxlength="25" placeholder="">
        </div>
        
        <div class="col-md-5 form-group">
          <label for="abbreviation"><span>Abreviatura</span>:</label>
          <input type="text" id="abbreviation" class="form-control form-control-border" maxlength="25" placeholder="">
        </div>
        
        <div class="col-md-5 form-group">
          <label for="unit"><span>Unidad</span>:</label>
          <select id="unit" class="custom-select form-control-border">
            <option value="">Mg</option>
          </select>
        </div>        

        <div class="col-md-2 form-group">
          <label for="order"><span>Orden</span>:</label>
          <input type="number" id="order" min="1" max="30" maxlength="2" class="form-control form-control-border">
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 form-group">
          <label for="normalvalue"><span>Valores Normales</span>:</label>
          <textarea id="normalvalue" maxlength="150" cols="30" rows="3" class="form-control form-control-border"></textarea>
        </div>
      </div>
    </form>
  </div>

  <div class="card-footer text-right">
    <!-- Botones  -->
    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-long-arrow-alt-left mr-1"></i> Cancelar</button>
    <button type="button" class="btn btn-info d-none"><i class="fas fa-redo-alt mr-1"></i> Actualizar</button>
    <button type="button" class="btn btn-success"><i class="fas  mr-1 fa-save"></i> Guardar</button>
  </div>
</div>

<!-- Contenido de registros -->
<div class="card card-outline card-primary">
  <div class="card-header">
    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <h4 class="text-bold text-primary"><i class="fas fa-clipboard-list mr-1"></i> COMPONENTES </h4>
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
    </div>
  </div>
  <div class="card-body">
    <!-- tabla subservicios -->
    <table id="tableComponent" class="table table-responsive-md table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>SUBSERVICIO</th>
          <th>COMPONENTE</th>
          <th>USUARIO CRE</th>
          <th>FECHA CRE</th>
          <th>USUARIO MOD</th>
          <th>FECHA MOD</th>
          <th>OPERACIÓN</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>SUB SERVICIO</td>
          <td>Componente</td>
          <td>Usuario 1</td>
          <td>2022/01/5</td>
          <td>Usuario 2</td>
          <td>2022/01/25</td>
          <td>
            <button type="button" class="btn btn-outline-info"><i class="fas fa-edit mr-1"></i></button>
            <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash-alt mr-1"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>