<?php
    // Menghubungkan ke database
    include "action/connection.php";
    include "action/act_datapergi.php";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Title -->
        <title>Mendata Pergi</title>

        <!-- Favicon -->
        <link rel="icon" href="./img/core-img/favicon.png">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="style.css">

    </head>

<body>
       <!-- Preloader -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- /Preloader -->
        <!-- Memanggil nav.php dengan tujuan menampilkan navbar yang sudah di buat sebelumnya -->
        <?php include "nav.php";?>

        <!-- Our Speakings Area Start -->
        <section class="our-blog-area bg-img section-padding-100-60" style="background-image: url(img/bg-img/18.jpg); height:100vh">
            <div class="container back">
                <div class="row">
                    <!-- Heading -->
                    <div class="col-12">
                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                            <p> </p>
                            <h4>Mendata Keberangkatan Nelayan</h4>
                        </div>
                    </div>
                </div>

                <div class="row isi">
           <!-- Tabel untuk mengisi data pergi -->
           <div class="col-12 col-lg-12">
                <form action="pergi.php" method="post">
                    <h5>NIK :</h5>
                    <input type="int" class = "col-6" name="nik" id="nik" placeholder="Masukkan NIK Nahkoda" required>
                    <br>
                    <br>

                    <h5>NAMA KAPAL :</h5>
                    <input type="text" class = "col-6" name="nama_kapal" id="nama_kapal" placeholder="Masukkan Nama Kapal" required>
                    <br>
                    <br>

                    <h5>TANGGAL BERANGKAT : </h5>
                    <input type="date" class = "col-6" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal" required>
                    <br>
                    <br>

                    <h5>ANGGOTA NELAYAN :</h5>
                    <input type="text" class = "col-6" name="anggota" id="anggota" placeholder="Masukkan NIK nelayan" required><br>
                    <br>
                    <div class="col-12">
                        <center><button type="submit" name="submit" id="but" class="btn confer-btn">Lapor<i class="zmdi zmdi-long-arrow-right"></i></button></center>
                    </div>
                </form>
            </div>
        </div>
</div>
</section>
<!-- Our Speakings Area End -->
<!-- Memanggil footer.php dengan tujuan menampilkan footer atau bagian bawah yang sudah di buat sebelumnya -->
<?php include "footer.php"; ?>
<!-- **** All JS Files ***** -->
<!-- jQuery 2.2.4 -->
<script src="js/jquery.min.js"></script>
<!-- Popper -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- All Plugins -->
<script src="js/confer.bundle.js"></script>
<!-- Active -->
<script src="js/default-assets/active.js"></script>
</body>

</html>