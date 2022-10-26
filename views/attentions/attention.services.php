<!-- Opciones de filtrado -->
<div class="card card-outline card-primary">
  <div class="card-header border-bottom-0">

    <!-- Migajas de pan -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent p-0">
        <li class="breadcrumb-item"><a href="main.php?view=attentions/attention.list" class="text-primary">Pacientes</a></li>
        <li class="breadcrumb-item active" aria-current="page">Servicios</li>
      </ol>
    </nav> <!-- End breadcrumb -->

    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <div class="form-group-md-none">
        <h3 class='text-uppercase text-bold text-primary'>
          <i class="fas fa-layer-group mr-1"></i>
          SERVICIOS A EVALUAR
        </h3>
      </div>
      <div class="text-md-right">
        <a class="btn btn-sm btn-primary btn-md" href="main.php?view=attentions/attention.list" role="button">
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

<!-- Registros de servicios -->
<div class="card card-primary card-outline">
  <div class="card-body">
    <table id="tableServicios" class="table table-striped table-responsive-md">
      <thead>
        <tr>
          <th>FICHA MÉDICA</th>
          <th>EVALUADO POR</th>
          <th>ESTADO</th>
          <th>OPERACIONES</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Altura Estructural Mayor a 1.80 Metros</td>
          <td>Usuario 1</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/altura-180.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>Audiometría</td>
          <td>Usuario 1</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/audiometria.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>Cardiología</td>
          <td>Usuario 1</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/cardiologia.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>Cardiología 7D</td>
          <td>Usuario 1</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/cardiologia7d.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>Dental</td>
          <td>Usuario 2</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/dental.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>Historia Ocupacional Anexo N° 7 - C</td>
          <td>Usuario 2</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/historiaOcupacionalAnexo7c.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>MEDICA OCUPACIONAL (29783)</td>
          <td>Usuario 2</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/occupationalMedical.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>MUSCULO ESQUELETICO ESTIBADORES</td>
          <td>Usuario 2</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/skeletalMuscleDockers.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>OFTALMOLOGIA</td>
          <td>Usuario 2</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/oftamologia.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>PSICOLOGÍA</td>
          <td>Usuario 2</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/psicologia.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>RAYOS X</td>
          <td>Usuario 2</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/rayosX.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>MUSCULO ESQUELETICO NORMAL</td>
          <td>Usuario 21</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/musculoEsqueleticoNormal.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>TRIAJE</td>
          <td>Usuario 21</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/triaje.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>PRUEBA DE ESFUERZO</td>
          <td>Usuario 21</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/pruebaEsfuerzo.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>RAYOS X OIT</td>
          <td>Usuario 21</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/rayosXOIT.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>CERTIFICADO PARA TRABAJADORES EN ESPACIOS CONFINADOS</td>
          <td>Usuario 21</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/espaciosConfinados.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>ESPIROMETRIA</td>
          <td>Usuario 21</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/espirometria.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>TAMIZAJE DERMATOLOGICA</td>
          <td>Usuario 21</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/tamizajeDermatologica.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>TEST DE SINTOMATICO RESPIRATORIO</td>
          <td>Usuario 21</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/testSintomaticoRespiratorio.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>ANEXO N° 7 - C</td>
          <td>Usuario 21</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/anexo7c.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>
        <tr>
          <td>ANEXO N° 7 - D</td>
          <td>Usuario 21</td>
          <td><span class="badge badge-info">Pendiente</span></td>
          <td>
            <a href="main.php?view=attentions/evaluations/anexo7d.eval" class="btn btn-sm btn-info btn-sm" title="Evaluar">
              <i class="fas fa-stethoscope mr-1"></i>
              Evaluar
            </a>
          </td>
        </tr>

        <tr>
          <td>Nuevo</td>
          <td>Usuario 1</td>
          <td><span class="badge badge-primary">Evaluado</span></td>
          <td>
            <button type="button" class="btn btn-sm btn-primary btn-sm" title="Evaluado"><i class="fas fa-user-check"></i>Evaluado</button>
          </td>
        </tr>

      </tbody>
    </table>
  </div>
</div>