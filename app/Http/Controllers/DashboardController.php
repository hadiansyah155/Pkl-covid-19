<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Models\Provinsi;
use App\Http\Models\Kota;
use App\Http\Models\Kecamatan;
use App\Http\Models\Kelurahan;
use App\Http\Models\RW;
use App\Http\Models\Tracking;
use carbon\carbon;
use DB;

class DashboardController extends Controller
{

    

    public function index()
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

            $datadunia= file_get_contents("https://api.kawalcorona.com/");
            $dunia = json_decode($datadunia, TRUE);
                  
        return view('layouts.dashboard.index',compact('positif','sembuh','meninggal','provinsi','dunia'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}