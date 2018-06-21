@extends('structure')

@section('title', 'Acabamentos')

@section('content')

    @component('components/header', ['title' => 'ACABAMENTOS', 'subtitle' => 'Diferenciais Dimare: soluções inteligentes para o viver bem'])
        <li>PRODUTOS</li>
        <li>ACABAMENTOS</li>
    @endcomponent

    <section class="acabamentos">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="acabamentos__content">
                        <p>
                            Fabricados com equipamentos de última geração, matérias-primas de excepcional qualidade e pelas mãos de profissionais altamente qualificados, os móveis planejados Dimare apresentam design de padrão internacional e excelente acabamento. <br><br>
                            Os cortes e esquadrejamentos são realizados de acordo com cada pedido, garantindo assim produtos personalizados e exclusivos. <br><br>
                            Preencha os campos abaixo e faça o download para conhecer todas as nossas opções de acabamentos:
                        </p>
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
                                    <div class="select select--acabamento">
                                        <select class="form-control">
                                            <option>ESTADO</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 form-group">
                                    <div class="select select--acabamento">
                                        <select class="form-control">
                                            <option>CIDADE</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <a href="" class="btn btn-outline">BAIXAR CATÁLOGO DE ACABAMENTOS</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="acabamentos__image">
                        <img src="{{asset('/img/img-acabamentos.png')}}" alt="">
                    </div>

                </div>
            </div>
        </div>

    </section>

@endsection
