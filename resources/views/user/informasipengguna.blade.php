@extends('user.layouts.main')

@section('container')
    <div class="card" style="background-color:#37050777">
        <div class="card-header">
            <h3 class="text-center text-light">{{ $data->judul }}</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="background-color:#ffb3c1">
                        <div class="card-body">
                            <article class="fs">
                                {!! $data->isi !!}
                            </article>
                        </div>
                    </div>
                    <p class="text-center mb-3">
                        <a href="/"><button class="btn col-5 btn-success">
                                Kembali
                            </button></a>
                    </p>
                </div>
            </div>
        </div>
    @endsection
