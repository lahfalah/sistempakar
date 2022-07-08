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
                    <h3 class="card-title">Edit Gejala</h3>
                </div>
                <form action="{{ route('symptoms.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kodegejala" class="form-label">Kode Gejala</label>
                            <input type="text" class="form-control" id="kodegejala" name="kodegejala" required autofocus
                                value="{{ old('kodegejala', $data->kodegejala) }}">
                        </div>
                        <div class="form-group">
                          <label for="namagejala" class="form-label">Nama Gejala</label>
                          <input id="namagejala" class="form-control" name="namagejala" required autofocus
                          value="{{ old('namagejala', $data->namagejala) }}">
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
