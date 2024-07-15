
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
        <a class="nav-link {{ request()->is('learning_labs') ? 'active' : '' }}" href="{{ route('learning_labs') }}"><h4><i class="mdi mdi-map"></i> Learning Labs</h4></a>

        <a class="nav-link {{ request()->is('display-bundle-list') ? 'active' : '' }}" href="{{ route('display-bundle-list') }}"><h4><i
                    class="mdi mdi-format-list-bulleted"></i> STIBs </h4></a>
        <a class="nav-link {{ request()->is('inventory-data-list') ? 'active' : '' }}" href="{{ route('inventory-data-list') }}"><h4><i class="mdi mdi-file-document"></i>Inventory Data</h4></a>
        <a class="nav-link {{ request()->is('graphs') ? 'active' : '' }}" href="{{ route('graphs') }}"><h4><i class="mdi mdi-graphql"></i> Infographics</h4></a>

        <a class="nav-link {{ request()->is('about_us') ? 'active' : '' }}" href="{{ route('about_us') }}"><h4><i class="mdi mdi-comment-question-outline"></i>
                About Us </h4></a>
        {{--        <a class="nav-link active" href="#"><h4><i class="mdi mdi-phone"></i> Contact Us</h4></a>--}}

    </nav>
</div>



<!-- Additional CSS for styling the unified navbar -->
<style>
    .navbar {
        background-color: #343a40;
    }

    .navbar .nav-link {
        color: white;
    }

    .navbar .nav-link:hover {
        color: #f8f9fa;
    }

    .navbar .dropdown-menu {
        background-color: #343a40;
        border: none;
    }

    .navbar .dropdown-menu .dropdown-item {
        color: white;
    }

    .navbar .dropdown-menu .dropdown-item:hover {
        background-color: #495057;
        color: #f8f9fa;
    }

    .navbar .dropdown-toggle::after {
        display: none;
    }

    .navbar .nav-link.active {
        font-weight: bold;
        color: #007bff;
    }

    .nav-item.dropdown .dropdown-menu {
        position: absolute;
        will-change: transform;
        top: 100%;
        left: 0;
        transform: translate3d(0, 0, 0);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.175);
        padding: 0.5rem 0;
        margin: 0;
        border-radius: 0.25rem;
        min-width: 10rem;
        z-index: 1000;
    }

    .nav-item.dropdown .dropdown-toggle::after {
        content: '';
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent;
    }

    .nav-item.dropdown .dropdown-menu .dropdown-item {
        padding: 0.5rem 1rem;
    }

    .nav-item.dropdown .dropdown-menu .dropdown-item:hover,
    .nav-item.dropdown .dropdown-menu .dropdown-item:focus {
        background-color: #f8f9fa;
        color: #343a40;
    }

    /* Optional: Media queries for responsive adjustments */
    @media (max-width: 767.98px) {
        .navbar .dropdown-menu {
            position: static;
            float: none;
        }
    }
</style>
