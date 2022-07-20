@extends('admin.layouts.main')

@section('container')
    <div class="row">

        <div class="col-md-12">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
            @endif
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Edit Penyakit</h3>
                </div>
                <form action="{{ route('deseases.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kodepenyakit" class="form-label">Kode Penyakit</label>
                            <input type="text" class="form-control" id="kodepenyakit" name="kodepenyakit" required
                                autofocus value="{{ old('kodepenyakit', $data->kodepenyakit) }}">
                        </div>
                        <div class="form-group">
                            <label for="namapenyakit" class="form-label">Nama Penyakit</label>
                            <input id="namapenyakit" class="form-control" name="namapenyakit" required autofocus
                                value="{{ old('kodepenyakit', $data->namapenyakit) }}">
                        </div>
                        <div class="form-group">
                            <label for="obat" class="form-label">Obat</label>
                            <input id="obat" class="form-control" name="obat" required autofocus
                                value="{{ old('kodepenyakit', $data->obat) }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
