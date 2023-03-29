<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  @include('backend.partial.link')
</head>
<body id="page-top">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('backend.partial.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="{{asset("img-ss rounded-circle bg-light border mr-3")}}"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="{{asset("img-ss rounded-circle bg-dark border mr-3")}}"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <!-- partial -->
      
      <!-- partial:partials/_sidebar.html -->
      @include('backend.partial.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper" >
          
          @yield('content')
      
        <!-- content-wrapper ends -->
        </div>
          <!-- partial:partials/_footer.html -->
        @include('backend.partial.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  @include('backend.partial.js')
  <!-- End custom js for this page-->
  @yield('script')
</body>

</html>

