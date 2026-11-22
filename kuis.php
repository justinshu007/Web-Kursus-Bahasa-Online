<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Header Quiz -->
            <div class="card border-0 shadow-sm mb-3 bg-primary text-white">
                <div class="card-body d-flex justify-content-between align-items-center py-3">
                    <div>
                        <h5 class="fw-bold mb-0">Quiz Evaluasi: Bahasa Jepang (JLPT N5)</h5>
                        <small>Modul 2: Tata Bahasa & Kosakata Dasar</small>
                    </div>
                    <a href="index.php?page=kelas" class="btn btn-sm btn-light fw-semibold">Kembali ke Kelas</a>
                </div>
            </div>

            <!-- Penanda Nomor Soal Aktif -->
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-body py-2 px-4 d-flex justify-content-between align-items-center bg-light">
                    <span id="nomorSoalBadge" class="fw-bold text-primary">Soal 1 dari 9</span>
                    <span id="statusJawabBadge" class="badge bg-secondary">Belum dijawab</span>
                </div>
            </div>

            <!-- Area Pertanyaan & Pilihan Jawaban -->
            <div class="card border-0 shadow-sm mb-4" id="areaSoal">
                <div class="card-body p-4">
                    <h5 id="teksPertanyaan" class="fw-bold mb-4 lh-base">
                        Partikel manakah yang digunakan untuk menandai objek langsung dari suatu kata kerja dalam bahasa Jepang?
                    </h5>

                    <!-- Pilihan Ganda (Opsi A - D) -->
                    <div class="d-grid gap-3" id="containerOpsi">
                        <!-- Diisi secara dinamis melalui JavaScript -->
                    </div>

                    <!-- Tombol Navigasi Sebelumnya / Selanjutnya -->
                    <div class="d-flex justify-content-between mt-4 pt-3 border-top">
                        <button type="button" id="btnPrev" class="btn btn-outline-secondary" onclick="gantiSoal(soalAktif - 1)" disabled>
                            &larr; Sebelumnya
                        </button>
                        <button type="button" id="btnNext" class="btn btn-primary" onclick="gantiSoal(soalAktif + 1)">
                            Selanjutnya &rarr;
                        </button>
                        <button type="button" id="btnSelesai" class="btn btn-success fw-bold d-none" onclick="hitungSkor()">
                            Selesai & Lihat Nilai
                        </button>
                    </div>
                </div>
            </div>

            <!-- Area Hasil Nilai (Muncul setelah tombol Selesai diklik) -->
            <div class="card border-0 shadow-sm mb-4 d-none text-center p-4" id="areaHasil">
                <h4 class="fw-bold mb-2">Evaluasi Selesai!</h4>
                <p class="text-muted">Berikut adalah skor hasil pengerjaan kuis Anda:</p>
                <div class="display-3 fw-bold text-success my-3" id="skorAkhir">0/100</div>
                <p id="keteranganSkor" class="fw-semibold mb-4"></p>
                <div class="d-flex justify-content-center gap-2">
                    <button type="button" class="btn btn-outline-primary" onclick="ulangiKuis()">Ulangi Kuis</button>
                    <a href="index.php?page=dashboard" class="btn btn-primary">Kembali ke Dashboard</a>
                </div>
            </div>

            <!-- Navigasi Nomor Soal (1 - 9) -->
            <div class="card border-0 shadow-sm">
                <div class="card-body p-3">
                    <small class="text-muted d-block mb-2 fw-semibold">Navigasi Nomor Soal:</small>
                    <div class="d-flex flex-wrap gap-2" id="navigasiNomor">
                        <!-- Tombol nomor 1-9 dibuat otomatis oleh JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script Logika Kuis Interaktif -->
<script>
const daftarSoal = [
    {
        pertanyaan: "1. Partikel manakah yang digunakan untuk menandai objek langsung dari suatu kata kerja dalam bahasa Jepang?",
        opsi: ["A. Partikel は (wa)", "B. Partikel を (wo)", "C. Partikel に (ni)", "D. Partikel の (no)"],
        kunci: 1
    },
    {
        pertanyaan: "2. Apa arti dari sapaan 'Ohayou gozaimasu'?",
        opsi: ["A. Selamat pagi", "B. Selamat siang", "C. Selamat malam", "D. Terima kasih"],
        kunci: 0
    },
    {
        pertanyaan: "3. Huruf Hiragana 'あ' dibaca sebagai...",
        opsi: ["A. I", "B. U", "C. A", "D. E"],
        kunci: 2
    },
    {
        pertanyaan: "4. Kata ganti orang pertama yang sopan dalam bahasa Jepang adalah...",
        opsi: ["A. Anata (あなた)", "B. Watashi (わたし)", "C. Kare (かれ)", "D. Sensei (せんせい)"],
        kunci: 1
    },
    {
        pertanyaan: "5. Sistem penulisan Jepang yang digunakan khusus untuk kata serapan bahasa asing adalah...",
        opsi: ["A. Hiragana", "B. Kanji", "C. Katakana", "D. Romaji"],
        kunci: 2
    },
    {
        pertanyaan: "6. Bagaimana cara menyebut angka '3' dalam bahasa Jepang?",
        opsi: ["A. Ichi", "B. Ni", "C. San", "D. Yon"],
        kunci: 2
    },
    {
        pertanyaan: "7. Akhiran kata kerja bentuk sopan (bentuk positif sekarang/masa depan) dalam bahasa Jepang adalah...",
        opsi: ["A. ~masu", "B. ~masen", "C. ~mashita", "D. ~deshita"],
        kunci: 0
    },
    {
        pertanyaan: "8. Kata 'Gakkou (がっこう)' memiliki arti...",
        opsi: ["A. Rumah sakit", "B. Perpustakaan", "C. Stasiun", "D. Sekolah"],
        kunci: 3
    },
    {
        pertanyaan: "9. Partikel penanda kepemilikan (seperti 'buku milik saya' -> Watashi ___ hon) adalah...",
        opsi: ["A. が (ga)", "B. で (de)", "C. の (no)", "D. へ (e)"],
        kunci: 2
    }
];

let soalAktif = 0;
let jawabanUser = new Array(daftarSoal.length).fill(null);

function renderNavigasiNomor() {
    const container = document.getElementById('navigasiNomor');
    container.innerHTML = '';

    daftarSoal.forEach((_, index) => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.innerText = index + 1;
        
        if (index === soalAktif) {
            btn.className = 'btn btn-primary fw-bold';
        } else if (jawabanUser[index] !== null) {
            btn.className = 'btn btn-success';
        } else {
            btn.className = 'btn btn-outline-secondary';
        }

        btn.style.width = '42px';
        btn.onclick = () => gantiSoal(index);
        container.appendChild(btn);
    });
}

function tampilkanSoal() {
    const data = daftarSoal[soalAktif];
    document.getElementById('nomorSoalBadge').innerText = `Soal ${soalAktif + 1} dari ${daftarSoal.length}`;
    document.getElementById('teksPertanyaan').innerText = data.pertanyaan;

    const statusBadge = document.getElementById('statusJawabBadge');
    if (jawabanUser[soalAktif] !== null) {
        statusBadge.innerText = 'Sudah dijawab';
        statusBadge.className = 'badge bg-success';
    } else {
        statusBadge.innerText = 'Belum dijawab';
        statusBadge.className = 'badge bg-secondary';
    }

    const containerOpsi = document.getElementById('containerOpsi');
    containerOpsi.innerHTML = '';

    data.opsi.forEach((teksOpsi, idxOpsi) => {
        const isChecked = jawabanUser[soalAktif] === idxOpsi;
        const label = document.createElement('label');
        label.className = `btn text-start p-3 border ${isChecked ? 'btn-primary text-white fw-semibold' : 'btn-outline-dark'}`;
        
        label.innerHTML = `
            <input type="radio" name="opsiJawaban" class="form-check-input me-2" ${isChecked ? 'checked' : ''}>
            ${teksOpsi}
        `;

        label.onclick = () => pilihJawaban(idxOpsi);
        containerOpsi.appendChild(label);
    });

    // Atur visibilitas tombol Sebelumnya, Selanjutnya, dan Selesai
    document.getElementById('btnPrev').disabled = (soalAktif === 0);
    
    if (soalAktif === daftarSoal.length - 1) {
        document.getElementById('btnNext').classList.add('d-none');
        document.getElementById('btnSelesai').classList.remove('d-none');
    } else {
        document.getElementById('btnNext').classList.remove('d-none');
        document.getElementById('btnSelesai').classList.add('d-none');
    }

    renderNavigasiNomor();
}

function pilihJawaban(indexOpsi) {
    jawabanUser[soalAktif] = indexOpsi;
    tampilkanSoal();
}

function gantiSoal(indexBaru) {
    if (indexBaru >= 0 && indexBaru < daftarSoal.length) {
        soalAktif = indexBaru;
        tampilkanSoal();
    }
}

function hitungSkor() {
    let benar = 0;
    daftarSoal.forEach((soal, idx) => {
        if (jawabanUser[idx] === soal.kunci) {
            benar++;
        }
    });

    const nilai = Math.round((benar / daftarSoal.length) * 100);
    document.getElementById('areaSoal').classList.add('d-none');
    document.getElementById('areaHasil').classList.remove('d-none');
    document.getElementById('skorAkhir').innerText = `${nilai}/100`;
    document.getElementById('keteranganSkor').innerText = `Anda menjawab benar ${benar} dari ${daftarSoal.length} soal.`;
}

function ulangiKuis() {
    jawabanUser.fill(null);
    soalAktif = 0;
    document.getElementById('areaHasil').classList.add('d-none');
    document.getElementById('areaSoal').classList.remove('d-none');
    tampilkanSoal();
}

// Inisialisasi kuis saat halaman dimuat
tampilkanSoal();
</script>