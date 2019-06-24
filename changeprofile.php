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

        <script type='text/javascript'>
        function preview_image(event) 
        {
            // console.log('files: ',event.files);
                
            var reader = new FileReader();
            reader.onload = function()
            {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
        </script>
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
            $nik = $_SESSION["nik"];
            // Mengambil semua data yang ada di nahkoda
            $query = $link->query("SELECT * FROM nahkoda where nik = '$nik'");
            $nahkoda = $query->fetch_assoc();
            ?>

        <div class="wadah wadah-edit">
            <div class="container">
                <div class="row">
                    <h4>Account Setting</h4>
                </div>
                <div class="row">
                    <div class="col-kiri col-kiri-edit col-md-4 col-xs-12">
                        <div>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="custom-file" style="margin-bottom:5px;" >
                                    <input type="file" class="custom-file-input" id="validatedCustomFile" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" name="myimage" onchange="preview_image(event);" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                                <!-- <input class="btn btn-primary" type="file" accept="image/*" name="myimage" onchange="preview_image(event)" style="margin-bottom:5px;" required> -->
                                <button class="btn btn-success" type="submit" name="submit_image" style="margin-bottom:5px;">Save Photo</button>
                            </form>
                            <?php 
                                if (isset($_POST['submit_image'])) {
                                $nama = $_FILES['myimage']['name'];
                                $lokasi = $_FILES['myimage']['tmp_name'];
                                // $nik = md5($_SESSION["nik"]);
                                $nik = $_SESSION["nik"];


                                $gambar = htmlentities(strip_tags(trim($nama)));

                                    move_uploaded_file($lokasi, "img/ac-img/".$nama);
                                    $link->query("update nahkoda set gambar='$gambar' where nik='$nik'");

                                echo "<div class='alert alert-info'>Data ditambahkan</div>";
                                echo " <meta http-equiv='refresh' content='l;url=acset.php'>";

                                }
                            ?>
                        </div>
                        <div class="card" >
                            <img src="img/ac-img/<?php echo $nahkoda['gambar'] ?>" alt="" id="output_image" style="object-fit:contain">
                        </div><br>
                            <h6 style="text-align:center"><?php echo $_SESSION["nama"] ?></h6>
                            <h6 style="text-align:center"><?php echo $_SESSION["nik"] ?></h6>                       
                    </div>
                    <div class="col-kanan col-kanan-edit col-md-7 col-xs-12">
                        <h5>My Profile</h5>
                        <form id="formulir" action="action/changeprofile.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nik">NIK</label>
                                    <input class="form-control" type="text" name="nik" id="nik" value="<?php echo $_SESSION["nik"] ?>" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="nik">Nama</label>
                                    <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $nahkoda["nama"] ?>" autofocus>
                                </div>
                                <div class="col-md-5">
                                    <label for="nik">Nomor HP</label>
                                    <input class="form-control" type="tel" name="no_hp" id="no_hp" value="<?php echo $nahkoda["No_HP"] ?>">
                                </div>
                                <div class="col-md-5">
                                    <label for="nik">Nomor HP Darurat</label>
                                    <input class="form-control" type="tel" name="no_hp_darurat" id="no_hp_darurat" value="<?php echo $nahkoda["No_HP_Darurat"] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nik">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="tempat" id="tempat" value="<?php echo $nahkoda["Tempat_Lahir"] ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="nik">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir" value="<?php echo $nahkoda["Tanggal_Lahir"] ?>" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="alamat">Kota Asal</label>
                                    <input type="text" class="form-control" name="kota" value="<?php echo $nahkoda["Kota"] ?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="alamat">Kecamatan</label>
                                    <input type="text" class="form-control" name="kecamatan" value="<?php echo $nahkoda["Kecamatan"] ?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="alamat">Desa</label>
                                    <input type="text" class="form-control" name="desa" value="<?php echo $nahkoda["Desa"] ?>">
                                </div>
                                <div class="col-md-12">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="<?php echo $nahkoda["Alamat"] ?>">
                                </div>
                            </div>
                            <br>
                            <h5>Password</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nik">Current Password</label>
                                    <input class="form-control" type="password"  value="<?php echo $_SESSION["password"] ?>" disabled>
                                    <input class="form-control" type="password" name="password" id="password" hidden value="<?php echo $_SESSION["password"] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nik">New Password</label>
                                    <input class="form-control" type="password" name="password2" id="password2" >
                                </div>
                                <div class="col-md-6">
                                    <label for="nik">Confirm Password</label>
                                    <input class="form-control" type="password" name="password3" id="password3" >
                                    <span id="message"></span>
                                </div>
                            </div>
                            <div class="row">               
                                <div class="col-md-12 tombol">
                                    <a href="acset.php" class="btn btn-primary">Cancel</a>
                                    <button class=" btn btn-success" id="save">Save</button>
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
        <!-- Main JS -->
        <script src="js/main.js"></script>
</body>

</html>