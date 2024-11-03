<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\SesiController;
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


Route::middleware(['guest'])->group(function(){

    Route::get('/',[SesiController::class, 'index'])->name('login');
Route::post('/',[SesiController::class, 'login']);

});
Route::get('/home',function(){
    return redirect('/admin');
});


Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[AdminController::class,'index']);
    Route::get('/admin/operator',[AdminController::class,'operator'])->middleware(('userAkses:operator'));
    Route::get('/admin/kordinator',[AdminController::class,'kordinator'])->middleware(('userAkses:kordinator'))->name('data.pasien');
    Route::get('/admin/kordinator/siswasmp',[DataController::class,'datasiswasmp'])->name('datasiswa.smp');
    Route::get('/admin/kordinator/siswismak',[DataController::class,'datasiswismak'])->name('datasiswi.smak');
    Route::get('/admin/kordinator/siswismp',[DataController::class,'datasiswismp'])->name('datasiswi.smp');
    Route::get('/logout',[SesiController::class,'logout']);

});

