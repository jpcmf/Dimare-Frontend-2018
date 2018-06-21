@extends('structure')

@section('title', 'Blog')

@section('content')

    @component('components/header', ['title' => 'BLOG', 'subtitle' => 'Noticias, dicas e tendências do universo moveleiro'])
        <li>BLOG</li>
    @endcomponent

@endsection
