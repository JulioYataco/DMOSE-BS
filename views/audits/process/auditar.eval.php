<div id="processes">
  <!--  EL TRABAJADOR PRESENTA -->
  <div class="card card-outline card-success">
    <div class="card-header">
      <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
        <h4 class="text-bold text-success"><i class="far fa-keyboard mr-1"></i> EL TRABAJADOR PRESENTA</h4>
        <div class="text-right">
          <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#collapseOne"><i class="fas fa-stream"></i></button>
        </div>
      </div>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#processes">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12 form-group">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
                  <h4 class="text-bold text-primary"><i class="fas fa-clipboard-list mr-1"></i> CIE-10 </h4>
                  <div class="form-group-md-none text-md-right ">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCie10"><i class="fas fa-plus-square mr-1"></i> CIE-10</button>
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
                        <button type="button" class="btn btn-outline-danger" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>CIE10</td>
                      <td>Examen de orina</td>
                      <td>Tomar agua</td>
                      <td>
                        <button type="button" class="btn btn-outline-danger" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
                      </td>
                    </tr>
  
                  </tbody>
                </table>
              </div> <!-- End card body -->
            </div>
          </div>

        </div> <!-- End row -->
      </div>
    </div>
  </div>

  <!-- CONCLUSIONES < -->
  <div class="card card-success card-outline">
    <div class="card-header">
      <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
        <h4 class="text-bold text-success"><i class="far fa-keyboard mr-1"></i> CONCLUSIONES</h4>
        <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#collapseTwo"><i class="fas fa-stream"></i></button>
      </div>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#processes">
      <div class="card-body">
        <form autocomplete="off">
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
    </div> <!-- end card-body -->
  </div> <!-- End card -->

</div> <!-- End processes -->