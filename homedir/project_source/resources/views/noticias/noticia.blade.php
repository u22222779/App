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

	<h1>
		<strong class="text-muted">{{ $noticia->titulo }}</strong>
	</h1>

	<div id="fb-root"></div>

	<div class="fb-share-button" data-href="{{ url('/noticia', Hashids::encode($noticia->id)) }}" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsedir.org.pe%2Fnoticia%2F1&amp;src=sdkpreparse">Compartir</a></div>
	<p>Categoría: {{ $noticia->categoria->nombre}}</p>
	<div class="col-xs-12">
		<img src="{{URL::asset('images/noticias/' . $noticia->imagen) }}" alt="" class="img-responsive thumbnail">
	</div>
	<p>{{ $noticia->content}}</p>

</div>
</div>
</div>
</div>
@endsection