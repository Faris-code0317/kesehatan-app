<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\pasiensiswacontroller;
use App\Http\Controllers\pasiensiswicontroller;
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



Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[AdminController::class,'index']);
    Route::get('/admin/operator',[AdminController::class,'operator'])->middleware(('userAkses:operator'));
Route::get('/admin/kordinator/dashboard',[DataController::class,'dashboard'])->middleware(('userAkses:kordinator'))->name('dashboard.kesehatan');
    Route::get('/logout',[SesiController::class,'logout']);
});

Route::get('/admin/kordinator/siswa', [DataController::class, 'datasiswa'])->name('data.pasien');
Route::get('/admin/kordinator/siswi', [DataController::class, 'datasiswi'])->name('data.siswi');
Route::get('/admin/kordinator/dashboard', [DataController::class, 'dashboard'])->name('dashboard.kesehatan');
//nanti tambahkan id
Route::get('/admin/kordinator/rekamsiswa', [DataController::class, 'rekamsiswa'])->name('rekam.siswa');
Route::get('/admin/kordinator/rekamsiswi', [DataController::class, 'rekamsiswi'])->name('rekam.siswi');
//tambahkan route::putnya di bawah sini


//menuju form data lengkap pasien
Route::get('/admin/kordinator/profilepasien/{id}',[pasiensiswacontroller::class,'profilepasien'])->name('profile.pasien');
Route::get('/admin/kordinator/profilepasiensiswi/{id}',[pasiensiswicontroller::class,'profilepasien'])->name('profile.pasiensiswi');

//menuju from edit pasien
//siswi
Route::get('/admin/kordinator/editpasien/{id}',[pasiensiswacontroller::class,'edit'])->name('edit.pasien');
Route::put('/admin/kordinator/updatepasien/{id}',[pasiensiswacontroller::class,'update'])->name('update.pasien');
//siswi
Route::get('/admin/kordinator/editpasiensiswi/{id}',[pasiensiswicontroller::class,'edit'])->name('edit.pasiensiswi');
Route::put('/admin/kordinator/updatepasiensiswi/{id}',[pasiensiswicontroller::class,'update'])->name('update.pasiensiswi');

//route menuju form tambah
Route::get('/admin/kordinator/tambahpasien',[DataController::class,'tambahpasien'])->name('tambah.pasien');
Route::post('/admin/kordinator/siswa',[pasiensiswacontroller::class, 'store'])->name('tambahpasien.siswa');
Route::post('/admin/kordinator/siswi',[pasiensiswicontroller::class, 'store'])->name('tambahpasien.siswi');

//menuju form rekam medis
Route::get('/admin/kordinator/datarekammedis',[DataController::class,'datarekammedis'])->name('data.rekammedis');
Route::get('/admin/kordinator/tambahpasien', [DataController::class, 'tambahpasien'])->name('tambah.pasien');




//LANDING PAGE

Route::get('landing', [PageController::class, 'landing'])->name('landing');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('siswa', [PageController::class, 'siswa'])->name('siswa');
Route::get('login', [PageController::class, 'login'])->name('login');
Route::get('pengembang', [PageController::class, 'dev'])->name('pengembang');

