@extends('layouts.main')

@section('container')
    <section id="home" style="background-image: url('img/bg-2.jpeg'); background-size: cover">
        <div class="container-fluid text-center pt-5 pb-5" style="border-top: 5px solid #94d0f3">
            <h1 style="color: aliceblue;">Welcome to WebTix</h1>
            <h5 style="color: aliceblue;">Tempat yang tepat untuk booking tiket konser impianmu!</h5>
        </div>
    </section>
    <section id="booking">
        <div class="container-fluid text-center pt-3" style="border-top: 5px solid #94d0f3">
            <h1 style="color: rgb(41, 41, 41);">Book your ticket Now!</h1>
            <h5 style="color: rgb(30, 30, 31);">Silahkan isi formulir pendaftaran anda</h5>
            <div class="card py-2 mb-2 mx-5">
                <div class="container-fluid pt-4 pb-2">
                    <form action="{{ route('biodata.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-start">Nama</div>
                            </div>
                            <div class="col-xl-8">
                                <div class="mb-4">
                                    <input id="tname" type="text" class="form-control" name="tname"
                                        value="{{ old('tname') }}" required
                                        placeholder="Silahkan masukan nama lengkap anda!">

                                    @if ($errors->has('tname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xl-2"></div>

                            <div class="col-xl-2 pb-5">
                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-start">Email</div>
                            </div>
                            <div class="col-xl-8">
                                <input id="temail" type="email" class="form-control" name="temail"
                                    value="{{ old('temail') }}" required
                                    placeholder="Masukan email anda, contoh : example@example.com">

                                @if ($errors->has('temail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('temail') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-xl-2"></div>

                            <div class="col-xl-2 pb-5">
                                <div class="h5 mb-0 font-weight-bold text-gray-800 text-start">No Handphone</div>
                            </div>
                            <div class="col-xl-8">
                                <input id="tphone_number" type="text" class="form-control" name="tphone_number"
                                    value="{{ old('tphone_number') }}" required
                                    placeholder="Masukan nomor Handphone anda!">

                                @if ($errors->has('tphone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tphone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-xl-2"></div>


                        </div>
                        <div class="form-group">
                            <div class="col col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
