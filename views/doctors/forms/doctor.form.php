<form autocomplete="off" id="formDoctor">
  <div class="row">
    <div class="col-md-12 form-group">
      <label for="doctor">Nombre <span>Médico</span>:</label>
      <input type="text" id="exdoctoramtype" class="form-control form-control-border" maxlength="30" placeholder="">
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