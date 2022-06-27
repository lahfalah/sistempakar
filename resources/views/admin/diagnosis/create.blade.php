@extends('admin.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Membuat Rule Diagnosis Bila Dipakai</h1>
  </div>
  <div class="col-lg-8">

    <form method="" action="">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Penyakit</label>
      <input type="text" class="form-control" id="" name="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Gejala</label>
      <input id="" type="hidden" name="">
      <trix-editor input="body"></trix-editor>
    </div>
    <button type="" class="btn btn-primary">Simpan</button>
  </form>
  </div>

  <script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
  </script>
@endsection