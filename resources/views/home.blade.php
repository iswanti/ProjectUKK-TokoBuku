@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Auth::user()->akses=='admin')
                        {{ __('Selamat Datang Admin!') }}
                    @endif
                    @if (Auth::user()->akses=='manager')
                        {{ __('Selamat Datang Manager!') }}
                    @endif
                    @if (Auth::user()->akses=='kasir')
                        {{ __('Selamat Datang Kasir!') }}
                    @endif
                </div>
                <div class="panel panel-default" align="center">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <div class="logo-beranda"> <img class="img-responsive" src="{{ ('images/rpl.png') }}" width="200"> </div>
                                <br>
                                <h2><strong>Toko.Buku.Qu</strong></h2>
                                <h3>Jl. Raya Wangun, Kel. Sindangsari</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                    <p class="text-primary">Toko yang menyediakan berbagai macam buku yang diinginkan dan di butuhkan</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
