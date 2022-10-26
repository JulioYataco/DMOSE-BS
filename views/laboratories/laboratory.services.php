<!-- Opciones de filtrado -->
<div class="card card-outline card-primary ">
  <div class="card-header border-bottom-0">
    <!-- Migajas de pan -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent p-0">
        <li class="breadcrumb-item"><a href="main.php?view=laboratories/laboratory.list" class="text-primary">Pacientes</a></li>
        <li class="breadcrumb-item active" aria-current="page">Servicios</li>
      </ol>
    </nav> <!-- End breadcrumb -->

    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <div class="form-group-md-none">
        <h3 class='text-uppercase text-bold text-primary'>
          <i class="fas fa-layer-group mr-1"></i>
          SERVICIOS
        </h3>
      </div>
      <div class="text-md-right">
        <a class="btn btn-primary btn-md" href="main.php?view=laboratories/laboratory.list" role="button">
          <i class="fas fa-clipboard-list mr-1"></i>
          Pacientes
        </a>
      </div>
    </div>
  </div>
  <div class="card-body pb-2">
    <?php include '../persondata/data.form.php'; ?>
  </div>
</div>


<!-- Servicios a evaluar -->
<div class="card card-outline card-primary">
  <div class="card-body">
    <table id="tableServicios" class="table table-striped table-responsive-md">
      <thead>
        <tr>
          <th>SERVICIO</th>
          <th>SUB SERVICIO</th>
          <th>ESPECIALISTA</th>
          <th>ESTADO</th>
          <th>OPERACIÓN</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Examen de Orina</td>
          <td>Examen de orina</td>
          <td>Usuario 1</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <button type="button" data-toggle="modal" data-target="#modalEvaluations" class="btn btn-sm btn-info btn-eval" title="Evaluar"><i class="fas fa-flask mr-1"></i> Evaluar</button>
          </td>
        </tr>
        <tr>
          <td>Examen de Orina</td>
          <td>Examen de orina</td>
          <td>Usuario 1</td>
          <td><span class="badge badge-primary">Evaluado</span></td>
          <td>
            <button type="button" class="btn btn-sm btn-primary" title="Evaluado" disabled><i class="fas fa-user-check mr-1"></i> Evaluado</button>
          </td>
        </tr>

      </tbody>
    </table>
  </div> <!-- End card body -->
</div>

<!-- Modal evaluación -->
<div class="modal fade" id="modalEvaluations" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-bold text-uppercase text-success"><i class="fas fa-flask mr-1"></i> <span>EXAMEN DE ORINA</span></h5>
        <button type="button" class="close" id="btnCloseEvalLaboratory" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Contenedor de: RESULTADOS | CONCLUSIONES -->
        <div class="card card-tabs card-  card-primary">
          <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item"><a href="#results" id="tabResult" data-toggle="pill" role="tab" class="nav-link active"><i class="fas fa-vials mr-1"></i> Resultados</a></li>
              <li class="nav-item"><a href="#conclusions" id="tabConclusion" data-toggle="pill" role="tab" class="nav-link"><i class="fas fa-poll-h mr-1"></i> Conclusiones</a></li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <!-- Contenedor resultados pruebas -->
              <div class="tab-pane show active" id="results" role="tabpanel" area-labelledby="tabResult">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Componente</th>
                      <th>Unidad</th>
                      <th>Valor Normal</th>
                      <th>Resultado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>BK, INVESTIGACÓN</td>
                      <td>mg</td>
                      <td>253 mg</td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>BK, INVESTIGACÓN</td>
                      <td>mg</td>
                      <td>253 mg</td>
                      <td><input type="text" class="form-control"></td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <!-- Contenedor conclusiones -->
              <div class="tab-pane" id="conclusions" role="tabpanel" area-labelledby="tabConclusion">
                <form autocomplete="off">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="conclusion">Conclusión Final:</label>
                      <textarea id="conclusion" rows="3" class="form-control form-control-border"></textarea>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-long-arrow-alt-left mr-1"></i> Cancelar</button>
        <button type="button" class="btn btn-info d-none"><i class="fas fa-redo-alt mr-1"></i> Actualizar</button>
        <button type="button" class="btn btn-success"><i class="fas  mr-1 fa-save"></i> Guardar</button>
      </div>
    </div>
  </div>
</div>



<script>
  $(document).ready(function() {
    $(".btn-eval").click(function() {
      initChronometer();
    });


    $("#btnCloseEvalLaboratory").click(function() {
      console.log(stopChronometer())
    });
  });
</script>