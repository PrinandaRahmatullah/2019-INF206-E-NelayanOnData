<?php
// Menghubungkan ke database
include "action/connection.php";

if (isset($_POST["submit"])) {
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $tempat = $_POST["tempat"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $kota = $_POST["kota"];
    $kecamatan = $_POST["kecamatan"];
    $desa = $_POST["desa"];
    $waktu = $_POST["waktu"];
    $kapal = $_POST["kapal"];

    $query = "INSERT INTO awakhilang (NIK,Nama,Tempat_Lahir,Tanggal_Lahir,Kota,Kecamatan,Desa,Waktu_Hilang,Nama_Kapal) VALUES ('$nik','$nama','$tempat','$tgl_lahir','$kota','$kecamatan','$desa','$waktu','$kapal')";
    $hasil = mysqli_query($link, $query);
    if ($hasil) {
        header('location:awakhilang.php');
    } else {
        die("query gagal : " . mysqli_errno($link) . "-" . mysqli_error($link));
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Lapor Awak Hilang</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <script type='text/javascript'>
        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

    <style>
        .header-area,
        .footer-area {
            position: relative !important;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Memanggil nav.php-->
    <?php include "nav.php";
    $nik = md5($_SESSION["nik"]);
    // Mengambil semua data yang ada di nahkoda
    $query = $link->query("SELECT * FROM nahkoda where nik = '$nik'");
    $nahkoda = $query->fetch_assoc();
    ?>
    <section class="our-blog-area bg-img " style="background-image: url(img/bg-img/20.jpg); height:165vh">
        <div class="wadah wadah-edit" style="margin-top: 50px;">
            <div class="container border shadow-lg p-3 mb-5 bg-gray rounded">
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="250ms">
                    <h4>Lapor Awak Hilang</h4>
                </div>
                <form action="laporawakhilang.php" method="post">
                    <div class="container row">
                        <div class="col-md-6">
                            <label for="text">NIK</label>
                            <input class="form-control" type="text" name="nik" id="nik" placeholder="Masukkan NIK" required>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <label for="text">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama" required>
                        </div>
                    </div>
                    <br>
                    <div class="container row">
                        <div class="col-md-6">
                            <label for="text">Tempat Lahir</label>
                            <input class="form-control" type="text" name="tempat" id="tempat" placeholder="Banda Aceh" required>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <label for="text">Tanggal Lahir</label>
                            <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir" required>
                        </div>
                    </div>
                    <br>
                    <div class="container row">
                        <div class="col-md-4">
                            <label for="alamat">Kota </label>
                            <input type="text" class="form-control" name="kota" placeholder="Kota Asal" required>
                        </div>
                        <br>
                        <div class="col-md-4">
                            <label for="alamat">Kecamatan</label>
                            <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" required>
                        </div>
                        <br>
                        <div class="col-md-4">
                            <label for="alamat">Desa</label>
                            <input type="text" class="form-control" name="desa" placeholder="Nama Desa" required>
                        </div>
                    </div>
                    <br>
                    <div class="container row">
                        <div class="col-md-6">
                            <label for="text">Waktu Hilang</label>
                            <input class="form-control" type="date" name="waktu" id="waktu" required>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <label for="number">Nomor Hp Pelapor</label>
                            <input class="form-control" type="text" name="nomor_hp" id="nomor_hp" required>
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="container row">
                        <div class="col">
                            <label for="text">Nama Kapal</label>
                            <input class="form-control" type="text" name="kapal" id="kapal" placeholder="Nama Kapal yang Dicari">
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="container row">
                        <div class="col-md-12 tombol my-5">
                            <button href="awakhilang.php" class=" btn btn-success" type="submit" name="submit" id="save">Lapor</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Memanggil footer.php  -->
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
    <!-- Main JS -->
    <script src="js/main.js"></script>
</body>

</html>