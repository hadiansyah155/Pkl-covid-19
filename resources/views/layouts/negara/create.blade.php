@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Negara') }}</div>

                <div class="card-body">
                    <form  action="{{route('negara.store')}}" method="post">
                        @csrf

                <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputEmail1" class="form-label"><b>Kode Negara</b></label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kd_negara"
                        required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label"><b>Nama Negara</b></label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="nm_negara"
                        required>
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
