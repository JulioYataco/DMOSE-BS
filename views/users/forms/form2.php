<div class="card card-outline card-success">
  <div class="card-header">
    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <h4 class="text-bold text-center text-success"><i class="far fa-keyboard mr-1"></i> CUENTA DE USUARIO</h4>
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
    </div>
  </div>

  <div class="card-body">
    <!-- Formulario especialidad -->
    <form autocomplete="off">
      <div class="row">
        <div class="col-md-4 form-group">
          <label for="campus">Sede:</label>
          <select id="campus" class="custom-select form-control-border">
            <option value="">Lima</option>
          </select>
        </div>
        <div class="col-md-4 form-group">
          <label for="usertype">Tipo Usuario:</label>
          <select id="usertype" class="custom-select form-control-border">
            <option value="G">Gerente</option>
            <option value="A">Administrador</option>
            <option value="M">Médico</option>
            <option value="E">Enfermero</option>
          </select>
        </div>
        <div class="col-md-4 form-group">
          <label for="user">Usuario:</label>
          <input type="text" id="user" maxlength="15" class="form-control form-control-border">
        </div>
      </div> <!-- End row -->
      <div class="row">
        <div class="col-md-6 form-group">
          <label for="pass1">Crear Contraseña:</label>
          <input type="password" id="pass1" class="form-control form-control-border">
        </div>
        <div class="col-md-6 form-group">
          <label for="pass2">Repetir Contraseña:</label>
          <input type="password" id="pass2" class="form-control form-control-border">
        </div>
      </div> <!-- End row -->
    </form> <!-- End form -->
  </div>
  <div class="card-footer text-right">
    <button type="button" class="btn btn-secondary"><i class="fas fa-long-arrow-alt-left mr-1"></i> Cancelar</button>
    <button type="button" class="btn btn-info d-none"><i class="fas fa-redo-alt mr-1"></i> Actualizar</button>
    <button type="button" class="btn btn-success"><i class="fas  mr-1 fa-save"></i> Guardar</button>
  </div>
</div>