@extends('user.layouts.main')
@section('container')
    <div class="card text-light" style="background-color:#37050777">
        <div class="card-header">
            <h3 class="card-title">Riwayat Data Diagnosa <b>{{ auth()->user()->name }}</b></h3>
        </div>
        <div class="card-body" style="background-color:#700a0e">
            <table id="example1" class="table table-bordered table-striped table-dark">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Penyakit</th>
                        <th class="text-center">Obat</th>
                        <th class="text-center">Gejala</th>
                        {{-- <th class="text-center">Cetak</th> --}}
                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>
                    @foreach ($laporan as $d)
                        <tr>
                            <th scope="row" class="text-center">{{ $no++ }}</th>
                            <td class="text-center">{{ $d->created_at->format('d-M-Y') }}</td>
                            <td class="text-center">{{ $d->diagnosa->penyakit->namapenyakit }}</td>
                            <td class="text-center">{{ $d->diagnosa->penyakit->obat }}</td>
                            {{-- <td class="text-center">{{ count($d->diagnosa->item) }}</td> --}}
                            <td>
                                <ul>
                                    @foreach ($d->diagnosa->item as $item)
                                        <li>{{ $item->gejala->namagejala }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            {{-- <td class="text-center"><a href="/cetak/{{ $d->id }}" target="_blank"><button
                                        class="btn btn-success">Cetak <i class="fa-solid fa-file-pdf"></i>
                                    </button>
                                </a></td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
