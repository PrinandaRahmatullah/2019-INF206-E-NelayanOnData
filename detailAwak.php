<?php
    // Menghubungkan ke database
    include "action/connection.php";
    $nik = $_GET["NIK"];

    $query = $link->query("SELECT * FROM awakkapal where NIK = '$nik'");
    $awak = $query->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Title -->
        <title>Detail ABK</title>

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
        <?php include "nav.php";?>

        <div class="wadah wadah-edit" style="height:auto">
            <div class="container">
                <div class="row">
                    <h4>Detail ABK</h4>
                </div>
                <div class="row">
                    <div class="col-kiri col-kiri-edit col-md-4 col-xs-12" style="padding:25px; height:500px;">
                        <div>
                            <form action="" method="post" enctype="multipart/form-data">
                                <?php if (isset($_SESSION["nik"]) && $_SESSION["password"]): ?>
                                <div class="custom-file" style="margin-bottom:5px;" >
                                    <input type="file" class="custom-file-input" id="validatedCustomFile" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" name="myimage" onchange="preview_image(event);" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                                <!-- <input class="btn btn-primary" type="file" accept="image/*" name="myimage" onchange="preview_image(event)" style="margin-bottom:5px;" required> -->
                                <button class="btn btn-success" type="submit" name="submit_image" style="margin-bottom:5px;">Save Photo</button>
                                <?php else : ?>
                                <?php endif; ?>
                            </form>
                            <?php
                            
                                if (isset($_POST['submit_image'])) {
                                $nama = $_FILES['myimage']['name'];
                                $lokasi = $_FILES['myimage']['tmp_name'];

                                $gambar = htmlentities(strip_tags(trim($nama)));

                                    move_uploaded_file($lokasi, "img/awak-img/".$nama);
                                    $link->query("update awakkapal set gambar='$gambar' where NIK='$nik'");

                                echo "<div class='alert alert-info'>Data ditambahkan</div>";
                                echo " <meta http-equiv='refresh' content='l;url=awak.php'>";

                                }
                            ?>
                        </div>
                        <div class="card" >
                            <img src="img/awak-img/<?php echo $awak['gambar'] ?>" alt="" id="output_image" style="object-fit:contain">
                        </div><br>
                            <h6 style="text-align:center"><?php echo $awak["Nama"] ?></h6>
                            <h6 style="text-align:center"><?php echo $awak["NIK"] ?></h6>                       
                    </div>
                    <div class="col-kanan col-kanan-edit col-md-7 col-xs-12" style="height:500px">
                        <h5>My Profile</h5>
                        <form id="formulir" action="action/editABK.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nik">NIK</label>
                                    <input class="form-control" type="text" value="<?php echo  $awak["NIK"] ?>" disabled>
                                    <input class="form-control" type="text" name="nik" id="nik" value="<?php echo  $awak["NIK"] ?>" hidden>
                                </div>
                                <div class="col-md-6">
                                    <label for="nik">Nama</label>
                                    <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $awak["Nama"] ?>" autofocus>
                                </div>
                                <div class="col-md-5">
                                    <label for="nik">Nomor HP</label>
                                    <input class="form-control" type="tel" name="no_hp" id="no_hp" value="<?php echo $awak["No_HP"] ?>">
                                </div>
                                <div class="col-md-5">
                                    <label for="nik">Nomor HP Darurat</label>
                                    <input class="form-control" type="tel" name="no_hp_darurat" id="no_hp_darurat" value="<?php echo $awak["No_HP_Darurat"] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nik">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="tempat" id="tempat" value="<?php echo $awak["Tempat_Lahir"] ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="nik">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir" value="<?php echo $awak["Tanggal_Lahir"] ?>" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="alamat">Kota Asal</label>
                                    <input type="text" class="form-control" name="kota" value="<?php echo $awak["Kota"] ?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="alamat">Kecamatan</label>
                                    <input type="text" class="form-control" name="kecamatan" value="<?php echo $awak["Kecamatan"] ?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="alamat">Desa</label>
                                    <input type="text" class="form-control" name="desa" value="<?php echo $awak["Desa"] ?>">
                                </div>
                                <div class="col-md-12">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="<?php echo $awak["Alamat"] ?>">
                                </div>
                            </div>                            
                            <div class="row">
                                <?php if (isset($_SESSION["nik"]) && $_SESSION["password"]): ?>
                                <div class="col-md-4 tombol">
                                    <a href="action/deleteABK.php?NIK=<?php echo $awak["NIK"] ?>" class="btn btn-danger">Hapus ABK</a>
                                </div>               
                                <div class="col-md-8 tombol">
                                    <a href="awak.php" class="btn btn-warning">Cancel</a>
                                    <button class=" btn btn-success" id="save">Simpan</button>    
                                </div>
                                <?php else:?>
                                <div class="col-md-12 tombol">
                                    <a href="awak.php" class="btn btn-warning"><< Kembali</a>

                                </div>
                                <?php endif;?>
                            </div>
                        </form>
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
        <!-- Main JS -->
        <script src="js/main.js"></script>
</body>

</html>