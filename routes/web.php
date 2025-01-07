<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ArtikelController;

// rute tipe dapatkan, jika user diarahkan ke url awal maka arahkan ke controller berikut dan method berikut, name nya adalah sebagai berikut
Route::get('/', [HomeController::class, 'index'])->name('home.index');
// rute grup tipe perangkat tengah, jika user sudah login maka jalankan fungsi berikut
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category.index');
    // rute tipe dapatkan, jika user diarahkan ke url berikut maka arahkan ke controller dan method berikut, berikut adalah name nya
    Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    // rute tipe kirim, jika user diarahkan ke url berikut maka arahkan ke controller dan method berikut, berikut adalah name nya
    Route::post('/admin/category', [CategoryController::class, 'store'])->name('admin.category.store');
    // rute tipe dapatkan, jika user di url berikut maka panggil controller dan method berikut
    Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    // rute tipe perbarui, jika user diarahkan ke url berikut maka arahkan ke controller dan method berikut
    Route::put('/admin/category/update', [CategoryController::class, 'update'])->name('admin.category.update');
    // rute tipe dapatkan, jika user di url berikut maka panggil controller dan method berikut
    Route::get('/admin/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

    Route::get('/admin/article', [ArtikelController::class, 'index'])->name('admin.article.index');
    // rute tipe dapatkan, jika user diarahkan ke url berikut maka arahkan ke controller dan method berikut, berikut adalah name nya
    Route::get('/admin/article/create', [ArtikelController::class, 'create'])->name('admin.article.create');
    // rute tipe kirim, jika user diarahkan ke url berikut maka arahkan ke controller dan method berikut, berikut adalah name nya
    Route::post('/admin/article', [ArtikelController::class, 'store'])->name('admin.article.store');
    // rute tipe dapatkan, jika user di url berikut maka panggil controller dan method berikut
    Route::get('/admin/article/edit/{id}', [ArtikelController::class, 'edit'])->name('admin.article.edit');
    // rute tipe perbarui, jika user diarahkan ke url berikut maka arahkan ke controller dan method berikut
    Route::put('/admin/article/update', [ArtikelController::class, 'update'])->name('admin.article.update');
    // rute tipe dapatkan, jika user di url berikut maka panggil controller dan method berikut
    Route::get('/admin/article/destroy/{id}', [ArtikelController::class, 'destroy'])->name('admin.article.destroy');
    // rute tipe dapatkan, jika user di url berikut maka kirimkan id lalu panggil controller dan method berikut
    Route::get('/admin/article/comments/{id}', [ArtikelController::class, 'comments'])->name('admin.article.comments');
    // rute tipe dapatkan, jika user di url berikut maka kirimkan id lalu panggil controller dan method berikut
    Route::get('/admin/article/comment/destroy/{id}', [ArtikelController::class, 'destroy_comment'])->name('admin.article.comment.destroy');

    // rute tipe dapatkan, jika user di url berikut maka panggil controller dan method berikut
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// rute tipe dapatkan, jika user di url berikut maka panggil controller dan method berikut
Route::get('/read/{title}', [HomeController::class, 'show'])->name('read.show');
// rute tipe kirim, jika user di url berikut maka panggil controller dan method berikut, name nya adalah sebagai berikut
Route::post('/read/comments/', [HomeController::class, 'save_comment'])->name('read.save_comment');
// rute tipe dapatkan, jika user di url berikut maka panggil controller dan method berikut
Route::get("/search", [HomeController::class, "search_result"])->name("home.search_result");
// rute tipe dapatkan, jika user di url berikut maka tangkap dan kirimkan data lalu panggil controller dan method berikut
Route::get('/kategori/{category_id}', [HomeController::class, 'article_by_category'])->name('read.article_by_category');

Route::middleware(['guest'])->group(function () {
    // rute tipe dapatkan, jika user di url registrasi maka panggil controller dan method berikut
    Route::get('/registrasi', [RegistrasiController::class, 'index'])->name('registrasi.index');
    // rute tipe kirim, jika user diarahkan ke url berikut maka arahkan ke controller dan method berikut
    Route::post('/registrasi', [RegistrasiController::class, 'store'])->name('registrasi.store');
    // rute tipe dapatkan, jika user di url login maka panggil controller dan method berikut
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    // rute tipe kirim, jika user diarahkan ke url berikut maka arahkan ke controller dan method berikut
    Route::post('/login', [AuthController::class, 'store'])->name('login.store');
});
