<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;
use App\Models\Tarcking;
use DB;


class ApiController extends Controller
{
    public function provinsi()
    {
        $provinsi = DB::table('provinsis')
            ->select('provinsis.nama_provinsi','provinsis.kode_provinsi',
            DB::raw('SUM(trackings.positif) as Positif'),
            DB::raw('SUM(trackings.sembuh) as Sembuh'),
            DB::raw('SUM(trackings.meninggal) as Meninggal'))
                ->join('kotas','provinsis.id','=','kotas.id_provinsi')
                ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('trackings','rws.id','=','trackings.id_rw')
            ->groupBy('provinsis.id')->get();

        $positif = DB::table('provinsis')
            ->join('kotas','kotas.id_provinsi','=','provinsis.id')
            ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
            ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
            ->join('rws','rws.id_kelurahan','=','kelurahans.id')
            ->join('trackings','trackings.id_rw','=','rws.id')
            ->select('trackings.positif')
            ->sum('trackings.positif');

        $sembuh = DB::table('provinsis')
            ->join('kotas','kotas.id_provinsi','=','provinsis.id')
            ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
            ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
            ->join('rws','rws.id_kelurahan','=','kelurahans.id')
            ->join('trackings','trackings.id_rw','=','rws.id')
            ->select('trackings.positif',
                'trackings.sembuh','trackings.meninggal')
            ->sum('trackings.sembuh');

        $meninggal = DB::table('provinsis')
            ->join('kotas','kotas.id_provinsi','=','provinsis.id')
            ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
            ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
            ->join('rws','rws.id_kelurahan','=','kelurahans.id')
            ->join('trackings','trackings.id_rw','=','rws.id')
            ->select('trackings.positif',
            'trackings.sembuh','trackings.meninggal')
            
            ->sum('trackings.meninggal');
       
            return response([
                'success' => true,
                'data' => ['Hari Ini' => $provinsi,
                          ],
                'Total' => ['Jumlah Positif'   => $positif,
                            'Jumlah Sembuh'    => $sembuh,
                            'Jumlah Meninggal' => $meninggal,
                          ],
                'message' => 'Berhasil'
            ], 200);
    }

    public function Rw()
    {
        $rw = DB::table('trackings')
                ->select([
                    DB::raw('SUM(positif) as Positif'),
                    DB::raw('SUM(sembuh) as Sembuh'),
                    DB::raw('SUM(meninggal) as Meninggal'),
                ])
                ->groupBy('tanggal')->get();

        $positif = DB::table('rws')
                ->select('trackings.positif',
                'trackings.sembuh','trackings.meninggal')
                ->join('trackings','rws.id','=','trackings.id_rw')
                ->sum('trackings.positif');
        $sembuh = DB::table('rws')
                ->select('trackings.positif',
                'trackings.sembuh','trackings.meninggal')
                ->join('trackings','rws.id','=','trackings.id_rw')
                ->sum('trackings.sembuh');
        $meninggal = DB::table('rws')
                ->select('trackings.positif',
                'trackings.sembuh','trackings.meninggal')
                ->join('trackings','rws.id','=','trackings.id_rw')
                ->sum('trackings.meninggal');

             return response([
                'success' => true,
                'data' => ['Hari Ini' => $rw,
                          ],
                'Total' => ['Jumlah Positif'   => $positif,
                            'Jumlah Sembuh'    => $sembuh,
                            'Jumlah Meninggal' => $meninggal,
                          ],
                'message' => 'Berhasil'
            ], 200);
    }
}
