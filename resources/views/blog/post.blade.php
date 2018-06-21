@extends('structure')

@section('title', 'Blog post')

@section('content')

    @component('components/header', ['title' => 'BLOG', 'subtitle' => 'Noticias, dicas e tendências do universo moveleiro'])
        <li>BLOG</li>
    @endcomponent

@endsection
