            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                    <div class=" container-fluid  ">
                        <a class="navbar-brand" href="#pablo"> Dashboard </a>
                        <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar burger-lines"></span>
                            <span class="navbar-toggler-bar burger-lines"></span>
                            <span class="navbar-toggler-bar burger-lines"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            <ul class="nav navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                        <i class="nc-icon nc-palette"></i>
                                        <span class="d-lg-none">Dashboard</span>
                                    </a>
                                </li>
                                
                                <li class="dropdown nav-item">
                                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                        <i class="nc-icon nc-planet"></i>
                                        <span class="notification">5</span>
                                        <span class="d-lg-none">Notification</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Notification 1</a>
                                        <a class="dropdown-item" href="#">Notification 2</a>
                                        <a class="dropdown-item" href="#">Notification 3</a>
                                        <a class="dropdown-item" href="#">Notification 4</a>
                                        <a class="dropdown-item" href="#">Another notification</a>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nc-icon nc-zoom-split"></i>
                                        <span class="d-lg-block">&nbsp;Search</span>
                                    </a>
                                </li>
                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="nav navbar-nav navbar-right">
                                <!-- Authentication Links -->
                                @if (Auth::guest())
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @else
                                    <li class="dropdown">
                                        Welcome,
                                        <a href="#"  data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} 
                                        </a>
                
                                        
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                            <button type="button" class="btn btn-default" aria-pressed="true"><strong>Logout</strong></button>
                                        </a>
        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->