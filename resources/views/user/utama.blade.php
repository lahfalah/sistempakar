@extends('user.layouts.main')

@section('container')
<h2 class="text-center mb-3">Penyakit HIV/AIDS</h2> 
@foreach ($data as $d)
<div class="card">
<div class="card-header">
    <a href="/utama/{{ $d->id }}" class="text-decoration-none text-dark">
    <h6 class="card-title m-0"><b> {{ $d->judul }} </b></h6>
</a>
</div>
<div class="card-body">
    <h6 class="card-title">Special title treatment</h6>

    <p class="card-text">With supporting text below as a natural lead-in to additional
        content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas optio nisi enim eveniet reprehenderit vero? Quas sunt fugiat reiciendis atque perspiciatis illum ullam at! Harum ea rem in pariatur expedita!</p>
    <a href="/utama/{{ $d->id }}" class="btn btn-primary">Lihat Selengkapnya</a>
</div>
</div>
@endforeach

    {{-- <h2 class="text-center">Penyakit HIV/AIDS</h2> 
    @foreach ($data as $d)
<div class="row">
<div class="card mb-2 mt-4">
    <a href="/utama/{{ $d->id }}"><img src="img/hivwal.webp" class="card-img-top mt-3" height="370" alt="..."></a>
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/utama/{{ $d->id }}"class="text-decoration-none text-dark">{{ $d->judul }}</a></h3>
      <p><a href="/utama/{{ $d->id }}"  class="text-decoration-none btn btn-primary">Informasi Selengkapnya</a></p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
</div>
</div>
    @endforeach --}}
    
@endsection