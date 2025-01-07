@extends('admin.layouts.app')

@section('title', 'Add Category')

@section('konten')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            {{-- jika ada session status, tampilkan alert, akan berisi "berhasil menambah data kelas" --}}
                            @if (session('status'))
                                <div class="alert alert-success my-3">
                                    {{-- cetak nilai sesi status --}}
                                    {{ session('status') }}
                                </div>
                            @endif

                            <h4 class="card-title">Let's add a category</h4>

                            {{-- panggil rute berikut --}}
                            <form action="{{ route('admin.category.store') }}" method="POST" class="forms-sample material-form">
                                {{-- wajib melindungi dari serangan --}}
                                @csrf
                                {{-- panggil rute method POST --}}
                                @method('POST')
                                <div class="form-group">
                                    {{-- value old name berarti jika ada error maka tetap diisi --}}
                                    <input name="name" value="{{ old('name') }}" id="name" type="text" required="required" autocomplete="off" />
                                    <label for="name" class="control-label">Name</label><i class="bar"></i>
                                    {{-- jika ada error pada name name maka cetak div --}}
                                    @error('name')
                                        {{-- cetak nilai variable pesan --}}
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="button-container">
                                    <button type="submit" class="btn btn-primary btn-rounded btn-fw"><span>Submit</span></button>
                                    {{-- cetak panggil rute berikut --}}
                                    <a href="{{ route('admin.category.index') }}" class="btn btn-danger btn-rounded btn-fw">Back</a>
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
