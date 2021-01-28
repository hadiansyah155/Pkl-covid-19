<?php

use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('Provinsi', function() {
    return Provinsi::all();
});

Route::get('Kota', function() {
    return Kota::all();
});

Route::get('Kecamatan', function() {
    return Kecamatan::all();
});

Route::get('Kelurahan', function() {
    return Kelurahan::all();
});

Route::get('Rw', function() {
    return Rw::all();
});
