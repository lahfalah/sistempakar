@extends('user.layouts.main')

@section('container')
    @foreach ($data as $d)
        <div class="position-relative p-3 kartu mb-3" style="height: 180px">
            <div class="ribbon-wrapper ribbon-lg">
                <div class="ribbon bg-black text-sm">
                    <a href="/utama/{{ $d->id }}" class="text-decoration-none text-light">
                        {{ $d->judul }}
                    </a>
                </div>
            </div>
            <h3 class="text-center">{{ $d->judul }}</h3>
                {{-- {!!  Str::limit($d->isi, 50)  !!} --}}
                {{-- {{  Str::limit($d->isi, 50)  }} --}}
                <br>
                <br>
            <a href="/utama/{{ $d->id }}" class="btn btn-primary">Lihat Selengkapnya</a>
        </div>
    @endforeach
    
@endsection
