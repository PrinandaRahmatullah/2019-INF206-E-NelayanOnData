<?php
require_once "action/connection.php";
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
  <link rel="stylesheet" href="css/style.css">
  <!--=== FontAwesome CSS ===-->
  <link rel="stylesheet" href="../css/font-awesome.min.css">

  <title>Cek Laporan</title>
</head>

<body>
  <div class="jumbotron text-center">
    <img src="../img/core-img/logo3.png">
    <h1>Nelayan On Data</h1>
    <p>System Access</p>
  </div>

  <!-- DATA KEBERANGKATAN -->
  <div class="container text-center">
    <div class="row">
      <div class="col-sm-12">
        <div class="section-heading">
          <h5> <b>Laporan Keberangkatan</b>
            <hr>
          </h5><br>
        </div>
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
              <th scope="col">Nahkoda</th>
              <th scope="col">Nama kapal</th>
              <th scope="col">Tanggal Berangkat</th>
              <th scope="col">Daftar awak</th>
              <th scope="col">Tindakan</th>
            </tr>
            <thead>

            <tbody>
              <tr>
                <?php
                $query = mysqli_query($link, "select * FROM datapergi");
                if (mysqli_num_rows($query) > 0) {
                  $tambah = 0;
                  while ($data = mysqli_fetch_array($query)) {
                    $tambah++;
                    echo "

                          <td>" . $tambah . "</td>
                          <td>" . $data['NIK'] . "</td>
                          <td>" . $data['Nama_kapal'] . "</td>
                          <td>" . $data['Tanggal'] . "</td>
                          <td>" . $data['Anggota'] . "</td>
                          <td>" . '<button type="button" class="btn btn-outline-success btn-rounded waves-effect">Verifikasi</button> <button type="button" class="btn btn-outline-danger btn-rounded waves-effect">Tolak</button>' . "</td>
                          </tr>";
                  }
                } ?>
            </tbody>
        </table><br><br>
      </div>
    </div>
  </div>

  <!-- DATA KEPULANGAN -->
  <div class="container text-center">
    <div class="row">
      <div class="col-sm-12">
        <div class="section-heading">
          <h5> <b>Laporan Kepulangan</b>
            <hr>
          </h5><br>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center">
    <div class="row text-center">
      <div class="col-12 col-lg-12">

        <!-- Tabel untuk menampilkan semua data kepulangan -->
        <table class="table table-striped table-hover">
          <thead class="thead-light">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nahkoda</th>
              <th scope="col">Nama kapal</th>
              <th scope="col">Tanggal Kembali</th>
              <th scope="col">Daftar awak</th>
              <th scope="col">Tindakan</th>
            </tr>
            <thead>

            <tbody>
              <tr>
                <?php
                $query = mysqli_query($link, "SELECT * FROM datapulang");
                if (mysqli_num_rows($query) > 0) {
                  $tambah = 0;
                  while ($data = mysqli_fetch_array($query)) {
                    $tambah++;
                    echo "

                          <td>" . $tambah . "</td>
                          <td>" . $data['NIK'] . "</td>
                          <td>" . $data['Nama_kapal'] . "</td>
                          <td>" . $data['Tanggal'] . "</td>
                          <td>" . $data['Anggota'] . "</td>
                          <td>" . '<button type="button" class="btn btn-outline-success btn-rounded waves-effect">Verifikasi</button> <button type="button" class="btn btn-outline-danger btn-rounded waves-effect">Tolak</button>' . "</td>
                          </tr>";
                  }
                } ?>
            </tbody>
        </table> <br><br>
      </div>
    </div>
  </div>

  <div class="footer"></div>
</body>

<?php include "footer.php"; ?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>

</html>