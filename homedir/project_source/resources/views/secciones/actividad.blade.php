@extends('layouts.principal')

@section ('titulo')
    {{ trans('string.nav_actividad') }}
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
    		<article class="col-xs-12 col-sm-6">
                <div class="panel panel-default panel-border">
                    <div class="panel-heading nav-color">
                        <a href="#">{{ trans('string.hacemos_tit_01') }}</a>
                    </div>
                    <div class="panel-body panel-body-ser">
                        <p id="serv_01">{{ trans('string.hacemos_cont_01') }}</p>
                        <div class="col-xs-12 col-sm-6 thumbnail">
                            <img class="img-responsive" src="{{ asset('assets/img/actividad/des1.png') }}" alt="">
                        </div>
                        <div class="col-xs-12 col-sm-6 thumbnail">
                            <img class="img-responsive" src="{{ asset('assets/img/actividad/des2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </article>
            <article class="col-xs-12 col-sm-6">
                <div class="panel panel-default panel-border">
                    <div class="panel-heading nav-color">
                        <a href="#">{{ trans('string.hacemos_tit_02') }}</a>
                    </div>
                    <div class="panel-body panel-body-ser">
                        <p id="serv_02">{{ trans('string.hacemos_cont_02') }}</p>
                        <div class="col-xs-12 col-sm-6 thumbnail">
                            <img class="img-responsive" src="{{ asset('assets/img/actividad/asis1.png') }}" alt="">
                        </div>
                        <div class="col-xs-12 col-sm-6 thumbnail">
                            <img class="img-responsive" src="{{ asset('assets/img/actividad/asis2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </article>
            <div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>
            <article class="col-xs-12 col-sm-6">
                <div class="panel panel-default panel-border">
                    <div class="panel-heading nav-color">
                        <a href="#">{{ trans('string.hacemos_tit_03') }}</a>
                    </div>
                    <div class="panel-body panel-body-ser">
                        <p id="serv_03">{{ trans('string.hacemos_cont_03') }}</p>
                        <div class="col-xs-12 col-sm-6 thumbnail">
                            <img class="img-responsive" src="{{ asset('assets/img/actividad/prog1.png') }}" alt="">
                        </div>
                        <div class="col-xs-12 col-sm-6 thumbnail">
                            <img class="img-responsive" src="{{ asset('assets/img/actividad/prog2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </article>
            <article class="col-xs-12 col-sm-6">
                <div class="panel panel-default panel-border">
                    <div class="panel-heading nav-color">
                        <a href="#">{{ trans('string.hacemos_tit_04') }}</a>
                    </div>
                    <div class="panel-body panel-body-ser">
                        <p id="serv_04">{{ trans('string.hacemos_cont_04') }}</p>
                        <div class="col-xs-12 col-sm-6 thumbnail">
                            <img class="img-responsive" src="{{ asset('assets/img/actividad/vive1.png') }}" alt="">
                        </div>
                        <div class="col-xs-12 col-sm-6 thumbnail">
                            <img class="img-responsive" src="{{ asset('assets/img/actividad/vive2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </article>
            <div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>
            <article class="col-xs-12 col-sm-6">
                <div class="panel panel-default panel-border">
                    <div class="panel-heading nav-color">
                        <a href="#">{{ trans('string.hacemos_tit_05') }}</a>
                    </div>
                    <div class="panel-body panel-body-ser">
                        <p id="serv_05">{{ trans('string.hacemos_cont_05') }}</p>
                        <div class="col-xs-12 col-sm-6 thumbnail">
                            <img class="img-responsive" src="{{ asset('assets/img/actividad/comp1.png') }}" alt="">
                        </div>
                        <div class="col-xs-12 col-sm-6 thumbnail">
                            <img class="img-responsive" src="{{ asset('assets/img/actividad/comp2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </article>
            <article class="col-xs-12 col-sm-6">
                <div class="panel panel-default panel-border">
                    <div class="panel-heading nav-color">
                        <a href="#">{{ trans('string.hacemos_tit_06') }}</a>
                    </div>
                    <div class="panel-body panel-body-ser">
                        <p id="serv_06">{{ trans('string.hacemos_cont_06') }}</p>
                        <div class="col-xs-12 col-sm-6 thumbnail">
                            <img class="img-responsive" src="{{ asset('assets/img/actividad/cond1.png') }}" alt="">
                        </div>
                        <div class="col-xs-12 col-sm-6 thumbnail">
                            <img class="img-responsive" src="{{ asset('assets/img/actividad/cond2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </article>
            <div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>

            <article class="col-xs-12 col-sm-offset-2 col-sm-8">
                <div class="panel panel-default panel-border">
                    <div class="panel-heading nav-color">
                        <a href="#">{{ trans('string.hacemos_tit_ser') }}</a>
                    </div>
                    <div class="panel-body panel-body-ser">
                        <div class="col-xs-12 col-sm-6">
                            <ul>
                                <li>{{ trans('string.hacemos_cont_ser_01') }}</li>
                                <li>{{ trans('string.hacemos_cont_ser_02') }}</li>
                                <li>{{ trans('string.hacemos_cont_ser_03') }}</li>
                                <li>{{ trans('string.hacemos_cont_ser_04') }}</li>
                                <li>{{ trans('string.hacemos_cont_ser_05') }}</li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <ul>
                                <li>{{ trans('string.hacemos_cont_ser_06') }}</li>
                                <li>{{ trans('string.hacemos_cont_ser_07') }}</li>
                                <li>{{ trans('string.hacemos_cont_ser_08') }}</li>
                                <li>{{ trans('string.hacemos_cont_ser_09') }}</li>
                                <li>{{ trans('string.hacemos_cont_ser_10') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
    	</div>
    	</div>
    </div>
@endsection
