@extends('admin.layouts.main')

@section('container')
    <div class="row">

        <div class="col-md-12">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
            @endif
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Penyakit</h3>
                </div>
                <form method="POST" action="{{ route('deseases.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kodepenyakit" class="form-label">Kode Penyakit</label>
                            <input type="text" class="form-control" id="kodepenyakit" name="kodepenyakit">
                        </div>
                        <div class="form-group">
                            <label for="namapenyakit" class="form-label">Nama Penyakit</label>
                            <input type="text" id="namapenyakit" class="form-control" name="namapenyakit">
                        </div>
                        <div class="form-group">
                            <label for="obat" class="form-label">Obat</label>
                            <input type="text" id="obat" class="form-control" name="obat">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        @endsection
