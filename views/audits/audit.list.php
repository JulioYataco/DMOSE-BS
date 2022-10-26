<!-- Opciones de filtrado -->
<div class="card card-outline card-primary collapsed-card">
  <div class="card-header">

    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <div class="form-group-md-none">
        <h3 class='text-uppercase text-bold text-primary'>
          <i class="fas fa-clipboard-list mr-1"></i>
          Auditoria de Pacientes
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
          <th>ESTADO</th>
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
          <td><span class="badge badge-success">Pendiente</span></td>
          <td>
            <a href="#" class="btn btn-sm btn-info"><i class="fas fa-info mr-1"></i> Datos</a>
            <a href="main.php?view=audits/audit.register" class="btn btn-sm btn btn-sm btn-success"><i class="far fa-check-square mr-1"></i> Auditar</a>
            <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-file-pdf mr-1"></i> Legajo</a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>17/08/2022</td>
          <td>Alvarez</td>
          <td>La Calera</td>
          <td>Periodico</td>
          <td>TRIPULANTE</td>
          <td><span class="badge badge-primary">Realizado</span></td>
          <td>
            <a href="#" class="btn btn-sm btn-info"><i class="fas fa-info mr-1"></i> Datos</a>
            <a href="#" class="btn btn-sm btn-primary"><i class="far fa-check-square mr-1"></i> Auditado</a>
            <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-file-pdf mr-1"></i> Legajo</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<!-- Modal AUDITAR-->
<div class="modal fade" id="modalAudit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-bold text-success"><i class="far fa-check-square mr-1"></i> AUDITAR PACIENTE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form>
          <div class="h5 d-flex flex-row flex-wrap">
            <div class="mr-4">
              <strong>Carolina Maritza Perez Hinostrosa</strong>
              <span>(25 años)</span>
            </div>

            <div>
              <strong>La Calera</strong> -
              <span>Pre Ocupacional</span>
            </div>
          </div>
        </form>

        <hr>
        <form>
          <h5 class="text-primary text-bold">PATOLOGIAS</h5>
          <div class="row">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
                  <h4 class="text-bold text-primary"><i class="fas fa-clipboard-list mr-1"></i> CIE-10 </h4>
                  <div class="form-group-md-none text-md-right ">
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalCie10"><i class="fas fa-plus-square mr-1"></i> CIE-10</button>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table id="tableCie10" class="table table-striped table-responsive-md">
                  <thead>
                    <tr>
                      <th>CÓDIGO</th>
                      <th>DESCRIPCIÓN</th>
                      <th>RECOMENDACIÓN</th>
                      <th>OPERACIÓN</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>CIE10</td>
                      <td>Examen de orina</td>
                      <td>Tomar agua</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-danger" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>CIE10</td>
                      <td>Examen de orina</td>
                      <td>Tomar agua</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-danger" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div> <!-- End card body -->
            </div>

          </div>
          <h5 class="text-primary text-bold">CONCLUSIÓN</h5>

          <div class="row">
            <div class="col-md-6 form-group">
              <label>Aptitud:</label>
              <select class="form-control form-control-border">
                <option selected>Apto</option>
                <option>Apto con Restricciones</option>
                <option>Evaluado</option>
                <option>No Apto</option>
                <option>No Apto Temporal</option>
                <option>Observado</option>
              </select>
            </div>
            <div class="col-md-6 form-group">
              <label>Tipo de Certificado:</label>
              <select class="form-control form-control-border">
                <option selected>Certificado Médico Estandar</option>
                <option>Certificado Médico GYM</option>
                <option>Certificado Médico PETROPERÚ</option>
              </select>
            </div>

          </div> <!-- End row -->

          <div class="row">
            <div class="col-md-12 form-group">
              <label for="">Restricciones:</label>
              <textarea rows="3" maxlength="450" class="form-control form-control-border" placeholder="Escriba aquí..."></textarea>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i class="fas fa-long-arrow-alt-left mr-1"></i> Cancelar</button>
        <button type="button" class="btn btn-sm btn-info d-none"><i class="fas fa-redo-alt mr-1"></i> Actualizar</button>
        <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-plus-square mr-1"></i> Auditar</button>
      </div>
    </div>
  </div>
</div>