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
        <!-- Memanggil nav.php dengan tujuan menampilkan navbar yang sudah di buat sebelumnya -->
        <?php include "nav.php";?>

        <!-- Our Speakings Area Start -->
        <section class="our-blog-area bg-img section-padding-100-60" style="background-image: url(img/bg-img/18.jpg); height:100vh">
            <div class="container back">
                <div class="row">
                    <!-- Heading -->
                    <div class="col-12">
                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                            <p> </p>
                            <h4>Kapal</h4>
                        </div>
                    </div>
                </div>

                <div class="row isi">
                    
                     <!-- Tabel untuk menampilkan semua data data kapal -->
                    <div class="col-12 col-lg-12">
                        <table class="table table-dark table-hover wow fadeInUp" data-wow-delay="300ms">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Kapal</td>
                                    <td>Besar Muatan (GT)</td>
                                    <td>Kondisi</td>
                                    <td>Status</td>
                                    <td>Nahkoda</td>
                                    
                                </tr>

                            </thead>

                            <tbody>
                                <tr>

                                    <?php if (mysqli_num_rows($query)>0){ 
                                        $tambah = 0;
                                     while ($data = mysqli_fetch_array($query)) { $tambah++;
                                        echo"

                                    <td>".$tambah."</td>

                                    <td>".$data['Nama_kapal']."</td>
                                    <td>".$data['Besar_muatan']."</td>
                                    <td>".$data['Kondisi']."</td>
                                    <td>".$data['Status']."</td>
                                    <td>".$data['Nahkoda']."</td>
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