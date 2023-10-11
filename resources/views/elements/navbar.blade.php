<nav class="navbar navbar-expand-lg fixed-top navbar-dark nav-bar-colour">
    <img src="{{ asset('img/logo-white.png') }}" alt="homepage" class="light-logo" height="70"/>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    </div>
</nav>

<div class="nav-scroller bg-white shadow-sm">
    <nav class="nav  justify-content-center nav-underline">
        <a class="nav-link" href="{{ route('map_page') }}"><h4><i class="mdi mdi-map"></i> Interactive Map</h4></a>
        <a class="nav-link active" href="{{ route('landing_page_grid') }}"><h4><i
                    class="mdi mdi-format-list-bulleted"></i> Bundles </h4></a>
        <a class="nav-link active" href="{{ route('graphs') }}"><h4><i class="mdi mdi-graphql"></i> Infographics</h4>
        </a>
        <a class="nav-link active" href="#"><h4><i class="mdi mdi-file-document"></i> Datasets </h4></a>
        <a class="nav-link active" href="{{ route('about_us') }}"><h4><i class="mdi mdi-comment-question-outline"></i>
                About Us </h4></a>
{{--        <a class="nav-link active" href="#"><h4><i class="mdi mdi-phone"></i> Contact Us</h4></a>--}}

    </nav>
</div>
