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

    <title>Admin</title>
  </head>
  <body id="bodyIndex"> 
    <div id="overlie">
      <h4 style="color:white">Access to System</h4>
      <img src="../img/core-img/logo 2.png" alt="" width="85%">
    </div>
    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap " class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-8" style="margin-top:-100px;margin-bottom:30px;">
              <img src="../img/core-img/admin.png" alt="" width="100%">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
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
                        <div class="contact_from_area clearfix wow fadeInUp" data-wow-delay="300ms">
                            <div class="contact_form">
                                <form action="action/act_login.php" method="post" id="main_contact_form">
                                    <div class="contact_input_area">
                                        <div id="success_fail_info"></div>
                                        <div class="row">
                                            <!-- Form Group -->
                                            <div class="col-md-2">
                                                <i style="font-size:24px" class="fa">&#xf007;</i>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="nik" id="nik" placeholder="Enter NIK" required autofocus>
                                                </div>
                                            </div>
                                        
                                            <!-- Form Group -->
                                            <div class="col-md-2">
                                            <i class="fa fa-key"></i>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="password" class="form-control mb-30" name="password" id="subject" placeholder="Enter Password" required>
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
          </div>
        </div>
    </section>
    <!--== Login Page Content End ==-->
    <?php include "footer.php" ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>