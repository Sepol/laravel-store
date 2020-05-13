<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>{{ config('app.name', 'Интернет-магазин Laravel-Store') }}</title>
	<meta charset="UTF-8">
	<meta name="description" content="Интернет-магазин Laravel-Store">
	<meta name="keywords" content="Интернет-магазин, Laravel, Store, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Favicon -->
	<link href="{{ asset ('assets/img/favicon.ico') }}" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset ('assets/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset ('assets/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset ('assets/css/flaticon.css') }}"/>
	<link rel="stylesheet" href="{{ asset ('assets/css/slicknav.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset ('assets/css/jquery-ui.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset ('assets/css/owl.carousel.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset ('assets/css/animate.css') }}"/>
	<link rel="stylesheet" href="{{ asset ('assets/css/style.css') }}"/>

	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
  </div>
  
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="{{ route ('index') }}" class="site-logo">
							<img src="{{ asset ('assets/img/logo.png') }}" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Search on divisima ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="#">Sign</a> In or <a href="#">Create Account</a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>0</span>
								</div>
								<a href="#">Shopping Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
          @include('components.top_menu', ['menus' => $menus])
				</ul>
			</div>
		</nav>
	</header>
  <!-- Header section end -->
  
  @yield('content')