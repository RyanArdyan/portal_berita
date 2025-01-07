<div class="container-fluid">
    <div class="row align-items-center bg-light px-lg-5">
        <div class="col-12 col-md-8">
            <div class="d-flex justify-content-between">
                <div class="bg-primary text-white text-center py-2" style="width: 100px;">Trending</div>
                <div class="owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 100px); padding-left: 90px;">
                    @foreach ($beberapa_artikel_populer as $artikel_populer)
                        <div class="text-truncate"><a href="/read/{{ $artikel_populer->title }}" class="text-secondary" href="">{{ $artikel_populer->title }}</a></div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4 text-right d-none d-md-block">

            @if (Auth::user())
                <a href="{{ route('logout') }}">Logout</a>
                </a>
            @else
                <a href="{{ route('login') }}">Yuk Login</a>
            @endif
        </div>
    </div>
    <div class="row align-items-center py-2 px-lg-5">
        <div class="col-lg-4">
            <a href="/" class="navbar-brand d-none d-lg-block">
                <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">EDUCA</span>STUDIO</h1>
            </a>
        </div>
    </div>
</div>
