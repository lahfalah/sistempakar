<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table.statis {
            position: relative;
            border: 1px solid black;
        }
    </style>
    <title>Cetak Laporan</title>
</head>

<body>
    <div class="form-grup">
        <p align="center">Riwayat Diagnosa<b> {{ auth()->user()->name }}</b></p>
        <table class="static" align="center" rules="all" border="2px" style="width:90%">
            <tr>
                <th style="width: 70px">No</th>
                <th style="width: 150px">Penyakit</th>
                <th style="width: 170px">Tanggal</th>
                <th> Nama Gejala</th>
            </tr>
            @php
                $no = 1;
            @endphp
            @foreach ($laporan as $d)
                <tbody>
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td align="center">{{ $d->diagnosa->penyakit->namapenyakit }}</td>

                            <td align="center">{{ $d->created_at->format('d-M-Y') }}</td>
                        {{-- <td class="text-center">{{ count($d->diagnosa->item) }}</td> --}}
                        {{-- Lopping Untuk Model Gejala --}}
                        <td>
                            <ul>
                                @foreach ($d->diagnosa->item as $item)
                                    <li>{{ $item->gejala->namagejala }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
            @endforeach
        </table>
    </div>
    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>
