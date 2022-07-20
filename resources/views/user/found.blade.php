@extends('user.layouts.main')
@section('container')
    <div class="card card-maroon">
        <div class="card-header">
            <h3 class="text-center">Penyakit Ditemukan</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col pt-3">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center">Terdiagnosa : {{ $hasil }}</h1>
                        </div>
                    </div>
                    <a href="/diagnosis">
                        <p class="text-center mb-3">
                            <button class="btn col-6 btn-outline-success">
                                Kembali Diagnosa
                            </button>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    @endsection
