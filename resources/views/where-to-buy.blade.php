@extends('structure')

@section('title', 'Onde comprar')

@section('content')

    @component('components/header', ['title' => 'ONDE COMPRAR', 'subtitle' => 'Encontre a loja Dimare mais próxima de você'])
        <li>ONDE COMPRAR</li>
    @endcomponent

    <section class="where-to-buy">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <div class="where-to-buy__search">
                        <p>A Dimare conta com mais de 400 lojas espalhadas por todo o Brasil.<br>Selecione seu estado e cidade para encontrar a mais próxima de você!</p>
                        <form action="">
                            <div class="row">
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
                        </form>
                        <div class="where-to-buy__result">
                            <span class="name">ECOLÓGICA SHOP</span>
                            <span class="phone"><strong>(43) 3327-6288</strong></span>
                            <span class="address">Rua Marechal Hermes da Fonseca, 258 | Jardim Hedy</span>
                            <span class="email"><a href="mailto:contato@ecologicashop.com.br">contato@ecologicashop.com.br</a></span>
                            <span class="firula"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <div class="where-to-buy__title">
                        <h2>Fale com a fábrica</h2>
                        <p>Tem alguma dúvida? A Dimare pode esclarecer! Escreva para nós:</p>
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
        </div>
    </section>

@endsection
