@extends('layouts.master')
@section('content')

<div class="row" style="margin-top:20px">

<div class="col-md-offset-3 col-md-6">

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title text-center">
				<span class="glyphicon glyphicon-film" aria-hidden="true">Modificar Cliente</span>
			</h3>
		</div>

		<div class="panel-body" style="padding:30px">
		
			{{-- TODO: Abrir el formulario e indicar el método POST --}}
			<form action="{{ url('editorial/getUpdate/'.$arrayClientes['id']) }}" method="post">
        
				{{-- TODO: Protección contra CSRF --}}
				{{ csrf_field() }}

				<div class="form-group">
    					<label for="nombre">nombre</label>
    					<input type="text" name="nombre" id="nombre" class="form-control" value="{{$arrayClientes['nombre']}}">
					</div>
					<div class="form-group">
    					<label for="apellido">apellido</label>
    					<input type="text" name="apellido" id="apellido" class="form-control" value="{{$arrayClientes['apellido']}}">
					</div>

					<div class="form-group">
    					<label for="email">email</label>
    					<input type="text" name="email" id="email" class="form-control" value="{{$arrayClientes['email']}}">
					</div>

					<div class="form-group">
    					<label for="telefono">telefono</label>
    					<input type="text" name="telefono" id="telefono" class="form-control" value="{{$arrayClientes['telefono']}}">
					</div>

					<div class="form-group">
    					<label for="direccion">direccion</label>
    					<input type="text" name="direccion" id="direccion" class="form-control" value="{{$arrayClientes['direccion']}}">
					</div>
					<div class="form-group">
    					<label for="password">password</label>
    					<input type="text" name="password" id="password" class="form-control" value="{{$arrayClientes['password']}}">
					</div>
					<div class="form-group">
    					<label for="tipousuario">tipousuario</label>
    					<input type="text" name="tipousuario" id="tipousuario" class="form-control" value="{{$arrayClientes['tipousuario']}}">
					</div>

					<div class="form-group">
    					<label for="visa">visa</label>
    					<input type="text" name="visa" id="visa" class="form-control" value="{{$arrayClientes['visa']}}">
					</div>
					<div class="form-group">
    					<label for="numero">numero</label>
    					<input type="text" name="numero" id="numero" class="form-control" value="{{$arrayClientes['numero']}}">
					</div
				<div class="form-group text-center">
					<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
					Modificar Cliente
					</button>
				</div>

			{{-- TODO: Cerrar formulario --}}
			</form>
		</div>
	</div>
</div>
</div>


@stop
