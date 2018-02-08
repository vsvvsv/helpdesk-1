<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }} Admin
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            @if (Auth::check())
                <ul class="navbar-nav">
                    <li class="nav-item {{ return_if(on_page('admin'), 'active') }}"><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="nav-item {{ return_if(on_page('admin/browse/*'), 'active') }}"><a class="nav-link" href="{{ route('admin.browse') }}">Browse Tickets</a></li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('admin.search') }}">
                        <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search tickets">
                    </form>
                @endif
                <ul class="nav navbar-nav ml-auto">
                    @if (Auth::guest())
                        <li class="nav-item"><a href="{{ route('admin.login') }}" class="nav-link">Login</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a href="" class="dropdown-item">
                                    Account Overview
                                </a>

                                <a href="{{ route('logout') }}" class="dropdown-item"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>

        </div>
    </nav>

