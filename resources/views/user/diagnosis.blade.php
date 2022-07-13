@extends('user.layouts.main')
@section('container')
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                @foreach ($data as $d)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label mb-3" for="flexCheckDefault">
                            {{ $d->namagejala }}
                        </label>
                    </div>
                @endforeach
                <p class="text-center mb-3"><a href="" class="text-decoration-none btn btn-success">Cek Diagnosa</a>
                </p>
            </div>
        </div>
    </div>
@endsection
