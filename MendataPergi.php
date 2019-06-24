<?php
    // Menghubungkan ke database
    include "action/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Title -->
        <title>Laporan Pergi</title>

        <!-- Favicon -->
        <link rel="icon" href="./img/core-img/favicon.png">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="style.css">

    </head>

<body style="background-image: url(img/bg-img/18.jpg); height:100vh; background-attachment:fixed;">
       <!-- Preloader -->
        <!-- <div id="preloader">
            <div class="loader"></div>
        </div> -->
        <!-- /Preloader -->
        <!-- Memanggil nav.php dengan tujuan menampilkan navbar yang sudah di buat sebelumnya -->
        <?php include "nav.php";?>

        <!-- Our Speakings Area Start -->
        <section class="our-blog-area bg-img section-padding-100-60" >
            <div class="container back">
                <div class="row">
                    <!-- Heading -->
                    <div class="col-12">
                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                            <h4 style="margin-top:10px;">Laporan Berangkat Melaut</h4>
                        </div>
                    </div>
                </div>

                <div class="row isi">
           <!-- Tabel untuk mengisi data pergi -->
           <div class="col-12" >
                <form action="pergi.php" method="post">
                    <div class="row" style="padding-left:10px;padding-right:10px;">
                        <div class="col-lg-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="NIK">NIK Nahkoda</label>
                                    <input type="text" class="form-control" name="NIK" id="NIK" disabled value="<?php echo $_SESSION["nik"] ?>">
                                </div>
                                <div class="col-lg-12">
                                    <label for="Nama">Nama Nahkoda</label>
                                    <input type="text" class="form-control" name="Nama" id="Nama" disabled value="<?php echo $_SESSION["nama"] ?>">
                                </div>
                                <div class="col-lg-12">
                                    <label for="Nama_Kapal">Nama Kapal</label>
                                    <input type="text" class="form-control" name="Nama_Kapal" id="Nama_Kapal" required>
                                </div>
                                <div class="col-lg-12">
                                    <label for="Tanggal">Tanggal Berangkat</label>
                                    <input type="date" class="form-control" name="Tanggal_Berangkat" id="Tanggal_Berangkat" required>
                                </div>        
                            </div>    
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-10">
                                    <label for="Awak"><strong>DAFTAR AWAK</strong></label><br>
                                    <label for="ABK1">ABK 1</label>
                                    <input type="text" class="form-control" name="ABK1" id="ABK1">
                                </div>
                                <div class="col-lg-10">
                                    <label for="ABK2">ABK 2</label>
                                    <input type="text" class="form-control" name="ABK2" id="ABK2" >
                                </div>
                                <div class="col-lg-10">
                                    <label for="ABK3">ABK 3</label>
                                    <input type="text" class="form-control" name="ABK3" id="ABK3" >
                                </div>
                                <div class="col-lg-10">
                                    <label for="ABK4">ABK 4</label>
                                    <input type="text" class="form-control" name="ABK4" id="ABK4">
                                </div>
                                <div class="col-lg-10">
                                    <label for="ABK5">ABK 5</label>
                                    <input type="text" class="form-control" name="ABK5" id="ABK5">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-success" style="margin-left:100px; margin-bottom:20px;">Lapor</button>
                    </div>
                </form>
            </div>
        </div>
</div>

</section>
<?php include "footer.php" ?>


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