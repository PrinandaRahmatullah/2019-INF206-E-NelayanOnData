<?php

	require_once "../action/connection.php";
	$kode = $_GET["NIK"];
	$ambilData = $link->query("SELECT * FROM awakkapal WHERE NIK='$kode'");
	$data = $ambilData->fetch_assoc();

	if (isset($_POST['submit_image'])) {
    	$nama = $_FILES['myimage']['name'];
    	$lokasi = $_FILES['myimage']['tmp_name'];

        $gambar = htmlentities(strip_tags(trim($nama)));

      	move_uploaded_file($lokasi, "../img/awak-img/".$nama);
        $update = $link->query("UPDATE awakkapal SET gambar='$gambar' WHERE NIK='$kode'");

        if ($update) {
        	echo "<div class='alert alert-info'>Data ditambahkan</div>";
        	echo " <meta http-equiv='refresh' content='l;url=editawak.php'>";
        }else{
        	echo "<div class='alert alert-info'>Data gagal ditambahkan</div>";
        }
	}
	if (isset($_POST["simpan"])) {
        $Nama = $_POST["Nama"];
        $Tempat_Lahir = $_POST["Tempat_Lahir"];
		$Tanggal_Lahir = $_POST["Tanggal_Lahir"];
		$Kota = $_POST["Kota"];
		$Kecamatan = $_POST["Kecamatan"];
        $Desa = $_POST["Desa"];
        // $Alamat = $_POST["Alamat"];
		$No_Hp = $_POST["no_hp"];
		$No_Hp_Darurat = $_POST["no_hp_darurat"];

		$update1 = $link->query("UPDATE awakkapal SET Nama='$Nama',  Tempat_Lahir='$Tempat_Lahir' WHERE NIK='$kode'");
		if ($update1) {
        	echo "<div class='alert alert-info'>Data berhasil di update</div>";
        	echo " <meta http-equiv='refresh' content='l;url=editawak.php'>";
        }else{
        	echo "<div class='alert alert-info'>Data gagal berhasil di update</div>";
        }
	}
?>

<!DOCTYPE html>
<html>
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
 	<script type='text/javascript'>
        function preview_image(event) 
        {
            console.log('files: ',event.files);
                
            var reader = new FileReader();
            reader.onload = function()
            {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
        </script>
</head>
<body>
    <?php include "nav.php" ?>
	<div class="container" style="margin-top:100px">
        <div class="row"><br><br></div>
        <!-- untuk edit data -->
                    <div class="row">
                        <div class="col-kiri col-kiri-edit col-md-4 col-xs-12">
                            <div>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="custom-file" style="margin-bottom:5px;" >
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" name="myimage" onchange="preview_image(event);" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                    <button class="btn btn-success" type="submit" name="submit_image" style="margin-bottom:5px;">Save Photo</button>
                                </form>
                            </div>
                            <div class="card">
                                <img src="../img/awak-img/<?php echo $data['gambar'] ?>" alt="" id="output_image">
                            </div><br>
                                <h6 style="text-align:center"><?php echo $data["Nama"] ?></h6>
                                <h6 style="text-align:center"><?php echo $data["NIK"] ?></h6> 
                    </div>
                    <div class="col-kanan col-kanan-edit col-md-7 col-xs-12" style="height:550px">
                        <h5>My Profile</h5>
                        <form id="formulir" action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nik">NIK</label>
                                    <input class="form-control" type="number" name="nik" id="nik" value="<?php echo $data["NIK"] ?>" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="nik">Nama</label>
                                    <input class="form-control" type="text" name="Nama" id="Nama" value="<?php echo $data["Nama"] ?>" autofocus>
                                </div>
                                <div class="col-md-5">
                                    <label for="nik">Nomor HP</label>
                                    <input class="form-control" type="tel" name="no_hp" id="no_hp" value="<?php echo $data["No_HP"] ?>">
                                </div>
                                <div class="col-md-5">
                                    <label for="nik">Nomor HP Darurat</label>
                                    <input class="form-control" type="tel" name="no_hp_darurat" id="no_hp_darurat" value="<?php echo $data["No_HP_Darurat"] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="Tempat_Lahir">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="Tempat_Lahir" id="Tempat_Lahir" value="<?php echo $data["Tempat_Lahir"] ?>" >
                                </div>
                                <div class="col-md-6">
                                    <label for="nik">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="Tanggal_Lahir" id="Tanggal_Lahir" value="<?php echo $data["Tanggal_Lahir"] ?>" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="alamat">Kota Asal</label>
                                    <input type="text" class="form-control" name="Kota" value="<?php echo $data["Kota"] ?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="alamat">Kecamatan</label>
                                    <input type="text" class="form-control" name="Kecamatan" value="<?php echo $data["Kecamatan"] ?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="alamat">Desa</label>
                                    <input type="text" class="form-control" name="Desa" value="<?php echo $data["Desa"] ?>">
                                </div>
                                <!-- <div class="col-md-12">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="Alamat" value="<?php echo $data["Alamat"] ?>">
                                </div> -->
                            </div>
                            <br>
                            <div class="row">               
                                <div class="col-md-12 tombol">
                                    <a href="editawak.php" class="btn btn-primary">Cancel</a>
                                    <button class=" btn btn-success" name="simpan" id="save">Save</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                
    <!-- Tutup edit -->
    </div>
</body>
</html>