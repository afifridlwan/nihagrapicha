<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index(Request $request) {
        $produk = Produk::with('category')->paginate(5);
    
        // Menambahkan nomor urutan pada setiap halaman
        $produk->appends($request->except('page'));
    
        // Menghitung nomor urutan untuk setiap item pada halaman
        $index = ($produk->currentPage() - 1) * $produk->perPage() + 1;
        foreach ($produk->items() as $item) {
            $item->index = $index++;
        }
        return view('pages.admin.produk.index', compact('produk'));
    }

    public function create(Request $request){
        $category = Category::all();
        return view('pages.admin.produk.create', compact('category'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string|',
            'harga' => 'required|string|max:255',
            'stok' => 'required|string|max:255',
            'gambarUrlProduk' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);


        // handle path image
        $pathImage = $request->file('gambarUrlProduk')->store('public/upload/image');

        // generate path for url
        $imageFileName = basename($pathImage);
        $image = url("storage/upload/image/{$imageFileName}");


        $produk = New Produk();
        $produk->nama = $request->input('nama');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->harga = $request->input('harga');
        $produk->stok = $request->input('stok');
        $produk->gambarUrlProduk = $image;
        $produk->category_id = $request->input('category_id');
        $produk->save();

        return redirect()->route('produk.index');
    }

    public function edit($id) {
        $produk = Produk::find($id);
        $category = Category::all();
        return view('pages.admin.produk.edit', compact('produk', 'category'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string|',
            'harga' => 'required|string|max:255',
            'stok' => 'required|string|max:255',
            'gambarUrlProduk' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        $produk = Produk::find($id);
        if ($request->hasFile('gambarUrlProduk')) {
            $request->validate(
                [
                    'gambarUrlProduk' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
                ]
                );
    
                $pathImage = $request->file('gambarUrlProduk')->store('public/upload/image');
                $originalExtension = $request->file('gambarUrlProduk')->getClientOriginalExtension();
                $imageFileName = pathinfo($pathImage, PATHINFO_FILENAME). '_' . time() . '.' . $originalExtension;
    
                Storage::move($pathImage, 'public/upload/image/' . $imageFileName);
                
                $url = asset("storage/upload/image/{$imageFileName}");
                $produk->gambarUrlProduk = $url;
        }

                // $produk = New Produk();
                $produk->nama = $request->input('nama');
                $produk->deskripsi = $request->input('deskripsi');
                $produk->harga = $request->input('harga');
                $produk->stok = $request->input('stok');
                $produk->category_id = $request->input('category_id');
                $produk->save();

                return redirect()->route('produk.index');

    }

                public function destroy($id)
                {
                    $produk = Produk::find($id);
                    $produk->delete();
                    return redirect()->route('produk.index');
                }
}
 