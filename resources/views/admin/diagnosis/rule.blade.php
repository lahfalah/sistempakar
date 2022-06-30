@extends('admin.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Rule</h1>
  </div>
  <div class="col-lg-8">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    @endif
  <form method="POST" action="{{ route('store_diagnose') }}">
    @csrf
    <input type="hidden" name="diagnosas_id" value="{{ $id }}" >
    <div class="form-group my-2">
      <label for="">Penyakit</label>
      <select name="symptoms_id" id="" class="form-control">
        <option value="">--Pilih Gejala--</option>
        @foreach ($gejala as $d)
          <option value="{{ $d->id }}">{{ $d->namagejala }}</option>
        @endforeach
      </select>
    </div>
        
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
  </div>
@endsection