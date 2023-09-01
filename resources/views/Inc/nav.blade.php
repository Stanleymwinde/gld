<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light pt-3" id="ftco-navbar">
    <div class="container">

        <a class="navbar-brand mt-2" href="/"><img src="/images/goldenlogo.png" alt=""
                style="height: 70px; width:70px"> Golden Dream</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
                    <a href="{{ route('about') }}" class="nav-link">About</a>
                </li>
                <li class="nav-item {{ Route::is('agents') ? 'active' : '' }}">
                    <a href="{{ route('agents') }}" class="nav-link">Agent</a>
                </li>
                <li class="nav-item {{ Route::is('services') ? 'active' : '' }}">
                    <a href="{{ route('services') }}" class="nav-link">Services</a>
                </li>
                <li class="nav-item {{ Route::is('properties') ? 'active' : '' }}">
                    <a href="{{ route('properties') }}" class="nav-link">Properties</a>
                </li>
                <li class="nav-item {{ Route::is('blog') ? 'active' : '' }}">
                    <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                </li>
                <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
