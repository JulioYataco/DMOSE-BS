<!-- Servicios a evaluar -->
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


<!-- Modal para añadir cie10 -->
<div class="modal fade" id="modalCie10" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title text-bold text-uppercase text-primary"><i class="far fa-keyboard mr-1"></i> FORMULARIO CIE10</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form autocomplete="off">
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="">Buscar CIE10:</label>
              <input type="search" class="form-control" aria-describedby="helpId" placeholder="CIE">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-long-arrow-alt-left mr-1"></i> Cancelar</button>
        <button type="button" class="btn btn-info d-none"><i class="fas fa-redo-alt mr-1"></i> Actualizar</button>
        <button type="button" class="btn btn-primary"><i class="fas fa-plus-square mr-1"></i> Añadir</button>
      </div>
    </div>
  </div>
</div>