<div class="card card-success card-outline">
  <div class="card-header">
    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <h4 class="text-bold text-success"><i class="far fa-keyboard mr-1"></i> FORMULARIO COTIZACIÓN </h4>
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
    </div>
  </div>
  <div class="card-body">
    <form autocomplete="off">
      <div class="row">
        <div class="col-md-8 form-group">
          <label for="">Nombre del Protocolo:</label>
          <input type="text" class="form-control form-control-border">
        </div>
        <div class="col-md-4 form-group">
          <label for="">Tipo de Examen:</label>
          <select id="" class="custom-select form-control-border">
            <option value="" selected>Pre Ocupacional</option>
            <option value="">Periódico</option>
            <option value="">Reubicación</option>
            <option value="">Post Ocupacional</option>
          </select>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-4 form-group">
          <label for="quantityPerson">Cantidad Personas:</label>
          <input type="text" id="quantityPerson" min="1" max="3" maxlength="3" class="form-control form-control-border text-right">
        </div>
        <div class="col-md-4 form-group">
          <label for="">Descuento Porcentual %:</label>
          <input type="text" id="" min="1" max="3" maxlength="3" class="form-control form-control-border text-right">
        </div>
        <div class="col-md-4 form-group">
          <label for="deadline">Valido Hasta:</label>
          <input type="date" id="deadline" min="1" max="250" class="form-control form-control-border">
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 form-group">
          <label for="information">Información (opcional):</label>
          <textarea id="information" maxlength="150" cols="30" rows="3" class="form-control form-control-border"></textarea>
        </div>
      </div>
    </form>
  </div>
  <div class="card-footer text-right">
    <button type="button" class="btn btn-secondary"><i class="fas fa-long-arrow-alt-left mr-1"></i> Cancelar</button>
    <button type="button" class="btn btn-info d-none"><i class="fas fa-redo-alt mr-1"></i> Actualizar</button>
    <button type="button" class="btn btn-success"><i class="fas  mr-1 fa-save"></i> Guardar</button>
  </div>
</div>

<div class="card card-outline card-primary">
  <div class="card-header">
    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <h4 class="text-bold text-primary"><i class="fas fa-clipboard-list mr-1"></i> PROTOCOLOS COTIZADOS</h4>
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
    </div>
  </div>
  <div class="card-body">
    <div id="protocolos">

      <div class="card card-default">
        <div class="card-header">
          <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
            <div class="form-group-md-none">
              <h4 class="card-title w-100">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                  Electro Mecanico
                </a>
              </h4>
            </div>
            <div class="form-group-md-none text-md-right ">
              <button type="button" class="btn btn-outline-info"><i class="fas fa-edit mr-1"></i></button>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalServicio"><i class="fas fa-plus-square mr-1"></i> Servicio</button>
              <button type="button" class="btn btn-default">
                S/ 256.00
              </button>
            </div>
          </div>
        </div>
        <div id="collapseOne" class="collapse show" data-parent="#protocolos">
          <div class="card-body">
            <table id="tableServicios" class="table table-striped table-responsive-md">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>SERVICIO</th>
                  <th>PRECIO</th>
                  <th>DESCUENTO</th>
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
                  <td>Creatinina</td>
                  <td>8.00</td>
                  <td>0.3</td>
                  <td>Usuario 1</td>
                  <td>2022/01/5</td>
                  <td>Usuario 2</td>
                  <td>2022/01/25</td>       
                  <td>
                    <button type="button" class="btn btn-outline-info"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Creatinina</td>
                  <td>8.00</td>
                  <td>0.5</td>
                  <td>Usuario 1</td>
                  <td>2022/01/5</td>
                  <td>Usuario 2</td>
                  <td>2022/01/25</td>
                  <td>
                    <button type="button" class="btn btn-outline-info"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>