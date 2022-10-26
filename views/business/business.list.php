<div class="card card-outline card-primary collapsed-card">
  <div class="card-header">
    <!-- Migajas de pan -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent p-0">
        <li class="breadcrumb-item active" aria-current="page">Clientes</li>
        <li class="breadcrumb-item"><a href="main.php?view=business/business.register" class="text-primary">Nuevo</a></li>
      </ol>
    </nav> <!-- End breadcrumb -->

    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <div class="form-group-md-none">
        <h3 class='text-uppercase text-bold text-primary'>
          <i class="fas fa-clipboard-list mr-1"></i>
          Clientes
        </h3>
      </div>
      <div class="text-md-right">
        <a role="button" href="main.php?view=business/business.register" class="btn btn-md btn-primary">
          <i class="fas fa-plus-square mr-1"></i>
          Nuevo
        </a>
        <button class="btn btn-warning btn-md" type="button" data-card-widget="collapse">
          <i class="fas fa-filter"></i>
          Filtro
        </button>
      </div>
    </div>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-sm-4 col-md-3 col-lg-2 form-group">
        <label for="">DESDE:</label>
        <input type="date" class="form-control">
      </div>
      <div class="col-sm-4 col-md-3 col-lg-2 form-group">
        <label for="">HASTA:</label>
        <input type="date" class="form-control">
      </div>
      <div class="col-sm-4 col-md-3 col-lg-2 form-group">
        <label for="">TIPO EXAMEN:</label>
        <select name="" id="" class="custom-select">
          <option value="">Seleccione</option>
          <option value="">Pre Ocupacional</option>
          <option value="">Ocupacional</option>
          <option value="">Cambio de Puesto</option>
          <option value="">Post Ocupacional</option>
        </select>
      </div>
      <div class="col-sm-4 col-md-3 col-lg-2 form-group">
        <label for="#">&nbsp;</label>
        <button type="button" class="btn btn-success btn-block">Buscar</button>
      </div>
    </div>
    <div class="row">
    </div>
  </div>
</div>

<div class="card card-primary card-outline">
  <div class="card-body">
    <table id="tableBusiness" class="table table- table-striped">
      <thead class="bg-primary">
        <tr>
          <th>ID</th>
          <th>EMPRESA</th>
          <th>RAZÓN SOCIAL</th>
          <th>RUC</th>
          <th>UBIGEO</th>
          <th>CORREO</th>
          <th>DIRECCIÓN</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </div>
</div>


<script src="views/templates/tables.js"></script>
<script src="dist/js/pages/business.js"></script>