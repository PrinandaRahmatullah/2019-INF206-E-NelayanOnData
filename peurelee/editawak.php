<?php
	include "../action/connection.php";
	$ambil = $link->query("SELECT * FROM awakkapal");

	if (isset($_POST["input"])) {
		$NIK = $_POST["NIK"];
		$Nama = $_POST["Nama"];
		$Tanggal_Lahir = $_POST["Tanggal_Lahir"];
		$Kota = $_POST["Kota"];
		$Kecamatan = $_POST["Kecamatan"];
		$Desa = $_POST["Desa"];
		$No_Hp = $_POST["No_Hp"];
		$No_Hp_Darurat = $_POST["No_Hp_Darurat"];

		$input = $link->query("INSERT INTO awakkapal (NIK,Nama,Tanggal_Lahir,Kota,Kecamatan,Desa,No_Hp,No_Hp_Darurat,gambar) VALUES ('$NIK','$Nama','$Tanggal_Lahir','$Kota','$Kecamatan','$Desa','$No_Hp','$No_Hp_Darurat','default.png')");

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
	<title>Halama edit</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top:95px;">
        <h3 style="text-align:center; text-transform:uppercase;margin-bottom:15px;">Kelola  </h3>
        <div class="row">
            <div class="col-lg-12">
            	<!-- Input data -->
                <button type="button" name="submit" class="btn btn-primary" data-toggle="modal" data-target="#example1" style="float: right;">Tambah Data</button>
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
		                    
		                    <img src="../img/awak-img/<?php echo $data["gambar"]?>" class="rounded" alt="Cinque Terre" width="157" height="90">
		                </div>
		                <h6><?php echo $data["Nama"]; ?></h6>
		                    <h6><?php echo $data["NIK"]; ?></h6>
		                    <!-- <button type="button" name="masuk" class="btn btn-primary" data-toggle="modal" data-target="#example">edit</button> -->
		                    <a href="action/editDataAwak.php?NIK=<?php echo $data["NIK"] ?>"><button  type="button" name="masuk" class="btn btn-primary" data-toggle="modal" data-target="#example">edit</button></a>

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
	<div class="modal fade" id="example1" tabindex="-1" role="dialog" aria-labelledby="example1Title" aria-hidden="true">
	 	<div class="modal-dialog" role="document">
	   		<div class="modal-content">
	    		<div class="modal-header">
	       			<h5 class="modal-title" id="example1">Masukkan Data Baru</h5>
	       			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        		<span aria-hidden="true">&times;</span>
	       			</button>
	     		</div>
	     		<div class="modal-body">
	     			<p>Input data</p>
	       			<form class="form-inline" action="editawak.php" method="post">
	                	<div>
	                		<input placeholder="NIK :" name="NIK" type="number" class="form-control mb-2 mr-sm-2">

		                    <input placeholder="Nama:" name="Nama" type="text" class="form-control mb-2 mr-sm-2">
		                    Tanggal Lahir :
		                    <input placeholder="Tanggal Lahir:" name="Tanggal_Lahir" type="date" class="form-control mb-2 mr-sm-2">

		                    <input placeholder="Kota:" name="Kota" type="text" class="form-control mb-2 mr-sm-2">

		                    <input placeholder="Kecamatan:" name="Kecamatan" type="text" class="form-control mb-2 mr-sm-2">

		                    <input placeholder="Desa:" name="Desa" type="text" class="form-control mb-2 mr-sm-2">

		                    <input placeholder="Nomor Hp:" name="No_Hp" type="number" class="form-control mb-2 mr-sm-2">

		                    <input placeholder="Nomor Hp Darurat:" name="No_Hp_Darurat" type="number" class="form-control mb-2 mr-sm-2"><br>
	                	</div><br><br>
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
</body>
</html>