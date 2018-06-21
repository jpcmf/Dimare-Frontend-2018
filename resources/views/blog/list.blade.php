@extends('structure')

@section('title', 'Blog')

@section('content')

    @component('components/header', ['title' => 'BLOG', 'subtitle' => 'Noticias, dicas e tendências do universo moveleiro'])
        <li>BLOG</li>
    @endcomponent

    <section class="blog-page">
        <div class="container-fluid equal">
            <div class="col-xs-12 col-md-6 no-padding">
                <div class="blog__column-align">

                    @for ($i = 0; $i < 2; $i++)
                    <div class="blog__post">
                        <h3>Architect builds his own studio at the end of Toronto garden</h3>
                        <span class="category">DESIGN</span>
                        <span class="sep">•</span>
                        <span class="time">25 de dezembro de 2018</span>
                        <span class="sep">•</span>
                        <span class="comments">4 COMentários</span>
                        <div class="blog__post-image">
                            <div class="blog__post-bg">
                                <img class="img-responsive" src="{{ asset('/img/img-blog.png') }}" alt="">
                            </div>
                        </div>
                        <div class="blog__post-text">
                            <p>Vestibulum sagittis justo leo, bibendum ullamcorper arcu bibendum vitae. Sed iaculis tortor magna, at tincidunt mi imperdiet in. Cras semper massa blandit quam varius, tincidunt imperdiet tellus accumsan. Integer convallis neque imperdiet orci consequat consequat. The story behind the project Nulla molestie sed lorem non suscipit. Donec at cursus sem.</p>
                        </div>
                        <a href="{{ url('/blog/teste') }}" class="btn btn-outline">
                            LER MAIS
                        </a>
                    </div>
                    @endfor

                </div>
            </div>
            @component('components/blog-column-right', [])
            @endcomponent
        </div>
    </section>

@endsection
