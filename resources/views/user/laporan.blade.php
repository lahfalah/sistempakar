@extends('user.layouts.main')
@section('container')
    <div class="card card-maroon">
        <div class="card-header">
            <h3 class="text-center">Riwayat Laporan</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col pt-3">
                    <div class="card">
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 70px" class="text-center">No</th>
                                        <th style="width: 200px" class="text-center">Nama Penyakit</th>
                                        <th class="text-center">Banyak Gejala</th>
                                        <th style="width: 120px" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($laporan as $d)
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-center">{{ $no++ }}</th>
                                            <td class="text-center">{{ $d->diagnosa->penyakit->namapenyakit }}</td>
                                            <td class="text-center">{{ count($d->diagnosa->item) }}</td>
                                            <td class="text-center">
                                                {{-- Lihat Data --}}
                                                <a href="" class="badge bg-info"><i class="fas fa-eye"></i></a>
                                                {{-- DELETE --}}
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action=""
                                                    method="" class="d-inline">
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
    @endsection
