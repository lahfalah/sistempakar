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
                    <h3 class="card-title">Tambah Data Admin</h3>
                </div>
                <form method="POST" action="/admin/users/create">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" id="name" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" id="password" class="form-control" name="password">
                        </div>
                        <input type="hidden" name="level" class="form-control mb-3 text-muted" id="level"
                            placeholder="" required value="Admin" readonly>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
