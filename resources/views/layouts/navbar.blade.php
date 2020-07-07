<header class="header">
    <div class="header-wrapper">
        <div class="container">
            <div class="header-inner">
                <div class="header-logo">
                    <a href="index.html">
                        <img src="assets/img/logo.png" alt="Logo">
                        <span>Superlist</span>
                    </a>
                </div><!-- /.header-logo -->

                <div class="header-content">
                    <div class="header-top">
                        <div class="header-search">
                            <input type="text" class="form-control" placeholder="Search for...">
                        </div><!-- /.header-search -->
                        @guest
                        <ul class="header-nav-social social-links nav nav-pills">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul><!-- /.header-nav-social -->

                        <ul class="header-nav-secondary nav nav-pills">
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li>
                                <a href="#">{{ Auth::user()->name }} <i class="fa fa-chevron-down"></i></a>

                                <ul class="sub-menu">
                                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                    <!-- For Sub Menu  -->
                                    <!-- <li><a href="#">Detail</a></li> -->

                                </ul>
                            </li>
                            @endguest
                        </ul>
                        @endguest
                    </div><!-- /.header-top -->

                    <div class="header-bottom">
                        <div class="header-action">
                            <a href="listing-submit.html" class="header-action-inner" title="Add Listing"
                                data-toggle="tooltip" data-placement="bottom">
                                <i class="fa fa-plus"></i>
                            </a><!-- /.header-action-inner -->
                        </div><!-- /.header-action -->

                        <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
                            <li>
                                <a href="#">Home </a>
                            </li>
                            <li>
                                <a href="#">Blog <i class="fa fa-chevron-down"></i></a>

                                <ul class="sub-menu">
                                    <li><a href="blog-standard-right-sidebar.html">Standard Right Sidebar</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                            <li>
                                <a href="#">Profile <i class="fa fa-chevron-down"></i></a>

                                <ul class="sub-menu">
                                    <li><a href="admin-dashboard.html">Dashboard</a></li>
                                    <li><a href="admin-grid.html">Grid System</a></li>
                                    <li><a href="admin-tables.html">Tables</a></li>
                                    <li><a href="admin-forms.html">Forms</a></li>
                                    <li><a href="admin-notifications.html">Notifications</a></li>
                                </ul>
                            </li>
                        </ul>

                        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
                            data-target=".header-nav-primary">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div><!-- /.header-bottom -->
                </div><!-- /.header-content -->
            </div><!-- /.header-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-wrapper -->
</header><!-- /.header -->
