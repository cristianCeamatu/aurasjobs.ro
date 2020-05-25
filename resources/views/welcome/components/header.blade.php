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
                <a href="https://www.google.com/maps/place/aurasjobs.ro+-+Locuri+de+munca+vase+de+croaziera/@44.1770587,28.6430217,17z/data=!3m1!4b1!4m5!3m4!1s0x40bae51edba75ef3:0xd66d2d2bbae39b8f!8m2!3d44.1770549!4d28.6452104" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i> @lang('welcome.location'): Stefan cel Mare 56, Constanta</a>
            </div>
        </div>
    </div>
</header>
