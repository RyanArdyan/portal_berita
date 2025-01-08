{{-- memperluas parent nya yaitu layouts.app --}}
@extends('layouts.app')

{{-- kirimkan value @section ke dalam @yield --}}
@section('title', 'Home')

@section('konten')
    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- jika ada session status, tampilkan alert yang berisi "Berhasil menambah komentar" --}}
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{-- cetak nilai sesi status --}}
                        {{ session('status') }}
                    </div>
                @endif
                </div>

                <div class="col-lg-8">
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" src="/storage/image/{{ $detail_artikel->image }}" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-3">
                                {{-- cetak value dari detail_kategori yang berelasi dengan table kategori lalu value column name nya --}}
                                <a href="">{{ $detail_artikel->kategori->name }}</a>
                                <span class="px-1">/</span>
                                {{-- cetak value dari detail_artikel, column published_at --}}
                                <span>{{ $detail_artikel->published_at }}</span>
                            </div>
                            <div>
                                <h3 class="mb-3">{{ $detail_artikel->title }}</h3>
                                <p>{{ $detail_artikel->content }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- News Detail End -->

                    <!-- Comment List Start -->
                    <div class="bg-light mb-3" style="padding: 30px;">
                        {{-- cetak jumlah komentar dari variable $semua_komentar_artikel --}}
                        <h3 class="mb-4">{{ $semua_komentar_artikel->count() }} Komentar</h3>
                        {{-- lakukan pengulangan kepada semua_komentar_artikel, setiap komentar akan disimpan ke dalam $komentar_artikel --}}
                        @foreach ($semua_komentar_artikel as $komentar_artikel)
                            <div class="media mb-4">
                                <div class="media-body">
                                    <h6><a href="">{{ $komentar_artikel->user->name }}</a> <small><i>{{ $komentar_artikel->created_at }}</i></small></h6>
                                    <p>{{ $komentar_artikel->comment }}</p>
                                    {{-- <button class="btn btn-sm btn-outline-secondary">Reply</button> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="bg-light mb-3" style="padding: 30px;">
                        <h3 class="mb-4">Tinggalkan komentar keren anda disini</h3>
                        {{-- panggil rute berikut yang bertipe POST --}}
                        <form action="{{ route('read.save_comment') }}" method="POST">
                            {{-- laravel mewajibkan keamanan dari serangan csrf --}}
                            @csrf
                            <input hidden type="text" name="article_id" value="{{ $detail_artikel->article_id }}">
                            <div class="form-group">
                                <label for="comment">Komentar keren anda :</label>
                                <textarea name="comment" id="comment" cols="30" rows="5" class="form-control"></textarea>
                                {{-- jika ada error pada content content maka cetak div --}}
                                @error('content')
                                    {{-- cetak nilai variable pesan --}}
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary font-weight-semi-bold py-2 px-3">Kirim Komentar</button>
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
                </div>

                <div class="col-lg-4 pt-3 pt-lg-0">
                    <!-- Social Follow Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Ikuti Kami</h3>
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
                        <a href=""><img class="img-fluid" src="img/news-500x280-4.jpg" alt=""></a>
                    </div>
                    <!-- Ads End -->

                    <!-- Popular News Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Populer</h3>
                        </div>
                        @foreach ($beberapa_artikel_populer as $artikel_populer)
                            <div class="d-flex mb-3">
                                <img src="/storage/image/{{ $artikel_populer->image }}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3"
                                    style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">{{ $detail_artikel->kategori->category_id }}</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
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
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
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
