<?php

use App\Http\Controllers\api\pasiensiswaberobatController;
use App\Http\Controllers\api\pasiensiswiberobatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('berobatpasiensiswa', pasiensiswaberobatController::class);
Route::apiResource('berobatpasiensiswi', pasiensiswiberobatController::class);
