<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
	<meta charset="utf-8">
	<title>
		@if($meta ->getTranslate('meta_title'))
			{{ $meta ->getTranslate('meta_title') }}
		@else Ворохта
		@endif
	</title>

	@if(isset($meta))
		<meta name="description" content="{{ $meta ->getTranslate('meta_description') }}">
		<meta name="keywords" content="{{ $meta ->getTranslate('meta_keywords') }}">
	@endif


	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="{{ asset('/img/favicon/favicon.ico') }}" type="image/x-icon">
	<link rel="apple-touch-icon" href="{{ asset('/img/favicon/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/favicon/apple-touch-icon-114x114.png') }}">

	<link href="{{ asset('/css/main.css') }}?ver={{ $version }}" rel="stylesheet">
	<link href="{{ asset('/css/fonts.css') }}" rel="stylesheet">
	<link href="{{ asset('/libs/unitegallery/dist/css/unite-gallery.css') }}" rel="stylesheet">
	<link href="http://azmind.com/demo/andia-agency/v2-1/assets/css/animate.css" rel="stylesheet">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="{{ asset('/css/plugins/sweetalert.css') }}" rel="stylesheet">
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}?ver={{ $version }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

<div class="container">

	<div class="row">

		<ul class="col-md-12 text-right lang">

			@foreach($langs as $lang)
				<li><a href="{{str_replace(url(App::getLocale()), url($lang->lang), Request::url())}}">{{$lang -> lang}}</a></li>
			@endforeach

		</ul>

	</div>

	<div class="row">

		<div class="col-md-12" style="z-index: 10;">

			<nav class="navbar navbar-default">

				<div class="container-fluid">

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">

						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>

							<span class="icon-bar"></span>

							<span class="icon-bar"></span>

							<span class="icon-bar"></span>

						</button>

						<a class="navbar-brand" href="/{{ App::getLocale() }}">

							<img alt="{{ trans('base.main') }}" src="/img/frontend/logo.png">

						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right r-menu">
							<li @if(Request::is('ua')) class="active"@endif>
								<a href="/{{ App::getLocale() }}"><i class="fa fa-home"></i><br>{{ trans('base.main') }}</a>
							</li>
							<li @if(Request::is('*/about_us')) class="dropdown active"@else class="dropdown"@endif>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-area-chart" aria-hidden="true"></i><br>{{ trans('base.about_us') }}<span class="caret"></span></a>
								<ul class="dropdown-menu">

									@foreach($about_us as $about_us_item)

										<li><a href="/{{ App::getLocale() }}/about_us/article-{{ $about_us_item -> id }}">{{ $about_us_item -> getTranslate('title') }}</a></li>

									@endforeach

								</ul>
							</li>

							<li class="dropdown">

								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-blind" aria-hidden="true"></i><br>{{ trans('base.tourist') }}<span class="caret"></span></a>

								<ul class="dropdown-menu">

									@foreach($tourist as $tourist_item)

										<li><a href="/{{ App::getLocale() }}/tourist/article-{{ $tourist_item -> id }}">{{ $tourist_item -> getTranslate('title') }}</a></li>

									@endforeach

								</ul>

							</li>

							<li>
								<a href="/{{ App::getLocale() }}/gallery"><i class="fa fa-picture-o" aria-hidden="true"></i><br>{{ trans('base.gallery') }}</a>
							</li>

							<li class="dropdown">

								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-book" aria-hidden="true"></i><br>{{ trans('base.government') }}<span class="caret"></span></a>

								<ul class="dropdown-menu">

									@foreach($government as $government_item)

										<li><a href="/{{ App::getLocale() }}/government/article-{{ $government_item -> id }}">{{ $government_item -> getTranslate('title') }}</a></li>

									@endforeach

								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->

				</div><!-- /.container-fluid -->

			</nav>
		</div>

	</div>

	<div class="row">

		<div class="col-md-12">

			<!-- start: Slider -->
			<div id="webstudio-slider" style="display:none;">
				@foreach($slides as $slide)

					@if(count($slide->getImages()) > 0)

						<img alt="{{$slide->getTranslate('title')}}" src="/{{$slide->getImages()[0]['full']}}"
							 data-image="/{{$slide->getImages()[0]['full']}}"
							 id="img-{{$slide->id}}"
							 data-description=" {{$slide->getTranslate('description')}}"
							 data-link="jhjhjhj111">

					@endif

				@endforeach

			</div>
			<!-- end: Slider -->

		</div>

	</div>

	<!--start: Row -->

	<div class="row">

		<div class="col-md-8">

			@yield('content')

		</div>

		<div class="col-md-4">

			<div class="panel panel-default wow fadeInLeft">
				<div class="panel-heading">{{ trans('base.weather') }}</div>

				<div class="panel-body">
					<!-- Gismeteo informer START -->
					<link rel="stylesheet" type="text/css" href="https://s1.gismeteo.ua/static/css/informer2/gs_informerClient.min.css">
					<div id="gsInformerID-qf4442KsRjrUtm" class="gsInformer" style="width:240px;height:157px; 	margin: 0 auto;">
						<div class="gsIContent">
							<div id="cityLink">
								<a href="https://www.gismeteo.ua/ua/weather-vorokhta-11858/" target="_blank">Погода у Ворохті</a>
							</div>
							<div class="gsLinks">
								<table>
									<tr>
										<td>
											<div class="leftCol">
												<a href="https://www.gismeteo.ua/ua" target="_blank">
													<img alt="Gismeteo" title="Gismeteo" src="https://s1.gismeteo.ua/static/images/informer2/logo-mini2.png" align="absmiddle" border="0" />
													<span>Gismeteo</span>
												</a>
											</div>
											<div class="rightCol">
												<a href="https://www.gismeteo.ua/ua/weather-vorokhta-11858/" target="_blank">Погода на 2 тижні</a>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<script src="https://www.gismeteo.ua/ajax/getInformer/?hash=qf4442KsRjrUtm" type="text/javascript"></script>
					<!-- Gismeteo informer END -->				</div>
			</div>

			<div class="panel panel-default wow fadeInLeft">
				<div class="panel-heading">{{ trans('base.advertising') }}</div>

				<div class="panel-body">
				</div>
			</div>

		</div>

	</div>

	<!-- Start footer -->
	<footer>

		<div class="row">

			<div class="col-md-12">

				<div class="footer-border"></div>

			</div>

			<div class="col-sm-6 col-md-6 wow fadeInUp">

				<p style="padding-top: 20px;">© Copyright 2016 <br>{{ trans('base.rada') }}<br>{{ trans('base.address') }}</p>

			</div>

			<div class="col-sm-6 col-md-6 footer-contact wow fadeInLeft">

				<img src="/img/frontend/contact.png" alt="">

			</div>

		</div>

	</footer>
	<!-- end footer -->
</div>
<!-- /container -->

<script src="{{ asset('/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/js/common.js') }}?ver={{ $version }}"></script>

<script src="{{ asset('/libs/unitegallery/dist/themes/default/ug-theme-default.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/themes/slider/ug-theme-slider.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/themes/tiles/ug-theme-tiles.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/themes/tilesgrid/ug-theme-tilesgrid.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/themes/compact/ug-theme-compact.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/js/unitegallery.min.js') }}"></script>
<script src="{{ asset('/js/plugins/sweetalert.min.js') }}"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script><!-- start: Java Script -->
<script src="{{ asset('js/bootstrap.js') }}"></script>

<script src="http://azmind.com/demo/andia-agency/v2-1/assets/js/wow.min.js" type="application/javascript"></script>
{!!$texts->get('code.footer')!!}

<script>
	new WOW().init();
</script>
</body>
</html>