@extends('structure')

@section('title', 'Fale conosco')

@section('content')

    @component('components/header', ['title' => 'FALE CONOSCO', 'subtitle' => 'Fale com a Dimare'])
        <li>FALE CONOSCO</li>
    @endcomponent

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>Para entrar em contato conosco, preencha o formulário abaixo com os seus dados:</p>
                </div>
                <form action="">
                    <div class="col-xs-12 col-md-6">
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
                                        <option>ESTADO</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 form-group">
                                <div class="select">
                                    <select class="form-control">
                                        <option>CIDADE</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
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

    </section>
@endsection
