@extends('structure')

@section('title', 'Ambientes')

@section('content')

    @component('components/header', ['title' => 'COZINHAS', 'subtitle' => 'Para cada ambiente planejado, uma solução Dimare'])
        <li>PRODUTOS</li>
        <li>COZINHAS</li>
    @endcomponent

    <section class="ambients">
        <div class="ambients__filter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="select select--ambients">
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
                            <div class="select select--ambients">
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
                        <div class="ambients__title">
                            <h2>COZINHAS</h2>
                            <p>Com design moderno e arrojado, os móveis planejados para cozinha da Dimare oferecem beleza, elegância e durabilidade para este espaço de convivência.</p>
                            <span></span>
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
        <div class="ambients__collection">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ambients__collection-image">
                            <img class="img-responsive" src="{{asset('/img/img-colecao-dimare.png')}}" alt="">
                            <div class="ambients__collection-title">
                                <h2>COLEÇÕES DIMARE</h2>
                                <a class="btn btn-solid btn-solid--black" href="">VER TODAS</a>
                            </div>
                            <span class="hidden-xs hidden-sm"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @component('components/catalog-form')
    @endcomponent

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
