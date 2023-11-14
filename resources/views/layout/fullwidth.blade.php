<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>STIBs -Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo-text.png') }}">
    <link href="{{ asset('icons/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('icons/font-awesome-old/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('icons/material-design-iconic-font/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('icons/themify-icons/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('icons/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('icons/avasta/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('icons/flaticon/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('icons/icomoon/icomoon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/css/aos.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/metismenu/css/metisMenu.min.css') }}" rel="stylesheet">


    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                @if(session('status'))
                    <div class="col-xl-6">
                        <div class="alert alert-success left-icon-big alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                            </button>
                            <div class="media">
                                <div class="alert-left-icon-big">
                                    <span><i class="mdi mdi-check-circle-outline"></i></span>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-1 mb-2">Success!</h5>
                                    <p class="mb-0">{{ session('status') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                    @if ($errors->any())
                    <div class="col-xl-6">
                        <div class="alert alert-danger left-icon-big alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                            </button>
                            <div class="media">
                                <div class="alert-left-icon-big">
                                    <span><i class="mdi mdi-check-circle-outline"></i></span>
                                </div>
                                <div class="media-body">
{{--                                    <h5 class="mt-1 mb-2">Success!</h5>--}}
                                    @foreach ($errors->all() as $error)
                                    <p class="mb-0">{{ $error }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
			@yield('content')
            </div>
        </div>
    </div>
{{--@include('elements.footer-scripts')--}}
</body>

</html>
