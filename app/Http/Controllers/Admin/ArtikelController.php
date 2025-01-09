<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    // menampilkan halaman
    public function index()
    {
        // Mengambil semua artikel dan mengurutkannya berdasarkan created_at secara descending
        $semua_artikel = Artikel::orderBy('created_at', 'desc')->get();

        // kembalikkan ke tampilan berikut lalu kirimkan data berupa array
        return view('admin.artikel.index',  ['semua_artikel' => $semua_artikel]);
    }

    // menampilkan halaman tambah
    public function create()
    {
        // Mengambil semua kategori dan mengurutkannya berdasarkan created_at secara descending
        $semua_kategori = Category::orderBy('created_at', 'desc')->get();
        // dd($semua_kategori);

        // kembalikkan ke tampilan berikut lalu kirimkan data berupa array
        return view('admin.artikel.create', ['semua_kategori' => $semua_kategori]);
    }

    // $request berisi menyimpan data formulir
    public function store(Request $request)
    {
        // dd($request->all());

        // tangkap datanya
        $category_id = $request->category_id;
        $title = $request->title;
        $content = $request->content;
        $image = $request->file('image');

        // dd($request->file('image'));

        // berisi $permintaan lakukan validasi
        $divalidasi = $request->validate([
            // name title harus mengikuti aturan berikut
            'title' => ['required', 'max:255', 'unique:articles', ],
            'content' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        // Mengubah nama file menjadi timestamp dengan ekstensi yang sesuai
        $filename = time() . '.' . $image->getClientOriginalExtension();

        // Simpan file dengan nama baru
        $path = $image->storeAs('image', $filename, 'public');

        // simpan datanya ke model Artikel
        $article = Artikel::create([
            // column title berisi nilai variable title
            'title' => $title,
            'category_id' => $category_id,
            'content' => $content,
            'image' => $filename,
            'published_at' => now(),
            'views' => 1,
        ]);
        // kembali lalu alihkan ke rute berikut, lalu kirimkan data success
        return redirect()->route('admin.article.create')->with('status', 'Successfully added a new article.');
    }

    // parameter id menangkap id yang dikirimkan rute
    public function edit($id)
    {
        // ambil semua kategori berdasarkan name secara ascending atau a ke z
        $semua_kategori = Category::orderBy('name', 'asc')->get();

        // tangkap detail artikel
        $detail_artikel = Artikel::find($id);

        // // kembalikkan ke tampilan artikel.edit lalu kirimkan data berupa array
        return view('admin.artikel.edit', [
            // index semua_kategori berisi value variable $semua_kategori
            'semua_kategori' => $semua_kategori,
            'detail_artikel' => $detail_artikel
        ]);
    }

    // $request berisi menyimpan data formulir
    public function update(Request $request)
    {
        // dd($request->all());

        // tangkap datanya
        $article_id = $request->article_id;
        $title = $request->title;
        $category_id = $request->category_id;
        $content = $request->content;
        $image = $request->image;

        // tangkap detail artikel
        $detail_article = Artikel::find($article_id);

        // Ambil data title article dari database
        // berisi panggil detail article, lalu ambil isi column title
        $title_lama = $detail_article->title;


        // Validasi input
        $rules = [
            'content' => ['required'],
            'image' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ];

        // Periksa apakah input 'title' berubah
        // jika input title tidak sama dengan isi colum title di database maka tambahkan validasi unik
        if ($request->input('title') !== $title_lama) {
            // ATURAN VALIDASI DIISI DENGAN KODE BERIKUT
            $rules["title"] = ["required", "unique:articles,article_id", "max:255"];
        }
        // jika tidak sama maka hapus unique nya
        else {
            $rules["title"] = ["required", "max:255"];
        }

        // berisi permintaan lakukan validasi dari $rules
        $divalidasi = $request->validate($rules);

        // jika user memiliki file image atau jika user mengganti image
        if ($request->hasFile('image')) {
            // Tentukan path file yang ingin dihapus
            $path = $detail_article->image;

            // Cek apakah file ada
            // jika penyimpan di disk public memiliki jalur public/image/nama_file.jpg maka
            if (Storage::disk('public')->exists($path)) {
                // Hapus file
                // penyimpanan pada disk public hapus public/image/nama_file.jpg
                Storage::disk('public')->delete($path);
            }

            // Mengubah nama file menjadi timestamp dengan ekstensi yang sesuai
            $filename = time() . '.' . $image->getClientOriginalExtension();

            // Simpan file dengan nama baru
            $path = $image->storeAs('image', $filename, 'public');
        }
        // jika user tidak mengupload image maka pake nama image lama
        else if (!$request->hasFile('image')) {
            // berisi memanggil value detail artikel, column image
            $path = $detail_article->image;
        };


        // perbarui articlenya
        // detail_article, perbarui isi dari column2x berikut
        $detail_article->update([
            // column title berisi nilai dari $title
            'title' => $title,
            'category_id' => $category_id,
            'content' => $content,
            'image' => $path
        ]);

        // kembali lalu alihkan ke rute berikut, lalu kirimkan data success
        return redirect()->route('admin.article.index')->with('status', 'We have successfully updated the article you selected.');
    }

    // parameter id akan menangkap id dari url
    public function destroy($id)
    {
        // berisi panggil model Artikel lalu cari detail data berdasarkan id
        $detail_artikel = artikel::find($id);

        // Cek apakah file ada
        // jika penyimpan di disk public memiliki jalur public/image/nama_file.jpg maka
        if (Storage::disk('public')->exists('image/' . $detail_artikel->image)) {
            // Hapus file
            // penyimpanan pada disk public hapus public/image/nama_file.jpg
            Storage::disk('public')->delete('image/' . $detail_artikel->image);
        }

        // hapus detail data artikel
        $detail_artikel->delete();

        // kembali lalu alihkan ke rute artikel.index, lalu kirimkan data success
        return redirect()->route('admin.article.index')->with('status', 'Successfully deleted the article you selected.');
    }

    public function comments($artikel_id)
    {
        // panggil data-data table comment yang value column article_id sama dengan parameter $artikel_id
        // berisi panggil data-data komentar dan ambil yang menulis komentar nya atau cegah masalah kueri n+1 lalu ambil value dari column-column berikut yang dimana column article_id sama dengan $artikel_id lalu dapatkan data-data yang sesuai
        $semua_komentar_artikel = Comment::with('user')->select('comment_id', 'article_id', 'user_id', 'comment', 'created_at')->where('article_id', $artikel_id)->get();

        // kembalikkan ke tampilan admin.artikel.comments lalu kirimkan data berupa array
        return view('admin.artikel.comments', ['semua_komentar_artikel' => $semua_komentar_artikel]);
    }

    public function destroy_comment($comment_id)
    {
        // berisi panggil model Comment lalu cari detail data berdasarkan id
        $detail_komentar = Comment::find($comment_id);
        // hapus detail_komentar
        $detail_komentar->delete();

        // kembali lalu alihkan ke rute berikut, lalu kirimkan data success
        return redirect()->route('admin.article.comments', $detail_komentar->article_id)->with('status', 'We have successfully deleted the comment you selected.');
    }
}
