<?php
    // Menghubungkan ke database
    include "../action/connection.php";

    $No_Kapal = $_GET["No_Kapal"];
    // Mengambil semua data yang ada di kapal
    $kapal = $link->query("SELECT * FROM data_kapal where No_Kapal= $No_Kapal");
    $data = $kapal->fetch_assoc();
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
        <link rel="icon" href="../img/core-img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Own CSS -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="css/style.css">
    <!--=== FontAwesome CSS ===-->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

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
        <?php include "nav.php"; ?>

        <div class="wadah wadah-edit">
            <div class="container">
                <div class="row">
                    <h4>Edit Kapal</h4>
                </div>
                <div class="row">
                    <div class="col-kiri col-kiri-edit col-md-4 col-xs-12">
                        <div>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="custom-file" style="margin-bottom:5px;" >
                                            <input type="file" class="custom-file-input" id="validatedCustomFile" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" name="myimage" onchange="preview_image(event);" required>
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <button class="btn btn-success" type="submit" name="submit_image" style="margin-bottom:5px;">Save Photo</button>
                                    </div>
                                </div>
                            </form>
                            <?php 
                                if (isset($_POST['submit_image'])) {
                                    $nama = $_FILES['myimage']['name'];
                                    $lokasi = $_FILES['myimage']['tmp_name'];

                                $gambar = htmlentities(strip_tags(trim($nama)));

                                    move_uploaded_file($lokasi, "../img/kapal-img/".$nama);
                                    $link->query("update data_kapal set gambar='$gambar' where No_Kapal = $No_Kapal");

                                echo "<div class='alert alert-info'>Data ditambahkan</div>";
                                echo " <meta http-equiv='refresh' content='l;url=adminKapal.php'>";

                                }
                            ?>
                        </div>
                        <div class="row">
                        <div class="card" style="width:200px; height:200px; margin:auto">
                            <img src="../img/kapal-img/<?php echo $data['gambar'] ?>" alt="" id="output_image" style="object-fit:contain;">
                        </div>
                        </div>
                        <br>
                            <h6 style="text-align:center"><?php echo $data["Nama_kapal"] ?></h6>
                   
                    </div>
                    <div class="col-kanan col-kanan-edit col-md-7 col-xs-12" style="height:350px">
                        <h5>Profile Kapal</h5>
                        <form id="formulir" action="action/editKapal.php" method="post">
                            <div class="row">
                                
                                <div class="col-md-7">
                                    <label for="nik">Nama Kapal</label><input class="form-control" type="text" name="nomor" id="No_Kapal" value="<?php echo $data["No_Kapal"] ?>" hidden>
                                    <input class="form-control" type="text" name="Nama_kapal" id="Nama_kapal" value="<?php echo $data["Nama_kapal"] ?>" autofocus>
                                </div>
                                <div class="col-md-5">
                                    <label for="nik">Ukuran (GT)</label>
                                    <input class="form-control" type="tel" name="ukuran" id="ukuran" value="<?php echo $data["Besar_muatan"] ?>">
                                </div>
                                <div class="col-md-5">
                                    <label for="nik">Kondisi</label>
                                    <input class="form-control" type="tel" name="kondisi" id="kondisi" value="<?php echo $data["Kondisi"] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nik">Status</label>
                                    <input class="form-control" type="text" name="status" id="status" value="<?php echo $data["Status"] ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="nik">Nahkoda</label>
                                    <input class="form-control" type="text" name="nahkoda" id="nahkoda" value="<?php echo $data["Nahkoda"] ?>" >
                                </div>
                            </div>
                            <div class="row">               
                                <div class="col-md-12 tombol">
                                    <a href="kapal.php" class="btn btn-primary">Cancel</a>
                                    <button type="submit" class="btn btn-success" id="save">Save</button>
                            </div>   
                        </form>
                    </div>
                </div>
                    
            </div>
        </div>

        <!-- **** All JS Files ***** -->
        <!-- jQuery 2.2.4 -->
        <script src="../js/jquery.min.js"></script>
        <!-- Popper -->
        <script src="../js/popper.min.js"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js"></script>
        <!-- All Plugins -->
        <script src="../js/confer.bundle.js"></script>
        <!-- Active -->
        <script src="../js/default-assets/active.js"></script>
        <!-- Main JS -->
        <script src="../js/main.js"></script>
</body>

</html>