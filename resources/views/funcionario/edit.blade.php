@extends('plantilla')
@section('content')
<style>
 	.uper {
 	margin-top: 40px;
 }
</style>

<div class="card uper">
 	<div class="card-header">
 		Editar casilla
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
 	<form method="POST"
 	action="{{ route('funcionario.update', $funcionario->id) }}"
 	enctype="multipart/form-data">
 		{{ csrf_field() }}
 		@method('PUT')
 		<div class="form-group">
 		@csrf
 		<label for="id">ID:</label>
 		<input type="text"
			 class="form-control"
			 readonly="true"
			 value="{{$funcionario->id}}"
			 name="id"/>
 		</div>
		 <div class="form-group">
			 @csrf
			 <label for="nombrecompleto">Nombre Completo:</label>
			 <input type="text"
			 value="{{$funcionario->nombrecompleto}}"
			 class="form-control"
			 name="nombrecompleto"/>
		 </div>
 		 <div class="form-group">
			@csrf
			<label for="sexo">sexo:</label>
			<input type="text"
			value="{{$funcionario->sexo}}"
			class="form-control"
			maxlength="1" 
			name="sexo"/>
		 </div>

 		 <button type="submit" class="btn btn-primary">Guardar</button>
	 </form>
	 </div>
</div>
@endsection