@extends('user.layouts.main')

@section('container')
    <h2 class="text-center">Penyakit HIV/AIDS</h2> 
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
    @endforeach
    
@endsection