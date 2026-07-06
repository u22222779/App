@extends('layouts.principal')

@section ('titulo')
    Editar Noticia
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
            <strong class="text-muted">Noticia: {{ $noticia->titulo }}</strong>
        </h1>
        <hr>
    </div>-->
	        <div class="col-xs-10 col-xs-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading nav-color">Editar Noticia - {{$noticia->titulo}}</div>
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

                    <form method="POST" action="{{ url('system/noticias/update', $noticia)}}"
                            class="form-horizontal" role="form" enctype="multipart/form-data">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="form-group">
                            <label class="col-md-4 control-label">Título:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="titulo" value="{{ $noticia->titulo }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Categoria:</label>
                            <div class="col-md-6">
                                <select name="categoria_id" class="form-control">
                                    @foreach($categorias as $categoria)
                                        @if($categoria->nombre == $noticia->categoria->nombre)
                                        <option value="{{ $categoria->id }}" selected>{{ $categoria->nombre }}</option>
                                        @else
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Contenido:</label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="content" rows="10">{{ $noticia->content }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Imagen:</label>
                            <div class="col-md-6">
                                <img src="{{URL::asset('images/noticias/' . $noticia->imagen) }}" alt="" class="img-responsive thumbnail">
                                <input type="file" class="form-control" name="imagen">
                                <p class="help-block">Si deseas seguir usando la imagen actual no subas una nueva imagen.</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" class="btn btn-primary" value="Editar">
                                <a class="btn btn-primary" href="{{ url('/system/noticias/') }}">Cancelar</a>
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