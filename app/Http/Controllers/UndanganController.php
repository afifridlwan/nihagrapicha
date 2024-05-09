<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
  public function index() {
    $undangan = Produk::all();
    return view('pages.undangan.undangan');
  }

  


}
