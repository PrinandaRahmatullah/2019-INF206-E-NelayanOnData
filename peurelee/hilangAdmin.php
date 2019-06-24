<?php
include "../action/connection.php";
$query = mysqli_query($link, "SELECT * FROM awakhilang");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Tabel Lapor Awak Hilang</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Own CSS -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <?php include "nav.php" ?>
    <!-- Our Speakings Area Start -->

    <div class="container border shadow-lg p-3 mb-5 bg-gray rounded container back" style="margin-top:100px;">
        <div class="row">
            <!-- Heading -->
            <div class="col-12">
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                    <p> </p>
                    <h4>Daftar Awak Hilang</h4>
                </div>
            </div>
        </div>

        <div class="">

            <!-- Single Speaker Area -->
            <div class="col-12 col-lg-12">
                <table class="table table-dark table-hover wow fadeInUp" data-wow-delay="300ms">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>NIK</td>
                            <td>Nama</td>
                            <td>Tempat Lahir</td>
                            <td>Tanggal Lahir</td>
                            <td>Kota</td>
                            <td>Alamat</td>
                            <td>Waktu Hilang</td>
                            <td>Kapal</td>
                            <td>Aksi</td>
                        </tr>

                    </thead>

                    <tbody>
                        <tr>

                            <?php if (mysqli_num_rows($query) > 0) {
                                $tambah = 0;
                                while ($data = mysqli_fetch_array($query)) {
                                    $tambah++;
                                    echo "
                                    <td>" . $tambah . "</td>

                                    <td>".$data['NIK']."</td>
                                    <td>".$data['Nama']."</td>
                                    <td>".$data['Tempat_Lahir']."</td>
                                    <td>".$data['Tanggal_Lahir']."</td>
                                    <td>".$data['Kota']."</td>
                                    <td>".$data['Alamat']."</td>
                                    <td>".$data['Waktu_Hilang']."</td>
                                    <td>".$data['Nama_Kapal']."</td> 
                                    <td><a class='btn btn-warning btn-rounded waves-effect mt-3' href='editDatahilang.php?NIK=".$data["NIK"]."'>Edit</a><a class='btn btn-danger' href='action/deleteHilang.php?NIK=".$data["NIK"]."'>Hapus</a></td>

                        </tr>";
                                }
                            } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Our Speakings Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>

</body>

</html>