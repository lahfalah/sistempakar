@extends('admin.layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col pt-3 pb-4">
            <div class="card">
                <div class="card-header text-center"><h2>{{ $data->penyakit->namapenyakit }}</h2></div>
            </div>
            <div class="form-group">
                <br>
                <a href="{{ route('diagnosis.index') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                <a href="{{ route('rule', ['id'=> $id]) }}" class="btn btn-block btn-outline-primary">Membuat Gejala</a>
            </div>
            <table class="table table-striped table-sm">
                <thead>
                  <tr>
                      {{-- Id Posts
                      <th scope="col">ID</th>
                      {{-- Ini Category_Id 
                      <th scope="col">Ctgr</th> --}}
                      {{-- <th scope="col">Slug</th> --}}
          
          
                  <th scope="col">No</th>
                  {{-- Title --}}
                  <th scope="col">Penyakit</th>
                  {{-- Ini Action RUD --}}
                  <th scope="col">Aksi</th>
                  </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                @foreach ($gejala as $d)
                <tbody>
                  {{-- @foreach ($posts as $post)    --}}
                  <tr>
                    <th scope="row">{{ $no++ }}</th>
                  <td>{{ $d->gejala->namagejala }}</td>
                  <td>
                      {{-- READ --}}
                      <a href="{{ route('diagnosis.show', $d->id) }}" class="badge bg-info"><span data-feather="eye"></span></a>
                      {{-- UPDATE --}}
                      <a href="{{ route('diagnosis.edit', $d->id) }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                      {{-- DELETE --}}
                      <form onsubmit="return confirm('Apakah Anda Yakin ?');"
              action="{{ route('diagnosis.destroy', $d->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button class="badge bg-danger border-0"><span data-feather="x-circle"></span></button>
          </form>
                  </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection