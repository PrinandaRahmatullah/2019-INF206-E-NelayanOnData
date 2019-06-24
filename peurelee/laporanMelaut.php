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

    <title>Laporan Melaut</title>
  </head>
  <body>
    <!-- Navbar Page -->
    <?php include "nav.php";
    ?>
     <div class="container connahkoda">
        <h3 style="text-align:center; text-transform:uppercase;margin-bottom:15px;">Daftar Keberangkatan</h3>
        <div class="container-fluid">
            <div class="row">
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                <table class="table table-striped table-hover tabelku">
                <thead class="thead-dark">
              <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama Kapal</th>
                <th>Tanggal Berangkat</th>
                <th>Detail</th>
              </tr>
            <thead>

            <tbody>
              
                <?php 
                  $query = mysqli_query($link,"SELECT * FROM datapergi");
                    if (mysqli_num_rows($query)>0){ 
                      $tambah = 0;
                        while ($data = mysqli_fetch_array($query)) { $tambah++;
                          echo"
                          <tr>
                          <td>".$tambah."</td>
                          <td>".$data['nik']."</td>
                          <td>".$data['Nama_kapal']."</td>
                          <td>".$data['Tanggal']."</td>
                          <td><a style='title='Detail' href='detailMelaut.php?NIK=".$data["nik"]."'><i class='fa fa-question'></i></a></td>
                          </tr>
                          " ;
                          } 
                        
                            ;
                            
                        }
                    ?>
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
    <!--== Login Page Content End ==-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>