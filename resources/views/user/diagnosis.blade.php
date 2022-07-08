@extends('user.layouts.main')
@section('container')
    <h1 class="text-center mb-5">Halaman Diagnosis</h1>  
    @foreach ($data as $d)

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          {{ $d->namagejala }}
        </label>
      </div>
      @endforeach
      <p class="text-center my-4"><a href=""  class="text-decoration-none btn btn-primary">Cek Diagnosa</a></p>
@endsection