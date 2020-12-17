@extends('plantilla')
@section('content')
<style>
.uper {margin-top: 40px;
}
</style>
<div class="card uper">
	<div class="card-header">
		Agregar Eleccion
	</div>
	<div class="card-body">
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div><br />
		@endif
		<form method="post" action="{{ route('eleccion.store') }} " enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				@csrf
				<label for="periodo">Periodo:</label>
				<input type="text" class="form-control" maxlength="100" name="periodo" id="periodo"/>
			</div>
			<div class="form-group">
				@csrf
				<label for="fecha">Fecha:</label>
				<input type="date" class="form-control" name="fecha" id="fecha" />
			</div>
			<div class="form-group">
				@csrf
				<label for="fechaapertura">Fecha de Apertura:</label>
				<input type="date" class="form-control" name="fechaapertura" id="fechaapertura"/>
			</div>
			<div class="form-group">
				@csrf
				<label for="horaapertura">Hora de Apertura:</label>
				<input type="time" class="form-control" name="horaapertura" id="horaapertura" />
			</div>
			<div class="form-group">
				@csrf
				<label for="fechacierre">Fecha de Cierre:</label>
				<input type="date" class="form-control" name="fechacierre" id="fechacierra"/>
			</div>
			<div class="form-group">
				@csrf
				<label for="horacierre">Hora de cierre:</label>
				<input type="time" class="form-control" name="horacierre" id="horacierre" />
			</div>
			<div class="form-group">
				@csrf
				<label for="observaciones">Observaciones:</label>
				<input type="text" class="form-control" maxlength="100" name="observaciones" id="observaciones"/>
			</div>
			<button type="submit" class="btn btn-primary" onClick="return validate()">Guardar</button>
		</form>
	</div>
</div>
@endsection

@section('page-script')
<script type="text/javascript" src="/js/eleccion.js"></script>
@stop