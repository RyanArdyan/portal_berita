{{-- memperluas parent nya yaitu layouts.app --}}
@extends('layouts.app')

@section('title', 'EDUCASTUDIO')

{{-- kirim kan value @section ke dalam @yield --}}
<!-- News With Sidebar Start -->
@section('konten')
<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-3">
                    <a href=""><img class="img-fluid w-100" src="{{ asset('bootstrap-magazine-template') }}/img/ads-700x70.jpg" alt=""></a>
                </div>

                <div class="row">
                    @foreach ($semua_artikel as $artikel)
                        <div class="col-lg-6">
                            <div class="d-flex mb-3">
                                <img src="/storage/image/{{ $artikel->image }}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">{{ $artikel->kategori->name }}</a>
                                        <span class="px-1">/</span>
                                        <span>{{ $artikel->published_at }}</span>
                                    </div>
                                    <a class="h6 m-0" href="">{{ $artikel->title }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                          <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div> --}}
            </div>

            <div class="col-lg-4 pt-3 pt-lg-0">
                <!-- Social Follow Start -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Follow Us</h3>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #39569E;">
                            <small class="fab fa-facebook-f mr-2"></small><small>12,345 Fans</small>
                        </a>
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #52AAF4;">
                            <small class="fab fa-twitter mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #0185AE;">
                            <small class="fab fa-linkedin-in mr-2"></small><small>12,345 Connects</small>
                        </a>
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
                            <small class="fab fa-instagram mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #DC472E;">
                            <small class="fab fa-youtube mr-2"></small><small>12,345 Subscribers</small>
                        </a>
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #1AB7EA;">
                            <small class="fab fa-vimeo-v mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                </div>
                <!-- Social Follow End -->

                <!-- Ads Start -->
                <div class="mb-3 pb-3">
                    <a href=""><img class="img-fluid" src="{{ asset('bootstrap-magazine-template') }}/img/news-500x280-4.jpg" alt=""></a>
                </div>
                <!-- Ads End -->

                <!-- Popular News Start -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Trending</h3>
                    </div>
                    @foreach ($beberapa_artikel_populer as $artikel_populer)
                        <div class="d-flex mb-3">
                            <img src="{{ asset('storage/image/') }}/{{ $artikel_populer->image }}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
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
                        @foreach ($semua_kategori as $kategori)
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                        @endforeach
                    </div>
                </div>
                <!-- Tags End -->
            </div>
        </div>
    </div>
</div>
</div>
@endsection
<!-- News With Sidebar End -->
