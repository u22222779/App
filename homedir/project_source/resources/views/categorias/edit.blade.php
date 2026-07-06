@extends('layouts.principal')

@section ('titulo')
    Editar Categoria
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
    <!--<div class="col-xs-6">
        <h1>
            <strong class="text-muted">Categoria: {{ $categoria->nombre }}</strong>
        </h1>
        <hr>
    </div>-->
	        <div class="col-xs-10 col-xs-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading nav-color">Editar Categoria - {{$categoria->nombre}}</div>
                <div class="panel-body">
                
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>¡Error!</strong> Verifique lo ingresado.<br><br>
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                    </div>
                    @endif

                    <form method="POST" action="{{ url('system/categorias/update', $categoria)}}"
                            class="form-horizontal" role="form">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nombre:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nombre" value="{{ $categoria->nombre }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" class="btn btn-primary" value="Editar">
                                <a class="btn btn-primary" href="{{ url('/system/categorias/') }}">Cancelar</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
</div>
</div>
</div>
</div>
@endsection