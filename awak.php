<?php
    include "connection.php";
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

        <!-- Header Area Start -->
        <header class="header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="conferNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="./index.html"><img src="./img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="#">Awak Kapal</a></li>
                                    <li><a href="#">Kapal</a></li>
                                    <li><a href="#">Awak Hilang</a></li>
                                    <li><a href="#">About Us</a></li>
                                </ul>

                                <!-- Get Tickets Button -->
                                <a href="#" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Login</i></a>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Header Area End -->

        <!-- Our Speakings Area Start -->
        <section class="our-speaker-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url(img/bg-img/3.jpg);">
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
                                    <td>".$data['Tahun_lahir']."</td>
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

        <!-- Footer Area Start -->
        <footer class="footer-area bg-img bg-overlay-2">

            <!-- Copywrite Area -->
            <div class="container">
                <div class="copywrite-content">
                        <!-- Copywrite Text -->
                        <div class="col-12 col-md-12">
                            <div class="copywrite-text">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by nelayanondataTeam
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

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