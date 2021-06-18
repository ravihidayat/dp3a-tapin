@elseif(Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-item nav-item-custom nav-link dropdown-toggle p-2" href="#" id="navbarDropdown"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="profile">
                                <div class="profile-circle">
                                    <div class="profile-user"><img src="{{asset('assets/user.png')}}" alt="User"></div>
                                </div>
                            </div>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                    </li> -->
                    <!-- @endif
                    @endauth