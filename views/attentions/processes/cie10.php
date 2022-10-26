<div class="card card-outline card-primary">
  <div class="card-header">
    <!-- Cabecera (titulo, botón para añadir nuevos) -->
    <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
      <h4 class="text-bold text-primary"><i class="fas fa-clipboard-list mr-1"></i> CIE 10 </h4>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAttentionConfig"><i class="fas fa-plus-square mr-1"></i> Nuevo</button>
    </div>
  </div>
  <div class="card-body">
    <!-- tabla cie10 -->
    <table id="tableCie10" class="table table-responsive-md table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>CIE</th>
          <th>USUARIO CRE</th>
          <th>FECHA CRE</th>
          <th>USUARIO MOD</th>
          <th>FECHA MOD</th>
          <th>OPERACIÓN</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>INMUNOLOGÍA</td>
          <td>Usuario 1</td>
          <td>2022/01/5</td>
          <td>Usuario 2</td>
          <td>2022/01/25</td>
          <td>
            <button type="button" class="btn btn-outline-info"><i class="fas fa-edit mr-1"></i>Editar</button>
            <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash-alt mr-1"></i>Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>