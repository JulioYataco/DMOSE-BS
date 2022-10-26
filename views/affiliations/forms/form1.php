<div class="card card-outline card-success">
    <div class="card-header">
        <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
            <h4 class="text-bold text-center text-success"><i class="far fa-keyboard mr-1"></i> DATOS DE LA EMPRESA</h4>

            <div>
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-stream"></i></button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form autocomplete="off">
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="empresa">Razón Social:</label>
                    <div class="input-group mb-3">
                        <input type="search" class="form-control" placeholder="Busca la empresa por RUC o RAZÓN SOCIAL" >
                        <div class="input-group-append">
                            <a role="button" href="main.php?view=business/business.register" class="btn btn-primary">
                                <i class="fas fa-plus-square mr-1"></i>
                                Nuevo
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- End row -->

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="tipoexamen">Tipo Examen:</label>
                    <select id="tipoexamen" class="custom-select form-control-border">
                        <option value="">Pre Ocupacional</option>
                        <option value="">Periodico</option>
                        <option value="">Reubicación</option>
                        <option value="">Post Ocupacional</option>
                    </select>
                </div>

                <div class="col-md-6 form-group">
                    <label for="protocolo">Protocolo:</label>
                    <select id="protocolo" class="custom-select form-control-border">
                        <option value="">Protocolo 1</option>
                    </select>
                </div>
            </div> <!-- end row -->
            <div class="row">
                <div class="col-md-3 form-group">
                    <label for="fechaatencion">Fecha Atención:</label>
                    <input type="date" id="fechaatencion" class="form-control form-control-border">
                </div>
                <div class="col-md-3 form-group">
                    <label for="horaatencion">Hora Atención:</label>
                    <input type="time" id="horaatencion" class="form-control form-control-border">
                </div>
                <div class="col-md-3 form-group">
                    <label for="paymentType">Tipo de pago:</label>
                    <select id="" class="custom-select form-control-border">
                        <option value="">Al Contado</option>
                        <option value="">A Credito</option>
                    </select>
                </div>
                <div class="col-md-3 form-group">
                    <label for="deadline">Fecha Limite:</label>
                    <input type="date" disabled id="deadline" min="0" class="form-control form-control-border">
                </div>
            </div> <!-- End row -->
        </form>
    </div>
    <div class="card-footer text-right">
        <button type="button" class="btn btn-secondary"><i class="fas fa-long-arrow-alt-left mr-1"></i> Cancelar</button>
        <button type="button" class="btn btn-info d-none"><i class="fas fa-redo-alt mr-1"></i> Actualizar</button>
        <button type="button" class="btn btn-success"><i class="fas  mr-1 fa-save"></i> Guardar</button>
    </div>
</div>