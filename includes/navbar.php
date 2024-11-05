<nav class="navbar navbar-expand-md navbar-dark bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <!-- Navbar Brand -->
    <a class="navbar-brand" href="?page=home">Menu:</a>

    <!-- Toggler for mobile view -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <!-- Home link -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
        </li>
        <!-- About link -->
        <li class="nav-item">
          <a class="nav-link" href="?page=about">About</a>
        </li>
        <!-- Contact link -->
        <li class="nav-item">
          <a class="nav-link" href="?page=contact">Contact</a>
        </li>
        <!-- Dropdown for "Belajar" -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="belajarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Belajar
          </a>
          <ul class="dropdown-menu" aria-labelledby="belajarDropdown">
            <li><a class="dropdown-item" href="?page=datatables">Datatables</a></li>
            <li><a class="dropdown-item" href="?page=form">Form</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="?page=404">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <!-- Search Form -->
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<style>
  /* Navbar Background */
  .bg-dark {
    background-color: #343a40 !important; /* Warna hitam gelap untuk navbar */
  }

  /* Navbar Links */
  .nav-link {
    transition: color 0.3s ease;
  }

  .nav-link:hover {
    color: #ffcc00; /* Warna kuning saat hover */
  }

  /* Active Link Color */
  .nav-link.active {
    font-weight: bold;
    color: #ffcc00; /* Warna kuning untuk link aktif */
  }

  /* Dropdown Menu */
  .dropdown-menu {
    background-color: #495057; /* Warna latar dropdown */
  }

  .dropdown-item:hover {
    background-color: #ffcc00; /* Warna kuning saat hover pada item dropdown */
    color: #343a40; /* Warna teks saat hover */
  }

  .navbar-toggler {
    border: none; /* Menghilangkan border pada toggler */
  }

  .navbar-toggler-icon {
    background-color: #ffcc00; /* Warna ikon toggler */
  }
</style>
