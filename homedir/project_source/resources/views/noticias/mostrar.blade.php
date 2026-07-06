@extends('layouts.principal')

@section ('titulo')
    Noticia
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
		<a class="btn btn-success" href="{{ url('system/noticias') }}"><span class="glyphicon glyphicon-list"></span> Lista de Noticias</a>
	</div>
	<div class="col-xs-6">
		<h1>
			<!--<strong class="text-muted">Noticia: {{ $noticia->id }}</strong>-->
			<strong class="text-muted">{{ $noticia->titulo }}</strong>
		</h1>
		<hr>
	</div>
	<div class="col-xs-6 opciones">
		<strong>Opciones:</strong>
		<a href="{{ url('system/noticias/'. Hashids::encode($noticia->id) .'/edit') }}" class="btn btn-warning glyphicon glyphicon-wrench"> Editar</a>
		<a href="{{ url('system/noticias/destroy', Hashids::encode($noticia->id)) }}" class="btn btn-danger glyphicon glyphicon-remove-sign" onclick="return confirm('¿Seguro que desea eliminar esta noticia?')"> Eliminar</a>
	</div>
	<table class="table table-striped">
		<tbody>
				<!--
				<tr>
					<tr><td><strong><h4><ins>Datos de Noticia:</ins></h4></strong></td><td></td></tr>
					<td><b class="text-muted">ID:</b></td>
					<td>{{ $noticia->id }}</td>
				</tr> -->
				<tr>
					<td><b class="text-muted">Categoría:</b></td>
					<td>{{ $noticia->categoria->nombre }}</td>
				</tr>
				<tr>
					<td><b class="text-muted">Título:</b></td>
					<td>{{ $noticia->titulo }}</td>
				</tr>
				<tr>
					<td><b class="text-muted">Contenido:</b></td>
					<td>{{ $noticia->content }}</td>
				</tr>
				<tr>
					<td><b class="text-muted">Imagen:</b></td>
					<td>
						<img src="{{URL::asset('images/noticias/' . $noticia->imagen) }}" alt="" class="img-responsive thumbnail">
					</td>
				</tr>
		</tbody>
	</table>
</div>
</div>
</div>
</div>
@endsection