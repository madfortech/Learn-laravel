<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{('/')}}">
            Learn Laravel
        </a>
    <button 
        class="navbar-toggler" 
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" 
        aria-controls="navbarNav" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
   
        <ul class="navbar-nav ms-auto">

        
        @if (Route::has('login'))
        @auth

            
            <li class="nav-item">
                <a class="nav-link" href="{{('/home')}}">Home</a>
            </li>



            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" 
                    id="navbarDropdown" 
                    role="button" 
                    data-bs-toggle="dropdown" 
                    aria-expanded="false">
                    <div>   {{ Auth::user()->name }}</div>

                </a>


                <ul 
                    class="dropdown-menu border-0 rounded-0 bg-dark"
                    aria-labelledby="navbarDropdown">

                    <li>
                        <a class="nav-link" href="{{route('settings.index')}}">
                            Settings
                        </a>
                    </li>
                  
                   
                    <li>
                        <a class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                           @csrf

                                <a  class="nav-link" href="route('logout')"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('Log out') }}
                                </a>
                            </form>
                        </a>
                    </li>
                </ul>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            @endif
        @endauth

      
        @endif


        </ul>

       
    </div>
  </div>
</nav>