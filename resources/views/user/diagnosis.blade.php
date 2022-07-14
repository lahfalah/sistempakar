@extends('user.layouts.main')
@section('container')
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <form action="/diagnosis" method="POST" >
                    @csrf
                    @foreach ($data as $d)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="deseases[]" value="{{ $d->id }}"
                                id="diagnos-{{ $d->id }}">
                            <label class="form-check-label mb-3" for="diagnos-{{ $d->id }}">
                                {{ $d->namagejala }} 
                            </label>
                        </div>
                    @endforeach

                    <p class="text-center mb-3">
                        <button class="btn btn-success" type="submit" >
                            Cek Diagnosa
                        </button>
                        
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
