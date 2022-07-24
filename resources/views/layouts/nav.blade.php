    <nav class="navbar navbar-light navbar-expand-md fixed-top py-3 px-4">
        <div class="container">
            <a class="navbar-brand text-capitalize" href="{{('/')}}">
                Learn laravel
            </a>
            <button data-bs-toggle="collapse" class="navbar-toggler border-0 rounded-0" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto p-3">
                @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{('/home')}}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                            {{ Auth::user()->email }}  
                        </a>
                        <div class="dropdown-menu my-4">
                            <a class="dropdown-item" href="#">
                                Edit profile
                            </a>
                            <a class="dropdown-item" href="#">
                                Settings
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="route('logout')"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    Logout
                                </a>
                            </form>
                        </div>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{('login')}}">
                            Login
                        </a>
                    </li>
                    @endauth
                @endif
                </ul>
            </div>
        </div>
    </nav>
    <!--End Navbar section-->  
  