<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-car-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Rental Mobil</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Data Transaksi</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Consumer</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('mobil'); ?>">
            <i class="fas fa-fw fa-car"></i>
            <span>Data Mobil</span></a>
    </li>

    <!-- User -->
    <hr class="sidebar-divider d-none d-md-block">

    <div class="sidebar-heading">
        User
    </div>

    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-user-lock"></i>
            <span>Data User</span></a>
    </li>

    <!-- Laporan -->
    <hr class="sidebar-divider d-none d-md-block">

    <div class="sidebar-heading">
        Laporan
    </div>

    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-book"></i>
            <span>Data Laporan</span></a>
    </li>

    <!-- Account -->
    <hr class="sidebar-divider d-none d-md-block">

    <div class="sidebar-heading">
        Account
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>
</ul>