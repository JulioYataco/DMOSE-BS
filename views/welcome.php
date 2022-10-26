
<link rel="stylesheet" href="./dist/css/loaders/loader.css">


<div class="card card-body bg-primary">
  <h4 class="text-uppercase">Bienvenido al sistema</h4>
  <hr>
  <p>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam quis voluptatum quas magni odit distinctio voluptas, mollitia nesciunt expedita, temporibus necessitatibus optio pariatur laboriosam. Nisi, omnis repudiandae nemo nesciunt molestias architecto non suscipit dolor corrupti possimus perferendis. Alias illum voluptates hic nihil adipisci accusantium recusandae non accusamus dolorem? Aliquam, assumenda.
  </p>
</div>

<div class="callout callout-info">
  <div class="content-loader">
    <div class="loader white"></div>
    <div class="loader yellow"></div>
    <div class="loader blue"></div>
  </div>

<!--   <div class="conteudo">
    <div class="relogio">
        <h4 class="js-data"></h4>
    </div>
    <span></span>
    <span></span>
  </div> -->
</div>

<div class="cargar-demo-div">

</div>

<div class="btn-group" role="group" >
  <a class="btn btn-primary" href="views/reports/certificado.report.php" role="button">Certificado de aptitud</a>
  <a class="btn btn-primary" href="views/reports/informe.report.php" role="button">Informe médico</a>
  <a class="btn btn-primary" href="#" role="button">Ficha3</a>
  <a class="btn btn-primary" href="#" role="button">Ficha4</a>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
  Launch
</button>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Texto</label>
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Help text</small>
              </div>

            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>


<script>
  $("#mydiv").load(location.href + " #mydiv");
  // https://www.baulphp.com/refresh-reload-contenido-div-usando-jquery-completo/
</script>