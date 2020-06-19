@extends('welcome.layouts.home', ['body_element_attributes' => 'id="page-top"'])

@section('meta')
  @include ('welcome.components.meta')
@endsection

@section('top-scripts')
  <!-- Facebook like bar -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FXJFLK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    {{-- Used in the header --}}
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
@endsection

@section('content')
  @include ('welcome.components.temporaryModal')
  @include ('welcome.components.header')
  @include ('welcome.components.about')
  @include ('welcome.components.jobs')
  @include ('welcome.components.proccess')
  @include ('welcome.components.apply')
  @include ('welcome.components.partners')
  @include ('welcome.components.jobModals')
@endsection

@section('bottom-scripts')
  <div class="fb-FooterBar" id="facebookLike">
    <div class="fb-like" data-href="https://www.facebook.com/aurasjobs.ro" data-width="300" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
  </div>
  <!-- Bootstrap core JavaScript -->
  <script src="./vendor/jquery/jquery.min.js"></script>
  <script src="./vendor/tether/tether.min.js"></script>
  <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <!-- Contact form JavaScript -->
  <script src="./js/jqBootstrapValidation.js"></script>
  <!-- Custom JavaScript for this theme -->
  <script>
      var token = '{{ Session::token() }}';
      var url = '{{ route('contact') }}';
      var applyUrl = '{{ route('apply') }}';
  </script>
  <script src="./js/agency.js"></script>
@endsection