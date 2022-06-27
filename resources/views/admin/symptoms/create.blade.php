@extends('admin.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Membuat Gejala Baru</h1>
  </div>
  <div class="col-lg-8">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    @endif
    <form method="POST" action="{{ route('symptoms.store') }}">
    @csrf
    <div class="mb-3">
      <label for="kodegejala" class="form-label">Kode Gejala</label>
      <input type="text" id="kodegejala" class="form-control"name="kodegejala">
    </div>
    <div class="mb-3">
      <label for="namagejala" class="form-label">Nama Gejala</label>
      <input type="text" id="namagejala" class="form-control" name="namagejala">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
  </div>

  {{-- <script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
  </script> --}}
@endsection