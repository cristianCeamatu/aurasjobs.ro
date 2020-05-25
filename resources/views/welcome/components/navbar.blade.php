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
                  <a href="tel:0040730719323"><i class="fa fa-phone" aria-hidden="true"></i> 0730 719 323</a>
              </li>
              <li class="nav-item nav-header-contact">
                  <a href="tel:0040728683604"><i class="fa fa-phone" aria-hidden="true"></i> 0728 683 604</a>
              </li>                
              <li class="nav-item nav-header-contact">
                  <a href="https://www.google.com/maps/place/aurasjobs.ro+-+Locuri+de+munca+vase+de+croaziera/@44.1770587,28.6430217,17z/data=!3m1!4b1!4m5!3m4!1s0x40bae51edba75ef3:0xd66d2d2bbae39b8f!8m2!3d44.1770549!4d28.6452104" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i> @lang('welcome.location'): Stefan cel Mare 56, Constanta</a>
              </li>
          </ul>
      </div>
  </div>
</nav>