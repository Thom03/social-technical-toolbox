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
        <a class="nav-link {{ request()->is('map_page') ? 'active' : '' }}" href="{{ route('map_page') }}"><h4><i class="mdi mdi-map"></i> Interactive Map</h4></a>
        <a class="nav-link {{ request()->is('display-bundle-list') ? 'active' : '' }}" href="{{ route('display-bundle-list') }}"><h4><i
                    class="mdi mdi-format-list-bulleted"></i> Bundles </h4></a>
        <a class="nav-link {{ request()->is('inventory-data-list') ? 'active' : '' }}" href="{{ route('inventory-data-list') }}"><h4><i class="mdi mdi-file-document"></i>Inventory Data</h4></a>
        <a class="nav-link {{ request()->is('graphs') ? 'active' : '' }}" href="{{ route('graphs') }}"><h4><i class="mdi mdi-graphql"></i> Infographics</h4></a>

        <a class="nav-link {{ request()->is('about_us') ? 'active' : '' }}" href="{{ route('about_us') }}"><h4><i class="mdi mdi-comment-question-outline"></i>
                About Us </h4></a>
{{--        <a class="nav-link active" href="#"><h4><i class="mdi mdi-phone"></i> Contact Us</h4></a>--}}

    </nav>
</div>
