
<nav class="navbar navbar-default navbar-static-top topnav {{ Request::segment(1) == '' ? 'index-nav' : '' }} ">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a id="logo" href="/sem_four_ajax/public/" class="flaticon-fork"></a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->


        <div class="nav navbar-nav">
            <a class="links {{ Request::segment(1) == 'meatballs' ? 'active' : '' }} " href="meatballs">VEGETARIAN MEATBALLS</a>
            <a class="links {{ Request::segment(1) == 'pancakes' ? 'active' : '' }} " href="pancakes">PANCAKES</a>
            <a class="links {{ Request::segment(1) == 'calendar' ? 'active' : '' }} " href="calendar">CALENDAR</a>
        </div>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a id="login-link" href="{{ route('login') }}">Login</a></li>
                    <li><a id="register-link" href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a id="log-out-link">
                                    Logout
                                </a>

                                <form id="logout-form"  style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
            