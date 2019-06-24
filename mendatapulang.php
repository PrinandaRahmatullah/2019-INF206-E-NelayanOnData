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
        <title>Laporan Pulang</title>

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
        <?php include "nav.php";
            
        ?>

        <!-- Our Speakings Area Start -->
        <section class="our-blog-area bg-img section-padding-100-60" >
            <div class="container back">
                <div class="row">
                    <!-- Heading -->
                    <div class="col-12">
                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                            <h4 style="margin-top:10px;">Laporan Kembali</h4>
                        </div>
                    </div>
                </div>

                <div class="row isi">
           <!-- Tabel untuk mengisi data pergi -->
           <div class="col-12" >
                <form action="pulang.php" method="post">
                    <div class="row" style="padding-left:10px;padding-right:10px;">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="NIK">NIK</label>
                                    <input type="text" class="form-control" name="NIK" id="NIK" disabled value="<?php echo $_SESSION["nik"] ?>">
                                </div>
                                <div class="col-lg-6">
                                    <label for="Nama">Nama</label>
                                    <input type="text" class="form-control" name="Nama" id="Nama" disabled value="<?php echo $_SESSION["nama"] ?>">
                                </div>
                                <div class="col-lg-6">
                                    <label for="Nama_Kapal">Nama Kapal</label>
                                    <input type="text" class="form-control" name="Nama_Kapal" id="Nama_Kapal" disabled value="KM. Masa Indah">
                                </div>
                                <div class="col-lg-6">
                                    <label for="Tanggal">Tanggal Berangkat</label>
                                    <input type="date" class="form-control" name="Tanggal_Berangkat" id="Tanggal_Berangkat" required>
                                </div>        
                            </div>    
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5">
                            <div class="row">
                                <div class="col-lg-8">
                                    <label for="Awak"><strong>DAFTAR AWAK</strong></label><br>
                                    <label for="ABK1">ABK 1</label>
                                    <input type="text" class="form-control" name="ABK1" id="ABK1" value="Munawirsyah">
                                </div>
                                <div class="col-lg-8">
                                    <label for="ABK2">ABK 2</label>
                                    <input type="text" class="form-control" name="ABK2" id="ABK2" value="Indra Azhari">
                                </div>
                                <div class="col-lg-8">
                                    <label for="ABK3">ABK 3</label>
                                    <input type="text" class="form-control" name="ABK3" id="ABK3" value="Febry Mulya">
                                </div>
                                <div class="col-lg-8">
                                    <label for="ABK4">ABK 4</label>
                                    <input type="text" class="form-control" name="ABK4" id="ABK4" value="M. Fadhil">
                                </div>
                                <div class="col-lg-8">
                                    <label for="ABK5">ABK 5</label>
                                    <input type="text" class="form-control" name="ABK5" id="ABK5" value="Yoga Altariz">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-success" style="margin-left:100px">Lapor</button>
                    </div>
                </form>
            </div>
        </div>
</div>

</section>
<footer class="footer-area bg-img bg-overlay-2">
        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-12">
                        <div class="copywrite-text">
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Nelayan On DATA Team</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


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