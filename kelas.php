<div class="container my-5">
    <!-- navigasi atas menuju dashboard -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="index.php?page=dashboard" class="text-decoration-none text-secondary">&larr; Kembali ke Dashboard</a>
        <span class="badge bg-primary px-3 py-2">Sedang Belajar: Bahasa Jepang (JLPT N5)</span>
    </div>

    <div class="row g-4">
        <!-- kolom kiri untuk pemutar video youtube -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <!-- area layar video youtube -->
                <div class="ratio ratio-16x9 bg-dark rounded-top">
                    <iframe id="youtubePlayer" 
                            src="https://www.youtube.com/embed/6p9Il_j0zjc" 
                            title="Video Pembelajaran Bahasa Jepang" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            referrerpolicy="strict-origin-when-cross-origin" 
                            allowfullscreen>
                    </iframe>
                </div>

                <!-- keterangan materi di bawah video -->
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h4 id="lessonTitle" class="fw-bold mb-0">2.1 Grammar: Partikel Dasar (Wa, Ga, Wo)</h4>
                        <span id="lessonDuration" class="badge bg-secondary">Durasi: 12:45</span>
                    </div>
                    <p id="lessonDesc" class="text-muted mt-2 mb-4">
                        Pada sesi ini, kita akan mempelajari fungsi partikel penanda topik (は / wa), subjek (が / ga), dan objek (を / wo) dalam struktur kalimat bahasa Jepang sehari-hari.
                    </p>
                    <div class="d-flex justify-content-between align-items-center border-top pt-3">
                        <span class="text-muted small">Selesai mempelajari modul ini?</span>
                        <a href="index.php?page=kuis" class="btn btn-success fw-semibold">Lanjut ke Evaluasi Kuis &rarr;</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- kolom kanan untuk daftar pilihan materi -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm p-3">
                <h5 class="fw-bold border-bottom pb-3 mb-3">Daftar Materi</h5>
                
                <div class="list-group" id="playlist">
                    <!-- materi pertama -->
                    <button type="button" class="list-group-item list-group-item-action active d-flex justify-content-between align-items-center py-3"
                            onclick="pilihMateri(this, '6p9Il_j0zjc', '2.1 Grammar: Partikel Dasar (Wa, Ga, Wo)', 'Durasi: 12:45', 'Pada sesi ini, kita akan mempelajari fungsi partikel penanda topik (は / wa), subjek (が / ga), dan objek (を / wo) dalam struktur kalimat bahasa Jepang sehari-hari.')">
                        <div>
                            <div class="fw-bold">2.1 Grammar</div>
                            <small>Partikel Dasar (Wa, Ga, Wo)</small>
                        </div>
                        <span class="badge bg-light text-dark">Diputar</span>
                    </button>

                    <!-- materi kedua -->
                    <button type="button" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3"
                            onclick="pilihMateri(this, '6p9Il_j0zjc', '2.2 Kosakata Sehari-hari (Kotoba)', 'Durasi: 10:20', 'Memperkaya perbendaharaan kata benda di lingkungan sekolah, kantor, dan aktivitas harian beserta pelafalannya.')">
                        <div>
                            <div class="fw-bold">2.2 Kosakata</div>
                            <small>Aktivitas & Benda Sekitar</small>
                        </div>
                        <span class="badge bg-secondary">10:20</span>
                    </button>

                    <!-- materi ketiga -->
                    <button type="button" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3"
                            onclick="pilihMateri(this, '6p9Il_j0zjc', '2.3 Percakapan (Kaiwa)', 'Durasi: 15:10', 'Simulasi dialog perkenalan diri dan menanyakan arah dengan intonasi alami penutur asli Jepang.')">
                        <div>
                            <div class="fw-bold">2.3 Percakapan</div>
                            <small>Dialog & Intonasi Alami</small>
                        </div>
                        <span class="badge bg-secondary">15:10</span>
                    </button>

                    <!-- materi keempat -->
                    <button type="button" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3"
                            onclick="pilihMateri(this, '6p9Il_j0zjc', '2.4 Latihan Membaca (Dokkai)', 'Durasi: 08:50', 'Membaca paragraf pendek menggunakan huruf Hiragana dan Katakana tanpa bantuan Romaji.')">
                        <div>
                            <div class="fw-bold">2.4 Latihan Membaca</div>
                            <small>Teks Pendek Hiragana</small>
                        </div>
                        <span class="badge bg-secondary">08:50</span>
                    </button>
                </div>

                <!-- tombol menuju halaman kuis -->
                <div class="mt-4 pt-2 border-top">
                    <a href="index.php?page=kuis" class="btn btn-outline-primary w-100 fw-semibold">
                        Buka Halaman Kuis Modul 2
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- kode javascript untuk mengganti video dan materi yang dipilih -->
<script>
function pilihMateri(element, videoId, judul, durasi, deskripsi) {
    // menghapus tanda aktif pada semua daftar materi
    const items = document.querySelectorAll('#playlist .list-group-item');
    items.forEach(item => {
        item.classList.remove('active');
        const badge = item.querySelector('.badge');
        if (badge.innerText === 'Diputar') {
            badge.classList.replace('bg-light', 'bg-secondary');
            badge.classList.remove('text-dark');
            badge.innerText = 'Video';
        }
    });

    // memberikan tanda aktif pada materi yang diklik
    element.classList.add('active');
    const activeBadge = element.querySelector('.badge');
    activeBadge.classList.replace('bg-secondary', 'bg-light');
    activeBadge.classList.add('text-dark');
    activeBadge.innerText = 'Diputar';

    // mengubah video youtube, judul, durasi, dan deskripsi
    document.getElementById('youtubePlayer').src = 'https://www.youtube.com/embed/' + videoId;
    document.getElementById('lessonTitle').innerText = judul;
    document.getElementById('lessonDuration').innerText = durasi;
    document.getElementById('lessonDesc').innerText = deskripsi;
}
</script>