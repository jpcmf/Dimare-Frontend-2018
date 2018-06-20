<section class="top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>{{ $title }}</h2>
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    {{ $slot }}
                </ul>
            </div>
        </div>
    </div>
    @if(!empty($subtitle))
    <div class="top__bottom hidden-xs hidden-sm">
        <div class="container">
            <span class="txt">{{ $subtitle }}</span>
        </div>
        <span class="bg"></span>
    </div>
    @endif
</section>
