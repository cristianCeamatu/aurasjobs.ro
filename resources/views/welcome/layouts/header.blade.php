<!-- Navigation -->
<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse" id="mainNav">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand page-scroll" href="#page-top"><img src="./img/logonew4.png" alt="Aurasjobs Logo"></a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#about">@lang('welcome.about')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#jobs">@lang('welcome.jobs')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#journey">@lang('welcome.journey')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#apply">@lang('welcome.apply')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link flag page-scroll" href="{{ App::isLocale('ro') ? route('home', ['lang' => 'en']) : '/'}}">
                        <img src="img/{{ App::isLocale('ro') ? 'uk_flag_42x28' : 'ro_flag_42x28'}}.png" width="42" height="28" alt="{{ App::isLocale('ro') ? 'United Kingdom`s flag' : 'Romania`s Flag'}}">
                        &nbsp;{{ App::isLocale('ro') ? ' EN' : ' RO'}}
                    </a>
                </li>
                <li class="nav-item nav-header-contact">
                    <a href="mailto:&#111;&#102;&#102;&#105;&#099;&#101;&#064;&#097;&#117;&#114;&#097;&#115;&#106;&#111;&#098;&#115;&#046;&#114;&#111;"><i class="fa fa-envelope" aria-hidden="true"></i> &#111;&#102;&#102;&#105;&#099;&#101;&#064;&#097;&#117;&#114;&#097;&#115;&#106;&#111;&#098;&#115;&#046;&#114;&#111;</a>
                </li>
                <li class="nav-item nav-header-contact">
                    <a href="https://www.facebook.com/aurasjobs.ro" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> @aurasjobs</a>
                </li>
                <li class="nav-item nav-header-contact">
                    <a href="tel:0040725085231"><i class="fa fa-phone" aria-hidden="true"></i> 0725 085 231</a>
                </li>
                <li class="nav-item nav-header-contact">
                    <a href="tel:0040730148183"><i class="fa fa-phone" aria-hidden="true"></i> 0730 148 183</a>
                </li>
                <li class="nav-item nav-header-contact">
                    <a href="tel:0040728683604"><i class="fa fa-phone" aria-hidden="true"></i> 0728 683 604</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <h1 class="intro-lead-in">@lang('welcome.jumbotron_title')</h1>
            <div class="intro-heading"><h3><span id="typed"></span></h3></div>
            <div id="typed-strings">@lang('welcome.jumbotron_subtitle')</div>
            <script>
                var typed = new Typed('#typed', {
                  stringsElement: '#typed-strings',
                  typeSpeed: 40,
                  backSpeed: 55,
                  loop: true,
                });
              </script>
            <a href="#apply" class="page-scroll btn btn-xl">@lang('welcome.apply')</a>
            <a href="#jobs" class="page-scroll btn btn-xl">@lang('welcome.jobs')</a>
            <div class="header-contact">
                <a href="mailto:&#111;&#102;&#102;&#105;&#099;&#101;&#064;&#097;&#117;&#114;&#097;&#115;&#106;&#111;&#098;&#115;&#046;&#114;&#111;"><i class="fa fa-envelope" aria-hidden="true"></i> &#111;&#102;&#102;&#105;&#099;&#101;&#064;&#097;&#117;&#114;&#097;&#115;&#106;&#111;&#098;&#115;&#046;&#114;&#111;</a>
                <a href="https://www.facebook.com/aurasjobs.ro" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> @aurasjobs</a>
                <a href="tel:0040725085231"><i class="fa fa-phone" aria-hidden="true"></i> 0725 085 231</a>
                <a href="tel:0040730719323"><i class="fa fa-phone" aria-hidden="true"></i> 0730 719 323</a>
                <a href="tel:0040728683604"><i class="fa fa-phone" aria-hidden="true"></i> 0728 683 604</a>
            </div>
        </div>
    </div>
</header>
