<div class="container my-5">
    <div class="row g-4">
        <!-- menu samping untuk navigasi murid -->
        <div class="col-lg-3">
            <div class="card border-0 shadow-sm p-3">
                <div class="text-center border-bottom pb-3 mb-3">
                    <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center fw-bold fs-4 mb-2" style="width: 60px; height: 60px;">
                        JS
                    </div>
                    <h6 class="fw-bold mb-0">Justin Shu</h6>
                    <small class="text-muted">Murid Aktif</small>
                </div>
                
                <div class="list-group list-group-flush">
                    <a href="index.php?page=dashboard" class="list-group-item list-group-item-action active fw-semibold rounded mb-1">
                        Dashboard
                    </a>
                    <a href="index.php?page=kelas" class="list-group-item list-group-item-action border-0">
                        Kursus Saya
                    </a>
                    <a href="index.php?page=kelas" class="list-group-item list-group-item-action border-0">
                        Live Class
                    </a>
                    <a href="#sertifikat" onclick="alert('Sertifikat akan tersedia setelah progres kursus mencapai 100%!')" class="list-group-item list-group-item-action border-0">
                        Sertifikat
                    </a>
                    <a href="#pengaturan" onclick="alert('Fitur pengaturan akun sedang aktif.')" class="list-group-item list-group-item-action border-0">
                        Pengaturan
                    </a>
                </div>
            </div>
        </div>

        <!-- area utama ringkasan dan kemajuan belajar -->
        <div class="col-lg-9">
            <h3 class="fw-bold mb-4">Dashboard Belajar</h3>

            <!-- bagian atas berisi tiga kartu statistik -->
            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-3 text-center h-100">
                        <span class="text-muted small fw-semibold text-uppercase">Kursus Aktif</span>
                        <h2 class="fw-bold text-primary my-2">2 Kursus</h2>
                        <small class="text-success">Sedang berlangsung</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-3 text-center h-100">
                        <span class="text-muted small fw-semibold text-uppercase">Jam Belajar</span>
                        <h2 class="fw-bold text-primary my-2">67 Jam</h2>
                        <small class="text-muted">Total akumulasi waktu</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-3 text-center h-100">
                        <span class="text-muted small fw-semibold text-uppercase">Skor Kuis Rata-Rata</span>
                        <h2 class="fw-bold text-success my-2">92/100</h2>
                        <small class="text-muted">Sangat Memuaskan</small>
                    </div>
                </div>
            </div>

            <!-- bagian bawah berisi daftar kemajuan belajar -->
            <div class="card border-0 shadow-sm p-4">
                <h5 class="fw-bold mb-4">Kemajuan Belajar</h5>

                <!-- daftar kursus pertama bahasa jepang -->
                <div class="border rounded p-3 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div>
                            <h6 class="fw-bold mb-0">Bahasa Jepang (JLPT N5)</h6>
                            <small class="text-muted">Modul 2.1: Grammar & Partikel Dasar</small>
                        </div>
                        <span class="fw-bold text-primary">67%</span>
                    </div>
                    <div class="progress mb-3" style="height: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 67%;" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex gap-2">
                        <!-- tombol menuju halaman ruang kelas -->
                        <a href="index.php?page=kelas" class="btn btn-sm btn-primary">Lanjut Belajar (Video)</a>
                        <!-- tombol menuju halaman kuis -->
                        <a href="index.php?page=kuis" class="btn btn-sm btn-outline-success">Kerjakan Kuis</a>
                    </div>
                </div>

                <!-- daftar kursus kedua bahasa inggris -->
                <div class="border rounded p-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div>
                            <h6 class="fw-bold mb-0">Bahasa Inggris Dasar</h6>
                            <small class="text-muted">Modul 2.2: Simple Present Tense</small>
                        </div>
                        <span class="fw-bold text-primary">67%</span>
                    </div>
                    <div class="progress mb-3" style="height: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 67%;" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="index.php?page=kelas" class="btn btn-sm btn-primary">Lanjut Belajar (Video)</a>
                        <a href="index.php?page=kuis" class="btn btn-sm btn-outline-success">Kerjakan Kuis</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>