<?php
    require_once "../action/connection.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Own CSS -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="css/style.css">
    <!--=== FontAwesome CSS ===-->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <title>Kapal</title>
        <script type='text/javascript'>
        function preview_image(event) 
        {
            // console.log('files: ',event.files);
                
            var reader = new FileReader();
            reader.onload = function()
            {
                var output = document.getElementById('output_kapal');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
        </script>
  </head>
  <body>
    <!-- Navbar Page -->
    <?php include "nav.php";
    ?>

    <div class="container connahkoda">
        <h3 style="text-align:center; text-transform:uppercase;margin-bottom:15px;">Kelola Kapal</h3>
        <div class="container-fluid">
            <div class="row">
                <div id="tambah">
                    <button class="btn btn-outline-primary" data-toggle="modal" title="Tambah Kapal" data-target="#tambahKapal"><i class="fa fa-plus">  </i></button>
                </div>
                
            </div>
            <div class="row">
                <?php
                    $kapal = $link->query("select * from data_kapal");
                    
                    while($data=$kapal->fetch_assoc()){
                        echo "<div class='col-md-3 kartu'>
                        <div class='card'>
                            <img src='../img/kapal-img/".$data["gambar"]."' alt=''>
                        </div>
                        <h6 style='text-align:center; margin-top:10px;'>".$data["Nama_kapal"]."</h6>
                        <div class='row'>
                            <!-- <div class='col-lg-7'></div> -->
                            <div class='col-lg-12'>
                                <a style='float:right; margin-left:5px;' title='Edit' href='editKapal.php?No_Kapal=".$data["No_Kapal"]."' class='btn btn-outline-warning' ><i class='fa fa-edit'></i></a><a style='float:right 'title='Delete' href='action/deleteKapal.php?No_Kapal=".$data["No_Kapal"]."' class='btn btn-outline-danger'><i class='fa fa-trash'></i></a>
                            </div>
                        </div>
                    </div>";
                    }
                
                ?>
            </div>
        </div>
    </div>
    <!--== Login Page Content End ==-->
    

    <!-- Modal Tambah Kapal -->
    <div class="modal fade bd-example-modal-lg" id="tambahKapal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Nahkoda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="Nama_kapal">Nama Kapal</label>
                                <input type="text" class="form-control" name="Nama_kapal" id="Nama_kapal" required autofocus>
                            </div>
                            <div class="col-md-6">
                                <label for="ukuran">Ukuran (GT)</label>
                                <input type="text" class="form-control" name="ukuran" id="ukuran" required>
                            </div>
                            <div class="col-md-4">
                                <label for="Kondisi">Kondisi</label>
                                <input type="text" class="form-control" name="Kondisi" id="Kondisi" required>
                            </div>
                            <div class="col-md-4">
                                <label for="Status">Status</label>
                                <input type="text" class="form-control" name="Status" id="Status">
                            </div>
                            <div class="col-md-4">
                                <label for="Nahkoda">Nahkoda</label>
                                <input type="text" class="form-control" name="Nahkoda" id="Nahkoda">
                            </div>
                            <div class="col-md-5">
                                <div class="custom-file" style="margin-bottom:5px;" >
                                    <input type="file" class="custom-file-input" id="validatedCustomFile" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" name="gambarKapal" onchange="preview_image(event);" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                                <div class="card" style="height:200px;">
                                    <img alt="" id="output_kapal" style="object-fit:contain;height:200px; align-items:center">
                                </div>
                            </div>
                        </div>    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="submit_data" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
                    </form>
                    <?php 
                        if (isset($_POST['submit_data'])) {
                        $nama = $_FILES['gambarKapal']['name'];
                        $lokasi = $_FILES['gambarKapal']['tmp_name'];
                        $namakapal = $_POST["Nama_kapal"];
                        $ukuran = $_POST["ukuran"];
                        $kondisi = $_POST["Kondisi"];
                        $status = $_POST["Status"];
                        $nahkoda = $_POST["Nahkoda"];


                        $gambar = htmlentities(strip_tags(trim($nama)));

                            move_uploaded_file($lokasi, "../img/kapal-img/".$nama);
                            $link->query("insert into data_kapal (Nama_kapal, Besar_muatan, Kondisi, Status, Nahkoda, gambar) 
                            VALUES ('$namakapal',$ukuran,'$kondisi','$status','$nahkoda','$gambar')");

                        echo "<div class='alert alert-info'>Data ditambahkan</div>";
                        echo " <meta http-equiv='refresh' content='l;url=adminKapal.php'>";

                        }
                    ?>
                </div>
            </div>
        </div>
    </div>


    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>