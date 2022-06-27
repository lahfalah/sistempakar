@extends('admin.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Gejala </h1>
  </div>
  <div class="col-lg-8">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    @endif
    <form action="{{ route('symptoms.update', $data->id) }}" method="POST">
      @csrf
      @method('PUT')
    <div class="mb-3">
      <label for="kodegejala" class="form-label">Kode Gejala</label>
      <input type="text" class="form-control" id="kodegejala" name="kodegejala" required autofocus value="{{ old('kodegejala', $data->kodegejala) }}">
    </div>
    <div class="mb-3">
      <label for="namagejala" class="form-label">Nama Gejala</label>
      <input id="namagejala" class="form-control" name="namagejala" required autofocus value="{{ old('namagejala', $data->namagejala) }}">
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