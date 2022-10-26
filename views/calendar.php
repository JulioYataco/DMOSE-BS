<link href='plugins/fullcalendar/main.css' rel='stylesheet' />
<link rel="stylesheet" href="dist/css/pages/calendar.css">

<!-- Calendar -->
<div class="row">
	<div class="col-md-12">
		<div class="sticky-top p-0">
			<div class="card card-primary">
				<div class="card-body p-0">
					<div id='calendar'></div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal  agenda-->
<div class="modal fade" id="modalAgendas" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-bold">AGENDAS</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
        <div class="card card-outline card-primary">
          <div class="card-body">
            <h5 class="text-primary">Oftalmologia</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit...
            </p>
            <span class="font-italic text-info">2022/05/05</span>
            <div class="text-right">
              <button type="button" class="btn  btn-sm btn-outline-primary"><i class="fas fa-check"></i></button>
            </div>
          </div>
        </div> <!-- End card -->

			</div>
		</div>
	</div>
</div>

<!-- Card para previsualizar contenido del evento selecconado -->
<div class="card card-primary card-outline" id="card-preview-event" style="position: absolute; top: 40%; left: 35%; z-index: 1045; width: 400px; display:none; cursor: move;">
	<div class="card-body pb-0">
		<div class="row mb-2">
			<div class="col-12">
				<h5 class="card-title text-muted">Mi Agenda</h5>
				<button type="button" id="btn-close-card" class="close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
		<h4 id="title-card">Titulo</h4>
		<p>
			<span id="descripction-card" style="font-size: 17px;"></span> <br>
			<a href="#" class="text-dark"><i class="fas fa-map-marker-alt text-danger"></i> <span class="font-italic" id="direction-card"></span></a> <br>
			<i class="fas fa-calendar-alt text-muted"></i> <span class="text-muted" id="date-card"></span>
		</p>

		<div class="form-group">
			<button type="button" id="btn-delete-event" class="btn btn-outline-danger btn-sm">Eliminar</button>
			<button type="button" id="btn-edit-event" class="btn btn-outline-info btn-sm">Editar</button>
		</div>
	</div>
</div>


<script src='plugins/fullcalendar/main.js'></script>
<script src='plugins/fullcalendar/locales/es.js'></script>
<script src="dist/js/pages/calendar.js"></script>
