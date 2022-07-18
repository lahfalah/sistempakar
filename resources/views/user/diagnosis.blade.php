@extends('user.layouts.main')

@section('container')
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
    <div class="card" style="background-color:#37050777">
        <div class="card-header">
            <h3 class="text-center text-light">Pilih Gejala Yang Dialami</h3>
        </div>
        <div class="container">
            <div class="row">
                <form action="/diagnosis" method="POST">
                    @csrf
                    <div class="col">
                        <div class="card px-2" style="background-color:#ffb3c1">
                            <div class="card-body">
                                @foreach ($data as $d)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="deseases[]"
                                            value="{{ $d->id }}" id="diagnos-{{ $d->id }}">
                                        <label class="form-check-label mb-2" for="diagnos-{{ $d->id }}">
                                            {{ $d->namagejala }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <p class="text-center mb-3">
                            <button class="btn col-5 btn-success" type="submit">
                                Cek Diagnosa
                            </button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    @endsection
