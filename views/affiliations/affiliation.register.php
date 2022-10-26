<div class="card  card-outline card-primary">
    <div class="card-body">
        <!-- Migajas de pan -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0">
                <li class="breadcrumb-item"><a href="main.php?view=affiliations/affiliation.list" class="text-primary">Afiliaciones</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nuevo</li>
            </ol>
        </nav> <!-- End breadcrumb -->

        <div class="row">
            <div class="col-md-7 form-group-md-none">
                <h3 class="text-bold text-primary">
                    <i class="icon fas fa-users mr-1"></i>
                    AFILIAR PACIENTES
                </h3>
            </div>
            <div class="col-md-5 text-md-right">
                <button type="button" class="btn btn-success"><i class="fas fa-upload mr-1"></i> Importar Datos</button>
                <a class="btn btn-primary btn-md" href="main.php?view=affiliations/affiliation.list" role="button">
                    <i class="fas fa-clipboard-list mr-1"></i>
                    Registros
                </a>
            </div>
        </div>

    </div>
</div>

<div class="card card-primary">
    <div class="card-header">
        <h4 class="text-bold text-uppercase card-title">
            <i class="fas fa-tags mr-1"></i>
            Procesos
        </h4>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>
    <div class="card-body p-0">

        <div id="smartwizard" class="mt-4">
            <ul class="nav mx-2 nav-progress">
                <li class="nav-item">
                    <a class="nav-link" href="#step-1">
                        <div class="num">1</div>
                        Empresa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#step-2">
                        <span class="num">2</span>
                        Paciente
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#step-3">
                        <span class="num">3</span>
                        Afiliación
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                    <?php include 'forms/form1.php'; ?>
                </div>
                <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                    <?php include 'forms/form2.php'; ?>
                </div>
                <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                    <?php include 'forms/form3.php'; ?>
                </div>
            </div>

            <!-- Include optional progressbar HTML -->
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
</div>


<!-- Taps formulario -->
<script>
    $(document).ready(function() {
        $('#smartwizard').smartWizard(smartWizardBasic);
    });
</script>