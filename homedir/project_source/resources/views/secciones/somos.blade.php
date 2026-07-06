@extends('layouts.principal')

@section ('titulo')
    {{ trans('string.nav_somos') }}
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
        	<div class="col-xs-12 col-sm-8">
        		<article>
		        	<h1><strong>{{ trans('string.somos_descrip_tit') }}</strong></h1>
		        	<p class="text-justify">{{ trans('string.somos_descrip') }}</p>
		        </article>

                <article>
                    <h1><strong>{{ trans('string.somos_mision_tit') }}</strong></h1>
                    <p class="text-justify">{{ trans('string.somos_mision') }}</p>
                </article>

		        <article>
		        	<h1><strong>{{ trans('string.somos_vision_tit') }}</strong></h1>
		        	<p class="text-justify">{{ trans('string.somos_vision') }}</p>
		        </article>
        	</div>
        	<div class="col-xs-12 col-sm-4">
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

                    <div class="fb-page" data-href="https://www.facebook.com/Ong-Sedir-892162070889843/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/Ong-Sedir-892162070889843/" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/Ong-Sedir-892162070889843/">Ong Sedir</a>
                        </blockquote>
                    </div>

                    </div>
                </div>
        	</div>
        	</div>
        </div>
        <img class="img-responsive" src="assets/img/nosotros.png" alt="">
    </div>

@endsection
