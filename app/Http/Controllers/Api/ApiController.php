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
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
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
                    DB::raw('MAX(tanggal) as tanggal'),
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
    
    public function kota()
    {
        $kota = DB::table('kotas')
        ->select('provinsis.nama_provinsi','kotas.kode_kota','kotas.nama_kota',
            DB::raw('SUM(trackings.positif) as Positif'),
            DB::raw('SUM(trackings.sembuh) as Sembuh'),
            DB::raw('SUM(trackings.meninggal) as Meninggal'))
                ->join('provinsis','provinsis.id','=','kotas.id_provinsi')
                ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('trackings','rws.id','=','trackings.id_rw')
            ->groupBy('kotas.id')->get();

        return response([
            'success' => true,
            'data' => $kota,
            'message' => 'Berhasil'
        ], 200);
    }

    public function kecamatan()
    {
        $kecamatan = DB::table('kecamatans')
        ->select('kotas.nama_kota','kecamatans.kode_kecamatan','kecamatans.nama_kecamatan',
            DB::raw('SUM(trackings.positif) as Positif'),
            DB::raw('SUM(trackings.sembuh) as Sembuh'),
            DB::raw('SUM(trackings.meninggal) as Meninggal'))
                ->join('kotas','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('trackings','rws.id','=','trackings.id_rw')
        ->groupBy('kotas.id')->get();

        return response([
            'success' => true,
            'data' => $kecamatan,
            'message' => 'Berhasil'
        ], 200);
    }

    public function kelurahan()
    {
        $kelurahan = DB::table('kelurahans')
        ->select('kecamatans.nama_kecamatan','kelurahans.nama_kelurahan',
            DB::raw('SUM(trackings.positif) as Positif'),
            DB::raw('SUM(trackings.sembuh) as Sembuh'),
            DB::raw('SUM(trackings.meninggal) as Meninggal'))
                ->join('kecamatans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('trackings','rws.id','=','trackings.id_rw')
        ->groupBy('kelurahans.id')->get();

        return response([
            'success' => true,
            'data'    => $kelurahan,
            'message' => 'Berhasil'
        ], 200);
    }

    public function indonesia()
    {
        $positif = DB::table('rws')
              ->select('trackings.sembuh',
              'trackings.positif','trackings.meninggal')
              ->join('trackings','rws.id','=','trackings.id_rw')
              ->sum('trackings.positif');
        $sembuh = DB::table('rws')
              ->select('trackings.sembuh',
              'trackings.positif','trackings.meninggal')
              ->join('trackings','rws.id','=','trackings.id_rw')
              ->sum('trackings.sembuh');
        $meninggal = DB::table('rws')
              ->select('trackings.sembuh',
              'trackings.positif','trackings.meninggal')
              ->join('trackings','rws.id','=','trackings.id_rw')
              ->sum('trackings.meninggal');

            return response([
                'success' => true,
                'data' => 'Data Indonesia',
                          'Jumlah Positif'   => $positif,
                          'Jumlah Sembuh'    => $sembuh,
                          'Jumlah Meninggal' => $meninggal,        
                'message' => 'Berhasil'
            ], 200);
    }

    public function positif()
    {
        $positif = DB::table('rws')
            ->select('trackings.sembuh',
            'trackings.positif','trackings.meninggal')
            ->join('trackings','rws.id','=','trackings.id_rw')
            ->sum('trackings.positif');

        return response([
            'success' => true,
            'data' => 'Data Positif',
                      'Jumlah Positif' => $positif,       
            'message' => 'Berhasil'
        ], 200);
    }

    public function sembuh()
    {
        $sembuh = DB::table('rws')
              ->select('trackings.sembuh',
              'trackings.positif','trackings.meninggal')
              ->join('trackings','rws.id','=','trackings.id_rw')
              ->sum('trackings.sembuh');

        return response([
            'success' => true,
            'data' => 'Data Sembuh',
                      'Jumlah Sembuh' => $sembuh,       
            'message' => 'Berhasil'
        ], 200);
    }

    public function meninggal()
    {
        $meninggal = DB::table('rws')
        ->select('trackings.sembuh',
        'trackings.positif','trackings.meninggal')
        ->join('trackings','rws.id','=','trackings.id_rw')
        ->sum('trackings.meninggal');

        return response([
            'success' => true,
            'data' => 'Data Meninggal',
                      'Jumlah Meninggal' => $meninggal,       
            'message' => 'Berhasil'
        ], 200);
    }

    
       public function tracking()
    {
    $hariini = Carbon::now()->format('d-m-Y'); 
        $data_sekarang = DB::table('trackings')
                    ->select(DB::raw('SUM(trackings.positif) as Positif'), 
                             DB::raw('SUM(trackings.sembuh) as Sembuh'), 
                             DB::raw('SUM(trackings.meninggal) as Meninggal'),
                             DB::raw('MAX(tanggal) as Tanggal'))
                    ->whereDay('tanggal', '=' , $hariini)
                    ->get();
        $data = DB::table('trackings')
                    ->select(DB::raw('SUM(trackings.positif) as Positif'), 
                             DB::raw('SUM(trackings.sembuh) as Sembuh'), 
                             DB::raw('SUM(trackings.meninggal) as Meninggal'))
                    ->get();
        $res = [
            'success' => true,
            'data' => [
                'hari_ini' => $data_sekarang, 
                'total' => $data
            ],
            'message' => 'berhasil'
        ];
        return response()->json($res, 200);
    }

    public $data = [];
    public function global()
    {
        $response = Http::get('https://api.kawalcorona.com')->json();
        foreach ($response as $data => $val) {
            $raw = $val ['attributes' ];
            $res = ['Negara' => $raw['Country_Region'],
                    'Positif' => $raw['Confirmed'],
                    'Sembuh' => $raw['Recovered'],
                    'Meninggal' => $raw['Deaths'],

                   /* 'OBJECTID' => $raw['OBJECTID'],
                    'Country_Region' => $raw['Country_Region'],
                    'Last_Update' => $raw['Last_Update'],
                    'Lat' => $raw['Lat'],
                    'Long_' => $raw['Long_'],
                    'Confirmed' => $raw['Confirmed'],
                    'Deaths' => $raw['Deaths'],
                    'Recovered' => $raw['Recovered'],
                    'Active' => $raw['Active']*/
            ];

            array_push ($this->data, $res);
        }
            $data = [
                'success' => true,
                'Data Global' => $this->data,
                'message' => 'Berhasil'
            ];

            return response()->json($data, 200);
    }
}
