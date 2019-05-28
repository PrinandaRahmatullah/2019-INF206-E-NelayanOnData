<?php session_start()?>
<!-- Header Area Start -->
<header class="header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="conferNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.php"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <span class="classynav">
                                <ul id="nav">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="awak.php">Awak Kapal</a></li>
                                    <li><a href="kapal.php">Kapal</a></li>
                                    <li><a href="awakhilang.php">Awak Hilang</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                </ul>

                               
                                <?php if (isset($_SESSION["nik"]) && $_SESSION["password"]): ?>
                                <li class="nav-item dropdown">
                                    <a class="akun nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                    <?php echo $_SESSION["nama"]; ?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Pelaporan</a>
                                        <div class="dropdown-item sub-dropdown">
                                            <a href="">Lapor Melaut</a>
                                            <a href="">Lapor Kembali</a>
                                            <a href="laporawakhilang.php">Lapor Orang Hilang</a>
                                        </div>
                                        <a class="dropdown-item" href="acset.php">Account Setting</a>
                                        <a class="dropdown-item" href="logout.php"><strong>Log Out</strong></a>
                                    </div>
                                </li>
                                <?php else: ?>
                                <!-- Get Tickets Button -->
                                <a href="login.php" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Login</i></a>
                                <?php endif; ?>

                            </span>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Header Area End -->

