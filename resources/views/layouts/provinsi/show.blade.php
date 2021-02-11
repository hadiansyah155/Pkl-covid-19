@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Provinsi') }}</div>

                <div class="card-body">
                    <form  action="{{route('provinsi.index', $provinsi->id)}}" method="post">
                        <input type="hidden" name="_method" value="GET">
                            @csrf

                <div class="card-body">
                   <div class="form-group">
                        <div class="mb-12>
                                <label for="exampleInputEmail1" class="form-label"><b>Kode Provinsi</b></label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kd_prov"
                            value="{{$provinsi->kode_provinsi}}" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="mb-12>
                                <label for="exampleInputPassword1" class="form-label"><b>Nama Provinsi</b></label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="nm_prov"
                            value="{{$provinsi->nama_provinsi}}" readonly>
                        </div>
                     </div>

                     <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary">Kembali</button>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
