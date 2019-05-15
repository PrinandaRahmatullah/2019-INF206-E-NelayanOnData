<?php
    include "action/connection.php";
    $query = mysqli_query($link,"SELECT * FROM kapal");
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
        <section class="our-blog-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url(img/bg-img/2.jpg); height:100vh">

            <div class="container">
                <div class="row">
                    <!-- Heading -->
                    <div class="col-12">
                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                            <p> </p>
                            <h4>Kapal</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                    <!-- Single Speaker Area -->
                    <div class="col-12 col-lg-12">
                        <table class="table table-stripped wow fadeInUp" data-wow-delay="300ms">
                            <thead>
                                <tr>
                                    <td><center>No</center></td>
                                    <td><center>Nama Kapal</center></td>
                                    <td><center>Ukuran (GT)</center></td></td>
                                    <td><center>Nahkoda</center></td>
                                    <td><center>Status</center></td>
                                    
                                </tr>

                            </thead>

                            <tbody>
                                <tr>

                                    <?php if (mysqli_num_rows($query)>0){ 
                                        $tambah = 0;
                                     while ($data = mysqli_fetch_array($query)) { $tambah++;
                                        echo"

                                    <td><center>".$tambah."</center></td>

                                    <td><center>".$data['Nama_Kapal']."</center></td>
                                    <td><center>".$data['Ukuran']."</center></td>
                                    <td><center>".$data['Nahkoda']."</center></td>
                                    <td><center>".$data['Status']."</center></td>
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

