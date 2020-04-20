<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
             <a class="navbar-brand page-scroll" href="#topPage">aurasjobs.ro</a>
        </div>
        <div class="container-fluid">
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a class="page-scroll" href="#subscribe">Subscribe</a></li>
                        @if (auth()->id() == 1)
                            <li><a href="/candidates/">Candidates</a></li>
                            <li><a href="/candidates/create">Add new</a></li>
                        @endif
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul><!-- /.dropdown-menu -->
                </li><!-- /.dropdown -->
            </ul><!-- /.navbar-right -->
        </div><!-- /.container -->
    </div><!-- /.container -->
</nav>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: linear-gradient(rgba(25, 25, 25, 0.7), rgba(25, 25, 25, 0.7)), url(' public/img/candidates-bg.jpg ')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Welcome</h1>
                    <hr class="small">
                    <span class="subheading"> <a class="page-scroll" href="#candidates">start shopping candidates <i class="fa fa-hand-pointer-o" aria-hidden="true"></i></a></span>
                </div>
            </div>
        </div>
    </div>
</header>
