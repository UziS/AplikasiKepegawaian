<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <img src="{{ asset('assets/img/logo/logo2.png') }}">
      </div>
      <div class="sidebar-brand-text mx-3">RuangAdmin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('datapegawai')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Tabel Data Pegawai</span></a>
    </li>
    {{-- <li class="nav-item active">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" 
        aria-controls="collapseTable">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span>
      </a>
      <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="simple-tables.html">Tabel Pegawai</a>
          <a class="collapse-item" href="datatables.html">Tabel Pegawai</a>
        </div>
      </div>
    </li> --}}
  <!--   <li class="nav-item">
      <a class="nav-link" href="ui-colors.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Table</span>
      </a>
    </li> -->
    {{-- <hr class="sidebar-divider"> --}}
    {{-- <div class="version" id="version-ruangadmin"></div> --}}
</ul>