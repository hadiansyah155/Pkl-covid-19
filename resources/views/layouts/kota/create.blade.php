@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Kota') }}</div>

                <div class="card-body">
                    <form  action="{{route('kota.store')}}" method="post">
                        @csrf

                   <div class="form-group">
                        <div class="mb-12>
                                <label for="exampleInputEmail1" class="form-label"><b>Kode Kota</b></label>
                            <input type="number" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp" name="kode_kota"required>
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="">Provinsi</label>
                            <select name="id_provinsi" class="form-control" required>
                                @foreach($provinsi as $data)
                                    <option value="{{$data->id}}">{{$data->nama_provinsi}}</option>
                                @endforeach
                            </select>
                    </div>
                    
                    <div class="form-group">
                        <div class="mb-12>
                                <label for="exampleInputPassword1" class="form-label"><b>Nama Kota</b></label>
                            <input type="text" class="form-control" id="exampleInputPassword1" 
                            name="nama_kota"required>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary">Simpan</button>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
