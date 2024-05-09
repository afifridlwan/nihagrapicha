<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Import model Category
use App\Models\Produk;

class DashboardController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $products = Produk::take(22)->get();
        return view('pages.dashboard.dashboard', compact('category', 'products'));
    }

   

   // public function produkCategory($id){
   //    $category = Category::findOrFail($id);
   //    $categories = Category::all();
   //    $products = Produk::where('category_id', $id)->get();
   //    return view('pages.produk.produk', compact('category', 'categories', 'products'));
   // }


      public function produkCategory($category_name)
      {
         // Temukan kategori berdasarkan nama
         $category = Category::where('category_name', $category_name)->firstOrFail();

         // Dapatkan semua kategori (jika dibutuhkan untuk tampilan)
         $categories = Category::all();

         // Temukan produk yang terkait dengan kategori
         $products = Produk::where('category_id', $category->id)->get();

         // Kirim data kategori dan produk ke view
         return view('pages.produk.produk', compact('category', 'categories', 'products'));
      }

      public function show($id) {
        $categories = Category::all();
        $products = Produk::findOrFail($id);
        $product = Produk::findOrFail($id);
        return view('pages.detail.detailProduk', compact('products', 'categories', 'product'));
      }

      public function toWhatsapp($id) {
        $products = Produk::find($id);
         // Buat URL WhatsApp dengan parameter
        //  $whatsappUrl = "https://api.whatsapp.com/send?phone=6285784878986&text=Saya ingin membeli " . urlencode($products->nama) . " seharga " . $products->harga . $products->gambarUrlProduk;
         
         $whatsappUrl = "https://api.whatsapp.com/send?phone=6285784878986&text=Saya%20ingin%20membeli%20" . urlencode($products->nama) . "%20seharga%20" . $products->harga . "%0A" . urlencode(route('detail.show', $products->id));
        // Redirect ke URL WhatsApp
        return redirect()->away($whatsappUrl);
      }


   

}
