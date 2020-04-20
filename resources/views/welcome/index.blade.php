<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

@include ('welcome.layouts.meta')
<!-- Facebook like bar -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<body id="page-top">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FXJFLK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include ('welcome.layouts.header')
    @include ('welcome.layouts.about')
    @include ('welcome.layouts.proccess')
    @include ('welcome.layouts.jobs')
    @include ('welcome.layouts.apply')
    @include ('welcome.layouts.partners')
    @include ('welcome.layouts.contact')
    @include ('welcome.layouts.footer')
    @include ('welcome.layouts.jobModals')

    <div class="fb-FooterBar" id="facebookLike">
    <div class="fb-like" data-href="https://www.facebook.com/aurasjobs.ro" data-width="300" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <!-- Custom JavaScript for this theme -->
    <script>
        var token = '{{ Session::token() }}';
        var url = '{{ route('contact') }}';
        var applyUrl = '{{ route('apply') }}';
    </script>
    <script src="js/agency.min.js"></script>
	</body>
</html>
