@extends('layouts.principal')

@section ('titulo')
    Sedir
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
        
        <div id="Carousel-header" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#Carousel-header" data-slide-to="0" class="active"></li>
                <li data-target="#Carousel-header" data-slide-to="1" ></li>
                <li data-target="#Carousel-header" data-slide-to="2" ></li>
            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{ asset('assets/img/slider/slider-1.png') }}" alt="Slider-1">
                    <!--<div class="carousel-caption" > <h2>1</h2>   </div>-->
                </div>
                <div class="item">
                    <img src="{{ asset('assets/img/slider/slider-2.png') }}" alt="Slider-2">
                    <!--<div class="carousel-caption">  <h2>2</h2>  </div>-->
                </div>
                <div class="item">
                    <img src="{{ asset('assets/img/slider/slider-3.png') }}" alt="Slider-3">
                    <!--<div class="carousel-caption">  <h2>3</h2>  </div>-->
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#Carousel-header" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#Carousel-header" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </div>

        <div class="content">
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-default panel-border">
                                <div class="panel-heading nav-color">
                                    <a href="{{ url('/titulares') }}">{{ trans('string.noticias') }}</a>
                                </div>
                                
                                <div id="welcome-noticia">
                                    @foreach($noticias as $noticia)
                                    <div class="col-xs-12">
                                        <div class="columna-noticia-item row  thumbnail">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <a href="{{ url('/noticia', Hashids::encode($noticia->id)) }}">
                                                        <img src="{{URL::asset('images/noticias/' . $noticia->imagen) }}" class="img-responsive">
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
                                    <div class="col-xs-12" style="text-align:center;">
                                        <a href="{{ url('/titulares') }}" style="color:#000;">Ver más >></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel panel-default panel-border">
                                <div class="panel-heading nav-color">
                                    <a href="{{ url('/agricola') }}">{{ trans('string.nav_cultura') }}</a>
                                </div>
                                <div id="Carousel-cultura" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <a href="{{ url('/agricola') }}" class="thumbnail">
                                                <img src="{{ asset('assets/img/productos/producto.png') }}" alt="Slider-1">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{ url('/agricola') }}" class="thumbnail">
                                                <img src="{{ asset('assets/img/productos/producto2.png') }}" alt="Slider-2">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="{{ url('/agricola') }}" class="thumbnail">
                                                <img src="{{ asset('assets/img/productos/producto3.png') }}" alt="Slider-3">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                                
                    
                    <div class="col-xs-12">
                        <div class="thumbnail row">
                            <div class="embed-responsive embed-responsive-16by9">
                                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/videoseries?list=PLrkht-A7NwohFultA15mh8gnOfyRRLZSV"" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>                 
                               
                </div>

                <div  class="col-xs-12 col-sm-3">

                    <div class="col-xs-12"><div class="row radio-space"></div></div>                    

                    <div class="col-xs-12">
                        <div class="row">
                            <div class="panel panel-default panel-border">
                                <!--<div class="panel-heading nav-color">{{ trans('string.radio_online') }}</div>-->
                                <div class="col-xs-12 thumbnail">
                                    <div class="embed-responsive embed-responsive-4by3" style="text-align:center;">
                                        <iframe width= "height="350" border ="0" style="border: 0; box-shadow: 1px 1px 0 #fff;"
src="http://cdn.cdnlayer.biz/player-sedir/triton.swf?me=poder">
</iframe>
                                    </div>
                                </div>
                            </div>            
                        </div>
                    </div>


                    <div class="col-xs-12"><div style="margin-top:20px;" class="row"></div></div>
                    

                    <div class="col-xs-12"> 
                        <div class="row">
                            <div class="fb-page" data-href="https://www.facebook.com/www.sedir.org.pe/?fref=ts" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/www.sedir.org.pe/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/www.sedir.org.pe/?fref=ts">Servicio para el Desarrollo Integral Rural - SEDIR</a></blockquote></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    

@endsection
