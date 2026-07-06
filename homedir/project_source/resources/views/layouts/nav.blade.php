<nav class="navbar navbar-default">
		        
		            <div class="navbar-header page-scroll" style="background-color:#fff;">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand page-scroll" href="#page-top">
		                   	<img class="img-responsive" src="{{ asset('assets/img/fondo.png') }}" alt="">
		                </a>
		            </div>
					


		            <!-- Collect the nav links, forms, and other content for toggling -->
		            <div class="collapse navbar-collapse navbar-ex1-collapse">
		            	@if(Auth::user())
		            	<ul class="nav nav-pills nav-justified">
		            		<li><a class="page-scroll" href="{{ url('system/categorias') }}">{{ trans('string.not_categorias') }}</a></li>
		            		<li><a class="page-scroll" href="{{ url('system/noticias') }}">{{ trans('string.not_noticias') }}</a></li>
		            		<li><a class="page-scroll" href="{{ url('/logout') }}">{{ trans('string.logout') }}</a></li>
		            	</ul>
						<!--<ul class="nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span> </a>
								<ul class="dropdown-menu">
									<li><a href="{{ url('/logout') }}">{{ trans('string.logout') }}</a></li>
								</ul>
							</li>
						</ul>-->
						@else
		                <ul class="nav nav-pills nav-justified">
		                    <li>
		                        <a class="page-scroll" href="{{ url('/') }}">{{ trans('string.nav_inicio') }}</a>
		                    </li>
		                    <li>
		                        <a class="page-scroll" href="{{ url('/nosotros') }}">{{ trans('string.nav_somos') }}</a>
		                    </li>
		                    <li>
		                        <a class="page-scroll" href="{{ url('/actividad') }}">{{ trans('string.nav_actividad') }}</a>
		                    </li>

		                    <li>
		                        <a class="page-scroll" href="{{ url('/contacto') }}">{{ trans('string.nav_contacto') }}</a>
		                    </li>
		                </ul>
		                @endif
		            </div>
		            <!-- /.navbar-collapse -->
		    </nav>