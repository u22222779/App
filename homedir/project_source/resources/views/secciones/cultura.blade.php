@extends('layouts.principal')

@section ('titulo')
    {{ trans('string.nav_cultura') }}
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
            <div class="col-xs-12 col-sm-9">    
                <div class="panel panel-default panel-border">
                    <div class="panel-heading nav-color">
                        <a href="{{ url('/agricola') }}">{{ trans('string.nav_cultura') }}</a>
                    </div>
                    <div class="panel-body panel-body-cul">
                        {{ trans('string.consulta_agricola') }}
                    </div>
                </div>
                <div class="col-xs-12 thumbnail" style="padding-top: 25px;">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="panel panel-default panel-border">
                            <div class="thumbnail">
                                <img class="img-responsive" src="{{ asset('assets/img/consulta/palto.png') }}">
                            </div>
                            <div class="panel-heading nav-color">
                                <a href="#">{{ trans('string.consulta_palto') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="panel panel-default panel-border">
                            <div class="thumbnail">
                                <img class="img-responsive" src="{{ asset('assets/img/consulta/mango.png') }}">
                            </div>
                            <div class="panel-heading nav-color">
                                <a href="#">{{ trans('string.consulta_mango') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix visible-md visible-sm"></div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="panel panel-default panel-border">
                            <div class="thumbnail">
                                <img class="img-responsive" src="{{ asset('assets/img/consulta/vid.png') }}">
                            </div>
                            <div class="panel-heading nav-color">
                                <a href="#">{{ trans('string.consulta_vid') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix visible-lg"></div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">
                        <div class="panel panel-default panel-border">
                            <div class="thumbnail">
                                <img class="img-responsive" src="{{ asset('assets/img/consulta/aguaymanto.png') }}">
                            </div>
                            <div class="panel-heading nav-color">
                                <a href="#">{{ trans('string.consulta_aguaymanto') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-sm-offset-3 col-lg-offset-0">
                        <div class="panel panel-default panel-border">
                            <div class="thumbnail">
                                <img class="img-responsive" src="{{ asset('assets/img/consulta/manzana.png') }}">
                            </div>
                            <div class="panel-heading nav-color">
                                <a href="#">{{ trans('string.consulta_manzana') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    	    <div class="col-xs-12 col-sm-3">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="panel panel-default panel-border">
                            <div class="panel-heading nav-color">
                                <a href="{{ url('/titulares') }}">{{ trans('string.noticias') }}</a>
                            </div>
                            @foreach($noticias as $noticia)
                            <div class="col-xs-12">
                                <div class="columna-noticia-item row  thumbnail">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <a href="{{ url('/noticia', Hashids::encode($noticia->id)) }}">
                                                <img src="{{URL::asset('images/noticias/' . $noticia->imagen) }}" class="img-responsive thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-xs-9">
                                            <a class="columna-noticia-item-titulo btn-link" href="{{ url('/noticia', Hashids::encode($noticia->id)) }}">
                                                {{ $noticia->titulo }}
                                            </a>
                                            <div class="columna-noticia-item-fecha text-muted">{{ $noticia->created_at }}</div>
                                            <p class="columna-noticia-item-content">{{ $noticia->content }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div> <br>
                </div>
                <div class="col-xs-12">
                    <div class="row">

                        <div class="fb-page" data-href="https://www.facebook.com/Ong-Sedir-892162070889843/" data-tabs="timeline" data-height="450" data-width="500"  data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/Ong-Sedir-892162070889843/" class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/Ong-Sedir-892162070889843/">Ong Sedir</a>
                            </blockquote>
                        </div>

                    </div>
                </div>
            </div>
    	</div>
    	</div>
    </div>
@endsection