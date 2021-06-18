@elseif(Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-item nav-item-custom nav-link dropdown-toggle p-2" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="profile d-inline-block">
                                <div class="profile-circle">
                                    <img class="profile-user ml-1" src="{{asset('assets/user.png')}}" alt="User">
                                </div>
                            </div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-custom mr-8" aria-labelledby="navbarDropdown">
                            
                            <a class="dropdown-item" href="{{ url('/dashboard') }}">
                                {{ Auth::user()->name }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Keluar') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endif