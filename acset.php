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
        <title>Account Setting</title>

        <!-- Favicon -->
        <link rel="icon" href="./img/core-img/favicon.png">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>

<body>
       <!-- Preloader -->
        <!-- <div id="preloader">
            <div class="loader"></div>
        </div> -->
        <!-- /Preloader -->

        <!-- Memanggil nav.php-->
        <?php include "nav.php";
            $nik = $_SESSION["nik"];

            // $nik = md5($_SESSION["nik"]);
            // Mengambil semua data yang ada di nahkoda

            $query = $link->query("SELECT * FROM nahkoda where nik = '$nik'");
            $nahkoda = $query->fetch_assoc();
        ?>

        <div class="wadah">
            <div class="container">
                <div class="row">
                    <h4>Account Setting</h4>
                </div>
                <div class="row">
                    <div class="col-kiri col-md-4">
                        <div class="card">
                            <img src="img/ac-img/<?php echo $nahkoda['gambar'] ?>" alt="Profile Photo" style="object-fit:contain">
                        </div>
                        <br>
                        <h6 style="text-align:center"><?php echo $_SESSION["nama"] ?></h6>
                        <h6 style="text-align:center"><?php echo $_SESSION["nik"] ?></h6>                       
                    </div>
                    <div class="col-kanan col-md-7 col-xs-12">
                        <h5>My Profile</h5>
                        <form id="formulir" action="changeprofile.php" method="post">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="nik">NIK</label>
                                    <input class="form-control" type="text" name="nik" id="nik" disabled value="<?php echo $_SESSION["nik"] ?>">
                                </div>
                                <div class="col-md-5">
                                    <label for="nik">Nama</label>
                                    <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $nahkoda["nama"] ?>" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nik">Nomor HP</label>
                                    <input class="form-control" type="text" name="no_hp" id="no_hp" value="<?php echo "+62".$nahkoda["No_HP"] ?>" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="nik">Nomor HP Darurat</label>
                                    <input class="form-control" type="tel" name="no_hp_d" id="no_hp_d" value="<?php echo "+62".$nahkoda["No_HP_Darurat"] ?>" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="nik">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" value="<?php echo $nahkoda["Tempat_Lahir"] ?>" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="nik">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $nahkoda["Tanggal_Lahir"] ?>" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="alamat">Kota Asal</label>
                                    <input type="text" class="form-control" value="<?php echo $nahkoda["Kota"] ?>" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="alamat">Kecamatan</label>
                                    <input type="text" class="form-control" value="<?php echo $nahkoda["Kecamatan"] ?>" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="alamat">Desa</label>
                                    <input type="text" class="form-control" value="<?php echo $nahkoda["Desa"] ?>" disabled>
                                </div>
                                <div class="col-md-12">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" value="<?php echo $nahkoda["Alamat"] ?>" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 tombol" >
                                    <button class=" btn btn-warning">Edit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-kiri col-kiri-bawah col-md-4">

                    </div>
                    <div class="col-kanan col-kanan-bawah col-md-7 col-xs-12">
                        <h5>Password</h5>
                        <form id="formulir" action="changeprofile.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nik">Current Password</label>
                                    <input class="form-control" type="password" name="nik" id="nik" value="<?php echo $_SESSION["password"] ?>" disabled>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-12 tombol">
                                    <button class="tombol btn btn-warning">Change</button>                                
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                    
            </div>
        </div>
        <!-- Memanggil footer.php  -->
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