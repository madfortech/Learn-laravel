<nav class="bg-gray-900 p-6">
  <div class="container mx-auto flex items-center justify-between">
    <a href="{{('/')}}" class="text-white font-bold text-xl">
        Your Brand
    </a>
    <div class="flex  items-center">
        <ul class="text-white inline-block">
            @auth
            <li>
                <a href="{{route('user.home')}}">
                    home  
                </a>
            </li>
            <li>
                <a href="">
                    {{ Auth::user()->email }}   
                </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="route('logout')"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        logout  
                    </a>
                </form>
            </li>
            @else
            <li>
                <a href="{{route('login')}}">
                    login
                </a>
            </li>
            @endauth
        </ul>
    </div>
  </div>
</nav>


  