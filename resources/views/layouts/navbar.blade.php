<div class="container-fluid p-0 mb-3">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
        <a href="" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">EDUCA</span>STUDIO</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                @foreach ($semua_kategori as $kategori)
                    <a href="/kategori/{{ $kategori->category_id }}" class="nav-item nav-link">{{ $kategori->name }}</a>
                @endforeach
            </div>
            {{-- panggil rute berikut --}}
            <form action="{{ route('home.search_result') }}" method="GET">
                {{-- laravel mewajibkan keamanan dari serangan csrf --}}
                @csrf
                <div class="input-group ml-auto" style="width: 100%; max-width: 300px;">
                    <input name="search" type="text" class="form-control" placeholder="Cari di educastudio">
                    <div class="input-group-append">
                        <button type="submit" class="input-group-text text-secondary"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </nav>
</div>
