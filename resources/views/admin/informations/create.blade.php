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
                    <h3 class="card-title">Tambah Informasi</h3>
                </div>
                <form method="POST" action="{{ route('informations.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                placeholder="Masukan Judul">
                        </div>
                        <div class="form-group">
                            <label for="isi" class="form-label">Isi</label>
                            <input type="hidden" name="isi" id="isi">
                            <trix-editor input="isi" style="min-height: 400px"></trix-editor>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>


            {{-- JS UNTUK TRIX --}}
            <script>
                document.addEventListener('trix-file-accept', function(e) {
                    e.preventDefault();
                })
            </script>
        @endsection
