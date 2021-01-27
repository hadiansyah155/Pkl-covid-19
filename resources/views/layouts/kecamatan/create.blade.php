@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Kecamatan') }}</div>

                <div class="card-body">
                    <form  action="{{route('kecamatan.store')}}" method="post">
                        @csrf

                <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label"><b>Kode Kecamatan</b></label>
                        <input type="text" class="form-control" id="exampleInputPassword1" 
                        name="kode_kecamatan" required>
                    </div>
                </div>

                    <div class="form-group">
                        <label for="">Kota</label>
                        <select name="id_kota" class="form-control" required>
                            @foreach($kota as $data)
                                <option value="{{$data->id}}">{{$data->nama_kota}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="mb-12>
                            <label for="exampleInputPassword1" class="form-label"><b>Nama Kecamatan</b></label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="nama_kecamatan" required>
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
