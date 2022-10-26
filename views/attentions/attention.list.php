<!-- Opciones de filtrado -->
<div class="card card-outline card-primary collapsed-card">
  <div class="card-header">

    <!-- Migajas de pan -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent p-0">
        <li class="breadcrumb-item active" aria-current="page">Pacientes</li>
      </ol>
    </nav> <!-- End breadcrumb -->

    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <div class="form-group-md-none">
        <h3 class='text-uppercase text-bold text-primary'>
          <i class="fas fa-clipboard-list mr-1"></i>
          Pacientes
        </h3>
      </div>
      <div class="text-md-right">
        <button class="btn btn-md btn-warning btn-md" type="button" data-card-widget="collapse">
          <i class="fas fa-filter"></i>
          Filtro
        </button>
      </div>
    </div>
  </div>
  <div class="card-body">
    <!-- Contenido filtros -->
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
        <button type="button" class="btn btn-md btn-primary btn-block">Filtrar</button>
      </div>
    </div>
    <div class="row">
    </div>
  </div>
</div>

<!-- Registros de pacientes -->
<div class="card card-primary card-outline">
  <div class="card-body">
    <table id="tableBusiness" class="table table-responsive-md table-striped">
      <thead>
        <tr>
          <th>ID ATENCIÓN</th>
          <th>FECHA</th>
          <th>PACIENTE</th>
          <th>CLIENTE</th>
          <th>TIPO EXAMEN</th>
          <th>PUESTO</th>
          <th>OPERACIONES</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>17/08/2022</td>
          <td>Alvarez</td>
          <td>La Calera</td>
          <td>Periodico</td>
          <td>TRIPULANTE</td>
          <td>
            <a href="#" class="btn btn-sm btn btn-sm btn-info"><i class="fas fa-info mr-1"></i> Datos</a>
            <a href="main.php?view=attentions/attention.services" class="btn btn-sm btn-primary" title="Servicios"><i class="fas fa-layer-group mr-1"></i> Servicios</a>
            <button type="button" class="btn btn-sm btn-warning" title="Reporte"><i class="fas fa-file-medical-alt"></i></button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>17/08/2022</td>
          <td>Alvarez</td>
          <td>La Calera</td>
          <td>Periodico</td>
          <td>TRIPULANTE</td>
          <td>
            <a href="#" class="btn btn-sm btn btn-sm btn-info"><i class="fas fa-info mr-1"></i> Datos</a>
            <a href="main.php?view=attentions/attention.services" class="btn btn-sm btn-primary" title="Servicios"><i class="fas fa-layer-group mr-1"></i> Servicios</a>
            <button type="button" class="btn btn-sm btn-warning" title="Reporte"><i class="fas fa-file-medical-alt"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>