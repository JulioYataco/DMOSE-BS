<div class="card card-outline card-primary collapsed-card">
  <div class="card-header">

    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <div class="form-group-md-none">
        <h3 class='text-uppercase text-bold text-primary'>
          <i class="fas fa-clipboard-list mr-1"></i>
          Usuarios
        </h3>
      </div>
      <div class="text-md-right">
        <a role="button" href="main.php?view=users/user.register" class="btn btn-md btn-primary">
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
    <!-- Contenido de filtros -->
    <div class="row">
      <div class="col-sm-4 col-md-3 col-lg-2 form-group">
        <label for="">TIPO USUARIO:</label>
        <select name="" id="" class="custom-select">
          <option value="G">Gerente</option>
          <option value="A">Administrador</option>
          <option value="M">Médico</option>
          <option value="E">Enfermero</option>
        </select>
      </div>
      <div class="col-sm-4 col-md-3 col-lg-2 form-group">
        <label for="">SEDE:</label>
        <select name="" id="" class="custom-select">
          <option value="">Lima</option>
          <option value="">Pisco</option>
        </select>
      </div>
      <div class="col-sm-4 col-md-3 col-lg-2 form-group">
        <label for="#">&nbsp;</label>
        <button type="button" class="btn btn-primary btn-block">Filtrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Contenido de tabla registros -->
<div class="card card-primary card-outline">
  <div class="card-header">
    <div class="row">
      <div class="col-xl-6 col-md-6 col-sm-12 form-group-lg-none">
        <form class="form-inline">
          <label class="my-1 mr-2" for="resulPorPagina">Mostrar</label>
          <select class="custom-select form-control col-sm-4 col-3 col-md-3 col-xl-2" id="resulPorPagina">
            <option value="3">3</option>
            <option value="6" selected>6</option>
            <option value="10">10</option>
            <option value="20">20</option>
          </select>
          <label class="my-1 ml-2 mr-2" for="paginas">Registros por página</label>
        </form>
      </div>
    </div>
  </div>
  <div class="card-body">
    <table id="tableUsers" class="table table- table-striped">
      <thead class="bg-primary">
        <tr>
          <th>ID</th>
          <th>USUARIO</th>
          <th>TIPO</th>
          <th>SEDE</th>
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
          <td>Admin</td>
          <td>Administrador</td>
          <td>Lima</td>
          <td>usuario 1</td>
          <td>25/02/2022</td>
          <td>usuario 2</td>
          <td>25/05/2022</td>
          <td>
            <button type="button" class="btn btn-outline-info"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="card-footer">
    <!-- Paginación -->
    <nav aria-label="Page navigation">
      <div class="row" style="margin: 4px 8px 0px 8px; align-items: center;">
        <div class="col-md-6" id="detalle-paginacion">
          <!--  -->
          <span>Mostrando registros del </span>
          <span id="pagina-actual">1</span>
          <span> al </span>
          <span id="resultado-pagina">15</span>
          <span> de un total de </span>
          <span id="total-registros">50</span>
        </div>
        <div class="col-md-6">
          <ul class="pagination justify-content-end" id="paginas">
            <!-- Cargados las paginas de manera asincrona -->
            <li class='page-item previous bg-thema-dark {$firstDisabled}'>
              <a class='page-link bg-paginacion' id='prev' href='#'><i class='fas fa-arrow-left'></i></a>
            </li>
            <li class='page-item'>
              <a class='page-link bg-paginacion seleccionado' data-numero='{$firstPage}' href='#'>1</a>
            </li>
            <li class='page-item'>
              <a class='page-link bg-paginacion ' data-numero='{$firstPage}' href='#'>2</a>
            </li>
            <li class='page-item' id='next-page' data-numero='{$lastPage}'>
              <a class='page-link bg-paginacion' id='final' href='#'>&raquo;</a>
            </li>
            <li class='page-item next bg-thema-dark {$lastDisabled}'>
              <a class='page-link bg-paginacion' id='next' href='#'><i class='fas fa-arrow-right'></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>

<!-- Modal usuario -->
<div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="modalUser" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title text-bold text-uppercase text-success"><i class="far fa-keyboard mr-1"></i> FORMULARIO <span>USUARIO</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
              <label for="pass1">Crear ontraseña:</label>
              <input type="password" id="pass1" class="form-control form-control-border">
            </div>
            <div class="col-md-6 form-group">
              <label for="pass2">Repetir Contraseña:</label>
              <input type="password" id="pass2" class="form-control form-control-border">
            </div>
          </div> <!-- End row -->
        </form> <!-- End form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-long-arrow-alt-left mr-1"></i> Cancelar</button>
        <button type="button" class="btn btn-info d-none"><i class="fas fa-redo-alt mr-1"></i> Actualizar</button>
        <button type="button" class="btn btn-success"><i class="fas  mr-1 fa-save"></i> Guardar</button>
      </div>
    </div>
  </div>
</div>