<div class="card card-outline card-primary">
  <div class="card-header">
    <!-- Cabecera (titulo, botón para añadir nuevos) -->
    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <h4 class="text-bold text-primary"><i class="fas fa-clipboard-list mr-1"></i> METODOS </h4>
      <button type="button" id="btnAbrirModalMetodo" class="btn btn-primary" data-toggle="modal" data-target="#modalLaboratorioConfig"><i class="fas fa-plus-square mr-1"></i> Nuevo</button>
    </div>
  </div>
  <div class="card-body">
    <!-- tabla metodos -->
    <table id="TablaMetodoLaboratorio" class="table table-striped table-responsive-md">
      <thead>
        <tr>
          <th>ID</th>
          <th>MÉTODO</th>
          <th>USUARIO CRE</th>
          <th>FECHA CRE</th>
          <th>USUARIO MOD</th>
          <th>FECHA MOD</th>
          <th>OPERACIÓN</th>
        </tr>
      </thead>
      <tbody id="MetodoLaboratorio">
        <!-- Asincronico -->
      </tbody>
    </table>
  </div>
</div>