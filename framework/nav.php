<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top shadow-sm">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand fw-bold d-flex align-items-center" href="index.php?page=home">
            <span>Just Bahasa</span>
        </a>
    
        <!-- Tombol Toggle untuk Tampilan Mobile / Responsif -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Navigasi Horizontal (Sesuai Tugas 2: Program | Harga | Login | Sign Up + Profil) -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link fw-medium" href="index.php?page=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium" href="index.php?page=katalog">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium" href="index.php?page=detail">Harga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium" href="index.php?page=dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium" href="index.php?page=credit">Profil Developer</a>
                </li>
            </ul>

            <!-- Tombol Login & Sign Up di Sisi Kanan -->
            <div class="d-flex align-items-center gap-2">
                <a href="index.php?page=dashboard" class="btn btn-outline-primary px-3">Login</a>
                <a href="index.php?page=katalog" class="btn btn-aksen px-3">Sign Up</a>
            </div>
        </div>
    </div>
</nav>