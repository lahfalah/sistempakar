@extends('user.layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="text-center">{{ $data->judul }}</h1>
            <article class="fs-5">
                {!! $data->isi !!}
            </article>
                <a href="/">Kembali</a>
            </div>   
        </div>
    </div>
 @endsection
