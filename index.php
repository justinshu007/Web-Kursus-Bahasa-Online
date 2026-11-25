<!DOCTYPE html>
<html>
<!-- memanggil bagian head -->
<?php include("framework/head.php"); ?>

<body>
    <div class="container-fluid p-0 d-flex flex-column min-vh-100">
        <!-- memanggil navigation bar -->
        <?php include("framework/nav.php"); ?>
        
        <!-- bagian konten yang berubah-ubah -->
        <section class="flex-grow-1">
            <?php
            // logika php switch statement
            $content = "home.php"; // halaman default
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
                case "credit": $content="credit.php"; break; // halaman wajib tugas
                default: $content="home.php";
            }
            // memanggil file halaman sesuai hasil switch
            include($content);
            ?>
        </section>

        <!-- memanggil footer -->
        <?php include("framework/footer.php"); ?>
    </div>
</body>
</html>