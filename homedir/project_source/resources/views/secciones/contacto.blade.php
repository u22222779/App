@extends('layouts.principal')

@section ('titulo')
    {{ trans('string.nav_contacto') }}
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
        <img class="img-responsive" src="{{ asset('assets/img/contactenos.png') }}" alt="">
        <div class="content">
        <div class="row">            
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <!--<div class="panel-heading nav-color">{{ trans('string.contacto_') }}:</div>-->
                    <div class="panel-body">
                    <div class="col-xs-12">
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
                        @if ($mensaje)
                        <div class="success alert-success">
                            <strong>{{$mensaje}}</strong>
                        </div><br>
                        @endif
                        <form class="form-horizontal" role="form" method="post" action="{{ url('/contacto') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />                               
                            <div class="form-group">
                                <label class="col-md-2 col-sm-2 control-label">{{ trans('string.contacto_nombre') }}:</label>
                                <div class="col-md-10 col-sm-10 ">
                                    <input type="text" class="form-control" name="nombre" placeholder="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2  col-sm-2 control-label">{{ trans('string.contacto_email') }}:</label>
                                <div class="col-md-10 col-sm-10">
                                    <input type="text" class="form-control" name="email" placeholder="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 col-sm-2 control-label">{{ trans('string.contacto_telefono') }}:</label>
                                <div class="col-md-10 col-sm-10">
                                    <input type="text" class="form-control" name="telefono" placeholder="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 col-sm-2 control-label">{{ trans('string.contacto_mensaje') }}:</label>
                                <div class="col-md-10 col-sm-10">
                                    <textarea class="form-control" name="mensaje" placeholder="" rows="3"></textarea>
                                </div>
                            </div>
                                                
                            <div class="form-group">
                                <div class="col-md-offset-2 col-sm-offset-2 col-md-8 col-sm-10">
                                    <input type="submit" class="btn btn-primary" value="{{ trans('string.contacto_enviar') }}">    
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 contacto-content">
                    <!--<blockquote><strong>ONG Sedir</strong></blockquote>-->
                    <div class="panel-heading nav-color"><strong>ONG Sedir</strong></div>
                    <div class="panel-body thumbnail">
                    <address>                     
                        <p class="text-info"><i class="fa fa-home" aria-hidden="true"></i> Oficina: Mz. 54 Lote 22. CEDIACU - Moro</p>
                        <p class="text-info"><i class="fa fa-phone" aria-hidden="true"></i> Teléfono: (51) 043-635832</p>
                        <p class="text-info"><i class="fa fa-mobile" aria-hidden="true"></i> RPM: (51) *748495</p>
                        <p class="text-info"><i class="fa fa-mobile" aria-hidden="true"></i> Movil: (51) 944956716</p>
                        <p class="text-info"><i class="fa fa-at" aria-hidden="true"></i> informes@sedir.org.pe</p>
                        <p class="text-info"><i class="fa fa-at" aria-hidden="true"></i> secretaria@sedir.org.pe</p>
                    </address>
                    </div>
                    <!--<div class="col-xs-12">
                        <address>
                        Moro, Ancash, Perú<br>
                        San Francisco, CA 94103<br>
                        <abbr title="Phone">F:</abbr> (043) 456-7890 <br>
                        <abbr title="Phone">M:</abbr> (123) 456-7890 <br>
                        <abbr title="Phone">C:</abbr> (123) 456-7890
                    </address>
                    </div>-->
                </div>
            </div>
        </div>           

        </div>
        </div>
        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7878.3608797118495!2d-78.1852868!3d-9.13817!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91abf1984245514b%3A0x73d2f621f8918525!2sMoro!5e0!3m2!1ses!2spe!4v1470954665896" width="100%" height="350" frameborder="0" style="border:0"></iframe>
    </div>    
@endsection