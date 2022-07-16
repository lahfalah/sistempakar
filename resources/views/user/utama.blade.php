@extends('user.layouts.main')

@section('container')
    @foreach ($data as $d)
        <div class="position-relative p-3 bg-navy mb-3" style="height: 180px">
            <div class="ribbon-wrapper ribbon-lg">
                <div class="ribbon bg-red text-sm">
                    <a href="/utama/{{ $d->id }}" class="text-decoration-none text-dark">
                        {{ $d->judul }}
                    </a>
                </div>
            </div>
            <h1 class="text-center">{{ $d->judul }}</h1>
            <small>Isi beberapa Kata kata didalam informasi</small>
            <br>
            <br>
            <a href="/utama/{{ $d->id }}" class="btn btn-primary">Lihat Selengkapnya</a>
        </div>
    @endforeach
@endsection
