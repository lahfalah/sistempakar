@extends('user.layouts.main')
@section('container')
    <div class="card" style="background-color:#37050777">
        <div class="card-header">
            <h3 class="text-center text-light" style="">Riwayat Diagnosa</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="background-color:#370507">
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped table-dark mb-3">
                                <a href="/cetak" target="_blank"><button
                                        class="btn col-sm-3 btn-info mb-3 ml-auto">Cetak Keseluruhan Data <i
                                            class="fa-solid fa-file-pdf"></i>
                                    </button>
                                </a>
                                <thead>
                                    <tr>
                                        <th style="width: 70px" class="text-center">No</th>
                                        <th class="text-center">Waktu</th>
                                        <th class="text-center">Penyakit</th>
                                        <th class="text-center">Gejala</th>
                                        <th class="text-center">Cetak</th>
                                    </tr>
                                </thead>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($laporan as $d)
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-center">{{ $no++ }}</th>
                                            <td class="text-center">{{ $d->created_at }}</td>
                                            <td class="text-center">{{ $d->diagnosa->penyakit->namapenyakit }}</td>
                                            <td class="text-center">{{ count($d->diagnosa->item) }}</td>
                                            <td class="text-center"><a href="/cetak/{{ $d->id }}" target="_blank"><button
                                                class="btn btn-success">Cetak <i
                                                    class="fa-solid fa-file-pdf"></i>
                                            </button>
                                        </a></td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $laporan->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
