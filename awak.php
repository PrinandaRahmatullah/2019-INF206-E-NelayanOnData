<?php
    include "action/connection.php";
    $query = mysqli_query($link,"SELECT * FROM awakkapal");
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
        <link rel="stylesheet" href="style.css">

    </head>

<body>
       <!-- Preloader -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- /Preloader -->

        <?php include "nav.php";?>

        <!-- Our Speakings Area Start -->
        <section class="our-blog-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url(img/bg-img/3.jpg); height:100vh">
            <div class="container">
                <div class="row">
                    <!-- Heading -->
                    <div class="col-12">
                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                            <p> </p>
                            <h4>Daftar Awak Kapal</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                    <!-- Single Speaker Area -->
                    <div class="col-12 col-lg-12">
                        <table class="table table-stripped wow fadeInUp" data-wow-delay="300ms">
                            <thead>
                                <tr>
                                    <td>No.</td>
                                    <td>NIK</td>
                                    <td>Nama</td>
                                    <td>Tgl Lahir</td>
                                    <td>Bln Lahir</td>
                                    <td>Thn Lahir</td>
                                    <td>Kota</td>
                                    <td>Kecamatan</td>
                                    <td>Desa</td>
                                    <td>Nomor HP</td>
                                    <td>Nomor HP (Darurat)</td>
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
        <!-- Our Speakings Area End -->

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

