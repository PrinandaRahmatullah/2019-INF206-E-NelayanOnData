<?php
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
  <title>Data Pulang</title>

  <!-- Favicon -->
  <link rel="icon" href="./img/core-img/favicon.png">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">

</head>

<body>
  
  <!-- Memanggil nav.php dengan tujuan menampilkan navbar yang sudah di buat sebelumnya -->
  <?php include "nav.php";?>

  <!-- DATA KEBERANGKATAN -->
  <section class="our-blog-area bg-img section-padding-100-60" style="background-image: url(img/bg-img/18.jpg); height:100vh">
    <div class="container back">
      <div class="row">
        <!-- Heading -->
        <div class="col-12">
          <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
            <p> </p>
            <h4>Pelaporan Kepulangan Nelayan</h4>
          </div>
        </div>
      </div>
      <div class="container text-center">
        <div class="row text-center"> 
          <div class="col-12 col-lg-12"> 

            <!-- Tabel untuk menampilkan semua data keberangkatan -->
            <table class="table table-striped table-hover">
              <thead class="thead-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">NIK Nahkoda</th>
                  <th scope="col">Nama kapal</th>
                  <th scope="col">Tanggal Berangkat</th>
                  
                </tr>
                <thead>

                  <tbody>
                    <tr>
                      <?php 
                      $query = mysqli_query($link,"SELECT * FROM datapergi");
                      if (mysqli_num_rows($query)>0){ 
                        $tambah = 0;
                        while ($data = mysqli_fetch_array($query)) { $tambah++;
                          echo"

                          <td>".$tambah."</td>
                          <td>".$data['nik']."</td>
                          <td>".$data['Nama_kapal']."</td>
                          <td>".$data['Tanggal']."</td>
                          
                          </tr>" ;
                        } 
                      } ?>
                    </tbody>
                  </table><br><br>
                </div>
              </div>
            </div>

            

            <div class="footer"></div>
          </body>
        </section>
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
