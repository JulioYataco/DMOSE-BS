<div class="card card-outline card-primary collapsed-card">
  <div class="card-header">
    <!-- Migajas de pan -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent p-0">
        <li class="breadcrumb-item active" aria-current="page">Afiliaciones</li>
        <li class="breadcrumb-item"><a href="main.php?view=affiliations/affiliation.register" class="text-primary">Nuevo</a></li>
      </ol>
    </nav> <!-- End breadcrumb -->

    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <div class="form-group-md-none">
        <h3 class='text-uppercase text-bold text-primary'>
          <i class="fas fa-clipboard-list mr-1"></i>
          Afiliaciones
        </h3>
      </div>
      <div class="text-md-right">
        <a role="button" href="main.php?view=affiliations/affiliation.register" class="btn btn-md btn-primary">
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
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 form-group">
        <label for="">DESDE:</label>
        <input type="date" class="form-control">
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 form-group">
        <label for="">HASTA:</label>
        <input type="date" class="form-control">
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 form-group">
        <label for="">TIPO EXAMEN:</label>
        <select name="" id="" class="custom-select">
          <option value="">Seleccione</option>
          <option value="">Pre Ocupacional</option>
          <option value="">Ocupacional</option>
          <option value="">Cambio de Puesto</option>
          <option value="">Post Ocupacional</option>
        </select>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 form-group">
        <label for="#">&nbsp;</label>
        <button type="button" class="btn btn-primary btn-block">Filtrar</button>
      </div>
    </div>
    <div class="row">
    </div>
  </div>
</div>

<div class="card card-primary card-outline">
  <div class="card-body table-responsive">
    <table id="table-demo" class="table table-valign-middle table-striped overflow-auto">
      <thead class="bg-">
        <tr>
          <th>ID</th>
          <th>FECHA</th>
          <th>PACIENTE</th>
          <th>CLIENTE</th>
          <th>TIPO EXAMEN</th>
          <th>PUESTO</th>
          <th>OPERACIÓN</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>15/02/2020</td>
          <td>Ibarra Ronceros Luis Yanmarcos</td>
          <td>Servicios Medicos</td>
          <td>Preocupacional</td>
          <td>Agente</td>
          <td>
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                Opciones
              </button>
              <div class="dropdown-menu dropdown-menu-right position-absolute">
                <button type="button" class="dropdown-item">
                  <i class="fas item-icon fa-images"></i>
                  Imagenes
                </button>
                <button type="button" class="dropdown-item">
                  <i class="fas item-icon fa-scroll"></i>
                  Hoja de ruta
                </button>
                <button type="button" class="dropdown-item">
                  <i class="fas item-icon fa-archive"></i>
                  Escaneados
                </button>
                <button type="button" class="dropdown-item">
                  <i class="fas item-icon fa-stethoscope"></i>
                  Interconsulta
                </button>
                <hr class="m-0">
                <button type="button" class="dropdown-item">
                  <i class="fas item-icon fa-edit"></i>
                  Editar
                </button>
                <button type="button" class="dropdown-item">
                  <i class="fas item-icon fa-trash-alt"></i>
                  Eliminar
                </button>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>1</td>
          <td>15/02/2020</td>
          <td>Ibarra Ronceros Luis Yanmarcos</td>
          <td>Servicios Medicos</td>
          <td>Preocupacional</td>
          <td>Agente</td>
          <td>
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                Opciones
              </button>
              <div class="dropdown-menu dropdown-menu-right position-absolute">
                <button type="button" class="dropdown-item">
                  <i class="fas item-icon fa-images"></i>
                  Imagenes
                </button>
                <button type="button" class="dropdown-item">
                  <i class="fas item-icon fa-scroll"></i>
                  Hoja de ruta
                </button>
                <button type="button" class="dropdown-item">
                  <i class="fas item-icon fa-archive"></i>
                  Escaneados
                </button>
                <button type="button" class="dropdown-item">
                  <i class="fas item-icon fa-stethoscope"></i>
                  Interconsulta
                </button>
                <hr class="m-0">
                <button type="button" class="dropdown-item">
                  <i class="fas item-icon fa-edit"></i>
                  Editar
                </button>
                <button type="button" class="dropdown-item">
                  <i class="fas item-icon fa-trash-alt"></i>
                  Eliminar
                </button>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<script>
  $(function() {
    $("#table-demo").DataTable(dataTableComplete);
  });
</script>