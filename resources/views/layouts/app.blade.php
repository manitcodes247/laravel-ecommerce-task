<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome (CDN) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- AdminLTE CSS (CDN) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  
  <!-- Bootstrap CSS (optional, already bundled with AdminLTE but can be added if needed) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="#" class="nav-link">Logout</a>
      </li>
    </ul>
  </nav>

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ asset('adminlte/dist/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <li class="nav-item">
            <a href="{{ url('/admin') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/products') }}" class="nav-link">
              <i class="nav-icon fas fa-box"></i>
              <p>Products</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/cart') }}" class="nav-link">
                <i class="nav-icon fas fa-shopping-cart"></i>
                <p>Cart</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ url('/admin/orders') }}" class="nav-link">
                <i class="nav-icon fas fa-box"></i>
                <p>Orders</p>
            </a>
        </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Page Content -->
  <div class="content-wrapper">
    <div class="content pt-4">
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="main-footer text-center">
    <strong>&copy; {{ date('Y') }} Admin Panel.</strong> All rights reserved.
  </footer>

</div>

<!-- Scripts -->

<!-- jQuery (CDN) -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Bootstrap Bundle JS (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE JS (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>
</html>
