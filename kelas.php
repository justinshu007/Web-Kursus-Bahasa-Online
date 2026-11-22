<div class="container my-5">
    <!-- Navigasi Atas Ringkas -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="index.php?page=dashboard" class="text-decoration-none text-secondary">&larr; Kembali ke Dashboard</a>
        <span class="badge bg-primary px-3 py-2">Sedang Belajar: Bahasa Jepang (JLPT N5)</span>
    </div>

    <div class="row g-4">
        <!-- Kolom Kiri: Layar Materi Utama -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm overflow-hidden">
                <!-- Area Layar Video / Pratinjau Modul -->
                <div class="bg-dark text-white d-flex flex-column align-items-center justify-content-center p-4 text-center" style="height: 400px;">
                    <span class="badge bg-primary mb-2">Video Pembelajaran</span>
                    <h4 id="videoOverlayTitle" class="fw-semibold mb-2">2.1 Grammar: Partikel Dasar (Wa, Ga, Wo)</h4>
                    <small class="text-muted">Area pemutaran video materi kursus</small>
                </div>

                <!-- Deskripsi Materi di Bawah Layar -->
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

        <!-- Kolom Kanan: Daftar Materi (Playlist) -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm p-3">
                <h5 class="fw-bold border-bottom pb-3 mb-3">Daftar Materi</h5>
                
                <div class="list-group" id="playlist">
                    <!-- Materi 2.1 -->
                    <button type="button" class="list-group-item list-group-item-action active d-flex justify-content-between align-items-center py-3"
                            onclick="pilihMateri(this, '2.1 Grammar: Partikel Dasar (Wa, Ga, Wo)', 'Durasi: 12:45', 'Pada sesi ini, kita akan mempelajari fungsi partikel penanda topik (は / wa), subjek (が / ga), dan objek (を / wo) dalam struktur kalimat bahasa Jepang sehari-hari.')">
                        <div>
                            <div class="fw-bold">2.1 Grammar</div>
                            <small>Partikel Dasar (Wa, Ga, Wo)</small>
                        </div>
                        <span class="badge bg-light text-dark">Diputar</span>
                    </button>

                    <!-- Materi 2.2 -->
                    <button type="button" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3"
                            onclick="pilihMateri(this, '2.2 Kosakata Sehari-hari (Kotoba)', 'Durasi: 10:20', 'Memperkaya perbendaharaan kata benda di lingkungan sekolah, kantor, dan aktivitas harian beserta pelafalannya.')">
                        <div>
                            <div class="fw-bold">2.2 Kosakata</div>
                            <small>Aktivitas & Benda Sekitar</small>
                        </div>
                        <span class="badge bg-secondary">10:20</span>
                    </button>

                    <!-- Materi 2.3 -->
                    <button type="button" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3"
                            onclick="pilihMateri(this, '2.3 Percakapan (Kaiwa)', 'Durasi: 15:10', 'Simulasi dialog perkenalan diri dan menanyakan arah dengan intonasi alami penutur asli Jepang.')">
                        <div>
                            <div class="fw-bold">2.3 Percakapan</div>
                            <small>Dialog & Intonasi Alami</small>
                        </div>
                        <span class="badge bg-secondary">15:10</span>
                    </button>

                    <!-- Materi 2.4 -->
                    <button type="button" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3"
                            onclick="pilihMateri(this, '2.4 Latihan Membaca (Dokkai)', 'Durasi: 08:50', 'Membaca paragraf pendek menggunakan huruf Hiragana dan Katakana tanpa bantuan Romaji.')">
                        <div>
                            <div class="fw-bold">2.4 Latihan Membaca</div>
                            <small>Teks Pendek Hiragana</small>
                        </div>
                        <span class="badge bg-secondary">08:50</span>
                    </button>
                </div>

                <!-- Tautan Cepat ke Evaluasi Kuis -->
                <div class="mt-4 pt-2 border-top">
                    <a href="index.php?page=kuis" class="btn btn-outline-primary w-100 fw-semibold">
                        Buka Halaman Kuis Modul 2
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script Perpindahan Daftar Materi -->
<script>
function pilihMateri(element, judul, durasi, deskripsi) {
    // Hapus status aktif pada semua item daftar materi
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

    // Tandai materi yang dipilih sebagai aktif
    element.classList.add('active');
    const activeBadge = element.querySelector('.badge');
    activeBadge.classList.replace('bg-secondary', 'bg-light');
    activeBadge.classList.add('text-dark');
    activeBadge.innerText = 'Diputar';

    // Perbarui judul, durasi, dan deskripsi pada area layar utama
    document.getElementById('videoOverlayTitle').innerText = judul;
    document.getElementById('lessonTitle').innerText = judul;
    document.getElementById('lessonDuration').innerText = durasi;
    document.getElementById('lessonDesc').innerText = deskripsi;
}
</script>