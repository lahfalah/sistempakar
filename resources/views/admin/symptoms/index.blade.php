@extends('admin.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data-Data Gejala</h1>
  </div>

  <div class="table-responsive col-lg-10">
    {{-- Membuat Data Ada Disini --}}
    <a href="{{ route('symptoms.create') }}" class="btn btn-primary mb-3">Membuat Gejala Baru</a>
    @if (count($errors) > 0)
  <div class="alert alert-danger alert-dismissible">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>    
  @endif
  @if (\Session::has ('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ \Session::get('success') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
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
        <th scope="col" class="col-sm-2">Kode Gejala</th>
        {{-- Kategori --}}
        <th scope="col" class="col-lg-8">Nama Gejala</th>
        {{-- Ini Action RUD --}}
        <th scope="col">Aksi</th>
        </tr>
      </thead>
      @php
          $no = 1;
      @endphp
        @foreach ($data as $d)
      <tbody>
        <tr>
        <th scope="row">{{ $no++ }}</th>
        {{-- <td>{{ $post->id }}</td>
        <td>{{ $post->category_id }}</td> --}}
        <td>{{ $d->kodegejala }}</td>
        <td>{{ $d->namagejala }}</td>
        <td>
            {{-- READ --}}
            {{-- <a href="" class="badge bg-info"><span data-feather="eye"></span></a> --}}
            {{-- UPDATE --}}
            <a href="{{ route('symptoms.edit', $d->id) }}" class="badge bg-warning"><span data-feather="edit"></span></a>
            {{-- DELETE --}}
            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
    action="{{ route('symptoms.destroy', $d->id) }}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button class="badge bg-danger border-0"><span data-feather="x-circle"></span></button>
</form>
        </td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>

@endsection