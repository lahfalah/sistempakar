@extends('user.layouts.main')

@section('container')
    <div class="card card-maroon">
        <div class="card-header">
            <h3 class="text-center">{{ $data->judul }}</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col pt-3 pb-4">
                    <div class="card">
                        <div class="card-body">
                            <article class="fs-6">
                                {!! $data->isi !!}
                            </article>
                        </div>
                    </div>
                    <div class="form-group">
                        <br>
                        <a href="/" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
