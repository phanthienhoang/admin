<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- include header -->
    @include('admin.layouts.header.header')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
      <!-- include narbar -->
  @include('admin.layouts.navbar.narbarindex')
      <!-- include sliderbar -->
  @include('admin.layouts.sliderbar.sliderbarindex')

  @yield('content')
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.1
    </div>
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

@include('admin.layouts.footer.footer')