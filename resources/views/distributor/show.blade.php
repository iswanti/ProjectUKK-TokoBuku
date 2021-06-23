@extends('layouts.app')

@section('title', 'Detail Distributor')

@section('content')
<div class="container-fluid">
    <div class="card">
        <h4 class="card-header text-center"><strong>DETAIL DISTRIBUTOR</strong></h4>
            <div class="card-body">

                <div class="back mb-4 mt-3">
                    <a href="{{ route('distributor.index') }}" class="btn btn-danger">Back</a>
                </div>

                <div class="row">
                    <div class="form-group col-12">
                        <label>Nama Distributor</label>
                        <input type="text" name="nama_distributor" value="{{ $distributor->nama_distributor }}" class="form-control" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12">
                        <label>Alamat</label>
                        <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control" disabled>{{ $distributor->alamat }}</textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12">
                        <label>Nomor Telepon</label>
                        <input type="number" name="telpon" value="{{ $distributor->telpon }}" class="form-control" disabled>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
