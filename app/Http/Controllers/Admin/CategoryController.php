<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // menampilkan halaman
    public function index()
    {
        // Mengambil semua kategori dan mengurutkannya berdasarkan created_at secara descending
        $kategori = Category::orderBy('created_at', 'desc')->get();

        // kembalikkan ke tampilan admin.kategori.index lalu kirimkan data berupa array
        return view('admin.kategori.index',  ['semua_kategori' => $kategori]);
    }

    // menampilkan halaman tambah
    public function create()
    {
        // kembalikkan ke tampilan berikut
        return view('admin.kategori.create');
    }

    // $request berisi menyimpan data formulir
    public function store(Request $request)
    {
        // dd($request->all());

        // tangkap datanya
        $name = $request->name;

        $divalidasi = $request->validate([
            'name' => ['required', 'max:255', 'unique:categories'],
        ]);

        // simpan datanya ke model Category
        $category = Category::create([
            // column name berisi nilai variable name
            'name' => $name,
        ]);
        // kembali lalu alihkan ke rute berikut, lalu kirimkan data success
        return redirect()->route('admin.category.create')->with('status', 'Successfully added a new category.');
    }

    // parameter id akan menangkap id dari url
    public function destroy($id)
    {
        // tangkap detail data category berdasarkan id
        $detail_category = Category::find($id);

        // hapus detail data category
        $detail_category->delete();

        // kembali lalu alihkan ke rute category.index, lalu kirimkan data success
        return redirect()->route('admin.category.index')->with('status', 'Successfully deleted the category you selected.');
    }

    // parameter id menangkap id yang dikirimkan rute
    public function edit($id)
    {
        // tangkap detail category
        $detail_kategori = Category::find($id);

        // // kembalikkan ke tampilan kategori.edit
        return view('admin.kategori.edit', ['detail_kategori' => $detail_kategori]);
    }

    // $request berisi menyimpan data formulir
    public function update(Request $request)
    {
        // dd($request->all());

        // tangkap datanya
        $category_id = $request->category_id;
        $name = $request->name;

        // tangkap detail category
        $detail_category = category::find($category_id);


        // Ambil data nama category lama dari database
        // berisi panggil detail category, lalu ambil isi column name
        $name_lama = $detail_category->name;

        // Validasi input
        $rules = [

        ];

        // Periksa apakah input 'name' berubah
        // jika input name tidak sama dengan isi colum name di database maka tambahkan validasi unik
        if ($request->input('name') !== $name_lama) {
            // ATURAN VALIDASI DIISI DENGAN KODE BERIKUT
            $rules["name"] = ["required", "unique:categories,category_id", "max:255"];
        }
        // jika tidak sama maka hapus unique nya
        else {
            $rules["name"] = ["required", "max:255"];
        }

        // berisi permintaan lakukan validasi dari $rules
        $divalidasi = $request->validate($rules);

        // perbarui categorynya
        // detail_category, perbarui isi dari column2x berikut
        $detail_category->update([
            // column name berisi nilai dari $name
            'name' => $name,
        ]);

        // kembali lalu alihkan ke rute berikut, lalu kirimkan data success
        return redirect()->route('admin.category.index')->with('status', 'We have successfully updated the category you selected.');
    }
}
