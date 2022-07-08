@extends('admin.layouts.main')

@section('container')
<div class="card card-info">
    <div class="card-header">
    <h3 class="card-title">Lihat Informasi</h3>
    </div>
<div class="container">
    <div class="row">
        <div class="col pt-3 pb-4">
            <div class="card">
                <div class="card-header text-center"><h2>{{ $data->judul }}</h2></div>
                <div class="card-body">
                    <article class="fs-6">
                        {!! $data->isi !!}
                    </article>
                    {{-- <div class="form-group">
                        <label for="">Isi</label>
                        <input type="text" name="isi" class="form-control" value="{{ $data->isi }}"
                            readonly>
                    </div> --}}
                </div>
            </div>
            <div class="form-group">
                <br>
                <a href="{{ route('informations.index') }}" class="btn btn-block btn-outline-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection