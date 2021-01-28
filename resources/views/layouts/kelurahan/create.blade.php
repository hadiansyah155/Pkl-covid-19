@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Kelurahan') }}</div>

                <div class="card-body">
                <form  action="{{route('kelurahan.store')}}" method="post">
                    @csrf
                     <div class="form-group">
                        <label for="">Kecamatan</label>
                        <select name="id_kecamatan" class="form-control" required>
                            @foreach($kecamatan as $data)
                                <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
                            @endforeach
                        </select>
                    </div>
                      <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label"><b>Nama Kelurahan</b</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="nama_kelurahan">
                        @if($errors->has('nama_kelurahan'))
                           <span class="text-danger">{{ $errors->first('nama_kelurahan')}}</span>
                        @endif
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