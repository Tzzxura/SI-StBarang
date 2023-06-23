<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon mt-2">
            <i class="fas fa-building"></i>
        </div>
        <div class="sidebar-brand-text mx-2"></div>
        Cuak's Group
    </a>

    <!-- Divider -->
    {{-- <hr class="sidebar-divider my-0"> --}}

    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-chart-line"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-database"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Master Data</h6>
                <a class="collapse-item" href="{{ route('barang.index') }}">Stok Data</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-exchange-alt"></i>
            <span>Transaction</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Histori barang</h6>
                <a class="collapse-item" href="{{ route('barangmasuk') }}">Barang Masuk</a>
                <a class="collapse-item" href="{{ route('barangkeluar') }}">Barang Keluar</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-chart-bar"></i>
            <span>Report File</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Laporan barang</h6>
                <a class="collapse-item" target="_blank" href="{{ route('cetak') }}">Print & Export PDF</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>
    <div class="text-center d-none d-md-inline mt-5">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
