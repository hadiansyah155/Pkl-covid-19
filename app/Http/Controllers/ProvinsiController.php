<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
       
        
       
        $provinsi = Provinsi::all();
        return view('layouts.provinsi.index',compact('provinsi'));

      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.provinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validasi
       /*  $request->validate([
             'kd_prov' => 'required|max:4|unique:provinsis',
             'nm_prov' => 'required|unique:provinsis',
         ], [
             'kd_prov.required' => 'Kode Wajib Di Isi',
             'kd_prov.max' => 'Kode Maksimal 4 Nomor',
             'kd_prov.unique' => 'Kode Sudah Dipakai',
             'nm_prov.required' => 'Nama Provinsi Harus Di Isi ',
             'nm_prov.unique' => 'Kode Sudah Dipakai',
         ]);*/

        $provinsi = new Provinsi();
        $provinsi->kode_provinsi = $request->kd_prov;
        $provinsi->nama_provinsi = $request->nm_prov;
        $provinsi->save();
        return redirect()->route('provinsi.index')
                        ->with(['message'=>'Data Berhasil Dibuat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('layouts.provinsi.show',compact('provinsi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('layouts.provinsi.edit',compact('provinsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->kode_provinsi = $request->kd_prov;
        $provinsi->nama_provinsi = $request->nm_prov;
        $provinsi->save();
        return redirect()->route('provinsi.index')
                        ->with(['message'=>'Data Berhasil Diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id)->delete();
        return redirect()->route('provinsi.index')
                        ->with(['message1'=>'Data Berhasil Dihapus']);
    }
}