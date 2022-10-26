<!-- Formulario -->
<form autocomplete="off" id="formService">
  <div class="row">
    <div class="col-md-4 form-group">
      <label for="txtSede">Sede</label>
      <select id="txtSede" class="form-control form-control-border">
          <!-- Se cargarán de forma asincrona -->
      </select>
    </div>
    <div class="col-md-8 form-group">
      <label for="txtServicio">Nombre <span>Servicio</span>:</label>
      <input type="text" id="txtServicio" class="form-control form-control-border" maxlength="25" placeholder="">
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 form-group">
      <label for="txtPrecio"><span>Precio</span>:</label>
      <input type="text" id="txtPrecio" class="form-control form-control-border" maxlength="5" placeholder="">
    </div>
    <div class="col-md-8 form-group">
      <label for="subservicio">SubServicio:</label>
      <input type="search" id="subservicio" class="form-control form-control-border">
    </div>
  </div>
</form>