@extends('admin.layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col pt-3 pb-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Aturan Penyakit : {{ $data->penyakit->namapenyakit }}</h2>
                    </div>
                </div>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th style="width: 50px">No</th>
                            <th style="width: 100px" class="text-center">Kode Gejala</th>
                            <th class="text-center">Nama Gejala</th>
                        </tr>
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($gejala as $d)
                        <tbody>
                            <tr>
                                <th class="text-center">{{ $no++ }}</th>
                                <td class="text-center">{{ $d->gejala->kodegejala }}</td>
                                <td>{{ $d->gejala->namagejala }}</td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{ route('diagnosis.index') }}" class="btn btn btn-primary">Kembali</a>
                <a href="{{ route('rule', ['id' => $id]) }}" class="btn btn btn-outline-danger ml-5">Tambah Gejala</a>
            </div>
        </div>
    </div>
@endsection
