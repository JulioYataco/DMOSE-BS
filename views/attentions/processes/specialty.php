<div class="card card-outline card-primary">
  <div class="card-header">
    <!-- Cabecera (titulo, botón para añadir nuevos) -->
    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <h4 class="text-bold text-primary"><i class="fas fa-clipboard-list mr-1"></i> ESPECIALIDADES </h4>
      <button type="button" class="btn btn-primary" data-toggle="modal" id="btnAbrirModalEspecialidad" data-target="#modalAttentionConfig"><i class="fas fa-plus-square mr-1"></i> Nuevo</button>
    </div>
  </div>
  <div class="card-body">
    <!-- tabla especialidades -->
    <table id="TablaEspecialidad" class="table table-responsive-md table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>ESPECIALIDAD</th>
          <th>USUARIO CRE</th>
          <th>FECHA CRE</th>
          <th>USUARIO MOD</th>
          <th>FECHA MOD</th>
          <th>OPERACIÓN</th>
        </tr>
      </thead>
      <tbody id="Especialidad">
        <!-- Asincrona -->
      </tbody>
    </table>
  </div>
</div>