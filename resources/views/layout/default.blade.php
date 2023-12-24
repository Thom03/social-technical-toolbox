<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ config('dz.name') }} | @yield('title', $page_title )</title>

	<meta name="description" content="@yield('page_description', $page_description )"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />



	@if(!empty(config('dz.public.pagelevel.css.'.$action )))
		@foreach(config('dz.public.pagelevel.css.'.$action ) as $style)
				<link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
		@endforeach
	@endif

	{{-- Global Theme Styles (used by all pages) --}}
	@if(!empty(config('dz.public.global.css')))
		@foreach(config('dz.public.global.css') as $style)
			<link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
		@endforeach
	@endif


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ route('dashboard') }}" class="brand-logo">
			@if(!empty($logo))
				<img class="logo-abbr" src="{{ asset($logo) }}" alt="">
			@else
                <img class="logo-abbr" src="{{ asset('images/logo.png') }}" alt="">
			@endif
			@if(!empty($logoText))
                <img class="logo-compact" src="{{ asset($logoText) }}" alt="">
                <img class="brand-title" src="{{ asset($logoText) }}" alt="">
			@else
                <img class="logo-compact" src="{{ asset('img/logo-text.png') }}" alt="">
                <img class="brand-title" src="{{ asset('img/logo-text.png') }}" alt="">
			@endif
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->

		@include('elements.header')


        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('elements.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->



        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
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
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                </div>
                                <div class="media-body">
                                                                        <h5 class="mt-1 mb-2"><strong>Errors!</strong></h5>
                                    @foreach ($errors->all() as $error)
                                        <p class="mb-0">{{ $error }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            <!-- row -->
            @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->

		@include('elements.footer')

        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
	@include('elements.footer-scripts')
    <script src="{{ asset('js/style.js') }}"></script>


</body>
</html>
