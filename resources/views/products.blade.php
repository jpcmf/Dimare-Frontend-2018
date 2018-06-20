@extends('structure')

@section('title', 'Produtos')

@section('content')

    @component('components/header', ['title' => 'Produtos'])
        <li>PRODUTOS</li>
    @endcomponent

    <section class="products">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 products__ambiente">
                    <div class="products__image products__image--ambiente">
                        <a class="hover-effect" href="{{ url('/produtos/ambientes')}}">
                            <img class="img-responsive" src="{{asset('/img/img-products-ambiente.png')}}" alt="">
                            <span class="bg"></span>
                        </a>
                    </div>
                    <div class="products__content products__content--ambiente">
                        <div class="products__title products__title--ambiente">
                            <h2>AMBIENTES</h2>
                            <span class="hidden-xs hidden-sm"></span>
                        </div>
                        <p>Mais do que praticidade, os móveis sob medida Dimare ajudam a valorizar os ambientes, trazendo elegância e harmonia para cozinhas, banheiros, quartos, salas e outros espaços. Confira os projetos!</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 products__diferenciais">
                    <div class="products__image products__image--diferenciais">
                        <a class="hover-effect" href="{{ url('/produtos/diferenciais')}}">
                            <img class="img-responsive" src="{{asset('/img/img-products-diferenciais.png')}}" alt="">
                            <span class="bg"></span>
                        </a>
                    </div>
                    <div class="products__content products__content--diferenciais">
                        <div class="products__title products__title--diferenciais">
                            <h2>DIFERENCIAIS</h2>
                            <span class="hidden-xs hidden-sm"></span>
                        </div>
                        <p>Tradição no mercado, garantia de 5 anos e tecnologia fabril de ponta. Na Dimare Planejados, a satisfação do cliente é garantida. Conheça outras vantagens!</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="products__acabamentos">
                        <div class="products__image products__image--acabamentos">
                            <h2 class="hidden-xs hidden-sm">ACABAMENTOS</h2>
                            <a class="hover-effect" href="{{ url('/produtos/acabamentos')}}">
                                <img class="img-responsive" src="{{asset('/img/img-products-acabamentos.png')}}" alt="">
                                <span class="bg"></span>
                            </a>
                        </div>
                        <div class="products__content products__content--acabamentos">
                            <div class="products__title products__title--acabamentos">
                                <h2 class="visible-xs visible-sm">ACABAMENTOS</h2>
                                <span class="hidden-xs hidden-sm"></span>
                            </div>
                            <p>A Dimare conta com ampla variedade de opções de acabamento para móveis planejados. São cores, texturas e design diferenciados para combinar com o estilo e a função de cada ambiente.</p>
                        </div>
                    </div>
                    <div class="products__colecoes">
                        <div class="products__image products__image--colecoes">
                            <h2 class="hidden-xs hidden-sm">COLEÇÕES</h2>
                            <a class="hover-effect" href="{{ url('/produtos/colecoes')}}">
                                <img class="img-responsive" src="{{asset('/img/img-products-colecoes.png')}}" alt="">
                                <span class="bg"></span>
                            </a>
                        </div>
                        <div class="products__content products__content--colecoes">
                            <div class="products__title products__title--colecoes">
                                <h2 class="visible-xs visible-sm">COLEÇÕES</h2>
                                <span class="hidden-xs hidden-sm"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
