@extends('admin.layouts.main')

@section('container')
    <section class="container">
        <div class="container-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header text-center bg-gray-dark">
                                <h1><b>Data-Data Admin</b></h1>
                            </div>
                            <div class="card-body">
                                {{-- Tambah Data Informasi --}}
                                <div class="col-md-3 mb-3">
                                    <a href="/admin/users/create">
                                        <button type="button" class="btn btn-primary btn-block"><i
                                                class="fas fa-plus-square"></i> Tambah Data Admin</button>
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
                                            <th style="width: 100px" class="text-center">No</th>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">Email</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data as $d)
                                        @if ($d->level == 'Admin')
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="text-center">{{ $no++ }}</th>
                                                    <td class="text-center">{{ $d->name }}</td>
                                                    <td class="text-center">{{ $d->email }}</td>
                                                </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                    {{ $data->links() }}
                                </table>
                            </div>
                        </div>
                    </div>
    </section>

    <section class="container">
        <div class="container-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header text-center bg-gray-dark">
                                <h1><b>Data-Data Pengguna</b></h1>
                            </div>
                            <div class="card-body">
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
                                            <th style="width: 100px" class="text-center">No</th>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">Email</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data as $d)
                                        @if ($d->level == 'User')
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="text-center">{{ $no++ }}</th>
                                                    <td class="text-center">{{ $d->name }}</td>
                                                    <td class="text-center">{{ $d->email }}</td>
                                                </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                    {{ $data->links() }}
                                </table>
                            </div>
                        </div>
                    </div>
    </section>
@endsection
