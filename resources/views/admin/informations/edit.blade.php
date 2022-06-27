@extends('admin.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Informasi </h1>
  </div>
  <div class="col-lg-8">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    @endif
    <form action="{{ route('informations.update', $data->id) }}" method="POST">
      @csrf
      @method('PUT')
    <div class="mb-3">
      <label for="judul" class="form-label">Judul</label>
      <input type="text" class="form-control" id="judul" name="judul" required autofocus value="{{ old('judul', $data->judul) }}">
    </div>
    <div class="mb-3">
        <label for="isi" class="form-label">Isi</label>
        <input type="hidden" name="isi" id="isi" required autofocus value="{{ old('isi', $data->isi) }}">
        <trix-editor input="isi" style="min-height: 400px"></trix-editor>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
  </div>

  {{-- JS UNTUK TRIX --}}
  <script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
  </script>
@endsection