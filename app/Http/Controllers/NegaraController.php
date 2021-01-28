<?php

namespace App\Http\Controllers;

use App\Models\Negara;
use Illuminate\Http\Request;

class NegaraController extends Controller
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
        $negara = Negara::all();
        return view('layouts.negara.index',compact('negara'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.negara.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $negara = new Negara();
        $negara->kode_negara = $request->kd_negara;
        $negara->nama_negara = $request->nm_negara;
        $negara->save();
        return redirect()->route('negara.index')
                        ->with(['message'=>'Data Berhasil Dibuat']);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Negara  $negara
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $negara = Negara::findOrFail($id);
        return view('layouts.negara.show',compact('negara'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Negara  $negara
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $negara = Negara::findOrFail($id);
        return view('layouts.negara.edit',compact('negara'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Negara  $negara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $negara = Negara::findOrFail($id);
        $negara->kode_negara = $request->kd_negara;
        $negara->nama_negara = $request->nm_negara;
        $negara->save();
        return redirect()->route('negara.index')
                        ->with(['message'=>'Data Berhasil Diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Negara  $negara
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $negara = Negara::findOrFail($id)->delete();
        return redirect()->route('negara.index')
                        ->with(['message1'=>'Data Berhasil Dihapus']);
    }
}
