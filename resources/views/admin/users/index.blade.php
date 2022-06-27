@extends('admin.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data-Data Pengguna</h1>
  </div>

  <div class="table-responsive col-lg-8">
    {{-- Membuat Data Ada Disini --}}
    <a href="/admin/users/create" class="btn btn-primary mb-3">Membuat Informasi Baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
            {{-- Id Posts
            <th scope="col">ID</th>
            {{-- Ini Category_Id 
            <th scope="col">Ctgr</th> --}}
            {{-- <th scope="col">Slug</th> --}}


        {{-- Pake Looping Iteration --}}
        <th scope="col">No</th>
        {{-- Title --}}
        <th scope="col">Nama Pengguna</th>
        {{-- Kategori --}}
        <th scope="col">Tanggal Lahir</th>
        {{-- Ini Action RUD --}}
        <th scope="col">RUD</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach ($posts as $post)    --}}
        <tr>
        <td></td>
        {{-- <td>{{ $post->id }}</td>
        <td>{{ $post->category_id }}</td> --}}
        <td></td>
        <td></td>
        <td>
            {{-- READ --}}
            <a href="/admin/users/show" class="badge bg-info"><span data-feather="eye"></span></a>
            {{-- UPDATE --}}
            <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
            {{-- DELETE --}}
            <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
        </td>
        </tr>
        {{-- @endforeach --}}
      </tbody>
    </table>
  </div>

@endsection