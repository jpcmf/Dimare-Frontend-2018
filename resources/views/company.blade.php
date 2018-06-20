@extends('structure')

@section('title', 'Empresa')

@section('content')

    @component('components/header', ['title' => 'A DIMARE'])
        <li>SOBRE NÓS</li>
    @endcomponent

    <section class="history">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="history__image hidden-sm hidden-xs">
                        <img src="{{asset('img/img-empresa.png')}}" alt="">
                    </div>
                    <div class="history__content">
                        <div class="history__title">
                            <h2>Conheça a história da Dimare Planejados</h2>
                            <span></span>
                        </div>
                        <p>
                            A Marel S/A nasceu em 1967 e no ano de 2005 criou a marca Dimare Móveis Planejados para um segmento específico. <br><br>
                            Com 50 anos de tradição, a Dimare conquistou credibilidade no mercado moveleiro por investir em inovação, matérias-primas de qualidade superior e parcerias sólidas. <br><br>
                            Oferecer soluções inteligentes para viver bem por meio de produtos e serviços personalizados, confiáveis e de qualidade é a missão da Dimare. <br><br>
                            A unidade fabril da Dimare está localizada em Francisco Beltrão (PR) e possui 38.000m² de área construída entre escritórios, estoque, embalagem e unidades de fabricação. Hoje, a empresa conta com aproximadamente 400 colaboradores, além de mais de 400 revendas e lojistas distribuídos em todo o Brasil.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 history__icons">
                    <img src="{{asset('img/icon-tecnologia-europeia.png')}}" alt="">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 history__icons">
                    <img src="{{asset('img/icon-materia-prima.png')}}" alt="">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 history__icons">
                    <img src="{{asset('img/icon-processo-produtivo.png')}}" alt="">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 history__icons">
                    <img src="{{asset('img/icon-frota-propria.png')}}" alt="">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 history__icons">
                    <img src="{{asset('img/icon-revendedores.png')}}" alt="">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 history__icons">
                    <img src="{{asset('img/icon-acabamentos.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="fabric">
        <div class="container">
            <div class="row">
                <div class="col-md-4 hidden-sm hidden-xs">
                    <div class="fabric__images">
                        <img src="{{asset('img/img-fabric1.png')}}" alt="">
                        <img src="{{asset('img/img-fabric2.png')}}" alt="">
                        <img src="{{asset('img/img-fabric3.png')}}" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-8">
                    <div class="fabric__text">
                        <p>
                            A Dimare aplica em seus produtos matéria-prima da melhor qualidade, selecionada entre seletos fornecedores - como Duratex, Eucatex e Berneck - e emprega equipamentos e tecnologia de ponta. <br><br>
                            Com profissionais altamente qualificados, oferece produtos fabricados com excelência, de alto padrão, que harmonizam ambientes, trazendo personalização e exclusividade para clientes e consumidores. <br><br>
                            Agilidade, distribuição nacional e segurança no transporte. Os móveis Dimare são condicionados em embalagens especialmente desenvolvidas para um transporte seguro, que previne danos e oferece um racional aproveitamento do espaço.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="social">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="social__content">
                        <div class="social__title">
                            <h2>
                                <h2>Responsabilidade Social: ações Dimare em prol da comunidade</h2>
                                <span></span>
                            </h2>
                        </div>
                        <p>
                            A Dimare acredita que, mais do que cumprir seus deveres como empresa, tem como responsabilidade estender este compromisso com toda a sociedade. <br><br>
                            Através do PROBEM, Programa de Responsabilidade Marel, atua em diversas áreas, com o objetivo de promover o bem-estar social e o cuidado com o meio ambiente. <br><br>
                            A empresa investe ainda em programas de treinamento, ações de conscientização e defesa do meio ambiente, no lazer dos seus colaboradores e familiares. Incentiva também a educação e a formação profissional, além de muitas outras ações que você pode conhecer na galeria abaixo.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="social__blc">
                        <div class="social__inner">
                            <ul>
                                <li><a href=""><img src="{{asset('/img/logo-probem-verde.png')}}" alt=""></a></li>
                                <li><a href=""><img src="{{asset('/img/logo-probem-comun.png')}}" alt=""></a></li>
                                <li><a href=""><img src="{{asset('/img/logo-probem-colab.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="social__carousel">
                        <span class="bg-firula hidden-xs hidden-sm"></span>
                        <div id="socialCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#socialCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#socialCarousel" data-slide-to="1"></li>
                                <li data-target="#socialCarousel" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{asset('/img/img-social1.png')}}" alt="">
                                    <div class="carousel-caption">
            							<p>Brinquedoteca1 - Em parceria com a Prefeitura, a Dimare realiza a doação de toda a mobília para brinquedotecas de escolas e CEMI’s Municipais. </p>
            						</div>
                                </div>

                                <div class="item">
                                    <img src="{{asset('/img/img-social1.png')}}" alt="">
                                    <div class="carousel-caption">
            							<p>Brinquedoteca2 - Em parceria com a Prefeitura, a Dimare realiza a doação de toda a mobília para brinquedotecas de escolas e CEMI’s Municipais. </p>
            						</div>
                                </div>

                                <div class="item">
                                    <img src="{{asset('/img/img-social1.png')}}" alt="">
                                    <div class="carousel-caption">
            							<p>Brinquedoteca3 - Em parceria com a Prefeitura, a Dimare realiza a doação de toda a mobília para brinquedotecas de escolas e CEMI’s Municipais. </p>
            						</div>
                                </div>
                            </div>

                            <a class="left carousel-control" href="#socialCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#socialCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
