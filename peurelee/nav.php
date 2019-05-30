<?php session_start()?>

<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="home.php">
      <img class="logo" src="../img/core-img/logo.png" alt="Logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left:13rem">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Laporan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Laporan Melaut</a>
          <a class="dropdown-item" href="#">Laporan Kembali</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminNahkoda.php"><span>Nahkoda</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Awak</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AdminKapal.php">Kapal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Orang Hilang</a>
      </li>
            <div class="row">
                
                <div class="col-lg-1">
                <?php if (isset($_SESSION["adminNik"])): ?>
                <a href="action/logout.php" class="btn btn-outline-danger logout"><i class="fa fa-power-off"></i> Logout</a>
                <?php else: ?>
                <!-- Get Tickets Button -->
                
                <?php endif; ?>
                </div>
            </div>
    </ul>
  </div>
</nav>