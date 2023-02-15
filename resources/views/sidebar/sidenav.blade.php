            <div class="text-center">
                
                <strong>
                    {{ Auth::user()->name }}   
                </strong>
                <ul class="list-none p-2 my-3 leading-8">
                    <li>
                        <a href="{{route('user.home')}}">Home</a>
                    </li>
                    
                    <li>
                        <form 
                        method="POST" 
                        action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            Logout
                        </a>
                        </form>
                    </li>
                </ul>
            </div>