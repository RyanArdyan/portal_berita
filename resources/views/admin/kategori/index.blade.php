@extends('admin.layouts.app')

@section('title', 'Category')

@section('konten')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            {{-- cetak panggil rute berikut --}}
                            <a href="{{ route('admin.category.create') }}" class="btn btn-primary btn-rounded btn-fw mb-3">Add New Category</a>

                            {{-- jika ada session status, tampilkan alert, akan berisi dua hal yaitu "berhasil memperbarui" atau "Berhasil Menghapus" --}}
                            @if (session('status'))
                                <div class="alert alert-success my-3">
                                    {{-- cetak nilai sesi status --}}
                                    {{ session('status') }}
                                </div>
                            @endif

                            <h4 class="card-title">All Categories</h4>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Feature</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($semua_kategori as $kategori)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $kategori->name }}</td>
                                                <td>
                                                    {{-- cetak rute berikut, lalu kirimkan parameter id --}}
                                                    <a href="{{ route('admin.category.edit', $kategori->category_id) }}" class="text-warning">Edit</a> |
                                                    <a href="{{ route('admin.category.destroy', $kategori->category_id) }}" class="text-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
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
