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

    <title>Nahkoda</title>
  </head>
  <body>
    <!-- Navbar Page -->
    <?php include "nav.php";
    ?>

    <div class="container connahkoda">
        <h3 style="text-align:center; text-transform:uppercase;margin-bottom:15px;">Kelola Nahkoda</h3>
        <div class="container-fluid">
            <div class="row">
                <div id="tambah">
                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#tambahNahkoda"><i class="fa fa-plus">  </i></button>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                <table class="table table-striped table-hover tabelku">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Foto</td>
                        <td>NIK</td>
                        <td>Nama</td>
                        <td>Nomor HP</td>
                        <td>Alamat</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $nahkoda = $link->query("SELECT * FROM nahkoda order by nik asc");
                        $no = 0;
                        while($data=$nahkoda->fetch_assoc()){
                            echo"
                            <tr>
                                <td>".++$no."</td>
                                <td><div class='card card-orang'><img src='../img/ac-img/".$data['gambar']."'></div></td>
                                <td>".$data['nik']."</td>
                                <td>".$data['nama']."</td>
                                <td>".$data['No_HP']."</td>
                                <td>".$data['Alamat']."</td>
                                <td><a href='' class='btn btn-outline-warning' data-toggle='modal' data-target='#editNahkoda'><i class='fa fa-edit'></i></a><a href='action/deleteNahkoda.php?nik=".$data["nik"]."' class='btn btn-outline-danger'><i class='fa fa-trash'></i></a></td>
                            </tr>
                            
                        <div class='modal fade bd-example-modal-lg' id='editNahkoda' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                            <div class='modal-dialog modal-lg modal-dialog-centered' role='document'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='exampleModalLongTitle'>Edit Nahkoda</h5>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                    <div class='modal-body'>
                                        <form action='action/ubahNahkoda.php' method='post'>
                                            <div class='row'>
                                                <div class='col-md-6'>
                                                    <label for='nik'>NIK</label>
                                                    <input type='text' class='form-control' name='nik' id='nik' required value=".$data['nik']." autofocus> 
                                                </div>
                                                <div class='col-md-6'>
                                                    <label for='nama'>Nama</label>
                                                    <input type='text' class='form-control' name='nama' id='nama' required  value=".$data['nama'].">
                                                </div>
                                                <div class='col-md-5'>
                                                    <label for='tempat_lahir'>Tempat Lahir</label>
                                                    <input type='text' class='form-control' name='tempat_lahir' id='tempat_lahir'value=".$data['Tempat_Lahir'].">
                                                </div>
                                                <div class='col-md-5'>
                                                    <label for='tgl lahir'>Tanggal Lahir</label>
                                                    <input type='date' class='form-control' name='tanggal_lahir' id='tanggal_lahir' value=".$data['Tanggal_Lahir']." >
                                                </div>
                                                <div class='col-md-6'>
                                                    <label for='no_hp'>Nomor HP</label>
                                                    <input type='text' class='form-control' name='no_hp' id='no_hp' value=".$data['No_HP']." >
                                                </div>
                                                <div class='col-md-6'>
                                                    <label for='no_hp_d'>Nomor HP Darurat</label>
                                                    <input type='text' class='form-control' name='no_hp_d' id='no_hp_d' value=".$data['No_HP_Darurat']." >
                                                </div>
                                                <div class='col-md-4'>
                                                    <label for='kota_asal'>Kota Asal</label>
                                                    <input type='text' class='form-control' name='kota' id='kota' value=".$data['Kota']." >
                                                </div>
                                                <div class='col-md-4'>
                                                    <label for='Kecamatan'>Kecamatan</label>
                                                    <input type='text' class='form-control' name='kecamatan' id='kecamatan' value=".$data['Kecamatan']." >
                                                </div>
                                                <div class='col-md-4'>
                                                    <label for='desa'>Desa</label>
                                                    <input type='text' class='form-control' name='desa' id='desa' value=".$data['Desa']." >
                                                </div>
                                                <div class='col-md-12'>
                                                    <label for='alamat'>Alamat</label>
                                                    <input type='text' class='form-control' name='alamat' id='alamat' value=".$data['Alamat']." >
                                                </div>
                                            </div>
                                            
                                            <h6>Password</h6>
                                            <div class='row'>
                                                <div class='col-md-6'>
                                                    <label for='nik'>Current Password</label>
                                                    <input class='form-control' type='text' name='password4' id='password4' required value=".$data['password'].">
                                                </div>
                                                <div class='col-md-6'>
                                                    <label for='nik'>New Password</label>
                                                    <input class='form-control' type='password' name='password5' id='password5'>
                                                </div>
                                                <div class='col-md-6'>
                                                    <label for='nik'>Confirm New Password</label>
                                                    <input class='form-control' type='password' name='password6' id='password6'>
                                                </div>
                                            </div>
                                            
                                        
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-warning' data-dismiss='modal'>Cancel</button>
                                        <button type='submit' class='btn btn-success'><i class='fa fa-upload'></i> Ubah</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='modal fade bd-example-modal-sm' id='deleteNahkoda' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                            <div class='modal-dialog modal-sm modal-dialog-centered' role='document'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='exampleModalLongTitle'>Delete Nahkoda</h5>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                    <div class='modal-body'>
                                        <h5>Apakah Anda Ingin Menghapus User Ini?</h5>
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-warning' data-dismiss='modal'>Cancel</button>
                                        <a class='btn btn-danger' href='action/deleteNahkoda.php?nik='<i class='fa fa-trash'></i></i> Hapus</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                            "
                        
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
    

    <!-- Modal Tambah Nahkoda -->
    <div class="modal fade bd-example-modal-lg" id="tambahNahkoda" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Nahkoda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="action/tambahNahkoda.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" name="nik" id="nik" required autofocus>
                            </div>
                            <div class="col-md-6">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" required>
                            </div>
                            <div class="col-md-5">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                            </div>
                            <div class="col-md-5">
                                <label for="tgl lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                            </div>
                            <div class="col-md-6">
                                <label for="no_hp">Nomor HP</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp" required>
                            </div>
                            <div class="col-md-6">
                                <label for="no_hp_d">Nomor HP Darurat</label>
                                <input type="text" class="form-control" name="no_hp_d" id="no_hp_d">
                            </div>
                            <div class="col-md-4">
                                <label for="kota_asal">Kota Asal</label>
                                <input type="text" class="form-control" name="kota" id="kota" required>
                            </div>
                            <div class="col-md-4">
                                <label for="Kecamatan">Kecamatan</label>
                                <input type="text" class="form-control" name="kecamatan" id="kecamatan">
                            </div>
                            <div class="col-md-4">
                                <label for="desa">Desa</label>
                                <input type="text" class="form-control" name="desa" id="desa">
                            </div>
                            <div class="col-md-12">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nik">New Password</label>
                                <input class="form-control" type="password" name="password2" id="password2" required>
                            </div>
                            <div class="col-md-6">
                                <label for="nik">Confirm Password</label>
                                <input class="form-control" type="password" name="password3" id="password3" required>
                                <span id="message"></span>
                            </div>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>