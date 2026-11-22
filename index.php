<!DOCTYPE html>
<html>
<!-- Memanggil bagian Head -->
<?php include("framework/head.php"); ?>

<body>
    <div class="container-fluid p-0">
        <!-- Memanggil Navigation Bar -->
        <?php include("framework/nav.php"); ?>
        
        <!-- Bagian Konten yang Berubah-ubah -->
        <section class="min-vh-100">
            <?php
            // Logika PHP Switch Statement
            $content = "home.php"; // Halaman default
            $mod = "";
            
            if(isset($_GET['page'])) {
                $mod = $_GET['page'];
            }
            
            switch ($mod) {
                case "katalog": $content="katalog.php"; break;
                case "detail": $content="detail.php"; break;
                case "dashboard": $content="dashboard.php"; break;
                case "kelas": $content="kelas.php"; break;
                case "kuis": $content="kuis.php"; break;
                case "credit": $content="credit.php"; break; // Halaman Wajib Tugas
                default: $content="home.php";
            }
            // Memanggil file halaman sesuai hasil switch
            include($content);
            ?>
        </section>

        <!-- Memanggil Footer -->
        <?php include("framework/footer.php"); ?>
    </div>
</body>
</html>