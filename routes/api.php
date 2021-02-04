<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

 Route::get('Rw', [ApiController::class, 'rw']);
 Route::get('Provinsi', [ApiController::class, 'provinsi']);
 Route::get('Kota', [ApiController::class, 'kota']);
 Route::get('Kecamatan', [ApiController::class, 'kecamatan']);
 Route::get('Kelurahan', [ApiController::class, 'kelurahan']);
 Route::get('All', [ApiController::class, 'all']);
 Route::get('Positif', [ApiController::class, 'positif']);
 Route::get('Sembuh', [ApiController::class, 'sembuh']);
 Route::get('Meninggal', [ApiController::class, 'meninggal']);


// API CRUD
 Route::get('/provinsi', [ProvinsiController::class, 'index']);
 Route::post('/provinsi/store', [ProvinsiController::class, 'store']);
 Route::get('/provinsi/{id}', [ProvinsiController::class, 'show']);
 Route::put('/provinsi/update/{id}', [ProvinsiController::class, 'update']);
 Route::delete('/provinsi/{id}', [ProvinsiController::class, 'destroy']);