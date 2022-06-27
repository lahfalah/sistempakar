@extends('admin.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Penyakit </h1>
  </div>
  <div class="col-lg-8">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    @endif
    <form action="{{ route('deseases.update', $data->id) }}" method="POST">
      @csrf
      @method('PUT')
    <div class="mb-3">
      <label for="kodepenyakit" class="form-label">Kode Penyakit</label>
      <input type="text" class="form-control" id="kodepenyakit" name="kodepenyakit" required autofocus value="{{ old('kodepenyakit', $data->kodepenyakit) }}">
    </div>
    <div class="mb-3">
      <label for="namapenyakit" class="form-label">Nama Penyakit</label>
      <input id="namapenyakit" class="form-control" name="namapenyakit" required autofocus value="{{ old('kodepenyakit', $data->namapenyakit) }}">
      {{-- Untuk Isi banyak Pake Trix --}}
      {{-- <trix-editor input="body"></trix-editor> --}}
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
  </div>

  {{-- JS UNTUK TRIX --}}
  {{-- <script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
  </script> --}}
@endsection