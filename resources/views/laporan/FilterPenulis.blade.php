@extends('layouts.app')

@section('title', 'Filter Penulis')

@section('content')
<div class="container-fluid">
    <div class="card">
        <h4 class="card-header text-center"><strong>FROM FILTER BUKU BERDASARKAN PENULIS</strong></h4>
            <div class="card-body">

                <div class="col-md-12 contents">
                    <div class="row justify-content-center">
                        <div class="form-group col-md-10">
                            <label for="penulis" class="form-label mt-6"><strong>Nama Penulis</strong></label>
                                <select name="penulis" id="penulis" class="form-control">
                                    <option selected disabled>-- Pilih Penulis Buku --</option>
                                    @foreach (App\Models\Buku::all() as $buku)
                                    <option value="{{ $buku->id }}">{{ $buku->penulis }}</option>
                                    @endforeach
                                </select>

                                <div class="col-md-12 text-center mt-2">
                                    <a class="btn btn-primary" href="#" role="button">LIHAT</a>
                                </div>
                                
                        </div>  
                    </div>
                </div>
            </div>
               
    </div>
</div>
@endsection