<header>
	@if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>{{ trans('string.error_aviso') }}</strong> {{ trans('string.error_mensaje') }}<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
	@endif
	<div class="row">
		<div class="col-xs-12">
		<div class="col-xs-12 col-sm-6">
			<img class="img-responsive header-image" src="{{ asset('assets/img/isotipo.png') }}">
		</div>
		<div class="col-xs-12 col-sm-6">
			<a class="social" href="{{ url('/traslate', 'es') }}" style="color: #1da1f2 !important;"><img class="" src="{{ asset('assets/img/band/esp.png') }}" WIDTH="22" HEIGHT="22"></a>
            <a class="social" href="{{ url('/traslate', 'en') }}" style="color: #1da1f2 !important;"><img class="" src="{{ asset('assets/img/band/ing.png') }}" WIDTH="22" HEIGHT="22"></a>
            <a class="social" href="{{ url('/traslate', 'de') }}" style="color: #1da1f2 !important;"><img class="" src="{{ asset('assets/img/band/alem.png') }}" WIDTH="22" HEIGHT="22"></a>
			<samp class="social_sep">&nbsp;</samp>
			<a class="social" href='https://twitter.com/' target="_blank" title="Twitter" style="color: #1da1f2 !important;"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
			<a class="social" href='https://www.youtube.com/channel/UCZJGyFdCFs2KdxtD7pbdwfg'title="YouTube" target="_blank" style="color: #e62117 !important;"><i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i></a>
			<a class="social" href='https://www.facebook.com/ong.sedir?fref=ts' target="_blank" title="Facebook" style="color: #3b5998 !important;"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a>
			<a class="social" href='https://www.linkedin.com' target="_blank" title="LinkedIn" style="color: #256ea9 !important;"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a>
		</div>
		</div>
	</div>
</header>