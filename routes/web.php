<?php

//use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DetilPekerjaController;
use App\Http\Controllers\E_WalletController;
use App\Http\Controllers\KategoriPekerjaController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\TransaksiKontrakController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::post('logout', LogoutController::class)->middleware('auth');

//tugas routes & controller

Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('admin/create', [AdminController::class, 'create'])->name('products.create');
Route::post('admin', [AdminController::class, 'store'])->name('admin.store');
Route::get('admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('admin/{id}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

Route::get('bank', [BankController::class, 'index'])->name('bank.index');
Route::get('bank/create', [BankController::class, 'create'])->name('bank.create');
Route::post('bank', [BankController::class, 'store'])->name('bank.store');
Route::get('bank/{id}/edit', [BankController::class, 'edit'])->name('bank.edit');
Route::put('bank/{id}', [BankController::class, 'update'])->name('bank.update');
Route::delete('bank/{id}', [BankController::class, 'destroy'])->name('bank.destroy');

Route::get('customer', [CustomerController::class, 'index'])->name('customer.index');
Route::get('customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('customer', [CustomerController::class, 'store'])->name('customer.store');
Route::get('customer/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('customer/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('customer/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');

Route::get('detil_pekerja', [DetilPekerjaController::class, 'index'])->name('detil_pekerja.index');
Route::get('detil_pekerja/create', [DetilPekerjaController::class, 'create'])->name('detil_pekerja.create');
Route::post('detil_pekerja', [DetilPekerjaController::class, 'store'])->name('detil_pekerja.store');
Route::get('detil_pekerja/{id}/edit', [DetilPekerjaController::class, 'edit'])->name('detil_pekerja.edit');
Route::put('detil_pekerja/{id}', [DetilPekerjaController::class, 'update'])->name('detil_pekerja.update');
Route::delete('detil_pekerja/{id}', [DetilPekerjaController::class, 'destroy'])->name('detil_pekerja.destroy');

Route::get('e_wallet', [E_WalletController::class, 'index'])->name('e_wallet.index');
Route::get('e_wallet/create', [E_WalletController::class, 'create'])->name('e_wallet.create');
Route::post('e_wallet', [E_WalletController::class, 'store'])->name('e_wallet.store');
Route::get('e_wallet/{id}/edit', [E_WalletController::class, 'edit'])->name('e_wallet.edit');
Route::put('e_wallet/{id}', [E_WalletController::class, 'update'])->name('e_wallet.update');
Route::delete('e_wallet/{id}', [E_WalletController::class, 'destroy'])->name('e_wallet.destroy');

Route::get('kategori_pekerja', [KategoriPekerjaController::class, 'index'])->name('kategori_pekerja.index');
Route::get('kategori_pekerja/create', [KategoriPekerjaController::class, 'create'])->name('kategori_pekerja.create');
Route::post('kategori_pekerja', [KategoriPekerjaController::class, 'store'])->name('kategori_pekerja.store');
Route::get('kategori_pekerja/{id}/edit', [KategoriPekerjaController::class, 'edit'])->name('kategori_pekerja.edit');
Route::put('kategori_pekerja/{id}', [KategoriPekerjaController::class, 'update'])->name('kategori_pekerja.update');
Route::delete('kategori_pekerja/{id}', [KategoriPekerjaController::class, 'destroy'])->name('kategori_pekerja.destroy');

Route::get('kota', [KotaController::class, 'index'])->name('kota.index');
Route::get('kota/create', [KotaController::class, 'create'])->name('kota.create');
Route::post('kota', [KotaController::class, 'store'])->name('kota.store');
Route::get('kota/{id}/edit', [KotaController::class, 'edit'])->name('kota.edit');
Route::put('kota/{id}', [KotaController::class, 'update'])->name('kota.update');
Route::delete('kota/{id}', [KotaController::class, 'destroy'])->name('kota.destroy');

Route::get('pekerja', [PekerjaController::class, 'index'])->name('pekerja.index');
Route::get('pekerja/create', [PekerjaController::class, 'create'])->name('pekerja.create');
Route::post('pekerja/add', [PekerjaController::class, 'store'])->name('pekerja.store');
Route::get('pekerja/{id_pekerja}/edit', [PekerjaController::class, 'edit'])->name('pekerja.edit');
Route::put('pekerja/{id_pekerja}/update', [PekerjaController::class, 'update'])->name('pekerja.update');
Route::delete('pekerja/{id_pekerja}/delete', [PekerjaController::class, 'destroy'])->name('pekerja.destroy');

Route::get('pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');
Route::get('pembayaran/create', [PembayaranController::class, 'create'])->name('pembayaran.create');
Route::post('pembayaran', [PembayaranController::class, 'store'])->name('pembayaran.store');
Route::get('pembayaran/{id}/edit', [PembayaranController::class, 'edit'])->name('pembayaran.edit');
Route::put('pembayaran/{id}', [PembayaranController::class, 'update'])->name('pembayaran.update');
Route::delete('pembayaran/{id}', [PembayaranController::class, 'destroy'])->name('pembayaran.destroy');

Route::get('provinsi', [ProvinsiController::class, 'index'])->name('provinsi.index');
Route::get('provinsi/create', [ProvinsiController::class, 'create'])->name('provinsi.create');
Route::post('provinsi', [ProvinsiController::class, 'store'])->name('provinsi.store');
Route::get('provinsi/{id}/edit', [ProvinsiController::class, 'edit'])->name('provinsi.edit');
Route::put('provinsi/{id}', [ProvinsiController::class, 'update'])->name('provinsi.update');
Route::delete('provinsi/{id}', [ProvinsiController::class, 'destroy'])->name('provinsi.destroy');

Route::get('transaksi_kontrak', [TransaksiKontrakController::class, 'index'])->name('transaksi_kontrak.index');
Route::get('transaksi_kontrak/create', [TransaksiKontrakController::class, 'create'])->name('transaksi_kontrak.create');
Route::post('transaksi_kontrak', [TransaksiKontrakController::class, 'store'])->name('transaksi_kontrak.store');
Route::get('transaksi_kontrak/{id}/edit', [TransaksiKontrakController::class, 'edit'])->name('transaksi_kontrak.edit');
Route::put('transaksi_kontrak/{id}', [TransaksiKontrakController::class, 'update'])->name('transaksi_kontrak.update');
Route::delete('transaksi_kontrak/{id}', [TransaksiKontrakController::class, 'destroy'])->name('transaksi_kontrak.destroy');

Route::get('customer', [CustomerController::class, 'index'])->name('customer.index');
Route::get('customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('customer', [CustomerController::class, 'store'])->name('customer.store');
Route::get('customer/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('customer/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('customer/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');

Route::get('users', [UsersController::class, 'index'])->name('users.index');
Route::get('users/create', [UsersController::class, 'create'])->name('users.create');
Route::post('users', [UsersController::class, 'store'])->name('users.store');
Route::get('users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::put('users/{id}', [UsersController::class, 'update'])->name('users.update');
Route::delete('users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');

//tugas routes & controller


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/art', [App\Http\Controllers\PekerjaController::class, 'art'])->name('art');

Route::get('/babysitter', [App\Http\Controllers\PekerjaController::class, 'baby'])->name('babysitter');

Route::get('/review', function () {
    return view('pages/review');
});

Route::get('/about', function () {
    return view('pages/aboutus');
});