@extends('user.layouts.main')
@section('container')
    <div class="card" style="background-color:#37050777">
        <div class="card-header">
            <h3 class="text-center text-light">Riwayat Diagnosa</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="background-color:#370507">
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th style="width: 50px" class="text-center">No</th>
                                        <th style="width: 250px" class="text-center">Penyakit</th>
                                        <th style="width: 100px" class="text-center">Gejala</th>
                                        <th style="width: 150px" class="text-center">Aksi</th>
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
                                            {{-- Lopping Untuk Model Gejala --}}
                                            {{-- <td class="text-center">
                                                <ul>
                                                    @foreach($d->diagnosa->item as $item)
                                                        <li>{{ $item->gejala->namagejala }}</li>
                                                    @endforeach
                                                </ul>
                                            </td> --}}
                                            
                                            <td class="text-center">
                                                {{-- Lihat Data --}}
                                                <a href="" class="badge bg-info show_confirm"><i
                                                        class="fas fa-circle-info">
                                                    </i></a>
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
                        <p class="text-center">
                            <a href="/cetak"><button class="btn btn-sm btn-success"><h4><i class="fa-solid fa-file-pdf"></i></h4></button></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
