<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        {{-- <div class="sidebar-brand-icon "
            style=" background-color:#8EA7F1; box-shadow: 0px 2px 19px rgba(0, 0, 0, 0.11); margin-right:0px; padding: 3px 7px;">
            <img style="background-color:#fff;" src="{{ asset('frontend/assets/img/logo.png') }}" alt=""
                width="20px">
        </div> --}}
        <div class="sidebar-brand-text mx-2"
            style="background-color:#8EA7F1; font-size:24px;  text-transform:none; padding-right:5px;  box-shadow: 0px 2px 19px rgba(0, 0, 0, 0.11); border-radius:7px; ">
            <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="" width="36px"
                style="box-shadow: 0px 2px 19px rgba(0, 0, 0, 0.11); background-color:#fff; padding: 0px !important; border-radius:7px">
            Edukraf
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Heading -->
    <div class="sidebar-heading">
        Data Tabel
    </div>

    <!-- Nav Item - Tables -->

    <li class="nav-item">
        <a class="nav-link" href='{{ route('admin.view') }}'>
            <i class="fas fa-fw fa-table"></i>
            <span>Akun Admin</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href='{{ route('webinar.view') }}'>
            <i class="fas fa-fw fa-table"></i>
            <span>Webinar</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href='{{ route('category.view') }}'>
            <i class="fas fa-fw fa-table"></i>
            <span>Kategori Kelas</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href='{{ route('classroom.view') }}'>
            <i class="fas fa-fw fa-table"></i>
            <span>Kelas Edukraf</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    {{-- <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div> --}}

</ul>
