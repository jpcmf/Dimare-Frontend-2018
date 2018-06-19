@extends('structure')

@section('title', 'Empresa')

@section('content')
    <section class="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>A DIMARE</h2>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>SOBRE NÓS</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
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
                <div class="col-sm-4">
                    <img src="{{asset('img/img-fabric1.png')}}" alt="">
                    <img src="{{asset('img/img-fabric2.png')}}" alt="">
                    <img src="{{asset('img/img-fabric3.png')}}" alt="">
                </div>
                <div class="col-sm-8">
                    <p class="fabric__text">
                        A Dimare aplica em seus produtos matéria-prima da melhor qualidade, selecionada entre seletos fornecedores - como Duratex, Eucatex e Berneck - e emprega equipamentos e tecnologia de ponta. <br><br>
                        Com profissionais altamente qualificados, oferece produtos fabricados com excelência, de alto padrão, que harmonizam ambientes, trazendo personalização e exclusividade para clientes e consumidores. <br><br>
                        Agilidade, distribuição nacional e segurança no transporte. Os móveis Dimare são condicionados em embalagens especialmente desenvolvidas para um transporte seguro, que previne danos e oferece um racional aproveitamento do espaço.
                    </p>
                </div>
            </div>
        </div>

    </section>
    <section class="social">

    </section>
@endsection
