<?php
	include "../action/connection.php";
	$ambil = $link->query("SELECT * FROM awakkapal");

	if (isset($_POST["input"])) {
		$NIK = $_POST["NIK"];
		$Nama = $_POST["Nama"];
		$Tempat_Lahir = $_POST["Tempat_Lahir"];
		$Tanggal_Lahir = $_POST["Tanggal_Lahir"];
		$Kota = $_POST["Kota"];
		$Kecamatan = $_POST["Kecamatan"];
		$Desa = $_POST["Desa"];
		$No_Hp = $_POST["No_Hp"];
		$No_Hp_Darurat = $_POST["No_Hp_Darurat"];

		$input = $link->query("INSERT INTO awakkapal (NIK,Nama,Tempat_Lahir,Tanggal_Lahir,Kota,Kecamatan,Desa,No_Hp,No_Hp_Darurat,gambar) VALUES ('$NIK','$Nama', '$Tempat_Lahir', '$Tanggal_Lahir','$Kota','$Kecamatan','$Desa','$No_Hp','$No_Hp_Darurat','default.png')");

		header('location:editawak.php');
	}

	if (isset($_POST['submit_image'])) {
    	$nama = $_FILES['myimage']['name'];
        $lokasi = $_FILES['myimage']['tmp_name'];

    	$gambar = htmlentities(strip_tags(trim($nama)));
    	// $ambilDataGambar = $ambil->fetch_assoc();

    	move_uploaded_file($lokasi, "../img/awak-img/".$nama);
           	$link->query("UPDATE awakkapal SET gambar='$gambar' WHERE NIK=$NIK");

            	echo "<div class='alert alert-info'>Data ditambahkan</div>";
             	echo " <meta http-equiv='refresh' content='l;url=acset.php'>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Own CSS -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="css/style.css">
    <!--=== FontAwesome CSS ===-->
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<title>Data Awak Kapal</title>

</head>
<body>
	<?php include "nav.php" ?>
	<div class="container" style="margin-top:95px;">
        <h3 style="text-align:center; text-transform:uppercase;margin-bottom:15px;">Data Awak Kapal</h3>
        <div class="row">
            <div class="col-lg-12">
            	<!-- Input data -->
                <button type="button" name="submit" class="btn btn-primary" data-toggle="modal" data-target="#tambahawak" style="float: right;">Tambah Data</button>
                <!-- Tutup Input data -->
            </div>
        </div>
        <div class="row">
        	<div class="col-lg-12" height="20"></div>
        </div>
        <div class="row">
        	<!-- Div card -->
        	<?php
        		if (mysqli_num_rows($ambil)>0) {
        			while ($data = $ambil->fetch_assoc()) {	
        	?>
		            <div class="col-md-2" style="margin-top: 15px;">
		                <div class="card people">
		                    
		                    <img src="../img/awak-img/<?php echo $data["gambar"]?>" class="rounded">
		                </div>
		                <h6><?php echo $data["Nama"]; ?></h6>
		                    <h6><?php echo $data["NIK"]; ?></h6>
		                    <!-- <button type="button" name="masuk" class="btn btn-primary" data-toggle="modal" data-target="#example">edit</button> -->
		                    <a href="editDataAwak.php?NIK=<?php echo $data["NIK"] ?>"><button  type="button" name="masuk" class="btn btn-primary" data-toggle="modal" data-target="#example">edit</button></a>

		                    <a href="action/hapusAwak.php?NIK=<?php echo $data["NIK"] ?>"><button  type="button" class="btn btn-warning">Hapus</button></a>
		            </div>
		            <div class="row">
		            	 <div class="col-lg-12"><br></div>
		            </div>
	            <?php
	            	}
        		}
	            ?>
	        <!-- tutup Div -->
        </div>
    </div>

	<!-- Untuk Input data -->
	<div class="modal fade" id="tambahawak" tabindex="-1" role="dialog" aria-labelledby="example1Title" aria-hidden="true">
	 	<div class="modal-dialog" role="document">
	   		<div class="modal-content">
	    		<div class="modal-header">
	       			<h5 class="modal-title" id="example1">Masukkan Data Baru</h5>
	       			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        		<span aria-hidden="true">&times;</span>
	       			</button>
	     		</div>
	     		<div class="modal-body">
	       			<form class="form-inline" action="editawak.php" method="post">
	                	<div>
	                		<input placeholder="NIK" name="NIK" type="text" class="form-control mb-2 mr-sm-2">

							<input placeholder="Nama " name="Nama" type="text" class="form-control mb-2 mr-sm-2">
							<input placeholder="Tempat Lahir " name="Tempat_Lahir" type="text" class="form-control mb-2 mr-sm-2">
							<br>Tanggal Lahir
		                    <input placeholder="Tanggal Lahir " name="Tanggal_Lahir" type="date" class="form-control mb-2 mr-sm-2">

							
		                    <input placeholder="Nomor Hp" name="No_Hp" type="number" class="form-control mb-2 mr-sm-2">

							<input placeholder="Nomor Hp Darurat" name="No_Hp_Darurat" type="number" class="form-control mb-2 mr-sm-2"><br>
							
		                    <input placeholder="Kota " name="Kota" type="text" class="form-control mb-2 mr-sm-2">

		                    <input placeholder="Kecamatan " name="Kecamatan" type="text" class="form-control mb-2 mr-sm-2">

							<input placeholder="Desa" name="Desa" type="text" class="form-control mb-2 mr-sm-2">
														
		                    <input placeholder="Alamat Lengkap" name="Alamat" type="text" class="form-control mb-2 mr-sm-2">


	                	</div>
	                	<div class="modal-footer">
			    			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			    			<button type="submit" name="input" class="btn btn-primary">Save changes</button>
			    		</div>
	                </form>
	    		</div>
	    		
			</div>
		</div>
	</div>
	<!-- tutup input -->
	<script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>