@extends('user.layouts.main')

@section('container')
    <h2 class="text-center">Pilih Gejala Yang Dialami</h2>
    {{-- Gejala Tidak Di Isi --}}
    @if (\Session::has('aturan'))
        <script>
            Swal.fire({
                position: 'top',
                icon: 'warning',
                title: '{{ \Session::get('aturan') }}',
                showConfirmButton: false,
                text: 'Mohon Untuk Isi Gejala Terlebih Dahulu',
                timer: 1500
            })
        </script>
    @endif
    {{-- Gejala Di Isi Tidak Sesuai Aturan --}}
    @if (\Session::has('maaf'))
        <script>
            Swal.fire({
                icon: 'error',
                title: '{{ \Session::get('maaf') }}',
                text: 'Mohon maaf karena keterbatasan informasi penyakit tidak ditemukan',
            })
        </script>
    @endif

    <style>
        /* #toggle {
            display: none;
        }

        .button {
            display: inline-block;
            width: 90px;
            height: 35px;
            background-color: #fff;
            border-radius: 30px;
            position: relative;
            cursor: pointer;
        }

        .button::after {
            content: url('../img/cancel.svg');
            width: 40px;
            height: 40px;
            background-color: #e03c3c;
            border: 2px solid #fff;
            border-radius: 50%;
            box-shadow: 0 0 5px rgba(0, 0, 0, .25);
            position: absolute;
            top: -5px;
            left: 0;
            display: grid;
            place-content: center;
            line-height: 0;
            transition: background-color 1s,
                transform 1s ease-in;
        }
        #toggle:checked + .button::after{
            content: url('../img/check.svg');
            background-color: #1f257f;
            transform: translateX(50px) rotate(360deg);
        } */
    </style>

    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <form action="/diagnosis" method="POST">
                    @csrf
                    @foreach ($data as $d)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="deseases[]" value="{{ $d->id }}"
                                id="diagnos-{{ $d->id }}">
                            <label class="form-check-label mb-2" for="diagnos-{{ $d->id }}">
                                {{ $d->namagejala }}
                            </label>
                        </div>
                        
                    @endforeach
                    <p class="text-center mb-3">
                        <button class="btn btn-success" type="submit">
                            Cek Diagnosa
                        </button>
                    </p>
                </form>
            </div>
        </div>
    </div>
    
@endsection
