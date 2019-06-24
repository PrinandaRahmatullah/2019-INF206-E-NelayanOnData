<?php
    // Menghubungkan ke database
    include "../action/connection.php";
    $nik = $_GET["NIK"];
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Own CSS -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="css/style.css">
    <!--=== FontAwesome CSS ===-->
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<title>Detail Laporan Melaut</title>
    </head>

<body>
       <!-- Preloader -->
        <!-- <div id="preloader">
            <div class="loader"></div>
        </div> -->
        <!-- /Preloader -->

        <!-- Memanggil nav.php-->
        <?php include "nav.php";


            // $nik = md5($_SESSION["nik"]);
            // Mengambil semua data yang ada di nahkoda

            $query = $link->query("SELECT * FROM datapergi where NIK = '$nik'");
            $nahkoda = $query->fetch_assoc();
            
            // $kapten = $kuery->fetch_assoc();
        ?>

        <div class="wadah">
            <div class="container">
                <div class="row">
                    <h4>Laporan</h4>
                </div>
                <div class="row">
                    <div class="col-kanan col-md-12 col-xs-12">
                        <h5>My Profile</h5>
                        <form id="formulir" action="changeprofile.php" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="nik">NIK Nahkoda</label>
                                    <input class="form-control" type="text" name="nik" id="nik" disabled value="<?php echo $nik ?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="nik">Nama Nahkoda</label>
                                    <input class="form-control" type="text" name="nama" id="nama" value="Prinanda Rahmatullah" disabled>
                                </div>
                            </div><br>
                            <h6>DAFTAR AWAK</h6>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="ABK1">ABK 1</label>
                                    <input type="text" class="form-control" name="ABK1" id="ABK1" value="Munawirsyah">
                                </div>
                                <div class="col-lg-4">
                                    <label for="ABK2">ABK 2</label>
                                    <input type="text" class="form-control" name="ABK2" id="ABK2" value="Indra Azhari">
                                </div>
                                <div class="col-lg-4">
                                    <label for="ABK3">ABK 3</label>
                                    <input type="text" class="form-control" name="ABK3" id="ABK3" value="Febry Mulya">
                                </div>
                                <div class="col-lg-4">
                                    <label for="ABK4">ABK 4</label>
                                    <input type="text" class="form-control" name="ABK4" id="ABK4" value="M. Fadhil">
                                </div>
                                <div class="col-lg-4">
                                    <label for="ABK5">ABK 5</label>
                                    <input type="text" class="form-control" name="ABK5" id="ABK5" value="Yoga Altariz">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 tombol" >
                                    <a id="terima" type="button" class="btn btn-outline-success btn-rounded waves-effect">Verifikasi</a> 
                                    <a id="tolak" type="button" class="btn btn-outline-danger btn-rounded waves-effect">Tolak</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-kiri col-kiri-bawah col-md-4">

                    </div>
                </div>
                    
            </div>
        </div>

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