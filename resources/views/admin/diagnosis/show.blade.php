@extends('admin.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            {{-- Beri {{}} untuk memanggil database + nama data --}}
            <h1>Tampilan Show Penyakit</h1>
            <p>Penjelasan Penyakit</p>

            <a href="" class="btn btn-success"><span data-feather="arrow-left"></span>Kembali</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span>Hapus</a>

        <article class="fs-5">
            
        </article>
            <a href="/admin/index">Kembali</a>
        </div>   
    </div>
</div>


@endsection