<?php
    require_once "action/connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Nelayan On Data</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <?php include "nav.php";?>


  <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel" style="height:100vh;width:100vw;">
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/1.jpg); width:100vw">
                <div class="container h-100">
                    <div class="row h-75 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-right">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Welcome to <br>Nelayan On DATA</h2>
                                <h6 data-animation="fadeInUp" data-delay="500ms">Menyediakan berbagai informasi<br> mengenai nelayan dan kapal</h6>
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="#" class="btn confer-btn">Lapor Now<i class="zmdi zmdi-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/2.jpg); width:100vw">
                <div class="container h-100">
                    <div class="row h-75 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text-two text-center">
                                <h5 data-animation="fadeInUp" data-delay="100ms">keberangkatan & kepulangan</h5>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Kapal dan Nelayan</h2>
                                <!-- Event Meta -->
                                <div class="event-meta" data-animation="fadeInUp" data-delay="100ms">
                                    <p id="waktu" class="tulisan event-date">
                                        
                                    </p>
                                </div>
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="login.php" class="btn confer-btn m-2">Login<i class="zmdi zmdi-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

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
    <!-- Time Display -->
    <script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>
    <!-- Own Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
