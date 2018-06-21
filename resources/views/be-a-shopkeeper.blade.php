@extends('structure')

@section('title', 'Seja um lojista')

@section('content')

    @component('components/header', ['title' => 'SEJA UM LOJISTA', 'subtitle' => 'Seja um lojista Dimare'])
        <li>SEJA UM LOJISTA</li>
    @endcomponent

    <section class="contact contact--shopkeeper">
        <div class="container-fluid">
            <div class="">
                <div class="col-xs-12 col-md-6 no-padding">
                    <div class="contact__column-align">
                        <p>Já tem ou quer abrir uma loja de móveis planejados? Seja um parceiro Dimare e ofereça a seus clientes produtos de excelência. Preencha o formulário que, em breve, um de nossos representantes entrará em contato para explicar tudo o que você precisa para ser nosso revendedor:</p>
                        <form action="">
                            <div class="row">
                                <div class="col-xs-12 form-group">
                                    <input type="text" class="form-control" placeholder="NOME">
                                </div>
                                <div class="col-xs-12 form-group">
                                    <input type="text" class="form-control" placeholder="E-MAIL">
                                </div>
                                <div class="col-xs-12 form-group">
                                    <input type="text" class="form-control" placeholder="TELEFONE">
                                </div>
                                <div class="col-xs-12 col-sm-6 form-group">
                                    <div class="select select--contato">
                                        <select class="form-control">
                                            <option>ESTADO</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 form-group">
                                    <div class="select select--contato">
                                        <select class="form-control">
                                            <option>CIDADE</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 form-group">
                                    <label class="label-form">Já possui loja própria?</label>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="radio">
                                                <input type="radio" name="radio1" id="radio1" value="option1" checked="">
                                                <label for="radio1">
                                                    Sim
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="radio">
                                                <input type="radio" name="radio1" id="radio2" value="option2">
                                                <label for="radio2">
                                                    Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 form-group">
                                    <div class="select select--contato">
                                        <select class="form-control">
                                            <option>SE SIM, INFORMAR</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 form-group">
                                    <textarea class="form-control" name="name">MENSAGEM</textarea>
                                </div>
                                <div class="col-xs-12">
                                    <a href="" class="btn btn-solid btn-solid--black pull-right">ENVIAR</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 no-padding hidden-xs">
                    <!-- <img class="img-shopkeeper" src="{{ asset('/img/img-shopkeeper.png') }}" alt=""> -->
                </div>
            </div>
        </div>
    </section>
@endsection
