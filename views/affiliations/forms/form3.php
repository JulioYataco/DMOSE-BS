<div class="card card-outline card-success">
    <div class="card-header">
        <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
            <h4 class="text-bold text-center text-success"><i class="far fa-keyboard mr-1"></i> DATOS DE LA AFILIACIÓN</h4>
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-stream"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form autocomplete="off">
            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="tipoatencion">Tipo de Atención:</label>
                    <select id="tipoatencion" class="custom-select form-control-border">
                        <option value="">Particular</option>
                        <option value="" selected>Ocupacional</option>
                        <option value="">Brevete</option>
                        <option value="">Sucamec</option>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label for="gradoinstruccion">Grado de Instrucción:</label>
                    <select id="gradoinstruccion" class="custom-select form-control-border">
                        <option value="">Analfabeto</option>
                        <option value="">Primaria Incompleta</option>
                        <option value="">Primaria Completa</option>
                        <option value="">Secundaria Incompleta</option>
                        <option value="">Secundaria Completa</option>
                        <option value="">Técnico Incompleto</option>
                        <option value="">Técnico Completo</option>
                        <option value="">Universitario Incompleto</option>
                        <option value="">Universitario Completo</option>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label for="puesto">Puesto:</label>
                    <input type="search" id="puesto" class="form-control form-control-border">
                </div>
            </div> <!-- End row -->

            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="seguro">Seguro:</label>
                    <select id="seguro" class="custom-select form-control-border">
                        <option value="">ESSALUD</option>
                        <option value="">EPS</option>
                        <option value="">Otro</option>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label for="canthijos">Cantidad de Hijos:</label>
                    <input type="number" id="canthijos" value="0" min="0" max="15" class="form-control form-control-border text-right">
                </div>
                <div class="col-md-4 form-group">
                    <label for="cantdependiente">Cantidad de Dependientes:</label>
                    <input type="number" id="cantdependiente" value="0" min="0" max="15" class="form-control form-control-border text-right">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="#">&nbsp;</label>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" value="" id="sctr" class="custom-control-input">
                        <label for="sctr" class="custom-control-label">SCTR</label>
                    </div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="#">&nbsp;</label>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="consInformado" checked>
                        <label class="custom-control-label" for="consInformado">Consentimiento Informado</label>
                    </div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="#">&nbsp;</label>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="consDroga" checked>
                        <label class="custom-control-label" for="consDroga">Consentimiento Drogas</label>
                    </div>
                </div>
            </div> <!-- End row  -->
        </form>
    </div>
    <div class="card-footer text-right">
        <button type="button" class="btn btn-secondary"><i class="fas fa-long-arrow-alt-left mr-1"></i> Cancelar</button>
        <button type="button" class="btn btn-info d-none"><i class="fas fa-redo-alt mr-1"></i> Actualizar</button>
        <button type="button" class="btn btn-success"><i class="fas  mr-1 fa-save"></i> Guardar</button>
    </div>
</div>