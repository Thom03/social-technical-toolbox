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
{{--    <div class="nav-header">--}}
{{--        <a href="{{ route('dashboard') }}" class="brand-logo">--}}
{{--            @if(!empty($logo))--}}
{{--                <img class="logo-abbr" src="{{ asset($logo) }}" alt="">--}}
{{--            @else--}}
{{--                <img class="logo-abbr" src="{{ asset('img/logo.png') }}" alt="">--}}
{{--            @endif--}}
{{--            @if(!empty($logoText))--}}
{{--                <img class="logo-compact" src="{{ asset($logoText) }}" alt="">--}}
{{--                <img class="brand-title" src="{{ asset($logoText) }}" alt="">--}}
{{--            @else--}}
{{--                <img class="logo-compact" src="{{ asset('img/logo-text.png') }}" alt="">--}}
{{--                <img class="brand-title" src="{{ asset('img/logo-text.png') }}" alt="">--}}
{{--            @endif--}}
{{--        </a>--}}

{{--        <div class="nav-control">--}}
{{--            <div class="hamburger">--}}
{{--                <span class="line"></span><span class="line"></span><span class="line"></span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->

    @include('elements.navbar')


    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-fluid" style="margin-left: auto;">
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
</body>
</html>
