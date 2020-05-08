<div class="navbar-fixed">

    <nav>

        <div class="nav-wrapper">
            <a href="{{ route('homepage') }}" class="brand-logo">Perpusku</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @else
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">Logout</a></li>
                </ul>

                <li>
                    <a href="" class="dropdown-trigger" data-target="dropdown1">{{ auth()->user()->name }}</a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>
</div>

    <ul class="sidenav" id="mobile-demo">
        @guest
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
        @else
        <ul id="dropdown2" class="dropdown-content">
            <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">Logout</a></li>
        </ul>

        <li>
            <a href="" class="dropdown-trigger" data-target="dropdown2">{{ auth()->user()->name }}</a>
        </li>
        @endguest
    </ul>


    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
