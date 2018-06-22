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
							<a class="bt btn-azul btn-cotacao" href="#" role="button">Saiba mais</a>
						</div>
					</div>
				</div>

                <div class="item item-cover ">
					<img src="{{asset('img/banner2.jpg')}}" alt="banner" />
					<div class="container">
						<div class="carousel-caption">
							<h1>Onde comprar</h1>
							<p>Encontre a loja Dimare mais perto de você!</p>
							<a class="bt btn-azul btn-cotacao" href="#" role="button">Ver lojas</a>
						</div>
					</div>
				</div>

                <div class="item item-cover ">
					<img src="{{asset('img/banner3.jpg')}}" alt="banner" />
					<div class="container">
						<div class="carousel-caption">
							<h1>50 anos de tradição</h1>
							<p>A fábrica de móveis planejados mais querida do Brasil completou meio século!</p>
							<a class="bt btn-azul btn-cotacao" href="#" role="button">Ver história</a>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</section>
    <section class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="welcome__content">
                        <div class="welcome__title">
                            <h2>Dimare - Ambientes e móveis planejados </h2>
                            <p>A Dimare oferece móveis planejados de qualidade superior para os mais diversos ambientes. Conheça!</p>
                            <span></span>
                        </div>
                        <div class="row">
                            <div class="col-md-6 hidden-xs hidden-sm">
                                <div class="welcome__image">
                                    <img class="img-responsive" src="{{asset('img/img-welcome.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="welcome__ambientes">
                                    <a href="{{url('produtos/ambientes')}}" class="thumb thumb-dorm">
                                        <span class="txt">DORMITÓRIOS</span>
                                        <span class="bg"></span>
                                    </a>
                                    <a href="{{url('produtos/ambientes')}}" class="thumb thumb-closet">
                                        <span class="txt">CLOSETS</span>
                                        <span class="bg"></span>
                                    </a>
                                    <a href="{{url('produtos/ambientes')}}" class="thumb thumb-coz">
                                        <span class="txt">COZINHAS</span>
                                        <span class="bg"></span>
                                    </a>
                                    <a href="{{url('produtos/ambientes')}}" class="thumb thumb-corp">
                                        <span class="txt">CORPORATIVOS</span>
                                        <span class="bg"></span>
                                    </a>
                                    <a href="{{url('produtos/ambientes')}}" class="thumb thumb-home">
                                        <span class="txt">HOME THEATERS</span>
                                        <span class="bg"></span>
                                    </a>
                                    <a href="{{url('produtos/ambientes')}}" class="thumb thumb-ban">
                                        <span class="txt">BANHEIROS</span>
                                        <span class="bg"></span>
                                    </a>
                                </div>
                                <div class="welcome__button text-center">
                                    <a href="" class="btn btn-outline center-block">Ver todas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="blog__title">
                        <h2>Blog</h2>
                        <p>Notícias, dicas e tendências do universo moveleiro.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="blog__content">
                        <div class="blog__image">
                            <img class="img-responsive" src="http://via.placeholder.com/238x194" alt="">
                        </div>
                        <div class="blog__info">
                            <p>Lorem Ipsum. Proin gravida nibh vel velit</p>
                            <a href="">Leia mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="blog__content">
                        <div class="blog__image">
                            <img class="img-responsive" src="http://via.placeholder.com/238x194" alt="">
                        </div>
                        <div class="blog__info">
                            <p>Lorem Ipsum. Proin gravida nibh vel velit</p>
                            <a href="">Leia mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="blog__content">
                        <div class="blog__image">
                            <img class="img-responsive" src="http://via.placeholder.com/238x194" alt="">
                        </div>
                        <div class="blog__info">
                            <p>Lorem Ipsum. Proin gravida nibh vel velit</p>
                            <a href="">Leia mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="customer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="customer__blc customer__blc--pedido">
                        <span class="hidden-xs"></span>
                        <div class="customer__inside">
                            <h2>Acompanhe seu Pedido</h2>
                            <p>Quer saber se os móveis para seu ambiente planejado já estão prontos? Acompanhe seu pedido!</p>
                            <a href="" class="btn btn-outline center-block">Ver pedido</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="customer__blc customer__blc--lojista">
                        <div class="customer__inside">
                            <h2>Seja um Lojista</h2>
                            <p>Seja um parceiro Dimare e ofereça a seus clientes o melhor em móveis planejados. Fale conosco e conheça as vantagens!</p>
                            <a href="" class="btn btn-outline center-block">QUERO SER LOJISTA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
