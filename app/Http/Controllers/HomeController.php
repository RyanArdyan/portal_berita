<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // menampilkan halaman
    public function index()
    {
        // ambil semua kategori\
        $semua_kategori = Category::select('category_id', 'name')->limit(4)->get();

        // $artikel_populer = Artikel::

        // menggunakan with('kategori') agar mencegah masalah kueri n+1
        // berisi ambil artikel dimana column category_id sama dengan 4
        $beberapa_artikel_kategori_hiburan = Artikel::with('kategori')->select('article_id', 'category_id', 'title', 'image', 'published_at')->where('category_id', 4)
            // dipesan oleh column views dari terbesar ke terkecil
            ->orderBy('views', 'desc')
            // hanya ambil dua
            ->take(2)
            // dapatkan datanya
            ->get();

        // berisi ambil artikel dimana column category_id sama dengan 2
        $beberapa_artikel_kategori_olahraga = Artikel::with('kategori')->select('article_id', 'category_id', 'title', 'image', 'published_at')->where('category_id', 2)
            // dipesan oleh column views dari terbesar ke terkecil
            ->orderBy('views', 'desc')
            // hanya ambil dua
            ->take(2)
            // dapatkan datanya
            ->get();

        // berisi ambil artikel dimana column category_id sama dengan 1
        $beberapa_artikel_kategori_politik = Artikel::with('kategori')->select('article_id', 'category_id', 'title', 'image', 'published_at')->where('category_id', 1)
            // dipesan oleh column views dari terbesar ke terkecil
            ->orderBy('views', 'desc')
            // hanya ambil dua
            ->take(2)
            // dapatkan datanya
            ->get();

        // berisi ambil artikel dimana column category_id sama dengan 1
        $beberapa_artikel_kategori_teknologi = Artikel::with('kategori')->select('article_id', 'category_id', 'title', 'image', 'published_at')->where('category_id', 3)
            // dipesan oleh column views dari terbesar ke terkecil
            ->orderBy('views', 'desc')
            // hanya ambil dua
            ->take(2)
            // dapatkan datanya
            ->get();

        // Mengambil artikel dengan jumlah views terbanyak
        // berisi beberapa artikel, lalu pilih value dari column-column sebagai berikut
        $beberapa_artikel_populer = Artikel::with('kategori')->select('article_id', 'category_id', 'title', 'image', 'views', 'published_at', 'content') // Menghitung jumlah komentar
            ->orderBy('views', 'desc') // Mengurutkan berdasarkan views, jadi dari tinggi ke rendah
            ->take(5) // Ambil 5 artikel terpopuler
            ->get(); // dapatkan data nya\

        // Mengambil artikel terbaru
        // berisi beberapa artikel, lalu pilih value dari column-column sebagai berikut
        $beberapa_artikel_terbaru = Artikel::with('kategori')->select('article_id', 'category_id', 'title', 'image', 'views', 'published_at') // Menghitung jumlah komentar
            ->orderBy('published_at', 'desc') // Mengurutkan berdasarkan tanggal posting, jadi dari tinggi ke rendah
            ->take(8) // Ambil 5 artikel terbaru
            ->get(); // dapatkan data nya\


        // kembalikkan ke tampilan home.index
        return view('home.index', [
            // kirimkan index yang isi nya value variable berikut
            'semua_kategori' => $semua_kategori,
            'beberapa_artikel_kategori_hiburan' => $beberapa_artikel_kategori_hiburan,
            'beberapa_artikel_kategori_olahraga' => $beberapa_artikel_kategori_olahraga,
            'beberapa_artikel_kategori_politik' => $beberapa_artikel_kategori_politik,
            'beberapa_artikel_kategori_teknologi' => $beberapa_artikel_kategori_teknologi,
            'beberapa_artikel_populer' => $beberapa_artikel_populer,
            'beberapa_artikel_terbaru' => $beberapa_artikel_terbaru,
        ]);
    }

    // paramter title akan menangkap title yang dikirim oleh url
    public function show($title)
    {
        // berisi panggil model artikel dan ambil kategori nya lalu pilih value dari column-column berikut yang dimana column title sama dengan value parameter title, ambil data baris pertama
        $detail_artikel = Artikel::with('kategori')->select('article_id', 'category_id', 'title', 'content', 'image', 'published_at', 'views')->where('title', $title)->first();

        // dd($detail_artikel);

        // panggil detail_artikel lalu tambah value pada column views di table artikel
        $detail_artikel->views = $detail_artikel->views + 1;
        $detail_artikel->save();

        // berisi ambil komentar dan ambil yang menulis komentar nya lalu dimana column article_id sama dengan $detail_artikel->article_id
        $semua_komentar_artikel = Comment::with('user')->select('comment_id', 'user_id', 'comment', 'created_at')->where('article_id', $detail_artikel->article_id)->get();

        // ambil semua kategori\
        $semua_kategori = Category::select('category_id', 'name')->limit(4)->get();


        // Mengambil artikel dengan jumlah views terbanyak
        // berisi beberapa artikel, lalu pilih value dari column-column sebagai berikut
        $beberapa_artikel_populer = Artikel::select('article_id', 'category_id', 'title', 'image', 'views', 'published_at', 'content') // Menghitung jumlah komentar
            ->orderBy('views', 'desc') // Mengurutkan berdasarkan views, jadi dari tinggi ke rendah
            ->take(5) // Ambil 5 artikel terpopuler
            ->get(); // dapatkan data nya

        // kembalikkan ke tampilan berikut lalu kirimkan data berupa array
        return view('home.read', [
            'detail_artikel' => $detail_artikel,
            'beberapa_artikel_populer' => $beberapa_artikel_populer,
            'semua_komentar_artikel' => $semua_komentar_artikel,
            'semua_kategori' => $semua_kategori
        ]);
    }

    // $request akan menangkap semua data kiriman formulir
    public function save_comment(Request $request)
    {
        // jika user belum login
        if (!Auth::check()) {
            // kembalikan ke halaman login
            return redirect()->route('login')->with('status', 'Anda harus login terlebih dahulu untuk bisa mengirim komentar');
        }

        // tangkap datanya
        // berisi tangkap nilai dari input name="article_id"
        $article_id = $request->article_id;
        $comment = $request->comment;

        // $permintaan->validasi([])
        $request->validate([
            // input comment harus mengikuti aturan berikut
            'comment' => 'required|string|max:1000',
        ]);

        // komentar buat
        Comment::create([
            // column article_id berisi value dari variable berikut
            'article_id' => $article_id,
            // ambil detail user yang sedang login lalu ambil value column user_id
            'user_id' => Auth::user()->user_id,
            'comment' => $comment,
        ]);

        // kembali alihkan ke halaman sebelumnya dengan mengirimkan data berupa sesi yang di flash
        return redirect()->back()->with('status', 'Successfully added your cool comment.');
    }

    // parameter $request akan menangkap semua data kiriman formulir
    public function search_result(Request $request)
    {
        // berisi ambil artikel dimana column title sama dengan $request->search
        $semua_artikel = Artikel::with('kategori')->select('article_id', 'category_id', 'title', 'image', 'published_at')
            ->where('title', 'like', '%' . $request->search . '%')
            ->orderBy('views', 'desc')->get();

        // Mengambil artikel dengan jumlah views terbanyak
        // berisi beberapa artikel, lalu pilih value dari column-column sebagai berikut
        $beberapa_artikel_populer = Artikel::with('kategori')->select('article_id', 'category_id', 'title', 'image', 'published_at') // Menghitung jumlah komentar
            ->orderBy('views', 'desc') // Mengurutkan berdasarkan views, jadi dari tinggi ke rendah
            ->take(5) // Ambil 5 artikel terpopuler
            ->get(); // dapatkan data nya

        // ambil semua kategori\
        $semua_kategori = Category::select('category_id', 'name')->limit(4)->get();

        // kembalikkan ke tampilan berikut
        return view('home.search_result', [
            // index semua_artikel berisi value variable berikut
            'semua_artikel' => $semua_artikel,
            'beberapa_artikel_populer' => $beberapa_artikel_populer,
            'semua_kategori' => $semua_kategori
        ]);
    }

    public function article_by_category($category_id)
    {
        // Mengambil artikel dengan jumlah views terbanyak
        // berisi beberapa artikel lalu ambil kategori nya lalu pilih value dari column-column sebagai berikut
        $beberapa_artikel_populer = Artikel::with('kategori')->select('article_id', 'category_id', 'title', 'image', 'published_at') // Menghitung jumlah komentar
            ->orderBy('views', 'desc') // Mengurutkan berdasarkan views, jadi dari tinggi ke rendah
            ->take(5) // Ambil 5 artikel terpopuler
            ->get(); // dapatkan data nya

        // panggil semua artikel yang value column category_id sama dengan $category_id
        // berisi ambil artikel lalu cegah kueri n+1 atau sekalian ambil kategori lalu ambil column2x berikut, dimana value column category_id sama dengan parameter $category_id, dapatkan datanya
        $beberapa_artikel_sesuai_kategori = Artikel::with('kategori')->select('article_id', 'category_id', 'title', 'content', 'image', 'published_at')->where('category_id', $category_id)->get();

        // berisi panggil model Categori yang dimana value column category_id sama dengan parameter $category_id lalu dapatkan data baris pertama
        $nama_kategori = Category::where('category_id', $category_id)->first()->name;

        // ambil semua kategori\
        $semua_kategori = Category::select('category_id', 'name')->limit(4)->get();

        // kembalikkan ke tampilan berikut
        return view('home.article_by_category', [
            // index beberapa_artikel_populer berisi value variable berikut
            'beberapa_artikel_populer' => $beberapa_artikel_populer,
            'beberapa_artikel_sesuai_kategori' => $beberapa_artikel_sesuai_kategori,
            'nama_kategori' => $nama_kategori,
            'semua_kategori' => $semua_kategori
        ]);
    }
}
