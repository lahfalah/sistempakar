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
                    <h3 class="card-title">Edit Informasi</h3>
                </div>
                <form action="{{ route('informations.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" required
                                value="{{ old('judul', $data->judul) }}">
                        </div>
                        <div class="form-group">
                            <label for="isi" class="form-label">Isi</label>
                            <input type="hidden" name="isi" id="isi" required autofocus
                                value="{{ old('isi', $data->isi) }}">
                            <trix-editor input="isi" style="min-height: 400px"></trix-editor>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- JS UNTUK TRIX --}}
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection
