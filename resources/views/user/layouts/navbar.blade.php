<nav class="main-header navbar navbar-expand-md navbar-maroon navbar-light">
    <div class="container">
        <a href="" class="navbar-brand">
            <img src="/img/hiv.png" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"></span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Halaman Utama</a>
                </li>
                <li class="nav-item">
                    <a href="/diagnosis" class="nav-link">Cek Diagnosa</a>
                </li>
                <li class="nav-item">
                    <a href="/laporan" class="nav-link">Hasil Laporan</a>
                </li>
            </ul>
        </div>



        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            @auth
                <li>
                    <a class="nav-link">{{ auth()->user()->name }}</a>
                </li>
                @if (Auth::user()->level == 'Admin')
                    <li>
                        <a class="nav-link" href="admin">
                            <i class="fa-solid fa-gears"></i>
                        </a>
                    </li>
                @endif
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="nav-link border-0 bg-transparent"><i
                                class="fas fa-sign-out"></i></button>
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="login">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    </a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
