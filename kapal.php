<?php
    // Menghubungkan ke database
    include "action/connection.php";
    // Mengambil semua data yang ada di data_kapal
    $query = mysqli_query($link,"SELECT * FROM data_kapal order by Nama_kapal asc");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Title -->
        <title>Kapal</title>

        <!-- Favicon -->
        <link rel="icon" href="img/core-img/favicon.png">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="style.css">

        <script type='text/javascript'>
        function preview_image(event) 
        {
            // console.log('files: ',event.files);
                
            var reader = new FileReader();
            reader.onload = function()
            {
                var output = document.getElementById('output_kapal_user');
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
        <!-- Memanggil nav.php dengan tujuan menampilkan navbar yang sudah di buat sebelumnya -->
        <?php include "nav.php";?>

        <!-- Our Speakings Area Start -->
        <section class="our-blog-area bg-img section-padding-100-60" style="background-image: url(img/bg-img/18.jpg); height:100vh; background-attachment:fixed;">
            <div class="container back">
                <div class="row">
                    <!-- Heading -->
                    <div class="col-lg-10">
                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                            <p> </p>
                            <h4>Kapal</h4>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <?php if (isset($_SESSION["nik"]) && $_SESSION["password"]): ?>
                        <div id='tambah'><br>
                            <button class='btn btn-outline-primary' data-toggle='modal' data-target='#tambahKapalUser'><i class='fa fa-plus'> Tambah Kapal</i></button>
                        </div>
                        <?php else: ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="row isi">
                    
                     <!-- Tabel untuk menampilkan semua data data kapal -->
                    <div class="col-12 col-lg-12">
                        <table class="table table-dark table-hover wow fadeInUp" data-wow-delay="300ms">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Foto</td>
                                    <td>Nama Kapal</td>
                                    <td>Ukuran (GT)</td>
                                    <td>Kondisi</td>
                                    <td>Status</td>
                                    <td>Nahkoda</td>
                                    <td>Detail</td>
                                    
                                </tr>

                            </thead>

                            <tbody>
                                <tr>

                                    <?php if (mysqli_num_rows($query)>0){ 
                                        $tambah = 0;
                                     while ($data = mysqli_fetch_array($query)) { $tambah++;
                                        echo"

                                    <td>".$tambah."</td>
                                    <td><div class='card card-orang'><img src='img/kapal-img/".$data['gambar']."'></div></td>                                    
                                    <td>".$data['Nama_kapal']."</td>
                                    <td>".$data['Besar_muatan']."</td>
                                    <td>".$data['Kondisi']."</td>
                                    <td>".$data['Status']."</td>
                                    <td>".$data['Nahkoda']."</td>
                                    <td><a style='title='Detail;' href='detailKapal.php?No_Kapal=".$data["No_Kapal"]."'><i class='fa fa-question' style='color:white;'></i></a></td>
                                </tr>";
                                    } 
                                    } ?>
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </section>
        
        
        <!-- Modal Tambah Kapal -->
        <div class="modal fade bd-example-modal-lg" id="tambahKapalUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kapal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="action/inputKapal.php" method="post">
                            <div class="row">
                                <!-- <div class="col-lg-6">
                                    <div class="custom-file" style="margin-bottom:5px;" >
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" name="gambarKapalUser" onchange="preview_image(event);">
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                    <div class="card" style="height:200px;">
                                        <img alt="" id="output_kapal_user" style="object-fit:contain;height:200px; align-items:center">
                                    </div>
                                </div> -->
                                <div class="col-lg-12">
                                    <div class="col-md-12">
                                        <label for="nama">Nama Kapal</label>
                                        <input type="text" class="form-control" name="Nama_Kapal" id="Nama_Kapal" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Ukuran">Ukuran (GT)</label>
                                        <input type="text" class="form-control" name="Ukuran" id="Ukuran">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Kondisi">Kondisi Kapal</label>
                                        <select id="Kondisi" class="form-control" name="Kondisi"required>
                                            <option></option>                                              
                                            <option >Sangat Baik</option>
                                            <option >Baik</option>
                                            <option >Rusak Ringan</option>
                                            <option >Rusak Berat</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Status">Status</label>
                                        <select id="Status" class="form-control" name="Status" required>
                                            <option></option>                                              
                                            <option >Berlabuh</option>
                                            <option >Melaut</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Nahkoda">Nahkoda</label>
                                        <input type="text" class="form-control" name="Nahkoda" id="Nahkoda" disabled>
                                    </div>
                                </div>
                            </div>                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                        <button type="submit_data_kapal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
                        </form>
                        <?php 
                        // if (isset($_POST['submit_data_kapal'])) {
                        // $nama = $_FILES['gambarKapalUser']['name'];
                        // $lokasi = $_FILES['gambarKapalUser']['tmp_name'];
                        // $namakapal = $_POST["Nama_Kapal"];
                        // $ukuran = $_POST["Ukuran"];
                        // $kondisi = $_POST["Kondisi"];
                        // $status = $_POST["Status"];

                        // $gambar = htmlentities(strip_tags(trim($nama)));

                        //     // move_uploaded_file($lokasi, "img/kapal-img/".$nama);
                        //     $link->query("insert into data_kapal (Nama_kapal, Besar_muatan, Kondisi, Status) 
                        //     VALUES ('$namakapal',$ukuran,'$kondisi','$status')");

                        
                        // echo " <meta http-equiv='refresh' content='l;url=kapal.php'>";

                        // }
                    ?>
                    </div>
                </div>
            </div>
        </div>

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