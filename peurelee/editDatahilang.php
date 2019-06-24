<?php

require_once "../action/connection.php";
$kode = $_GET["NIK"];
$ambilData = $link->query("SELECT * FROM awakhilang WHERE NIK='$kode'");
$data = $ambilData->fetch_assoc();

if (isset($_POST["simpan"])) {
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $tempat = $_POST["tempat"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $kota = $_POST["kota"];
    $kecamatan = $_POST["kecamatan"];
    $desa = $_POST["desa"];
    $waktu = $_POST["waktu"];
    $kapal = $_POST["kapal"];

    $update1 = $link->query("UPDATE awakhilang SET Nama='$Nama' WHERE NIK='$kode'");
    if ($update1) {
        echo "<div class='alert alert-info'>Data berhasil di update</div>";
        echo " <meta http-equiv='refresh' content='l;url=acset.php'>";
    } else {
        echo "<div class='alert alert-info'>Data gagal berhasil di update</div>";
    }
    header('location:../edithilang.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Own CSS -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="css/style.css">
    <!--=== FontAwesome CSS ===-->


    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style.css">

    <style>
        .header-area,
        .footer-area {
            position: relative !important;
        }
    </style>
</head>

<body>
    <!-- untuk edit data -->
    <section class="our-blog-area ">
        <div class=" wadah wadah-edit" style="margin-top: 50px;">
            <form action="laporawakhilang.php" method="post">
        </div>
        <div class="container border shadow-lg p-3 mb-5 bg-gray rounded">
            <div class="section-heading text-center wow fadeInUp" data-wow-delay="250ms">
                <h5>Lapor Awak Hilang</h5>
            </div>
            <form action="laporawakhilang.php" method="post">
                <div class="container row">
                    <div class="col-md-6">
                        <label for="text">NIK</label>
                        <input class="form-control" type="text" name="nik" id="nik" placeholder="Masukkan NIK" value="<?php echo $data["NIK"] ?>" required>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <label for="text">Nama</label>
                        <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama" value="<?php echo $data["Nama"] ?>" required>
                    </div>
                </div>
                <br>
                <div class="container row">
                    <div class="col-md-6">
                        <label for="text">Tempat Lahir</label>
                        <input class="form-control" type="text" name="tempat" id="tempat" placeholder="Banda Aceh" value="<?php echo $data["Tempat_Lahir"] ?>" required>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <label for="text">Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir" value="<?php echo $data["tgl_lahir"] ?>" required>
                    </div>
                </div>
                <br>
                <div class="container row">
                    <div class="col-md-4">
                        <label for="alamat">Kota </label>
                        <input type="text" class="form-control" name="kota" placeholder="Kota Asal" value="<?php echo $data["kota"] ?>" required>
                    </div>
                    <br>
                    <div class="col-md-4">
                        <label for="alamat">Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" value="<?php echo $data["kecamatan"] ?>" required>
                    </div>
                    <br>
                    <div class="col-md-4">
                        <label for="alamat">Desa</label>
                        <input type="text" class="form-control" name="desa" placeholder="Nama Desa" value="<?php echo $data["desa"] ?>" required>
                    </div>
                </div>
                <br>
                <div class="container row">
                    <div class="col-md-6">
                        <label for="text">Waktu Hilang</label>
                        <input class="form-control" type="date" name="waktu" id="waktu" value="<?php echo $data["waktu"] ?>" required>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <label for="number">Nomor Hp Pelapor</label>
                        <input class="form-control" type="text" name="nomor_hp" id="nomor_hp" value="<?php echo $data["nomor_hp"] ?>" required>
                    </div>
                    <br>
                </div>
                <br>
                <div class="container row">
                    <div class="col">
                        <label for="text">Nama Kapal</label>
                        <input class="form-control" type="text" name="kapal" id="kapal" placeholder="Nama Kapal yang Dicari" value="<?php echo $data["kapal"] ?>">
                    </div>
                    <br>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 tombol">
                        <a href="../hilangAdmin.php" class="btn btn-primary">Cancel</a>
                        <button class=" btn btn-success" name="simpan" id="save">Save</button>
                    </div>
            </form>
        </div>

        <!-- Tutup edit -->
</body>

</html>