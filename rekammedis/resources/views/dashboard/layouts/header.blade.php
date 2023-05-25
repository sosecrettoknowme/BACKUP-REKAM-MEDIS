<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color: rgb(7, 55, 55)">
  <img src="https://img.favpng.com/24/0/11/puskesmas-logo-image-clip-art-vector-graphics-png-favpng-eVX8GiJ1N6xS7H3S4qZ9RXYdz.jpg" alt="" width="35px" class="ms-4">
    <a class="navbar-brand col-md-3 col-lg-2 ms-0 px-3" href="#">PUSKESMAS BUNGUS</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="nav-link px-3 border-0" style="background-color:darkred; color:white">Logout <span data-feather="log-out"></span></button>
        </form>
      </div>
    </div>
  </header>