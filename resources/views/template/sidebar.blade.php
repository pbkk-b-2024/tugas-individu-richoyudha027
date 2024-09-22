<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laptop"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PBKK</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Pertemuan ke-1
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{route('ganjil-genap')}}"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-book"></i>
            <span> Bilangan Ganjil Genap</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('prima')}}"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-book"></i>
            <span>Bilangan Prima</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('fibonacci')}}"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-book"></i>
            <span>Bilangan Fibonacci</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('param')}}"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-book"></i>
            <span>Routing Parameter</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>