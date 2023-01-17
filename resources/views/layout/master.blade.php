<!DOCTYPE html>
<html>
<head>
  <title>Social Technical Toolbox</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">
  
  <link rel="shortcut icon" href="{{ url('/favicon.ico') }}">


  <link href="{{ url('css/perfect-scrollbar.css') }}" rel="stylesheet"> 
  <!-- <link href="{{ url('css/materialdesignicons.min.css') }}" rel="stylesheet">  -->
  <link media="all" type="text/css" rel="stylesheet" href="https://www.bootstrapdash.com/demo/star-laravel-free/template/assets/plugins/@mdi/font/css/materialdesignicons.min.css">
  @stack('plugin-styles')

 
  <link href="{{ url('css/app.css') }}" rel="stylesheet"> 

  @stack('style')
</head>
<body data-base-url="{{url('/')}}">

 

  <div class="container-scroller" id="app">
    @include('layout.header')
    <div class="container-fluid page-body-wrapper">
      @include('layout.sidebar')
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        @include('layout.footer')
      </div>
    </div>
  </div>



 <!-- base js -->

 <script type="text/javascript" src="{{ url('js/app.js') }}"></script>
 <script type="text/javascript" src="{{ url('js/perfect-scrollbar.min.js') }}"></script>
  
  <!-- end base js -->

  <!-- plugin js -->
  @stack('plugin-scripts')
  <!-- end plugin js -->

  <!-- common js -->
 
  <script type="text/javascript" src="{{ url('js/off-canvas.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/hoverable-collapse.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/misc.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/settings.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/todolist.js') }}"></script>
  <!-- end common js -->

  @stack('custom-scripts')
</body>
</html>