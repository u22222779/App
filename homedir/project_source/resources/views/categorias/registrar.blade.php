@extends('layouts.principal')

@section ('titulo')
    Registrar Categoria
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
	    <div class="col-xs-10 col-xs-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading nav-color">Registrar Categoria</div>
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

                    <form class="form-horizontal" role="form" method="post" action="{{ url('system/categorias') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nombre:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre de la categoria">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" class="btn btn-primary" value="Registrar">
                                <a class="btn btn-primary" href="{{ url('system/categorias/') }}">Cancelar</a>
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