@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Provinsi') }}</div>

                <div class="card-body">
                <form  action="{{route('provinsi.store')}}" method="post">
                    @csrf
                   <div class="form-group">
                    <div class="mb-12">
                        <label for="exampleInputEmail1" class="form-label">Kode Provinsi</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kd_prov">
                        @if($errors->has('kd_prov'))
                           <span class="text-danger">{{ $errors->first('kd_prov')}}</span>
                        @endif
                    </div>
                     </div>
                      <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="nm_prov">
                        @if($errors->has('nm_prov'))
                           <span class="text-danger">{{ $errors->first('nm_prov')}}</span>
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