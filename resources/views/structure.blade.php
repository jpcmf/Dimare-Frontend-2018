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
                        <a class="navbar-brand" href="#" title="Dimare">
                            <img src="{{asset('img/dimare-logo@2x.png')}}" alt="">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Empresa</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">AMBIENTES</a></li>
                                    <li><a href="#">DIFERENCIAIS</a></li>
                                    <li><a href="#">ACABAMENTOS</a></li>
                                    <li><a href="#">COLEÇÕES</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Onde comprar</a></li>
                            <li><a href="#">Blog</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contato</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">FALE CONOSCO</a></li>
                                    <li><a href="#">SEJA UM LOJISTA</a></li>
                                    <li><a href="#">ACOMPANHE SEU PEDIDO</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Área restrita</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header> <!-- end / header -->
        <div class="container-">
            @yield('content')
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <a href="">EMPRESA</a>
                        <a href="">ONDE COMPRAR</a>
                        <a href="">BLOG</a>
                        <a href="">ÁREA RESTRITA</a>
                    </div>
                    <div class="col-xs-12 col-md-3"></div>
                    <div class="col-xs-12 col-md-3"></div>
                    <div class="col-xs-12 col-md-3"></div>
                </div>
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
