<?php

    // Menghubungkan ke database
    include "action/connection.php";
    // Mengambil semua data yang ada di awakkapal
    $query = mysqli_query($link,"SELECT * FROM awakkapal order by nik asc");
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
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- /Preloader -->

        <!-- Memanggil nav.php dengan tujuan menampilkan navbar yang sudah di buat sebelumnya -->
        <?php include "nav.php";?>

            <section class="our-blog-area bg-img section-padding-100-60" style="background-image: url(img/bg-img/19.jpg); height:100vh;">
                <div class="container back">
                    <div class="row">
                        <!-- Heading -->
                        <div class="col-12">
                            <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                                <p> </p>
                                <h4>Daftar Awak Kapal</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row isi">
                        
                        <!-- Tabel untuk menampilkan semua data awak kapal -->
                        <div class="col-12 col-lg-12">
                            <table id="tabimp" class="table table-dark table-hover wow fadeInUp" data-wow-delay="300ms">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Tgl Lahir</th>
                                        <th>Bln Lahir</th>
                                        <th>Thn Lahir</th>
                                        <th>Kota</th>
                                        <th>Kecamatan</th>
                                        <th>Desa</th>
                                        <th>Nomor HP</th>
                                        <th>Nomor HP (Darurat)</th>
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
                                        <td>".$data['Tanggal_Lahir']."</td>
                                        <td>".$data['Bulan_Lahir']."</td>
                                        <td>".$data['Tahun_Lahir']."</td>
                                        <td>".$data['Kota']."</td>
                                        <td>".$data['Kecamatan']."</td>
                                        <td>".$data['Desa']."</td>
                                        <td>".$data['No_HP']."</td>
                                        <td>".$data['No_HP_Darurat']."</td>
                                    </tr>";
                                     } 
                                     } ?>
                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </section>
        <!-- Memanggil footer.php dengan tujuan menampilkan footer atau bagian bawah yang sudah di buat sebelumnya -->
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