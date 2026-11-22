<?php
// Simulasi database detail kursus menggunakan Array PHP
$detail_kursus_list = [
    1 => [
        "judul" => "Kursus Bahasa Inggris Dasar",
        "rating" => "4.9 (120 Ulasan)",
        "total_video" => "18 Video Pelajaran",
        "pengajar" => "Sarah Jenkins, M.Ed.",
        "harga" => "Rp. 250.000",
        "deskripsi" => "Kursus ini dirancang khusus untuk pemula yang ingin menguasai percakapan sehari-hari, pelafalan yang tepat, serta struktur tata bahasa (grammar) dasar bahasa Inggris secara praktis.",
        "silabus" => [
            "Bab 1: Perkenalan & Percakapan Dasar" => ["1.1 Greetings & Introductions", "1.2 Numbers, Dates, and Time"],
            "Bab 2: Tata Bahasa (Grammar) Esensial" => ["2.1 Simple Present Tense", "2.2 Subject-Verb Agreement & Pronouns"]
        ]
    ],
    2 => [
        "judul" => "Kursus Bahasa Mandarin HSK 1",
        "rating" => "4.8 (95 Ulasan)",
        "total_video" => "20 Video Pelajaran",
        "pengajar" => "Xiao Shu, B.A.",
        "harga" => "Rp. 250.000",
        "deskripsi" => "Pelajari dasar-dasar bahasa Mandarin mulai dari pelafalan Pinyin, empat nada utama, penulisan guratan Hanzi dasar, hingga persiapan lulus ujian sertifikasi HSK 1.",
        "silabus" => [
            "Bab 1: Fonetik & Nada Mandarin" => ["1.1 Pengenalan Pinyin & 4 Nada (Shengdiao)", "1.2 Sapaan Sehari-hari (Ni Hao)"],
            "Bab 2: Kosakata & Struktur Kalimat HSK 1" => ["2.1 Angka, Keluarga, dan Waktu", "2.2 Pola Kalimat Dasar Subjek + Predikat"]
        ]
    ],
    3 => [
        "judul" => "Kursus Bahasa Jepang JLPT N5",
        "rating" => "4.9 (150 Ulasan)",
        "total_video" => "24 Video Pelajaran",
        "pengajar" => "Kenji Takahashi",
        "harga" => "Rp. 250.000",
        "deskripsi" => "Mulai perjalanan belajar bahasa Jepang Anda dengan menguasai huruf Hiragana, Katakana, partikel dasar, dan pola kalimat percakapan tingkat JLPT N5.",
        "silabus" => [
            "Bab 1: Sistem Penulisan Jepang" => ["1.1 Membaca & Menulis Hiragana", "1.2 Membaca & Menulis Katakana"],
            "Bab 2: Tata Bahasa Dasar (Bunpou)" => ["2.1 Partikel Wa, Ga, Wo, Ni, De", "2.2 Kata Kerja Bentuk Masu & Bentuk Kamus"]
        ]
    ],
    4 => [
        "judul" => "English for Business & Career",
        "rating" => "4.7 (80 Ulasan)",
        "total_video" => "15 Video Pelajaran",
        "pengajar" => "Michael Jackson, MBA",
        "harga" => "Rp. 350.000",
        "deskripsi" => "Tingkatkan kepercayaan diri Anda di dunia kerja internasional melalui latihan presentasi bisnis, korespondensi email profesional, dan teknik negosiasi.",
        "silabus" => [
            "Bab 1: Komunikasi Kantor Profesional" => ["1.1 Menulis Email Bisnis Formal", "1.2 Etika Rapat & Telekonferensi"],
            "Bab 2: Presentasi & Negosiasi" => ["2.1 Menyusun Pitch & Presentasi Data", "2.2 Kosakata Negosiasi & Kesepakatan"]
        ]
    ],
    5 => [
        "judul" => "Percakapan Mandarin Bisnis",
        "rating" => "4.8 (64 Ulasan)",
        "total_video" => "16 Video Pelajaran",
        "pengajar" => "Jackie Chan",
        "harga" => "Rp. 375.000",
        "deskripsi" => "Fokus pada istilah perdagangan, negosiasi dengan rekan bisnis Tiongkok, serta etika budaya bisnis dalam bahasa Mandarin.",
        "silabus" => [
            "Bab 1: Etika & Perkenalan Bisnis" => ["1.1 Bertukar Kartu Nama & Gelar Jabatan", "1.2 Jamuan Bisnis & Budaya Tiongkok"],
            "Bab 2: Transaksi & Perdagangan" => ["2.1 Menanyakan Harga & Kuantitas", "2.2 Istilah Ekspor-Impor Dasar"]
        ]
    ],
    6 => [
        "judul" => "Bahasa Jepang JLPT N2 Intensif",
        "rating" => "5.0 (42 Ulasan)",
        "total_video" => "30 Video Pelajaran",
        "pengajar" => "Ryuunosuke Akutagawa, M.A.",
        "harga" => "Rp. 450.000",
        "deskripsi" => "Program intensif tingkat mahir untuk menghadapi JLPT N2, mencakup pemahaman bacaan artikel berita, 1000+ Kanji, serta penggunaan bahasa hormat (Keigo).",
        "silabus" => [
            "Bab 1: Tata Bahasa & Kosakata Lanjut" => ["1.1 Pola Kalimat Majemuk N2", "1.2 Penggunaan Keigo (Sonkeigo & Kenjougo)"],
            "Bab 2: Strategi Ujian JLPT N2" => ["2.1 Analisis Bacaan Cepat (Dokkai)", "2.2 Latihan Pendengaran Kecepatan Natural (Choukai)"]
        ]
    ]
];

// Mengambil ID dari URL ($_GET['id']), default ke 1 jika tidak ada
$id = isset($_GET['id']) && isset($detail_kursus_list[$_GET['id']]) ? (int)$_GET['id'] : 1;
$kursus = $detail_kursus_list[$id];
?>

<div class="container my-5">
    <!-- Tombol kembali ke Katalog -->
    <div class="mb-3">
        <a href="index.php?page=katalog" class="text-decoration-none text-secondary">&larr; Kembali ke Katalog Kursus</a>
    </div>

    <div class="row g-4">
        <!-- KOLOM KIRI: Info Utama, Tab Menu, dan Daftar Bab/Materi (Sesuai Wireframe Layout 3) -->
        <div class="col-lg-8">
            <!-- Area Info Utama (Kiri Atas) -->
            <div class="card border-0 shadow-sm p-4 mb-4">
                <h2 class="fw-bold mb-2"><?php echo $kursus['judul']; ?></h2>
                <p class="text-muted mb-0">
                    <span class="badge bg-warning text-dark me-2">&#9733; <?php echo $kursus['rating']; ?></span>
                    <span class="me-2">|</span>
                    <span class="me-2"><?php echo $kursus['total_video']; ?></span>
                    <span class="me-2">|</span>
                    <span>Pengajar: <strong><?php echo $kursus['pengajar']; ?></strong></span>
                </p>
            </div>

            <!-- Tab Menu: Deskripsi | Kurikulum | Ulasan (Sesuai Wireframe Layout 3) -->
            <div class="card border-0 shadow-sm p-4">
                <ul class="nav nav-tabs mb-4" id="courseTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active fw-semibold" id="kurikulum-tab" data-bs-toggle="tab" data-bs-target="#kurikulum" type="button" role="tab">Kurikulum</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-semibold" id="deskripsi-tab" data-bs-toggle="tab" data-bs-target="#deskripsi" type="button" role="tab">Deskripsi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-semibold" id="ulasan-tab" data-bs-toggle="tab" data-bs-target="#ulasan" type="button" role="tab">Ulasan</button>
                    </li>
                </ul>

                <!-- Isi Tab -->
                <div class="tab-content" id="courseTabContent">
                    <!-- Tab 1: Kurikulum / Daftar Bab (Default aktif agar struktur Bab 1, Bab 2 langsung terlihat) -->
                    <div class="tab-pane fade show active" id="kurikulum" role="tabpanel">
                        <h5 class="fw-bold mb-3">Daftar Materi Pelajaran</h5>
                        <div class="list-group">
                            <?php foreach ($kursus['silabus'] as $bab => $sub_materi): ?>
                                <div class="list-group-item bg-light fw-bold">
                                    <?php echo $bab; ?>
                                </div>
                                <?php foreach ($sub_materi as $item): ?>
                                    <div class="list-group-item ps-4 d-flex justify-content-between align-items-center">
                                        <span><?php echo $item; ?></span>
                                        <span class="badge bg-secondary rounded-pill">Video</span>
                                    </div>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Tab 2: Deskripsi -->
                    <div class="tab-pane fade" id="deskripsi" role="tabpanel">
                        <h5 class="fw-bold mb-3">Tentang Kursus Ini</h5>
                        <p class="text-muted lh-lg"><?php echo $kursus['deskripsi']; ?></p>
                    </div>

                    <!-- Tab 3: Ulasan -->
                    <div class="tab-pane fade" id="ulasan" role="tabpanel">
                        <h5 class="fw-bold mb-3">Ulasan Murid</h5>
                        <div class="border-bottom pb-3 mb-3">
                            <div class="fw-bold">Castorice <span class="text-warning">Bintang 5</span></div>
                            <p class="text-muted small mb-0">Penjelasan materinya sangat jelas dan ez</p>
                        </div>
                        <div>
                            <div class="fw-bold">Hyacine <span class="text-warning">Bintang 5</span></div>
                            <p class="text-muted small mb-0">Video pembelajarannya informatif dan latihan kuisnya sangat membantu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- KOLOM KANAN: Kartu Pembelian / Preview Video (Sesuai Wireframe Layout 3) -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm p-3 sticky-top" style="top: 20px;">
                <!-- Area Preview Video -->
                <div class="bg-dark text-white rounded d-flex flex-column align-items-center justify-content-center mb-3" style="height: 200px;">
                    <div class="fs-1 mb-1">Play</div>
                    <span class="small fw-semibold">Preview Video Kursus</span>
                </div>

                <!-- Harga -->
                <h4 class="fw-bold text-dark mb-3">Harga: <span class="text-success"><?php echo $kursus['harga']; ?></span></h4>

                <!-- Tombol Daftar Kursus -> Mengarahkan murid ke Dashboard (Layout 4) -->
                <a href="index.php?page=dashboard" class="btn btn-primary btn-lg w-100 fw-semibold mb-2">Daftar Kursus</a>
                <p class="text-center text-muted small mb-0">Akses selamanya &bull; Sertifikat kelulusan</p>
            </div>
        </div>
    </div>
</div>