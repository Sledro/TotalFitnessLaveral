<div class="sidebar" data-image="{{ asset('img/sidebar-5.jpg')}}">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="./index.php" class="simple-text">
                        <img src="{{ asset('img/TFLogo.png') }}"/>
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>News Feed</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">
                            <i class="nc-icon nc-badge"></i>
                            <p>Client Manager</p>
                        </a>
                    </li>
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
                    <a class="nav-link" href="/profile/@auth{{Auth::user()->username}}@endauth">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>My Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">
                            <i class="nc-icon nc-android"></i>
                            <p>Exercise Plans</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Diet Plans</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">
                            <i class="nc-icon nc-settings-gear-64"></i>
                            <p>Settings</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


