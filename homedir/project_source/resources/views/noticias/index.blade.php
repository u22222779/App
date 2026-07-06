@extends('layouts.principal')

@section ('titulo')
   Noticias
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
		<a class="btn btn-success" href="{{ url('system/noticias/create') }}"><span class="glyphicon glyphicon-pencil"></span> Registrar Nuevo Noticia</a>
	</div>
	<div class="col-xs-6">
		<h1>Lista de Noticias</h1><hr>
	</div>

	<div class="col-xs-6 opciones">
		<form method="GET" action="{{ url('system/noticias') }}"
              class="navbar-form" role="form">
            <a class="btn btn-default" href="{{ url('system/noticias/') }}"><span class="glyphicon glyphicon-list"></span> Listar Todo</a>
			<div class="input-group">
				<input type="text" class="form-control" name="titulo" placeholder="Buscar por título">
                <span id="search" class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
            </div>
		</form>
	</div>
	
	<table class="table table-striped">
		<thead>
			<!--<th>ID</th>-->
			<th>Título</th>
			<th>Fecha</th>
			<th>Opciones</th>
		</thead>
		<tbody>
			@foreach($noticias as $noticia)
				<tr>					
					<!--<td>{{ $noticia->id }}</td>-->
					<td>{{ $noticia->titulo }}</td>
					<td>{{ $noticia->created_at }}</td>
					<td>
						<a href="{{ url('/system/noticias/mostrar', Hashids::encode($noticia->id) ) }}" class="btn btn-info glyphicon glyphicon-eye-open"></a>
						<a href="{{ url('/system/noticias/'. Hashids::encode($noticia->id)  .'/edit') }}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
						<a href="{{ url('/system/noticias/destroy', Hashids::encode($noticia->id) ) }}" class="btn btn-danger glyphicon glyphicon-remove-sign" onclick="return confirm('¿Seguro que desea eliminar esta noticia?')"></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $noticias->links() !!}
</div>
	</div>
</div>

</div>
@endsection