@extends('layouts.app')

@section('title', 'Semua Data Buku')

@section('content')
<div class="container-fluid">
    <div class="card">
        <h4 class="card-header text-center"><strong>LAPORAN SEMUA BUKU</strong></h4>
            <div class="card-body">
                <div class="d-grid gap-2 d-md-block mb-3">
                    <a class="btn btn-primary" href="#" role="button">Cetak</a>
                    <a class="btn btn-success" href="#" role="button">Export Excel</a>
                </div>

                <table class="table table-bordered" id="dataTable">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Nomor ISBN</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Stok</th>
                            <th>Harga Pokok</th>
                            <th>Harga Jual</th>
                            <th>PPN</th>
                            <th>Diskon</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($buku as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->noisbn }}</td>
                            <td>{{ $item->penulis }}</td>
                            <td>{{ $item->penerbit }}</td>
                            <td>{{ $item->tahun }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>{{ $item->harga_pokok }}</td>
                            <td>{{ $item->harga_jual }}</td>
                            <td>{{ $item->ppn }}</td>
                            <td>{{ $item->diskon }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
@endsection
