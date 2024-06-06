<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink" ></i>
    </div>
    <div class="sidebar-brand-text mx-3">SIKETAKOMVI <sup></sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
    <i class="fa fa-home" aria-hidden="true"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('barang') }}">
      <i class="fa fa-user" aria-hidden="true"></i>
      <span>Admin</span></a>
  </li>

	@if (auth()->user()->level == 'Admin')
  <li class="nav-item">
    <a class="nav-link" href="{{ route('kategori') }}">
      <i class="fa fa-user" aria-hidden="true"></i>
      <span>Petugas</span></a>
  </li>
	@endif

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

  <!-- Sidebar Message -->
  

</ul>
