<div class="sidebar" data-image="{{ asset('img/sidebar-5.jpg')}}">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="/index.php" class="simple-text">
                        <img src="{{ asset('img/TF-Logo.png') }}"/>
                    </a>
                </div>
                <ul class="nav">
                        <li>
                                <a class="nav-link" href="/newsfeed">
                                    <i class="nc-icon nc-circle"></i>
                                    <p>Newsfeed</p>
                                </a>
                            </li>
                    @if(Auth::user())
                        @if(Auth::user()->isTrainer == 1) 
                            <li>
                                <a class="nav-link" href="/client-manager">
                                    <i class="nc-icon nc-badge"></i>
                                    <p>Client Manager</p>
                                </a>
                            </li>
                        @else
                            <li>
                                <a class="nav-link" href="/trainer-finder">
                                    <i class="nc-icon nc-badge"></i>
                                    <p>Trainer Finder</p>
                                </a>
                            </li>
                        @endif
                        <li>
                            <a class="nav-link" href="#">
                                <i class="nc-icon nc-zoom-split"></i>
                                <p>Find User</p>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">
                                <i class="nc-icon nc-email-85"></i>
                                <p>Mailbox</p>
                            </a>
                        </li>
                        <li>
                        <a class="nav-link" href="/user/@auth{{Auth::user()->username}}@endauth">
                                <i class="nc-icon nc-circle-09"></i>
                                <p>My Profile</p>
                            </a>
                        </li>
                        @if(Auth::user()->isTrainer == 1) 
                            <li>
                                <a class="nav-link" href="/exercise-plan-manager">
                                    <i class="nc-icon nc-bullet-list-67"></i>
                                    <p>Exercise Manager</p>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="/diet-manager">
                                    <i class="nc-icon nc-bell-55"></i>
                                    <p>Diet Manager</p>
                                </a>
                            </li>
                        @else
                            <li>
                                <a class="nav-link" href="/my-exercise-plan">
                                    <i class="nc-icon nc-bell-55"></i>
                                    <p>My Exercise Plan</p>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="/my-diet-plan">
                                    <i class="nc-icon nc-android"></i>
                                    <p>My Diet Plan</p>
                                </a>
                            </li>
                        @endif
                        <li>
                            <a class="nav-link" href="#">
                                <i class="nc-icon nc-settings-gear-64"></i>
                                <p>Settings</p>
                            </a>
                        </li>
                    @else
                    <li class="nav-item active">
                        <a class="nav-link" href="/login">
                            <i class="nc-icon nc-lock-circle-open"></i>
                            <p>Login</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/register">
                            <i class="nc-icon nc-notes"></i>
                            <p>Register</p>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>