@extends('admin.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Diagnosa </h1>
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
      <label for="deseases_id" class="form-label">ID Penyakiy</label>
      <input type="text" class="form-control" id="deseases_id" name="deseases_id" required autofocus value="{{ old('deseases_id', $data->deseases_id) }}">
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