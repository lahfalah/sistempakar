<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container">
      <a class="navbar-brand" href="/">HIV/AIDS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Halaman Utama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('diagnosis') ? 'active' : '' }}" href="/diagnosis">Cek Diagnosis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('laporan') ? 'active' : '' }}" href="/laporan">Hasil Laporan</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Selamat Datang Admin
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="admin">Kelola Data</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
      </ul>
      </div>
    </div>
  </nav>