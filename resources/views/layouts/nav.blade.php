    <nav class="navbar navbar-light navbar-expand-md fixed-top bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">Learn laravel</a>
            <button data-bs-toggle="collapse" class="navbar-toggler border-0 rounded-0" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav d-flex flex-row flex-grow-1 justify-content-center p-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('posts.index')}}">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="auth/register.html">Sceencasts</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto p-3">
                    <li class="nav-item">
                        <a class="nav-link" href="auth/login.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                            Dropdown 
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Edit profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-primary rounded-0 border-1" href="auth/login.html">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End Navbar section-->