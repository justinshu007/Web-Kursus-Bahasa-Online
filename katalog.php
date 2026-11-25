<?php
// data daftar kursus dalam bentuk array
$daftar_kursus = [
    [
        "id" => 1,
        "judul" => "Kursus Bahasa Inggris Dasar",
        "bahasa" => "Inggris",
        "level" => "Pemula",
        "harga" => "Rp. 250.000",
        "deskripsi" => "Kuasai percakapan sehari-hari dan tata bahasa dasar Inggris."
    ],
    [
        "id" => 2,
        "judul" => "Kursus Bahasa Mandarin HSK 1",
        "bahasa" => "Mandarin",
        "level" => "Pemula",
        "harga" => "Rp. 250.000",
        "deskripsi" => "Belajar pinyin, nada bicara, dan kosakata dasar Mandarin."
    ],
    [
        "id" => 3,
        "judul" => "Kursus Bahasa Jepang JLPT N5",
        "bahasa" => "Jepang",
        "level" => "Pemula",
        "harga" => "Rp. 250.000",
        "deskripsi" => "Pengenalan huruf Hiragana, Katakana, dan pola kalimat dasar."
    ],
    [
        "id" => 4,
        "judul" => "English for Business & Career",
        "bahasa" => "Inggris",
        "level" => "Menengah",
        "harga" => "Rp. 350.000",
        "deskripsi" => "Tingkatkan kemampuan presentasi, negosiasi, dan email bisnis."
    ],
    [
        "id" => 5,
        "judul" => "Percakapan Mandarin Bisnis",
        "bahasa" => "Mandarin",
        "level" => "Menengah",
        "harga" => "Rp. 375.000",
        "deskripsi" => "Fokus pada komunikasi profesional dan istilah perdagangan."
    ],
    [
        "id" => 6,
        "judul" => "Bahasa Jepang JLPT N2 Intensif",
        "bahasa" => "Jepang",
        "level" => "Mahir",
        "harga" => "Rp. 450.000",
        "deskripsi" => "Persiapan ujian tingkat lanjut, kanji kompleks, dan keigo."
    ]
];
?>

<div class="container my-5">
    <!-- bagian kotak pencarian kursus -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="input-group input-group-lg shadow-sm">
                <input type="text" id="searchInput" class="form-control" placeholder="Cari nama kursus bahasa (contoh: Inggris, JLPT, HSK)...">
                <button class="btn btn-primary px-4" type="button" onclick="filterCourses()">Cari</button>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- kolom kiri untuk pilihan filter -->
        <div class="col-lg-3 mb-4">
            <div class="card border-0 shadow-sm p-3">
                <h5 class="fw-bold mb-3">Filter</h5>
                
                <!-- filter berdasarkan bahasa -->
                <div class="mb-4">
                    <h6 class="fw-semibold text-muted mb-2">Bahasa</h6>
                    <div class="form-check">
                        <input class="form-check-input filter-bahasa" type="checkbox" value="Inggris" id="filterInggris" onchange="filterCourses()">
                        <label class="form-check-label" for="filterInggris">Inggris</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input filter-bahasa" type="checkbox" value="Mandarin" id="filterMandarin" onchange="filterCourses()">
                        <label class="form-check-label" for="filterMandarin">Mandarin</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input filter-bahasa" type="checkbox" value="Jepang" id="filterJepang" onchange="filterCourses()">
                        <label class="form-check-label" for="filterJepang">Jepang</label>
                    </div>
                </div>

                <!-- filter berdasarkan tingkat kesulitan -->
                <div class="mb-3">
                    <h6 class="fw-semibold text-muted mb-2">Level</h6>
                    <div class="form-check">
                        <input class="form-check-input filter-level" type="checkbox" value="Pemula" id="levelPemula" onchange="filterCourses()">
                        <label class="form-check-label" for="levelPemula">Pemula</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input filter-level" type="checkbox" value="Menengah" id="levelMenengah" onchange="filterCourses()">
                        <label class="form-check-label" for="levelMenengah">Menengah</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input filter-level" type="checkbox" value="Mahir" id="levelMahir" onchange="filterCourses()">
                        <label class="form-check-label" for="levelMahir">Mahir</label>
                    </div>
                </div>

                <button class="btn btn-sm btn-outline-secondary w-100 mt-2" onclick="resetFilter()">Reset Filter</button>
            </div>
        </div>

        <!-- kolom kanan untuk daftar kartu kursus -->
        <div class="col-lg-9">
            <div class="row g-4" id="courseGrid">
                <?php foreach ($daftar_kursus as $kursus): ?>
                <div class="col-md-4 course-item" 
                     data-bahasa="<?php echo $kursus['bahasa']; ?>" 
                     data-level="<?php echo $kursus['level']; ?>"
                     data-judul="<?php echo strtolower($kursus['judul']); ?>">
                    
                    <div class="card h-100 border-0 shadow-sm">
                        <!-- tempat gambar kursus -->
                        <div class="bg-secondary text-white d-flex align-items-center justify-content-center" style="height: 150px;">
                            <span class="fw-semibold">Gambar <?php echo $kursus['bahasa']; ?></span>
                        </div>
                        
                        <div class="card-body d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-primary"><?php echo $kursus['bahasa']; ?></span>
                                <span class="badge bg-info text-dark"><?php echo $kursus['level']; ?></span>
                            </div>
                            <h5 class="card-title fw-bold"><?php echo $kursus['judul']; ?></h5>
                            <p class="card-text text-muted small flex-grow-1"><?php echo $kursus['deskripsi']; ?></p>
                            <h6 class="fw-bold text-success mb-3"><?php echo $kursus['harga']; ?></h6>
                            
                            <!-- tombol menuju halaman detail kursus -->
                            <a href="index.php?page=detail&id=<?php echo $kursus['id']; ?>" class="btn btn-outline-primary w-100">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <!-- pemberitahuan jika kursus tidak ditemukan -->
            <div id="noResult" class="alert alert-warning text-center mt-4 d-none">
                Kursus yang Anda cari tidak ditemukan. Silakan ubah kata kunci atau filter.
            </div>
        </div>
    </div>
</div>

<!-- kode javascript untuk fitur cari dan filter langsung -->
<script>
document.getElementById('searchInput').addEventListener('keyup', filterCourses);

function filterCourses() {
    const searchText = document.getElementById('searchInput').value.toLowerCase();
    
    // mengambil pilihan bahasa yang dicentang
    const checkedBahasa = Array.from(document.querySelectorAll('.filter-bahasa:checked')).map(cb => cb.value);
    // mengambil pilihan level yang dicentang
    const checkedLevel = Array.from(document.querySelectorAll('.filter-level:checked')).map(cb => cb.value);
    
    const courses = document.querySelectorAll('.course-item');
    let visibleCount = 0;

    courses.forEach(course => {
        const judul = course.getAttribute('data-judul');
        const bahasa = course.getAttribute('data-bahasa');
        const level = course.getAttribute('data-level');

        const matchSearch = judul.includes(searchText);
        const matchBahasa = checkedBahasa.length === 0 || checkedBahasa.includes(bahasa);
        const matchLevel = checkedLevel.length === 0 || checkedLevel.includes(level);

        if (matchSearch && matchBahasa && matchLevel) {
            course.style.display = 'block';
            visibleCount++;
        } else {
            course.style.display = 'none';
        }
    });

    // menampilkan pesan jika hasil pencarian kosong
    const noResultAlert = document.getElementById('noResult');
    if (visibleCount === 0) {
        noResultAlert.classList.remove('d-none');
    } else {
        noResultAlert.classList.add('d-none');
    }
}

function resetFilter() {
    document.getElementById('searchInput').value = '';
    document.querySelectorAll('.form-check-input').forEach(cb => cb.checked = false);
    filterCourses();
}
</script>