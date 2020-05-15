@extends('layouts._layout')

@section('content')

	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="{{ asset ('assets/img/bg.jpg') }}">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>Данная страница находится в стадии разработки</span>
							<p>В данный момент реализованы только страницы подменю Pages. 
                 Приносим свои извинения.</p>
							<a href="{{route('static::index')}}" class="site-btn sb-line">На главную</a>
							<a href="{{route('static::product')}}" class="site-btn sb-white">В каталог</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	@endsection