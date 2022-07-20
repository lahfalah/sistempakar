@extends('admin.layouts.main')

@section('container')
    <section class="container">
        <div class="container-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header text-center bg-gray-dark">
                                <h1><b>Data-Data Penyakit</b></h1>
                            </div>
                            <div class="card-body">
                                {{-- Tambah Data Informasi --}}
                                <div class="col-md-3 mb-3">
                                    <a href="{{ route('deseases.create') }}">
                                        <button type="button" class="btn btn-primary btn-block"><i
                                                class="fas fa-plus-square"></i> Tambah Data Penyakit</button>
                                    </a>
                                </div>
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger alert-dismissible">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (\Session::has('success'))
                                    <script>
                                        $(document).Toasts(
                                            Swal.fire({
                                                position: 'top-center',
                                                icon: 'success',
                                                title: '{{ \Session::get('success') }}',
                                                timer: 2000
                                            }))
                                    </script>
                                @endif
                                <table id="example2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 70px" class="text-center">No</th>
                                            <th style="width: 200px" class="text-center">Kode Penyakit</th>
                                            <th class="text-center">Nama Penyakit</th>
                                            <th class="text-center">Obat</th>
                                            <th style="width: 120px" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data as $d)
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-center">{{ $no++ }}</th>
                                                <td class="text-center">{{ $d->kodepenyakit }}</td>
                                                <td class="text-center">{{ $d->namapenyakit }}</td>
                                                <td class="text-center">{{ $d->obat }}</td>
                                                <td class="text-center">
                                                    {{-- UPDATE --}}
                                                    <a href="{{ route('deseases.edit', $d->id) }}"
                                                        class="badge bg-warning"><i class="fas fa-edit"></i></a>
                                                    {{-- DELETE --}}
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                        action="{{ route('deseases.destroy', $d->id) }}" method="POST"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="badge bg-danger border-0"><i
                                                                class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
