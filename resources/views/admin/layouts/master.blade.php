<!-- header  -->
@include('admin.layouts.partials.header')
<!-- end header -->
<!-- Navbar -->
@include('admin.layouts.partials.nav')
<!-- /.navbar -->

<!-- Main Sidebar Container -->
@include('admin.layouts.partials.sliderbar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    @yield('content')

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Footer -->
@include('admin.layouts.partials.footer')
<!-- end footer  -->

</body>

</html>