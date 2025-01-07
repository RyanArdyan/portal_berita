@extends('admin.layouts.app')

@section('title', 'Edit Article')

@section('konten')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">let's update our article.</h4>

                            {{-- panggil rute berikut --}}
                            <form action="{{ route('admin.article.update') }}" method="POST" enctype="multipart/form-data" class="forms-sample material-form">
                                {{-- wajib melindungi dari serangan --}}
                                @csrf
                                {{-- panggil rute method PUT --}}
                                @method('PUT')
                                {{-- cetak detail_article, column article_id --}}
                                <input hidden name="article_id" type="text" id="article_id" value="{{ $detail_artikel->article_id }}" readonly>

                                <div class="form-group">
                                    {{-- value old title berarti jika ada error maka tetap diisi lalu diawal diisi dengan value lama --}}
                                    <input name="title" value="{{ old('title', $detail_artikel->title) }}" id="title" type="text" autocomplete="off" required />
                                    <label for="title" class="control-label">title</label><i class="bar"></i>
                                    {{-- jika ada error pada title title maka cetak div --}}
                                    @error('title')
                                        {{-- cetak nilai variable pesan --}}
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="category_id">Kategori</label>
                                    <select name="category_id" class="form-select" id="category_id">
                                        {{-- lakukan pengulangan kepada semua_kategori, $kategori berisi setiap kategori --}}
                                        @foreach ($semua_kategori as $kategori)
                                        {{-- cetak setiap detail_kategori, column category_id --}}
                                            <option value="{{ $kategori->category_id }}" {{ $detail_artikel->category_id == $kategori->category_id ? 'selected' : '' }}>
                                                {{ $kategori->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    {{-- value old content berarti jika ada error maka tetap diisi --}}
                                    <input name="content" value="{{ old('content', $detail_artikel->content) }}" id="content" type="text"
                                        required="required" autocomplete="off" />
                                    <label for="content" class="control-label">content</label><i class="bar"></i>
                                    {{-- jika ada error pada content content maka cetak div --}}
                                    @error('content')
                                        {{-- cetak nilai variable pesan --}}
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="image">Image</label><br>
                                    {{-- cetak asset otomatis memanggil folder public  --}}
                                    <img src="{{ asset('storage/image/' . $detail_artikel->image) }}" class="my-2" width="100" alt="">
                                    <input type="file" name="image" class="form-control" id="image">
                                    {{-- jika ada error pada content content maka cetak div --}}
                                    @error('image')
                                        {{-- cetak nilai variable pesan --}}
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="button-container">
                                    <button type="submit" class="btn btn-primary btn-rounded btn-fw"><span>Submit</span></button>
                                    {{-- cetak panggil rute berikut --}}
                                    <a href="{{ route('admin.article.index') }}" class="btn btn-danger btn-rounded btn-fw">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a
                        href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from
                    BootstrapDash.</span>
                <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights
                    reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
