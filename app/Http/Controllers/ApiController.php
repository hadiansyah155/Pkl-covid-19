<?php

namespace App\Http\Controllers;
use App\Models\Provinsi;
use App\Models\Kota;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function provinsi()
    {
        $provinsi = Provinsi::all();
        $data = [
            'status' => 200,
            '$data' => $provinsi,
            'message' => 'Berhasil'
        ];
        return response()->json($data);
    }

    public function provinsixkota($id)
    {
        $provinsi = Provinsi::with('kota')->where('id', $id)->get();
        $data = [
            'status' => 200,
            '$data' => $provinsi,
            'message' => 'Berhasil'
        ];
        return response()->json($data);
    }
}