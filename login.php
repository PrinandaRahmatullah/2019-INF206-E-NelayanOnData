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
    <title>Login</title>

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


    <!-- Our Blog Area Start -->
    <section class="latbelk our-blog-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url(img/bg-img/17.jpg);">
        <div class="container">
            <center>
            <div class="pembatas">
                <div class="row">
                    <!-- Heading -->
                    <div class="col-12">
                        <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                            <h4>Login</h4>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div id="tengahin" class="col-12 col-sm-8">
                        <!-- Contact Form -->
                        <div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms">
                            <div class="contact_form">
                                <form action="action/act_login.php" method="post" id="main_contact_form">
                                    <div class="contact_input_area">
                                        <div id="success_fail_info"></div>
                                        <div class="row">
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="nik" id="nik" placeholder="NIK. Cth : 1106202810990003">
                                                </div>
                                            </div>
                                        
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control mb-30" name="password" id="subject" placeholder="Password">
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <div class="col-12">
                                                <center><button type="submit" id="but" class="btn confer-btn">Login<i class="zmdi zmdi-long-arrow-right"></i></button></center>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </center>
    </section>
    <!-- Our Blog Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area bg-img bg-overlay-2">

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-12">
                        <div class="copywrite-text">
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Nelayan On DATA Team</p>
                        </div>
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