@extends('structure')

@section('title', 'Coleções')

@section('content')
    <section class="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>COLEÇÕES</h2>
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>PRODUTOS</li>
                        <li>COLEÇÕES</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="top__bottom hidden-xs hidden-sm">
            <div class="container">
                <span class="txt">Lorem ipsum dolor sit amet consectetur adipiscing elit</span>
            </div>
            <span class="bg"></span>
        </div>
    </section>
    <section class="collections">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="collections__title">
                        <h2>COLEÇÕES DIMARE</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent elementum justo non orci lobortis accumsan. Vivamus id elementum velit.</p>
                        <span></span>
                    </div>
                    <div class="collections__items">
                        <div class="collections__image">
                            <a href="{{ url ('/produtos/colecoes/laca-slim') }}" class="hover-effect">
                                <img class="img-responsive" src="{{asset('/img/img-colecao1.png')}}" alt="">
                                <span class="bg">
                                    <span class="btn btn-outline">VER MAIS</span>
                                </span>
                            </a>
                            <h2>COLEÇÃO <span>prOVENÇAL</span></h2>
                            <span class="bg-firula hidden-xs"></span>
                        </div>
                        <div class="collections__image">
                            <a href="{{ url ('/produtos/colecoes/laca-slim') }}" class="hover-effect">
                                <img class="img-responsive" src="{{asset('/img/img-colecao2.png')}}" alt="">
                                <span class="bg">
                                    <span class="btn btn-outline">VER MAIS</span>
                                </span>
                            </a>
                            <h2>COLEÇÃO <span>LACA SLIM</span></h2>
                            <span class="bg-firula hidden-xs"></span>
                        </div>
                        <div class="collections__image">
                            <a href="{{ url ('/produtos/colecoes/laca-slim') }}" class="hover-effect">
                                <img class="img-responsive" src="{{asset('/img/img-colecao3.png')}}" alt="">
                                <span class="bg">
                                    <span class="btn btn-outline">VER MAIS</span>
                                </span>
                            </a>
                            <h2>COLEÇÃO <span>03</span></h2>
                            <span class="bg-firula hidden-xs"></span>
                        </div>
                        <div class="collections__image">
                            <a href="{{ url ('/produtos/colecoes/laca-slim') }}" class="hover-effect">
                                <img class="img-responsive" src="{{asset('/img/img-colecao4.png')}}" alt="">
                                <span class="bg">
                                    <span class="btn btn-outline">VER MAIS</span>
                                </span>
                            </a>
                            <h2>COLEÇÃO <span>034</span></h2>
                            <span class="bg-firula hidden-xs"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="catalog">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="catalog__image">
                        <div class="catalog__form">
                            <div class="catalog__title">
                                <h2>CATÁLOGO</h2>
                                <p>Quer conhecer nossa linha completa de móveis planejados? Preencha os campos e faça o download dos nossos catálogos gratuitamente.</p>
                            </div>
                            <form action="">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 form-group">
                                        <input type="text" class="form-control" placeholder="NOME">
                                    </div>
                                    <div class="col-xs-12 col-sm-6 form-group">
                                        <input type="text" class="form-control" placeholder="TELEFONE">
                                    </div>
                                    <div class="col-xs-12 form-group">
                                        <input type="text" class="form-control" placeholder="E-MAIL">
                                    </div>
                                    <div class="col-xs-12 col-sm-6 form-group">
                                        <div class="select">
                                            <select class="form-control">
                                                <option>VOCÊ É?</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 form-group">
                                        <div class="select">
                                            <select class="form-control">
                                                <option>CATÁLOGO</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <a href="" class="btn btn-solid btn-solid--marron">DOWNLOAD</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
