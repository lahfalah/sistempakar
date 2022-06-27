@extends('admin.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Membuat Penyakit Baru</h1>
  </div>
  <div class="col-lg-8">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    @endif
    <form method="POST" action="{{ route('deseases.store') }}">
    @csrf
    <div class="mb-3">
      <label for="kodepenyakit" class="form-label">Kode Penyakit</label>
      <input type="text" class="form-control" id="kodepenyakit" name="kodepenyakit">
    </div>
    <div class="mb-3">
      <label for="namapenyakit" class="form-label">Nama Penyakit</label>
      <input type="text" id="namapenyakit" class="form-control" name="namapenyakit">
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