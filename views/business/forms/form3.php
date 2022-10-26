<div class="card card-success card-outline">
    <div class="card-header">
        <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
            <h4 class="text-bold text-success"><i class="far fa-keyboard mr-1"></i> FORMULARIO CUENTA </h4>
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form autocomplete="off">
            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="usuario">Tipo:</label>
                    <select name="" id="" class="custom-select form-control-border">
                        <option value="">Médico</option>
                        <option value="">Administrador</option>
                        <option value="">Otro</option>
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" class="form-control form-control-border">
                </div>
                <div class="col-md-4 form-group">
                    <label for="password">Constraseña:</label>
                    <input type="password" id="password" class="form-control form-control-border">
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

<div class="card card-outline card-primary">

    <div class="card-header">
        <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
            <h4 class="text-bold text-primary"><i class="fas fa-clipboard-list mr-1"></i> CUENTAS </h4>
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>
    <div class="card-body">
        <table id="tableBusiness" class="table table-responsive-md table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TIPO</th>
                    <th>USUARIO</th>
                    <th>ESTADO</th>
                    <th>OPERACIÓN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Administrador</td>
                    <td>Usuario 1</td>
                    <td><span class="badge bg-primary">Activo</span></td>
                    <td>
                        <button type="button" class="btn btn-outline-info"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>