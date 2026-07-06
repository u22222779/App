@extends('layouts.principal')

@section ('titulo')
    Sistema
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
		<a class="btn btn-success" href="{{ url('system/noticias') }}"> Lista de Noticias</a>
		<a class="btn btn-success" href="{{ url('system/categorias') }}"> Lista de Categorias</a>
	</div>

</div>
</div>
</div>
</div>
@endsection