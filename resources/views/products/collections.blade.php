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
                <span class="txt">Diferenciais Dimare: soluções inteligentes para o viver bem</span>
            </div>
            <span class="bg"></span>
        </div>
    </section>
@endsection
