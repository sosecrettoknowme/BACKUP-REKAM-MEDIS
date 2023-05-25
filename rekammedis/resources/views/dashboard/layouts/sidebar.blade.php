


<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color:cadetblue">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/dashboard">
            <span data-feather="home"> </span>
            <h6 class="text-dark">Dashboard</h6>
          </a>
        </li>
        @can('admin')
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/dokter*') ? 'active' : '' }}" href="/dashboard/dokter">
            <span data-feather="file-text"></span>
            <h6 class="text-dark">Dokter</h6>
          
          </a>
        </li>
        
        <li>
          <a class="nav-link" href="/dashboard/pasien">
            <span data-feather="file-text"></span>
            <h6 class="text-dark">Pasien</h6>
          </a>
        </li>
        <li>
          <a class="nav-link" href="/dashboard/ruang">
            <span data-feather="file-text"></span>
            <h6 class="text-dark">Ruang</h6>
          </a>
        </li>
        <li>
          <a class="nav-link" href="/dashboard/obat">
            <span data-feather="file-text"></span>
            <h6 class="text-dark">Obat</h6>
          </a>
        </li>
        <li>
          @endcan
          <a class="nav-link" href="/dashboard/rekam">
            <span data-feather="file-text"></span>
            <h6 class="text-dark">Rekam Medis</h6>
          </a>
        </li>
        
      </ul>
    </div>
  </nav>


