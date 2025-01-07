@extends('admin.layouts.app')

@section('title', 'Add Article')

@section('konten')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            {{-- jika ada session status, tampilkan alert, akan berisi "Berhasil menambah data article" --}}
                            @if (session('status'))
                                <div class="alert alert-success my-3">
                                    {{-- cetak nilai sesi status --}}
                                    {{ session('status') }}
                                </div>
                            @endif

                            <h4 class="card-title">Let's add a article</h4>

                            {{-- panggil rute berikut --}}
                            {{--  enctype="multipart/form-data" harus diaktifkan karena ada input type file --}}
                            <form  action="{{ route('admin.article.store') }}" method="POST" enctype="multipart/form-data" class="forms-sample material-form" >
                                {{-- wajib melindungi dari serangan --}}
                                @csrf
                                {{-- panggil rute method POST --}}
                                @method('POST')
                                <div class="form-group">
                                    {{-- value old title berarti jika ada error maka tetap diisi --}}
                                    <input name="title" value="{{ old('title') }}" id="title" type="text" required="required" autocomplete="off" />
                                    <label for="title" class="control-label">Title</label><i class="bar"></i>
                                    {{-- jika ada error pada title title maka cetak div --}}
                                    @error('title')
                                        {{-- cetak nilai variable pesan --}}
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="category_id">Kategori</label>
                                    <select name="category_id" class="form-select" id="category_id">
                                        @foreach ($semua_kategori as $kategori)
                                            <option value="{{ $kategori->category_id }}">{{ $kategori->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    {{-- value old content berarti jika ada error maka tetap diisi --}}
                                    <input name="content" value="{{ old('content') }}" id="content" type="text" required="required" autocomplete="off" />
                                    <label for="content" class="control-label">content</label><i class="bar"></i>
                                    {{-- jika ada error pada content content maka cetak div --}}
                                    @error('content')
                                        {{-- cetak nilai variable pesan --}}
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control" id="image" required>
                                    {{-- jika ada error pada content content maka cetak div --}}
                                    @error('image')
                                        {{-- cetak nilai variable pesan --}}
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="button-container">
                                    <button type="submit"
                                        class="btn btn-primary btn-rounded btn-fw"><span>Submit</span></button>
                                    {{-- cetak panggil rute berikut --}}
                                    <a href="{{ route('admin.article.index') }}"
                                        class="btn btn-danger btn-rounded btn-fw">Back</a>
                                </div>
                            </form>
                            {{-- cetak panggil rute berikut --}}
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

@push('scripts')

@endpush
