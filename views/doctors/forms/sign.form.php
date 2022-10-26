<form autocomplete="off" id="formSign">
  <div class="row">
    <div class="col-md-12 form-group">
      <label for="report"><span>Reporte</span>:</label>
      <input type="text" id="report" value="text" disabled class="form-control form-control-border" maxlength="30" placeholder="">
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 form-group">
      <label for="name"><span>Nombres</span>:</label>
      <input type="text" id="repnameort" class="form-control form-control-border" maxlength="30" placeholder="">
    </div>
    <div class="col-md-4 form-group">
      <label for="apedad"><span>Apellido Paterno</span>:</label>
      <input type="text" id="apedad" class="form-control form-control-border" maxlength="30" placeholder="">
    </div>
    <div class="col-md-4 form-group">
      <label for="apemother"><span>Apellido Materno</span>:</label>
      <input type="text" id="apemother" class="form-control form-control-border" maxlength="30" placeholder="">
    </div>

  </div>

  <div class="row">

    <div class="col-md-6 form-group">
      <label for="order">Orden:</label>
      <select id="order" class="custom-select form-control-border">
        <?php for ($i = 1; $i <= 31; $i++) : ?>
          <option value="<?= $i ?>"><?= $i ?></option>
        <?php endfor ?>
      </select>
    </div>
    <div class="col-md-6 form-group">
      <label for="signatureType">Tipo Firma:</label>
      <select id="signatureType" class="custom-select form-control-border">
        <option value="SF" selected>Sin Firma</option>
        <option value="FJ">Firma Fija(Se debe cargar aquí)</option>
        <option value="FU">Firma del Usuario)</option>
      </select>
    </div>
    <div class="col-md-6 form-group">
      <div class="content-sign">
        <img src="views/images/favicon.png" class="image-responsive image-sign">
        <input type="file" id="inputSignUpload" accept="jpg, png, jpeg" hidden>
      </div>
      <div class="btn- mt-1">
        <button type="button" class="btn btn-primary"><i class="fas fa-folder-open mr-1"></i>Imagen</button>
        <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt mr-1"></i> Eliminar</button>
      </div>
    </div>
  </div>
</form>