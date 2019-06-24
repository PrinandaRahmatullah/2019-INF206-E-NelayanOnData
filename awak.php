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
        <title>Awak Kapal</title>

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

        <!-- Memanggil nav.php dengan tujuan menampilkan navbar yang sudah di buat sebelumnya -->
        <?php include "nav.php";?>

            <section class="our-blog-area bg-img section-padding-100-60" style="background-image: url(img/bg-img/19.jpg); height:100vh;background-attachment:fixed;">
                <div class="container back">
                    <div class="row">
                        <!-- Heading -->
                        <div class="col-lg-10">
                            <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                                <p> </p>
                                <h4>Daftar ABK</h4>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <?php if (isset($_SESSION["nik"]) && $_SESSION["password"]): ?>
                            <div id='tambah'><br>
                                <button class='btn btn-outline-primary' data-toggle='modal' data-target='#tambahAwakUser'><i class='fa fa-plus'> Tambah ABK</i></button>
                            </div>
                            <?php else: ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="row isi">
                        
                        <!-- Tabel untuk menampilkan semua data awak kapal -->
                        <div class="col-12 col-lg-12">
                            <table id="tabimp" class="table table-dark table-hover wow fadeInUp" data-wow-delay="300ms">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Foto</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Kota</th>
                                        <th>Alamat</th>
                                        <th>Nomor HP</th>
                                        <th>Nomor HP (Darurat)</th>
                                        <th>Detail</th>
                                    </tr>

                                </thead>

                                <tbody>
                                    <tr>

                                        <?php 
                                            // Mengambil semua data yang ada di awakkapal
                                            $query = mysqli_query($link,"SELECT * FROM awakkapal order by nik asc");

                                            if (mysqli_num_rows($query)>0){ 
                                            $tambah = 0;
                                            while ($data = mysqli_fetch_array($query)) { $tambah++;
                                            echo"

                                            <td>".$tambah."</td>
                                            <td><div class='card card-orang'><img src='img/awak-img/".$data['gambar']."'></div></td>
                                            <td>".$data['NIK']."</td>
                                            <td>".$data['Nama']."</td>
                                            <td>".$data['Kota']."</td>
                                            <td>".$data['Alamat']."</td>
                                            <td>".$data['No_HP']."</td>
                                            <td>".$data['No_HP_Darurat']."</td>
                                            <td><a style='title='Detail;' href='detailAwak.php?NIK=".$data["NIK"]."'><i class='fa fa-question' style='color:white;'></i></a></td>
                                        </tr>";
                                        } 
                                     } ?>
                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </section>

        <!-- Modal Tambah Nahkoda -->
        <div class="modal fade bd-example-modal-lg" id="tambahAwakUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Tambah ABK</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="action/inputABK.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control" name="nik" id="nik" required autofocus>
                                </div>
                                <div class="col-md-6">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                                </div>
                                <div class="col-md-5">
                                    <label for="tgl lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                                </div>
                                <div class="col-md-6">
                                    <label for="no_hp">Nomor HP</label>
                                    <input type="text" class="form-control" name="no_hp" id="no_hp" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="no_hp_d">Nomor HP Darurat</label>
                                    <input type="text" class="form-control" name="no_hp_d" id="no_hp_d">
                                </div>
                                <div class="col-md-4">
                                    <label for="kota_asal">Kota Asal</label>
                                    <input type="text" class="form-control" name="kota" id="kota" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="Kecamatan">Kecamatan</label>
                                    <input type="text" class="form-control" name="kecamatan" id="kecamatan">
                                </div>
                                <div class="col-md-4">
                                    <label for="desa">Desa</label>
                                    <input type="text" class="form-control" name="desa" id="desa">
                                </div>
                                <div class="col-md-12">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="alamat" required>
                                </div>
                            </div>                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
                        </form>
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