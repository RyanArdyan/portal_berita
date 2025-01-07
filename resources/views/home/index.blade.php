{{-- memperluas parent nya yaitu layouts.app --}}
@extends('layouts.app')

{{-- kirimkan value @section ke dalam @yield --}}
@section('title', 'Home')

@section('konten')
    <!-- Main News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
                        @foreach ($beberapa_artikel_populer as $artikel_populer)
                            <div class="position-relative overflow-hidden" style="height: 435px;">
                                <img class="img-fluid h-100" src="/storage/image/{{ $artikel_populer->image }}"
                                    style="object-fit: cover;">
                                <div class="overlay">
                                    <div class="mb-1">
                                        <a class="text-white" href="">{{ $artikel_populer->kategori->name }}</a>
                                        <span class="px-2 text-white">/</span>
                                        <a class="text-white" href="">January 01, 2045</a>
                                    </div>
                                    <a class="h2 m-0 text-white font-weight-bold"
                                        href="/read/{{ $artikel_populer->title }}">{{ $artikel_populer->title }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Filter Kategori</h3>
                        <a class="text-secondary font-weight-medium text-decoration-none" href="">Lihat Semua</a>
                    </div>
                    {{-- lakukan pengulangan, setiap kategori akan disimpan ke dalam $kategori --}}
                    @foreach ($semua_kategori as $kategori)
                        <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                            <img class="img-fluid w-100 h-100"
                                src="{{ asset('storage/image/kategori/hiburan.jpg') }}"
                                style="object-fit: cover;">
                            <a href="/kategori/{{ $kategori->category_id }}"
                                class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                                {{ $kategori->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                <h3 class="m-0">Berita Terbaru</h3>
                <a class="text-secondary font-weight-medium text-decoration-none" href="">Lihat Semua</a>
            </div>
            <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
                @foreach ($beberapa_artikel_terbaru as $artikel_terbaru)
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid w-100 h-100" src="/storage/image/{{ $artikel_terbaru->image }}"
                            style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-1" style="font-size: 13px;">
                                <a class="text-white" href="">{{ $artikel_terbaru->kategori->name }}</a>
                                <span class="px-1 text-white">/</span>
                                <a class="text-white" href="">{{ $artikel_terbaru->published_at }}</a>
                            </div>
                            <a class="h4 m-0 text-white"
                                href="/read/{{ $artikel_terbaru->title }}">{{ $artikel_terbaru->title }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <!-- Featured News Slider End -->


    <!-- Category News Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Hiburan</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        @foreach ($beberapa_artikel_kategori_hiburan as $artikel_kategori_hiburan)
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="/storage/image/{{ $artikel_kategori_hiburan->image }}"
                                    style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 13px;">
                                        <a href="">{{ $artikel_kategori_hiburan->kategori->name }}</a>
                                        <span class="px-1">/</span>
                                        <span>{{ $artikel_kategori_hiburan->published_at }}</span>
                                    </div>
                                    <a class="h4 m-0"
                                        href="/read/{{ $artikel_kategori_hiburan->title }}">{{ $artikel_kategori_hiburan->title }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Olahraga</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        @foreach ($beberapa_artikel_kategori_olahraga as $artikel_kategori_olahraga)
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="/storage/image/{{ $artikel_kategori_olahraga->image }}"
                                    style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 13px;">
                                        <a href="">{{ $artikel_kategori_olahraga->kategori->name }}</a>
                                        <span class="px-1">/</span>
                                        <span>{{ $artikel_kategori_olahraga->created_at }}</span>
                                    </div>
                                    <a class="h4 m-0"
                                        href="/read/{{ $artikel_kategori_olahraga->title }}">{{ $artikel_kategori_olahraga->title }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Category News Slider End -->


    <!-- Category News Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Politik</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        @foreach ($beberapa_artikel_kategori_politik as $artikel_kategori_politik)
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="/storage/image/{{ $artikel_kategori_politik->image }}"
                                    style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 13px;">
                                        <a href="">{{ $artikel_kategori_politik->kategori->name }}</a>
                                        <span class="px-1">/</span>
                                        <span>{{ $artikel_kategori_politik->created_at }}</span>
                                    </div>
                                    <a class="h4 m-0"
                                        href="/read/{{ $artikel_kategori_politik->title }}">{{ $artikel_kategori_politik->title }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Teknologi</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        @foreach ($beberapa_artikel_kategori_teknologi as $artikel_kategori_teknologi)
                            <div class="position-relative">
                                <img class="img-fluid w-100"
                                    src="/storage/image/{{ $artikel_kategori_teknologi->image }}"
                                    style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 13px;">
                                        <a href="">{{ $artikel_kategori_teknologi->kategori->name }}</a>
                                        <span class="px-1">/</span>
                                        <span>{{ $artikel_kategori_teknologi->published_at }}</span>
                                    </div>
                                    <a class="h4 m-0" href="">{{ $artikel_kategori_teknologi->title }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Category News Slider End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Populer</h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">Lihat
                                    Semua</a>
                            </div>
                        </div>
                        @foreach ($beberapa_artikel_populer->take(2) as $artikel_populer)
                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                    <img class="img-fluid w-100" src="/storage/image/{{ $artikel_populer->image }}"
                                        style="object-fit: cover;">
                                    <div class="overlay position-relative bg-light">
                                        <div class="mb-2" style="font-size: 14px;">
                                            <a href="">{{ $artikel_populer->kategori->name }}</a>
                                            <span class="px-1">/</span>
                                            <span>{{ $artikel_populer->published_at }}</span>
                                        </div>
                                        <a class="h4" href="">{{ $artikel_populer->title }}</a>
                                        <p class="m-0">
                                        <p>{{ \Illuminate\Support\Str::limit($artikel_populer->content, 108) }}</p>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <img src="{{ asset('bootstrap-magazine-template') }}/img/news-100x100-1.jpg"
                                        style="width: 100px; height: 100px; object-fit: cover;">
                                    <div class="w-100 d-flex flex-column justify-content-center bg-light px-3"
                                        style="height: 100px;">
                                        <div class="mb-1" style="font-size: 13px;">
                                            <a href="">Technology</a>
                                            <span class="px-1">/</span>
                                            <span>January 01, 2045</span>
                                        </div>
                                        <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <img src="{{ asset('bootstrap-magazine-template') }}/img/news-100x100-2.jpg"
                                        style="width: 100px; height: 100px; object-fit: cover;">
                                    <div class="w-100 d-flex flex-column justify-content-center bg-light px-3"
                                        style="height: 100px;">
                                        <div class="mb-1" style="font-size: 13px;">
                                            <a href="">Technology</a>
                                            <span class="px-1">/</span>
                                            <span>January 01, 2045</span>
                                        </div>
                                        <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mb-3 pb-3">
                        <a href=""><img class="img-fluid w-100"
                                src="{{ asset('bootstrap-magazine-template') }}/img/ads-700x70.jpg" alt=""></a>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Latest</h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">Lihat
                                    Semua</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100"
                                    src="{{ asset('bootstrap-magazine-template') }}/img/news-500x280-5.jpg"
                                    style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Technology</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum,
                                        clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{ asset('bootstrap-magazine-template') }}/img/news-100x100-5.jpg"
                                    style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3"
                                    style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Technology</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{ asset('bootstrap-magazine-template') }}/img/news-100x100-1.jpg"
                                    style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3"
                                    style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Technology</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100"
                                    src="{{ asset('bootstrap-magazine-template') }}/img/news-500x280-6.jpg"
                                    style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Technology</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum,
                                        clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{ asset('bootstrap-magazine-template') }}/img/news-100x100-2.jpg"
                                    style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3"
                                    style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Technology</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{ asset('bootstrap-magazine-template') }}/img/news-100x100-3.jpg"
                                    style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3"
                                    style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Technology</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-3 pt-lg-0">
                    <!-- Social Follow Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Follow Us</h3>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2"
                                style="background: #39569E;">
                                <small class="fab fa-facebook-f mr-2"></small><small>12,345 Fans</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2"
                                style="background: #52AAF4;">
                                <small class="fab fa-twitter mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2"
                                style="background: #0185AE;">
                                <small class="fab fa-linkedin-in mr-2"></small><small>12,345 Connects</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2"
                                style="background: #C8359D;">
                                <small class="fab fa-instagram mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2"
                                style="background: #DC472E;">
                                <small class="fab fa-youtube mr-2"></small><small>12,345 Subscribers</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2"
                                style="background: #1AB7EA;">
                                <small class="fab fa-vimeo-v mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Ads Start -->
                    <div class="mb-3 pb-3">
                        <a href=""><img class="img-fluid"
                                src="{{ asset('bootstrap-magazine-template') }}/img/news-500x280-4.jpg"
                                alt=""></a>
                    </div>
                    <!-- Ads End -->

                    <!-- Popular News Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Trending</h3>
                        </div>
                        @foreach ($beberapa_artikel_populer as $artikel_populer)
                            <div class="d-flex mb-3">
                                <img src="/storage/image/{{ $artikel_populer->image }}"
                                    style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3"
                                    style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">{{ $artikel_populer->kategori->name }}</a>
                                        <span class="px-1">/</span>
                                        <span>{{ $artikel_populer->published_at }}</span>
                                    </div>
                                    <a class="h6 m-0" href="">{{ $artikel_populer->title }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Popular News End -->

                    <!-- Tags Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Tags</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Politik</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Olahraga</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Teknologi</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Hiburan</a>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- News With Sidebar End -->
@endsection
