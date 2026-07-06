@extends('layouts.principal')

@section ('titulo')
    {{ trans('string.noticias') }}
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
                
                <div class="col-xs-12">
                    
                    <div class="panel panel-default panel-border">
                        <div class="panel-heading nav-color">
                        	<a href="{{ url('/titulares') }}">{{ trans('string.noticias') }}</a>
                        </div>
	                    @foreach($noticias as $noticia)
	                    <div class="col-xs-12">
		                    <div class="noticia-item row  thumbnail">
		                    	<div class="row">
			                      	<div class="col-xs-3 col-sm-4 col-md-4 col-lg-3">
			                      		<a href="{{ url('/noticia', Hashids::encode($noticia->id)) }}">
			         	          			<img src="{{URL::asset('images/noticias/' . $noticia->imagen) }}" class="img-responsive thumbnail">
			         	          		</a>
			                       	</div>
			                       	<div class="col-xs-9 col-sm-8 col-md-8 col-lg-9">
				                       	<a class="noticia-item-titulo" href="{{ url('/noticia', Hashids::encode($noticia->id)) }}">
					                        {{ $noticia->titulo }}
				                        </a>
			                            <div class="noticia-item-fecha text-muted">{{ $noticia->created_at }}</div>
			                            <p class="noticia-item-content">{{ $noticia->content }}</p>
			                        </div>
		                        </div>
		                    </div>
	                	</div>
	                    @endforeach
                    </div>
                    {!! $noticias->links() !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-4">

                <div class="col-xs-12">
                	<div class="row">
                        <a href='http://sistemas.minag.gob.pe/sisap/portal2/mayorista/' target="_blank"> <img class="" src="{{ asset('assets/img/links/sisap.png') }}"> </a>
                        <a href='http://agraria.pe/' target="_blank"> <img class="" src="{{ asset('assets/img/links/agraria.png') }}"> </a>                        
                    </div>
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
    </div>
@endsection