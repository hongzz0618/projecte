@extends('layouts.master')
@section('content')


<div class="row" style="margin-top:20px">

<div class="col-md-offset-3 col-md-6">

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title text-center">
				<span class="glyphicon glyphicon-film" aria-hidden="true">Modificar Staff</span>
			</h3>
		</div>

		<div class="panel-body" style="padding:30px">
		
			{{-- TODO: Abrir el formulario e indicar el método POST --}}
			<form action="{{ url('Staff/getUpdate/'.$arrayStaffs['id']) }}" method="post">
        
				{{-- TODO: Protección contra CSRF --}}
				{{ csrf_field() }}

				<div class="form-group">
    					<label for="nombre">nombre</label>
    					<input type="text" name="nombre" id="nombre" class="form-control" value="{{$arrayStaffs['nombre']}}">
					</div>
			
					<div class="form-group">
    					<label for="password">password</label>
    					<input type="text" name="password" id="password" class="form-control" value="{{$arrayStaffs['password']}}">
					</div>
					<div class="form-group">
    					<label for="horadetrabajo">horadetrabajo</label>
    					<input type="text" name="horadetrabajo" id="horadetrabajo" class="form-control" value="{{$arrayStaffs['horadetrabajo']}}">
					</div>
					<div class="form-group">
    					<label for="id_empresa">id_empresa</label>
    					<input type="text" name="id_empresa" id="id_empresa" class="form-control" value="{{$arrayStaffs['id_empresa']}}">
					</div>
			
				<div class="form-group text-center">
					<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
					Modificar Staff
					</button>
				</div>

			{{-- TODO: Cerrar formulario --}}
			</form>
		</div>
	</div>
</div>
</div>


@stop
