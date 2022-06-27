<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/users*') ? 'active' : '' }}" href="/admin/users">
            <span data-feather="users"></span>
            Data Pengguna
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/informations*') ? 'active' : '' }}" href="/admin/informations">
            <span data-feather="info"></span>
            Data Informasi
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/deseases*') ? 'active' : '' }}" href="/admin/deseases">
            <span data-feather="package"></span>
            Data Penyakit
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/symptoms*') ? 'active' : '' }}" href="/admin/symptoms">
            <span data-feather="trello"></span>
            Data Gejala
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/diagnosis*') ? 'active' : '' }}" href="/admin/diagnosis">
            <span data-feather="map"></span>
            Data Diagnosis
          </a>
        </li>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span data-feather="align-justify"></span>
            Menu Pengguna
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="/">Halaman Utama</a></li>
            <li><a class="dropdown-item" href="/diagnosis">Cek Diagnosis</a></li>
            <li><a class="dropdown-item" href="/laporan">Hasil Laporan</a></li>
            <li><a class="dropdown-item" href="#">Keluar</a></li>
          </ul>
      </ul>
    </div>
  </nav>