@extends('structure')

@section('title', 'Produto - Detalhes')

@section('content')
    <section class="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>COLEÇÃO LACA SLIM</h2>
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>PRODUTOS</li>
                        <li>COLEÇÕES</li>
                        <li>COLEÇÕES DIMARE</li>
                        <li>COLEÇÃO LACA SLIM</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="top__bottom hidden-xs hidden-sm">
            <div class="container">
                <span class="txt">Laca Slim: qualidade e tecnologia europeia</span>
            </div>
            <span class="bg"></span>
        </div>
    </section>
    <section class="ambients">
        <div class="ambients__filter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="select">
                                <select class="form-control">
                                    <option>COZINHAS</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="select">
                                <select class="form-control">
                                    <option>TODAS AS COLEÇÕES</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ambients__content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ambients__title ambients__title--collection">
                            <p>
                                A linha Laca Slim da Dimare é mais uma inovação que oferece sofisticação e versatilidade para ambientes planejados. <br><br>
                                Produzida com tecnologia e qualidade europeia, apresenta excelente acabamento, além de padrões de cores modernos e vibrantes, permitindo combinações com todos os demais padrões da linha Dimare. <br><br>
                                Saiba mais sobre essa matéria-prima exclusiva:
                            </p>
                        </div>
                        <div class="ambients__player">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/9B6G_ygeAp0" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="ambients__gallery">
                            <a href="#" class="pop hover-effect">
                                <img src="{{asset('/img/img-cozinha1.png')}}">
                                <span class="bg"></span>
                            </a>
                            <a href="#" class="pop hover-effect">
                                <img src="{{asset('/img/img-cozinha2.png')}}">
                                <span class="bg"></span>
                            </a>
                            <a href="#" class="pop hover-effect">
                                <img src="{{asset('/img/img-cozinha3.png')}}">
                                <span class="bg"></span>
                            </a>
                            <a href="#" class="pop hover-effect">
                                <img src="{{asset('/img/img-cozinha4.png')}}">
                                <span class="bg"></span>
                            </a>
                            <a href="#" class="pop hover-effect">
                                <img src="{{asset('/img/img-cozinha5.png')}}">
                                <span class="bg"></span>
                            </a>
                            <a href="#" class="pop hover-effect">
                                <img src="{{asset('/img/img-cozinha6.png')}}">
                                <span class="bg"></span>
                            </a>
                            <a href="#" class="pop hover-effect">
                                <img src="{{asset('/img/img-cozinha7.png')}}">
                                <span class="bg"></span>
                            </a>
                            <a href="#" class="pop hover-effect">
                                <img src="{{asset('/img/img-cozinha8.png')}}">
                                <span class="bg"></span>
                            </a>
                            <a href="#" class="pop hover-effect">
                                <img src="{{asset('/img/img-cozinha9.png')}}">
                                <span class="bg"></span>
                            </a>
                        </div>
                        <div class="ambients__buttons text-center">
                            <a href="" class="btn btn-outline">Ver mais</a>
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

    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" class="imagepreview" style="width: 100%;" >
                </div>
            </div>
        </div>
    </div>
@endsection
