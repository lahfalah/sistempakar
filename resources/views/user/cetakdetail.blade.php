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
        <p align="center"><b> Riwayat Diagnosa </b> {{ $laporan->created_at->format('d-M-Y') }}</p>
        <table style="text-align: left">
            <tr>
                <td>Nama</td>
                <th>: <b> {{ auth()->user()->name }}</b></th>
            </tr>
            <tr>
                <td>Jenis Kelamin </td>
                <th>: {{ auth()->user()->jkelamin }}</th>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir </td>
                <th>: {{ auth()->user()->kota }} {{ auth()->user()->tanggal->format('d-M-Y') }}</th>
            </tr>
        </table>
        <br>
        <table class="static" align="center" rules="all" border="2px" style="width:90%">
            <tr>
                <th style="width: 70px">No</th>
                <th style="width: 150px">Penyakit</th>
                <th style="width: 200px">Obat</th>
                <th>Gejala</th>
            </tr>
            @php
                $no = 1;
            @endphp
            {{-- @foreach ($laporan as $d) --}}
            <tbody>
                <tr>
                    <th>{{ $no++ }}</th>
                    <td align="center">{{ $laporan->diagnosa->penyakit->namapenyakit }}</td>
                    <td >{{ $laporan->diagnosa->penyakit->obat }}</td>
                    {{-- <td align="center">{{ $laporan->created_at }}</td> --}}
                    <td>
                        <ul>
                            @foreach ($laporan->diagnosa->item as $laporan)
                                <li>{{ $laporan->gejala->namagejala }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                {{-- @endforeach --}}
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
