<div class="navbar-fixed">

    <nav>

        <div class="nav-wrapper">
            <a href="{{ route('homepage') }}" class="brand-logo">Perpusku</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            </ul>
        </div>
    </nav>
</div>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
    </ul>
