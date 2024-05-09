<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProdukController;

use App\Http\Controllers\UserController;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::resource('/', DashboardController::class);

Route::get('/produk/{category_name}', [DashboardController::class, 'produkCategory'])->name('products.show');
Route::get('/produk/detail-produk/{id}', [DashboardController::class, 'show'])->name('detail.show');

Route::get('/produk/beli/whatsapp/{id}', [ DashboardController::class, 'toWhatsapp'])->name('whatsapp');

// Route::get('/beli/{id}', function ($id) {
//     // Dapatkan informasi produk
//     $products = Produk::find($id);

   
// });



// Route::get('/', function () {
//     return view('pages.dashboard.dashboard');
// })->name('dashboard');

// Route::get('/', [FrontendController::class, 'index'])->name('dashboard.index');

// Route::get('/produk/{category}', 'ProdukController@getCategoryProdukById')->name('getCategoryProdukById');





Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('home', function () {
        return view('pages.admin.dashboard_admin', ['type_menu' => '']);
    })->name('home'); 
    route::resource('admin/category', CategoryController::class);
    route::resource('admin/produk', ProdukController::class);
    Route::get('admin/profile', [UserController::class, 'index'])->name('profile.index');
    Route::get('admin/profile/edit', [UserController::class, 'edit'])->name('profile.edit');
    Route::put('admin/profile/update', [UserController::class, 'update'])->name('profile.update');

});
