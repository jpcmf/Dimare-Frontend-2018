@extends('structure')

@section('title', 'Acompanhe seu pedido')

@section('content')

    @component('components/header', ['title' => 'ACOMPANHE SEU PEDIDO', 'subtitle' => ''])
        <li>ACOMPANHE SEU PEDIDO</li>
    @endcomponent

    <section class="track">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-5 hidden-xs hidden-sm">
                    <div class="track__image">
                        <img class="img-responsive" src="{{ asset('/img/img-track.png') }}" alt="">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="track__content">
                        <div class="track__title">
                            <h2>ACOMPANHE SEU PEDIDO</h2>
                            <span></span>
                        </div>
                        <p>
                            Ao adquirir produtos Dimare, você pode acompanhar a fabricação e envio do seu pedido na fábrica. <br><br>
                            1. Os pedidos consultados são relativos aos móveis e não incluem itens de terceiros, como mármore/granito, eletros, pias, decoração e outros produtos de terceiros. <br><br>
                            2. O acompanhamento do seu pedido estará disponível após 14 dias da realização da compra ou assinatura do contrato. <br><br>
                            Digite seu CPF ou CNPJ (apenas números sem pontos ou traços) e saiba o status da sua compra:

                        </p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="CPF ou CNPJ" placeholder="CPF ou CNPJ">
                                <span class="input-group-addon">OK</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
