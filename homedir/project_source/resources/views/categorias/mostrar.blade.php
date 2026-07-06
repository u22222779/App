@extends('layouts.principal')

@section ('titulo')
    Categoria
@stop

@section ('header')
    @include ('layouts.header')
@stop

@section ('nav')
    @include ('layouts.nav')
@stop

@section ('footer')
    @include ('layouts.footer')
@stop

@section('content')
<div class="row">
<div class="content">
<div class="row">
<div class="col-xs-12">
	
	<div class="col-xs-12">
		<a class="btn btn-success" href="{{ url('system/categorias') }}"><span class="glyphicon glyphicon-list"></span> Lista de Categorias</a>
	</div>
	<div class="col-xs-6">
		<h1>
			<strong class="text-muted">Categoria: {{ $categoria->nombre }}</strong>
		</h1>
		<hr>
	</div>
	<div class="col-xs-6 opciones">
		<strong>Opciones:</strong>
		<a href="{{ url('system/categorias/'. $categoria->id .'/edit') }}" class="btn btn-warning glyphicon glyphicon-wrench"> Editar</a>
		<a href="{{ url('system/categorias/destroy', $categoria->id) }}" class="btn btn-danger glyphicon glyphicon-remove-sign" onclick="return confirm('¿Seguro que desea eliminar esta categoría?')"> Eliminar</a>
	</div>

	
	<table class="table table-striped">
		<!--<strong><h4><ins>Datos de Categoria:</ins></h4></strong>-->
		<tbody>
				<!--<tr>					
					<td><b class="text-muted">ID:</b></td>
					<td>{{ $categoria->id }}</td>
				</tr>-->
				<tr>
					<td><b class="text-muted">Alias:</b></td>
					<td>{{ $categoria->nombre }}</td>
				</tr>
		</tbody>
	</table>
</div>
</div>
</div>
</div>
@endsection