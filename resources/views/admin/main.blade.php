<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>

  @include('admin.sidebar')

  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      @include('admin.alert')
      <div class="card card-primary mt-2">
        <div class="card-header">
          <h3 class="card-title">{{ $title }}</h3>
      </div>

      @yield('content')
    </div>
    </section>
  </div>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

@include('admin.footer')
</body>
</html>
