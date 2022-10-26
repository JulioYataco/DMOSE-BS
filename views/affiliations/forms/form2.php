<div class="card card-outline card-success">
    <div class="card-header">
        <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
            <h4 class="text-bold text-center text-success"><i class="far fa-keyboard mr-1"></i> DATOS DEL PACIENTE</h4>
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-stream"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form autocomplete="off">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="buscarDatabase">CONSULTAR BASE DE DATOS:</label>
                    <input type="search" class="form-control " placeholder="Buscar por DNI o Nombres">
                </div>
                <div class="col-md-6 form-group">
                    <label for="buscarReniec">CONSULTAR RENIEC:</label>
                    <input type="search" class="form-control " placeholder="Buscar por DNI" maxlength="8">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="apellidos">Apellido Paterno:</label>
                    <input type="text" class="form-control form-control-border">
                </div>

                <div class="col-md-4 form-group">
                    <label for="apellidos">Apellido Materno:</label>
                    <input type="text" class="form-control form-control-border">
                </div>

                <div class="col-md-4 form-group">
                    <label for="apellidos">Nombres:</label>
                    <input type="text" class="form-control form-control-border">
                </div>
            </div>


            <div class="row">
                <div class="col-xl-2 col-md-4 form-group">
                    <label for="fechanac">Fecha de Nacimiento:</label>
                    <input type="date" class="form-control form-control-border" id="fechanac">
                </div>
                <div class="col-xl-2 col-md-4 form-group">

                    <label for="sexo">Sexo:</label>
                    <select id="sexo" class="custom-select form-control-border">
                        <option value="">Masculino</option>
                        <option value="">Femenino</option>
                    </select>
                </div>
                <div class="col-xl-2 col-md-3 form-group">
                    <label for="estadocivil">Estado Civil:</label>
                    <select id="" class="custom-select form-control-border">
                        <option value="" selected>Soltero(a)</option>
                        <option value="">Casado(a)</option>
                        <option value="">Conviviente</option>
                        <option value="">Divorciado(a)</option>
                        <option value="">Viudo(a)</option>
                    </select>
                </div>
                <div class="col-xl-3 col-md-6 form-group">
                    <label for="tipodoc">Tipo de Documento:</label>
                    <select id="tipodoc" class="custom-select form-control-border">
                        <option value="" selected>DNI</option>
                        <option value="">Carnet de Extranjería</option>
                        <option value="">Carta Andina</option>
                        <option value="">Pasaporte</option>
                        <option value="">PTP</option>
                    </select>
                </div>
                <div class="col-xl-3 col-md-6 form-group">
                    <label for="numerodoc">Número de Documento:</label>
                    <input type="text" maxlength="13" class="form-control form-control-border" id="numerodoc">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="lugarnac">Lugar de Nacimiento:</label>
                    <input type="search" class="form-control form-control-border" id="lugarnac">
                </div>
                <div class="col-md-6 form-group">
                    <label for="ubicacionactual">Domicilio Actual:</label>
                    <input type="search" class="form-control form-control-border" id="ubicacionactual">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="celular">Celular:</label>
                    <input type="tel" id="celular" maxlength="11" class="form-control form-control-border">
                </div>
                <div class="col-md-8 form-group">
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" id="correo" class="form-control form-control-border">
                </div>
                <div class="col-md-12 form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="search" class="form-control form-control-border" id="direccion" placeholder="Ejm: Av. In">
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