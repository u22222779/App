@extends('layouts.principal')

@section ('titulo')
    Categorias
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
		<a class="btn btn-success" href="{{ url('system/categorias/create') }}"><span class="glyphicon glyphicon-pencil"></span> Registrar Nueva Categoria</a>
	</div>
	<div class="col-xs-6">
		<h1>Lista de Categorias</h1><hr>
	</div>

	<div class="col-xs-6 opciones">
		<form method="GET" action="{{ url('system/categorias') }}"
              class="navbar-form" role="form">
            <a class="btn btn-default" href="{{ url('system/categorias/') }}"><span class="glyphicon glyphicon-list"></span> Listar Todo</a>
			<div class="input-group">
				<input type="text" class="form-control" name="nombre" placeholder="Buscar por Nombre">
                <span id="search" class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
            </div>
		</form>
	</div>
	
	<table class="table table-striped">
		<thead>
			<!--<th>ID</th>-->
			<th>Nombre</th>
			<th>Fecha</th>
			<th>Opciones</th>
		</thead>
		<tbody>
			@foreach($categorias as $categoria)
				<tr>
					<!--<td>{{ $categoria->id }}</td>-->
					<td>{{ $categoria->nombre }}</td>
					<td>{{ $categoria->created_at }}</td>
					<td>
						<!--<a href="{{ url('/system/categorias/mostrar', $categoria->id) }}" class="btn btn-info glyphicon glyphicon-eye-open"></a>-->
						<a href="{{ url('/system/categorias/'. Hashids::encode($categoria->id) .'/edit') }}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
						<a href="{{ url('/system/categorias/destroy/'. Hashids::encode($categoria->id)) }}" class="btn btn-danger glyphicon glyphicon-remove-sign" onclick="return confirm('¿Seguro que desea eliminar esta categoría?')"></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $categorias->links() !!}
</div>
	</div>
</div>

</div>
@endsection