@extends('structure')

@section('title', 'Diferenciais')

@section('content')

    @component('components/header', ['title' => 'DIFERENCIAIS', 'subtitle' => 'Diferenciais Dimare: soluções inteligentes para o viver bem'])
        <li>PRODUTOS</li>
        <li>DIFERENCIAIS</li>
    @endcomponent
    
    <section class="differential">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-push-6">
                    <div class="differential__content">
                        <span></span>
                        <p>A Dimare tem como compromisso oferecer a você móveis com alto padrão de qualidade e design moderno, entregando-os sempre dentro do prazo e garantindo preços competitivos.</p>
                    </div>
                    <img class="img-responsive differential__image" src="{{asset('/img/img-differential.png')}}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 differential__icons">
                    <div class="differential__center">
                        <img src="{{asset('/img/icon-design.png')}}" alt="">
                        <h3>DESIGN</h3>
                        <p>Beleza presente em cada detalhe, projeto e módulos. A Dimare alia toda a beleza e a praticidade do design para oferecer produtos que transformam ambientes.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 differential__icons">
                    <div class="differential__center">
                        <img src="{{asset('/img/icon-quality.png')}}" alt="">
                        <h3>QUALIDADE</h3>
                        <p>Alta tecnologia, matéria-prima selecionada, profissionais altamente capacitados e cuidado total com os acabamentos são marcas registradas da Dimare.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 differential__icons">
                    <div class="differential__center">
                        <img src="{{asset('/img/icon-frota.png')}}" alt="">
                        <h3>FROTA PRÓPRIA</h3>
                        <p>Os produtos Dimare são enviados a você em frota própria, o que garante prazos diferenciados.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 differential__icons">
                    <div class="differential__center">
                        <img src="{{asset('/img/icon-montagem.png')}}" alt="">
                        <h3>MONTAGEM</h3>
                        <p>Montagem final realizada com cuidados redobrados, preservando o acabamento único e exclusivo dos móveis Dimare.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="microban">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="microban__title">
                        <h2>MICROBAN</h2>
                        <h3>proteção antibacteriana</h3>
                        <span></span>
                    </div>
                    <p>
                        Os painéis BP Duratex utilizados pela Dimare têm incorporado em sua fabricação a tecnologia Microban®, líder mundial em proteção antimicrobiana e 100% focada em segurança e durabilidade. <br><br>
                        Conheça outras vantagens:
                    </p>
                </div>
                <div class="col-xs-12 col-md-6">
                    <ul class="microban__list">
                        <li>
                            <p>Contribui para a saúde, controlando a presença de bactérias nas superfícies dos móveis, tornando-os mais higiênicos e proporcionando bem-estar.</p>
                        </li>
                        <li>
                            <p>Facilita a limpeza, pois reduz a presença de microorganismos.</p>
                        </li>
                        <li>
                            <p>Aumenta a durabilidade dos produtos,  prevenindo a formação de manchas permanentes e odores desagradáveis causados por microorganismos. </p>
                        </li>
                        <li>
                            <p>Benefício duradouro e ação contínua por toda a vida do produto. </p>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
@endsection
