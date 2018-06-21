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
                                <div class="select select--contato">
                                    <select class="form-control">
                                        <option>DO QUE VOCÊ PRECISA?</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 form-group">
                        <textarea class="form-control" name="name">MENSAGEM</textarea>
                    </div>
                    <div class="col-xs-12">
                        <a href="" class="btn btn-solid btn-solid--black pull-right">ENVIAR</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="contact__address">
        <div class="container-fluid">
            <div class="col-xs-12 col-md-6 no-padding">
                <div class="contact__content">
                    <div class="contact__info">
                        <span class="title">ENDEREÇO:</span>
                        <p>
                            Av. Duque de Caxias, 360 <br>
                            Bairro Alvorada <br>
                            CEP 85601-190 <br>
                            Francisco Beltrão-PR
                        </p>
                    </div>
                    <div class="contact__info">
                        <span class="title">E-MAIL:</span>
                        <p>
                            <a href="mailto:tiago@dimare.com.br">tiago@dimare.com.br</a>
                        </p>
                    </div>
                    <div class="contact__info">
                        <span class="title">TELEFONE:</span>
                        <p>(00) 1111-2222</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 no-padding">
                <!-- <img src="{{ asset('/img/img-map.png') }}" alt=""> -->
                <div class="embed-responsive embed-responsive-100x400px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4585.991273842979!2d-53.06141174876286!3d-26.100499266024382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f0733b0054baab%3A0x46eb72d1558af149!2sAv.+Duque+de+Caxias%2C+360+-+Marrecas%2C+Francisco+Beltr%C3%A3o+-+PR!5e1!3m2!1spt-BR!2sbr!4v1529545537573" width="" height="" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </section>
@endsection
