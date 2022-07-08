@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Membuat Rule Baru</h1>
  </div>
  <div class="col-lg-8">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    @endif
    <form method="POST" action="{{ route('diagnosis.store') }}">
    @csrf

    <div class="form-group my-2">
      <label for="">Penyakit</label>
      <select name="deseases_id" id="" class="form-control">
        <option value="">--Pilih Penyakit--</option>
        @foreach ($data as $d)
          <option value="{{ $d->id }}">{{ $d->namapenyakit }}</option>
        @endforeach
      </select>
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