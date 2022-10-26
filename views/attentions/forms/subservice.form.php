<!-- Contenido del formulario -->
<div class="card card-outline card-success collapsed-card">
  <div class="card-header">
    <!-- Titulo del card -->
    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <h4 class="text-bold text-center text-success"><i class="far fa-keyboard mr-1"></i> FORMULARIO SUBSERVICIO</h4>
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
    </div>
  </div>
  <div class="card-body">
    <form autocomplete="off" id="formSubservice">
      <div class="row">
        <div class="col-md-12 form-group">
          <label for="subservice">Nombre <span>SubServicio</span>:</label>
          <input type="text" id="subservice" class="form-control form-control-border" maxlength="25" placeholder="">
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 form-group">
          <label for="type"><span>Tipo</span>:</label>
          <select id="type" class="custom-select form-control-border">
            <option value="">Selecione</option>
          </select>
        </div>
        <div class="col-md-6 form-group">
          <label for="specialty"><span>Especialidad</span>:</label>
          <select id="specialty" class="custom-select form-control-border">
            <option value="">Selecione</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 form-group">
          <label for="area"><span>Área</span>:</label>
          <select id="area" class="custom-select form-control-border" disabled>
            <option value="">Selecione</option>
          </select>
        </div>
        <div class="col-md-6 form-group">
          <label for="method"><span>Método</span>:</label>
          <select id="method" class="custom-select form-control-border" disabled>
            <option value="">Selecione</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 form-group">
          <label for="sample"><span>Muestra</span>:</label>
          <select id="sample" class="custom-select form-control-border" disabled>
            <option value="">Selecione</option>
          </select>
        </div>
        <div class="col-md-6 form-group">
          <label for="medicalrecord"><span>Ficha Médica</span>:</label>
          <select id="medicalrecord" class="custom-select form-control-border">
            <option value="">Selecione</option>
          </select>
        </div>
      </div>
    </form>
  </div>

  <div class="card-footer text-right">
    <!-- Botones de opciones -->
    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-long-arrow-alt-left mr-1"></i> Cancelar</button>
    <button type="button" class="btn btn-info d-none"><i class="fas fa-redo-alt mr-1"></i> Actualizar</button>
    <button type="button" class="btn btn-success"><i class="fas  mr-1 fa-save"></i> Guardar</button>
  </div>
</div>

<!-- Contenido de registros -->
<div class="card card-outline card-primary">
  <div class="card-header">
    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <h4 class="text-bold text-primary"><i class="fas fa-clipboard-list mr-1"></i> SUBSERVICIOS </h4>
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
    </div>
  </div>
  <div class="card-body">
    <!-- tabla subservicios -->
    <table id="tableSunservicio" class="table table-responsive-md table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>SUBSERVICIO</th>
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
          <td>INMUNOLOGÍA</td>
          <td>Usuario 1</td>
          <td>2022/01/5</td>
          <td>Usuario 2</td>
          <td>2022/01/25</td>
          <td>
            <button type="button" class="btn btn-outline-warning"><i class="far fa-list-alt"></i></button>
            <button type="button" class="btn btn-outline-info"><i class="fas fa-edit mr-1"></i></button>
            <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash-alt mr-1"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>