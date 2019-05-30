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

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Our Speakings Area Start -->

    <div class="container border shadow-lg p-3 mb-5 bg-gray rounded container back">
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
                            <td>Kecamatan</td>
                            <td>Desa</td>
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

                                    <td>" . $data['NIK'] . "</td>
                                    <td>" . $data['Nama'] . "</td>
                                    <td>" . $data['Tempat_Lahir'] . "</td>
                                    <td>" . $data['Tanggal_Lahir'] . "</td>
                                    <td>" . $data['Kota'] . "</td>
                                    <td>" . $data['Kecamatan'] . "</td>
                                    <td>" . $data['Desa'] . "</td>
                                    <td>" . $data['Waktu_Hilang'] . "</td>
                                    <td>" . $data['Nama_Kapal'] . "</td> 
                                    <td>" . '<button type="button" class="btn btn-success btn-rounded waves-effect mt-3">Edit</button> <button type="button" class="btn btn-danger btn-rounded waves-effect mt-3">Hapus</button>' . "</td>
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
    <!-- Popper -->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="../js/confer.bundle.js"></script>
    <!-- Active -->
    <script src="../js/default-assets/active.js"></script>
</body>

</html>