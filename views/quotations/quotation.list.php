<div class="card card-outline card-primary collapsed-card">
  <div class="card-header">

    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <div class="form-group-md-none">
        <h3 class='text-uppercase text-bold text-primary'>
          <i class="fas fa-clipboard-list mr-1"></i>
          Cotizaciones
        </h3>
      </div>
      <div class="text-md-right">
        <a role="button" href="main.php?view=quotations/quotation.register" class="btn btn-md btn-primary">
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
        <button type="button" class="btn btn-success btn-block">Buscar</button>
      </div>
    </div>
    <div class="row">
    </div>
  </div>
</div>

<div class="card card-primary card-outline">
  <div class="card-body">
    <table id="tableBusiness" class="table table-responsive table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>RAZÓN SOCIAL</th>
          <th>EMPLEADO EMP</th>
          <th>CANTIDAD</th>
          <th>PROTOCOLO</th>
          <th>PRECIO</th>
          <th>DESCUENTO</th>
          <th>NETO</th>
          <th>ESTADO</th>
          <th>OPERACIÓN</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>La Calera</td>
          <td>javier</td>
          <td>15</td>
          <td>COCINERO</td>
          <td>85.00</td>
          <td>15.00</td>
          <td>50.00</td>
          <td><span class="badge badge-primary">Pendiente</span></td>
          <td>
            <button type="button" class="btn btn-outline-warning" title="Detalle Cotización"><i class="fas fa-file-invoice-dollar"></i></button>
            <button type="button" class="btn btn-outline-info" title="Información"><i class="fas fa-info mr-1"></i> Datos</button>
            <button type="button" class="btn btn-outline-info"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<script src="views/templates/tables.js"></script>
<script src="dist/js/pages/business.js"></script>