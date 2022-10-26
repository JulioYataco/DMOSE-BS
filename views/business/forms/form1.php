<div class="card card-success card-outline">
    <div class="card-header">
        <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
            <h4 class="text-bold text-success"><i class="far fa-keyboard mr-1"></i> DATOS DE LA EMPRESA </h4>
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form autocomplete="off">
            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="queryreniec">CONSULTAR RENIEC:</label>
                    <input type="search" id="queryreniec" placeholder="Buscar por RUC" class="form-control form-control-border">
                </div>
                <div class="col-md-8 form-group">
                    <label for="empresa">Nombre Corporativo:</label>
                    <input type="text" id="empresa" placeholder="Escriba el Nombre Corporativo" class="form-control form-control-border">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="ruc">RUC:</label>
                    <input type="text" id="ruc" maxlength="11" class="form-control form-control-border">
                </div>
                <div class="col-md-6 form-group">
                    <label for="razonsocial">Razón Social:</label>
                    <input type="text" id="razonsocial" maxlength="100" placeholder="Escriba la Razón Social" class="form-control form-control-border">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="ubigeo">Ubigeo:</label>
                    <input type="search" id="ubigeo" class="form-control form-control-border">
                </div>
                <div class="col-md-8 form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" maxlength="100" class="form-control form-control-border">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="correo">Correo Electrónico:</label>
                    <input type="text" id="correo" maxlength="100" class="form-control form-control-border">
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