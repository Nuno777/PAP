{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ ('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Erro 404</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="">
    <link rel="stylesheet" href="/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/dist/css/font-awesome.min.css">
    <link rel="stylesheet" href="/dist/css/themify-icons.css">
    <link rel="stylesheet" href="/dist/css/metisMenu.css">
    <link rel="stylesheet" href="/dist/css/owl.carousel.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- style css -->
    <link rel="stylesheet" href="/dist/css/typography.css">
    <link rel="stylesheet" href="/dist/css/default-css.css">
    <link rel="stylesheet" href="/dist/css/styles.css">
    <link rel="stylesheet" href="/dist/css/responsive.css">
    <!-- modernizr css -->
    <script src="/dist/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- error area start -->
    <div class="error-area ptb--100 text-center">
        <div class="container">
            <div class="error-content">
                <h2>404</h2>
                <p>Ooops!</p>
                <a href="/">Pagina Principal</a>
            </div>
        </div>
    </div>
    <!-- error area end -->

    <!-- jquery latest version -->
    <script src="/dist/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="/dist/js/popper.min.js"></script>
    <script src="/dist/js/bootstrap.min.js"></script>
    <script src="/dist/js/owl.carousel.min.js"></script>
    <script src="/dist/js/metisMenu.min.js"></script>
    <script src="/dist/js/jquery.slimscroll.min.js"></script>
    <script src="/dist/js/jquery.slicknav.min.js"></script>
    <!-- others plugins -->
    <script src="/dist/js/plugins.js"></script>
    <script src="/dist/js/scripts.js"></script>
</body>

</html>
