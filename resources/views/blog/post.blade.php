@extends('structure')

@section('title', 'Blog post')

@section('content')

    @component('components/header', ['title' => 'BLOG', 'subtitle' => 'Noticias, dicas e tendências do universo moveleiro'])
        <li>BLOG</li>
    @endcomponent

    <section class="blog-page blog-page--post">
        <div class="container-fluid equal">
            <div class="col-xs-12 col-md-6 no-padding">
                <div class="blog__column-align">

                    <div class="blog__post">
                        <div class="blog__post-image">
                            <div class="blog__post-bg">
                                <img class="img-responsive" src="{{ asset('/img/img-blog.png') }}" alt="">
                            </div>
                        </div>
                        <h3>Architect builds his own studio at the end of Toronto garden</h3>
                        <span class="category">DESIGN</span>
                        <span class="sep">•</span>
                        <span class="time">25 de dezembro de 2018</span>
                        <div class="blog__post-text">
                            <p>Vestibulum sagittis justo leo, bibendum ullamcorper arcu bibendum vitae. Sed iaculis tortor magna, at tincidunt mi imperdiet in. Cras semper massa blandit quam varius, tincidunt imperdiet tellus accumsan. Integer convallis neque imperdiet orci consequat consequat. The story behind the project Nulla molestie sed lorem non suscipit. Donec at cursus sem.</p>
                            <p>Vestibulum sagittis justo leo, bibendum ullamcorper arcu bibendum vitae. Sed iaculis tortor magna, at tincidunt mi imperdiet in. Cras semper massa blandit quam varius, tincidunt imperdiet tellus accumsan. Integer convallis neque imperdiet orci consequat consequat. The story behind the project Nulla molestie sed lorem non suscipit. Donec at cursus sem.</p>
                        </div>
                        <div class="blog__post-tags">
                            <ul class="list-inline">
                                <li><img src="{{ asset('/img/icon-tag.png') }}" alt=""><span class="tags">TAGS:</span></li>
                                <li><a href>ARQUITETURA</a></li>
                                <li><span class="sep">•</span></li>
                                <li><a href>ARQUITETURA</a></li>
                                <li><span class="sep">•</span></li>
                                <li><a href>ARQUITETURA</a></li>
                            </ul>
                        </div>
                        <div class="blog__post-social">
                            <ul class="list-inline">
                                <li>Compartilhe:</li>
                                <li><a href=""><img src="{{ asset('/img/icon-fb.png')}}" alt=""></a></li>
                                <li><a href=""><img src="{{ asset('/img/icon-g.png')}}" alt=""></a></li>
                                <li><a href=""><img src="{{ asset('/img/icon-t.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            @component('components/blog-column-right', [])
            @endcomponent
        </div>
    </section>

@endsection
