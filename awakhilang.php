<?php
    include "action/connection.php";
    $query = mysqli_query($link,"SELECT * FROM awakhilang");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Title -->
        <title>Nelayan Hilang</title>

        <!-- Favicon -->
        <link rel="icon" href="./img/core-img/favicon.png">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="style.css">

    </head>

<body>
       <!-- Preloader -->
        <!-- <div id="preloader">
            <div class="loader"></div>
        </div> -->
        <!-- /Preloader -->

        <?php include "nav.php";?>

        <!-- Our Speakings Area Start -->
         <section class="our-blog-area bg-img section-padding-100-60" style="background-image: url(img/bg-img/10.jpg); height:100vh;background-attachment:fixed;">
            <div class="container back">
                <div class="row">
                    <!-- Heading -->
                     <!-- Heading -->
                     <div class="col-lg-10">
                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                            <p> </p>
                            <h4>Nelayan Hilang</h4>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div id='tambah'><br>
                            <button class='btn btn-outline-primary' data-toggle='modal' data-target='#tambahHilangUser'><i class='fa fa-plus'> Tambah Nelayan Hilang</i></button>
                        </div>
                    </div>
                </div>

                <div class="row isi">
                    
                    <!-- Single Speaker Area -->
                    <div class="col-12 col-lg-12">
                        <table class="table table-dark table-hover wow fadeInUp" data-wow-delay="300ms">
                            <thead>
                                <tr>
                                    <td>No.</td>
                                    <td>NIK</td>
                                    <td>Nama</td>
                                    <td>Kota</td>
                                    <td>Alamat</td>
                                    <td>Tanggal Hilang</td>
                                    <td>Waktu Hilang</td>
                                    <td>Kapal</td>
                                    <td>No HP Pelapor</td>
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

                                    <td>".$data['NIK']."</td>
                                    <td>".$data['Nama']."</td>
                                    <td>".$data['Kota']."</td>
                                    <td>".$data['Alamat']."</td>
                                    <td>".$data['Tanggal_Hilang']."</td>
                                    <td>".$data['Waktu_Hilang']."</td>
                                    <td>".$data['Nama_Kapal']."</td>
                                    <td>".$data['Nomor_HP_Pelapor']."</td>
                                    <td><a style='title='Detail;' href='detailNelayanHilang.php?Nama=".$data["Nama"]."'><i class='fa fa-question' style='color:white;'></i></a></td>

                                </tr>";
                                 } 
                                 } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Speakings Area End -->

        <!-- Modal Tambah Kapal -->
        <div class="modal fade bd-example-modal-lg" id="tambahHilangUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Nelayan Hilang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="action/inputNelayanHilang.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control" name="nik" id="nik" autofocus>
                                </div>
                                <div class="col-md-6">
                                    <label for="nama">Nama Lengkap</label>
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
                                    <label for="no_hp">Nomor HP Pelapor</label>
                                    <input type="text" class="form-control" name="no_hp" id="no_hp" required>
                                </div>
                                <!-- <div class="col-md-6">
                                    <label for="no_hp_d">Nomor HP Darurat</label>
                                    <input type="text" class="form-control" name="no_hp_d" id="no_hp_d">
                                </div> -->
                                <div class="col-md-4">
                                    <label for="kota_asal">Kota Asal</label>
                                    <input type="text" class="form-control" name="kota" id="kota">
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
                                    <input type="text" class="form-control" name="alamat" id="alamat">
                                </div>
                                <div class="col-md-4">
                                    <label for="tanggal">Tanggal Hilang</label>
                                    <input type="date" class="form-control" name="tanggal" id="tanggal" required>                                    
                                </div>
                                <div class="col-md-4">
                                    <label for="Waktu">Waktu Hilang</label>
                                    <select id="Waktu" class="form-control" name="waktu" required>
                                        <option></option>                                              
                                        <option >Pagi</option>
                                        <option >Siang</option>
                                        <option >Sore</option>
                                        <option >Malam</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="Kapal">Nama Kapal</label>
                                    <input type="text" class="form-control" name="kapal" id="kapal">
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
