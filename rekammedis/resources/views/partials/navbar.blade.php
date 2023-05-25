
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: rgb(23, 64, 64)">
    <div class="container-fluid">
      <img src="https://img.favpng.com/24/0/11/puskesmas-logo-image-clip-art-vector-graphics-png-favpng-eVX8GiJ1N6xS7H3S4qZ9RXYdz.jpg" alt="" width="30px">
      <a class="navbar-brand" href="/">Pusbung</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "home") ? 'active': '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "about") ? 'active': '' }}" href="/about">About</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
              <a href="/login" class="nav-link bg-primary text-white {{ ($title === "login") ? 'active': '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
     </ul>
      </div>
    </div>
  </nav>
</header>