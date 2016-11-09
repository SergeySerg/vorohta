<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
	<meta charset="utf-8">
	<title>Ворохта</title>
{{--
	<meta name="title" content="{{ $meta ->getTranslate('meta_title') }}">
	<meta name="description" content="{{ $meta ->getTranslate('meta_description') }}">
	<meta name="keywords" content="{{ $meta ->getTranslate('meta_keywords') }}">
--}}

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:image" content="path/to/image.jpg">

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
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css?ver1" rel="stylesheet">

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

		<div class="col-md-12">
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
							<img alt="Головна" src="../img/frontend/logo.png">
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right r-menu">
							<li class="active">
								<a href="/{{ App::getLocale() }}"><i class="fa fa-home"></i><br>Головна</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-area-chart" aria-hidden="true"></i><br>Про Ворохту<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="/{{ App::getLocale() }}/about_us">Ворохта - історія та сьогодення</a></li>
									<li><a href="#">Інфраструктура туристичного курорту</a></li>
									<li><a href="#">Ворохта відпочинок взимку</a></li>
									<li><a href="#">Ворохта відпочинок влітку</a></li>
									<li><a href="#">Кухня, звичаї, традиції</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-blind" aria-hidden="true"></i><br>Туристу<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Як добратися</a></li>
									<li><a href="#">Заклади проживання</a></li>
									<li><a href="#">Заклади харчування</a></li>
								</ul>
							</li>
							<li>
								<a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i><br>Фотогалерея</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-book" aria-hidden="true"></i><br>Політика<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Керівна ланка селищної влади</a></li>
									<li><a href="#">Прийом громадян</a></li>
									<li><a href="#">Регуляторна політика</a></li>
									<li><a href="#">Податкова політика</a></li>
									<li><a href="#">Рішення селищної ради</a></li>
									<li><a href="#">Протоколи загальних зборів ...</a></li>
									<li><a href="#">Розпорядження селищного голови</a></li>
									<li><a href="#">Про-ти рішень селищної ради</a></li>
									<li><a href="#">Державні закупівлі</a></li>
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
			<div id="webstudio-slider" style="display:none;
											  margin-bottom: 20px;
                                              border-radius: 5px;
                                              box-shadow: 0 0 15px rgba(0,0,0, .15);">
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

{{--
			<div class="panel panel-default wow fadeInLeft">
				<div class="panel-heading">Погода в Ворохті</div>

				<div class="panel-body">
					<div class="col-sm-4 col-md-3">
						<a href="#" class="thumbnail">
							<img src="http://www.ecml.at/Portals/1/Blog/Fotolia_53921830_Srussian.jpg" alt="...">
						</a>
					</div>
					<div class="col-sm-8 col-md-9">
						<p>EUROSTANDARD sp. z o.o. є фірма, що надає спеціалізовані послуги в сфері забезпечення персоналом
							(аутсорсинг персоналу або лізинг працівників). На Замовлення наших клієнтів ми формуємо бригади
							працівників відповідної спеціальності та кваліфікації та делегуємо їх для виконання завданнь
							таких замовників. Ми беремо на себе повністю обовязки роботодавця, забезпечуючи фірмі, що
							користується робочою силою виключно організацію виробничих процесів. Особливістю нашого підприємства
							є те, що EUROSTANDARD sp. z o.o. є оператором надання послуг на території Польщі  нашого дочірнього
							підприємства Приватне підприємство міжнародне кадрове агентство «Європейський Стандарт» (Україна,
							м. Луцьк). Працівники працевлаштовані на українській фірмі та направляються у відрядження на
							EUROSTANDARD sp. z o.o., яке, в свою чергу надає послуги польским клієнтам.
						</p>
						<a href="#" class="pull-right">Детальніше<i class="fa fa-angle-right fa-lg"></i></a>
					</div>
				</div>
			</div>
--}}

		</div>

		<div class="col-md-4">

			<div class="panel panel-default wow fadeInLeft">
				<div class="panel-heading">Новини</div>

				<div class="panel-body">
					<div class="col-sm-4 col-md-3">
						<a href="#" class="thumbnail">
							<img src="http://www.ecml.at/Portals/1/Blog/Fotolia_53921830_Srussian.jpg" alt="...">
						</a>
					</div>
					<div class="col-sm-8 col-md-9">
						<p>EUROSTANDARD sp. z o.o. є фірма, що надає спеціалізовані послуги в сфері забезпечення персоналом
							(аутсорсинг персоналу або лізинг працівників). На Замовлення наших клієнтів ми формуємо бригади
							працівників відповідної спеціальності та кваліфікації та делегуємо їх для виконання завданнь
							таких замовників. Ми беремо на себе повністю обовязки роботодавця, забезпечуючи фірмі, що
							користується робочою силою виключно організацію виробничих процесів. Особливістю нашого підприємства
							є те, що EUROSTANDARD sp. z o.o. є оператором надання послуг на території Польщі  нашого дочірнього
							підприємства Приватне підприємство міжнародне кадрове агентство «Європейський Стандарт» (Україна,
							м. Луцьк). Працівники працевлаштовані на українській фірмі та направляються у відрядження на
							EUROSTANDARD sp. z o.o., яке, в свою чергу надає послуги польским клієнтам.
						</p>
						<a href="#" class="pull-right">Детальніше<i class="fa fa-angle-right fa-lg"></i></a>
					</div>
				</div>
			</div>
			<div class="panel panel-default wow fadeInLeft">
				<div class="panel-heading">Реклама</div>

				<div class="panel-body">
					<div class="col-sm-4 col-md-3">
						<a href="#" class="thumbnail">
							<img src="http://www.ecml.at/Portals/1/Blog/Fotolia_53921830_Srussian.jpg" alt="...">
						</a>
					</div>
					<div class="col-sm-8 col-md-9">
						<p>EUROSTANDARD sp. z o.o. є фірма, що надає спеціалізовані послуги в сфері забезпечення персоналом
							(аутсорсинг персоналу або лізинг працівників). На Замовлення наших клієнтів ми формуємо бригади
							працівників відповідної спеціальності та кваліфікації та делегуємо їх для виконання завданнь
							таких замовників. Ми беремо на себе повністю обовязки роботодавця, забезпечуючи фірмі, що
							користується робочою силою виключно організацію виробничих процесів. Особливістю нашого підприємства
							є те, що EUROSTANDARD sp. z o.o. є оператором надання послуг на території Польщі  нашого дочірнього
							підприємства Приватне підприємство міжнародне кадрове агентство «Європейський Стандарт» (Україна,
							м. Луцьк). Працівники працевлаштовані на українській фірмі та направляються у відрядження на
							EUROSTANDARD sp. z o.o., яке, в свою чергу надає послуги польским клієнтам.
						</p>
						<a href="#" class="pull-right">Детальніше<i class="fa fa-angle-right fa-lg"></i></a>
					</div>
				</div>
			</div>
			<div class="panel panel-default wow fadeInLeft">
				<div class="panel-heading">Коротко про нас</div>

				<div class="panel-body">
					<div class="col-sm-4 col-md-3">
						<a href="#" class="thumbnail">
							<img src="http://www.ecml.at/Portals/1/Blog/Fotolia_53921830_Srussian.jpg" alt="...">
						</a>
					</div>
					<div class="col-sm-8 col-md-9">
						<p>EUROSTANDARD sp. z o.o. є фірма, що надає спеціалізовані послуги в сфері забезпечення персоналом
							(аутсорсинг персоналу або лізинг працівників). На Замовлення наших клієнтів ми формуємо бригади
							працівників відповідної спеціальності та кваліфікації та делегуємо їх для виконання завданнь
							таких замовників. Ми беремо на себе повністю обовязки роботодавця, забезпечуючи фірмі, що
							користується робочою силою виключно організацію виробничих процесів. Особливістю нашого підприємства
							є те, що EUROSTANDARD sp. z o.o. є оператором надання послуг на території Польщі  нашого дочірнього
							підприємства Приватне підприємство міжнародне кадрове агентство «Європейський Стандарт» (Україна,
							м. Луцьк). Працівники працевлаштовані на українській фірмі та направляються у відрядження на
							EUROSTANDARD sp. z o.o., яке, в свою чергу надає послуги польским клієнтам.
						</p>
						<a href="#" class="pull-right">Детальніше<i class="fa fa-angle-right fa-lg"></i></a>
					</div>
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

				<p style="padding-top: 20px;">© Copyright 2016 <br>Виконавчий комітет Ворохтянської селищної ради<br> 78595, Україна, вул. Д.Галицького 41 </p>

			</div>

			<div class="col-sm-6 col-md-6 footer-contact wow fadeInLeft">

				<img src="../img/frontend/contact.png" alt="">

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
<script src="unitegallery/js/jquery-11.0.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="http://azmind.com/demo/andia-agency/v2-1/assets/js/wow.min.js" type="application/javascript"></script>
<script>
	new WOW().init();
</script>
</body>
</html>