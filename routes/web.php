<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

//Buat LandingPage//

use App\Http\Controllers\PageController;

//--//

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


Route::middleware(['guest'])->group(function () {

    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});
Route::get('/home', function () {
    return redirect('/admin');
});


<<<<<<< HEAD
Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[AdminController::class,'index']);
    Route::get('/admin/operator',[AdminController::class,'operator'])->middleware(('userAkses:operator'));
Route::get('/admin/kordinator/dashboard',[DataController::class,'dashboard'])->middleware(('userAkses:kordinator'))->name('dashboard.kesehatan');
    Route::get('/logout',[SesiController::class,'logout']);
});
Route::get('/admin/kordinator/siswa',[DataController::class,'datasiswa'])->name('data.pasien');
Route::get('/admin/kordinator/siswi',[DataController::class,'datasiswi'])->name('data.siswi');
=======
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/operator', [AdminController::class, 'operator'])->middleware(('userAkses:operator'));
    Route::get('/admin/kordinator', [AdminController::class, 'kordinator'])->middleware(('userAkses:kordinator'));
    Route::get('/logout', [SesiController::class, 'logout']);
});
Route::get('/admin/kordinator/siswa', [DataController::class, 'datasiswa'])->name('data.pasien');
Route::get('/admin/kordinator/siswi', [DataController::class, 'datasiswi'])->name('data.siswi');
Route::get('/admin/kordinator/dashboard', [DataController::class, 'dashboard'])->name('dashboard.kesehatan');
>>>>>>> a6757eb88c6c4b435faf5d864f3fbb1a7244a1cc
//nanti tambahkan id
Route::get('/admin/kordinator/rekamsiswa', [DataController::class, 'rekamsiswa'])->name('rekam.siswa');
Route::get('/admin/kordinator/rekamsiswi', [DataController::class, 'rekamsiswi'])->name('rekam.siswi');
//tambahkan route::putnya di bawah sini



//route menuju form tambah
<<<<<<< HEAD
Route::get('/admin/kordinator/tambahpasien',[DataController::class,'tambahpasien'])->name('tambah.pasien');
//menuju form rekam medis
Route::get('/admin/kordinator/datarekammedis',[DataController::class,'datarekammedis'])->name('data.rekammedis');
=======
Route::get('/admin/kordinator/tambahpasien', [DataController::class, 'tambahpasien'])->name('tambah.pasien');




//LANDING PAGE//
Route::get('/', function () {
    return view('landing');
});

Route::get('/landing', [PageController::class, 'landing'])->name('landing');
Route::get('/about', [PageController::class, 'about'])->name('about');
