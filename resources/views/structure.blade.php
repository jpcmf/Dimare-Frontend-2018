<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dimare - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}" title="Dimare">
                            <img src="{{asset('img/dimare-logo@2x.png')}}" alt="">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('/empresa') }}">Empresa</a></li>
                            <li class="dropdown">
                                <a href="{{ url('/produtos') }}" class="dropdown-toggle" data-toggle="dropdown">Produtos</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/produtos/ambientes') }}">AMBIENTES</a></li>
                                    <li><a href="{{ url('/produtos/diferenciais') }}">DIFERENCIAIS</a></li>
                                    <li><a href="{{ url('/produtos/acabamentos') }}">ACABAMENTOS</a></li>
                                    <li><a href="{{ url('/produtos/colecoes') }}">COLEÇÕES</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/onde-comprar') }}">Onde comprar</a></li>
                            <li><a href="{{ url('/blog') }}">Blog</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contato</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/fale-conosco') }}">FALE CONOSCO</a></li>
                                    <li><a href="{{ url('/seja-um-lojista') }}">SEJA UM LOJISTA</a></li>
                                    <li><a href="{{ url('/acompanhe-seu-pedido') }}">ACOMPANHE SEU PEDIDO</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ url('/') }}">Área restrita</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header> <!-- end / header -->
        <div class="container-fluid">
            @yield('content')
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <span><a class="footer__link" href="{{ url('/empresa') }}">EMPRESA</a></span>
                        <span><a class="footer__link" href="{{ url('/onde-comprar') }}">ONDE COMPRAR</a></span>
                        <span><a class="footer__link" href="{{ url('/blog') }}">BLOG</a></span>
                        <span><a class="footer__link" href="{{ url('/empresa') }}">ÁREA RESTRITA</a></span>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <h3>PRODUTOS</h3>
                        <span><a class="footer__link footer__link--white" href="{{ url('/produtos/ambientes') }}">AMBIENTES</a></span>
                        <span><a class="footer__link footer__link--white" href="{{ url('/produtos/diferenciais') }}">DIFERENCIAIS</a></span>
                        <span><a class="footer__link footer__link--white" href="{{ url('/produtos/acabamentos') }}">ACABAMENTOS</a></span>
                        <span><a class="footer__link footer__link--white" href="{{ url('/produtos/colecoes') }}">COLEÇÕES</a></span>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <h3>CONTATO</h3>
                        <span><a class="footer__link footer__link--white" href="{{ url('/fale-conosco') }}">FALE CONOSCO</a></span>
                        <span><a class="footer__link footer__link--white" href="{{ url('/seja-um-lojista') }}">SEJA UM LOJISTA</a></span>
                        <span><a class="footer__link footer__link--white" href="{{ url('/acompanhe-seu-pedido') }}">ACOMPANHE SEU PEDIDO</a></span>
                    </div>
                    <div class="col-xs-12 col-md-3 footer__logo">
                        <img class="" src="{{asset('img/logo-dimare-rodape@2x.png')}}" alt="Dimare">
                        <ul class="list-inline footer__social">
                            <li><a href="https://www.instagram.com/dimare.fabrica"><img src="{{asset('img/instagram@2x.png')}}" alt="Instagram"></a></li>
                            <li><a href="https://www.facebook.com/dimare.fabrica"><img src="{{asset('img/facebook@2x.png')}}" alt="Facebook"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__copy text-center">
                <p>© Copyright - Todos os direitos reservados - Dimare 2018 • Política de Privacidade • Desenvolvido por Agência Cupola</p>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="/js/manifest.js"></script>
        <script src="/js/vendor.js"></script>
        <script src="/js/app.js"></script>

        @if (getenv('APP_ENV') === 'local')
        <script id="__bs_script__">//<![CDATA[
            document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>".replace("HOST", location.hostname));
            //]]>
        </script>
        @endif

    </body>
</html>
