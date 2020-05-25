<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

  @yield('meta')

  <body {!!$body_element_attributes or ''!!}>

    @yield('top-scripts')
    @include ('welcome.components.navbar')
    @yield('content')
    @include ('welcome.components.contact')
    @include ('welcome.components.footer')
    @yield('bottom-scripts')
  
  </body>

</html>
