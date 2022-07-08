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
                    <h3 class="card-title">Tambah Gejala</h3>
                </div>
                <form method="POST" action="{{ route('symptoms.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kodegejala" class="form-label">Kode Gejala</label>
                            <input type="text" id="kodegejala" class="form-control"name="kodegejala">
                        </div>
                        <div class="form-group">
                            <label for="namagejala" class="form-label">Nama Gejala</label>
                            <input type="text" id="namagejala" class="form-control" name="namagejala">
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
