            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                    <div class=" container-fluid  ">
                        
                        <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar burger-lines"></span>
                            <span class="navbar-toggler-bar burger-lines"></span>
                            <span class="navbar-toggler-bar burger-lines"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            <ul class="nav navbar-nav mr-auto" style="width:49%;padding:5px;margin-top:5px;">
                                <li class="nav-item">                                  
                                    <div id="custom-search-input">
                                        <div class="input-group col-md-12">
                                            <input type="text" class="form-control input-lg" placeholder="Search People, Places or Things.." style="height:32px;width:350px;"/>
                                            <span class="input-group-btn">
                                                <button class="btn btn-info btn-lg" type="button">
                                                    <i class="nc-icon nc-zoom-split"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right" >

                            <!-- Right Side Of Navbar -->
                          
                                <!-- Authentication Links -->
                                @if (Auth::guest())
                                    <a href="{{ route('login') }}"><button type="button" class="btn btn-primary" aria-pressed="true"><strong>Login</strong></button></a>
                                    <a href="{{ route('register') }}"> <button type="button" class="btn btn-default" aria-pressed="true"><strong>Register</strong></button></a>
                                @else
                                 
                                    Welcome,&nbsp; 
                                    <a href="/user/{{ Auth::user()->name }} "  data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} 
                                    </a>&nbsp;
            
                                    
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        <button type="button" class="btn btn-default" aria-pressed="true"><strong>Logout</strong></button>
                                    </a>
    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                 
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->