@extends('structure')

@section('title', 'Home')

@section('content')
    <section class="container-full main-carousel">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">

                <div class="item item-cover active">
					<img src="{{asset('img/banner1.jpg')}}" alt="banner" />
					<div class="container">
						<div class="carousel-caption">
							<h1>Conheça a laca slim</h1>
							<p>Padrões de cores e acabamento superiores, com qualidade e tecnologia europeias.</p>
							<a class="bt btn-azul btn-cotacao" href="{{ Lang::get('url.cotacao') }}" role="button">Saiba mais</a>
						</div>
					</div>
				</div>

                <div class="item item-cover ">
					<img src="{{asset('img/banner2.jpg')}}" alt="banner" />
					<div class="container">
						<div class="carousel-caption">
							<h1>Onde comprar</h1>
							<p>Encontre a loja Dimare mais perto de você!</p>
							<a class="bt btn-azul btn-cotacao" href="{{ Lang::get('url.cotacao') }}" role="button">Ver lojas</a>
						</div>
					</div>
				</div>

                <div class="item item-cover ">
					<img src="{{asset('img/banner3.jpg')}}" alt="banner" />
					<div class="container">
						<div class="carousel-caption">
							<h1>50 anos de tradição</h1>
							<p>A fábrica de móveis planejados mais querida do Brasil completou meio século!</p>
							<a class="bt btn-azul btn-cotacao" href="{{ Lang::get('url.cotacao') }}" role="button">Ver história</a>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</section>
@endsection
