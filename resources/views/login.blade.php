<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

{{-- <body style="background-image: url('img/bg-1.jpg'); background-size: cover"> --}}

<body style="background-image: url('img/bg-1.jpg'); background-size: cover">

    <div class="card py-2 mb-5 mx-5 mt-5 text-center">
        <h1 style="color: rgb(41, 41, 41);">Admin Login</h1>
        <h5 style="color: rgb(30, 30, 31);">Silahkan masuk untuk melanjutkan</h5>
    </div>
    <div class="card py-2 mb-5 mx-5 mt-5 pt-5">
        <div class="container-fluid">
            <form action="" method="POST">
                @csrf
                <div class="row">
                    <div class="col-xl-2 pb-5">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 text-start">Email</div>
                    </div>
                    <div class="col-xl-8">
                        <input id="email" type="email" class="form-control" name="email"
                            value="{{ old('email') }}" required
                            placeholder="Email">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-xl-2"></div>
                    <div class="col-xl-2 pb-5">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 text-start">Password</div>
                    </div>
                    <div class="col-xl-8">
                        <input id="password" type="password" class="form-control" name="password"
                            value="{{ old('password') }}" required
                            placeholder="Password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-xl-2"></div>

                </div>
                <div class="form-group">
                    <div class="col col-md-offset-4 text-center">
                        <button type="submit" class="btn btn-primary">
                            Add Biodata
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
