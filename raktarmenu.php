<?php
ob_start(); //this should be first line of your page
include_once ('Raktar.php');
$url = new Raktar();



?>
<nav class="navbar navbar-inverse navbar-fixed navbar-transparent active bootsnav" >

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Keresés">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <div class="container" style="color: black">
        <!-- Start Atribute Navigation -->
        <div class="attr-nav">
            <ul>
                <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
            </ul>
        </div>
        <!-- End Atribute Navigation -->

        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars" style="color: #3f3f3f"></i>
            </button>
            <a class="navbar-brand" href="#brand">
                <img src="bootsnav-master/images/brand/logo-white.png" class="logo logo-display" alt="">
                <img src="bootsnav-master/images/brand/logo-black.png" class="logo logo-scrolled" alt="">
            </a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Megnevezés csoport</a>
                    <ul class="dropdown-menu">
                        <li><a href="megnevezesrogzit.php">Megnevezés rögzítés</a></li>
                        <li><a href="nyagmodosituj.php">Megnevezés javítás</a></li>
                        <li><a href="anyagtoroluj.php">Megnevezés törlés</a></li>
                    </ul>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Termékbevételezés</a>
                    <ul class="dropdown-menu">
                        <li><a href="termeknev.php">Új terméknév rögzítés</a></li>
                        <li><a href="termekbevetelezes.php">Termék bevételezés</a></li>
                        <li><a href="termekkiadas.php">Termék kiadás</a></li>
                        <li><a href="termekjavitas.php">Termék javítás</a></li>
                        <li><a href="termektorol.php">Termék törlés</a></li>
                    </ul>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Projektek</a>
                    <ul class="dropdown-menu">
                        <li><a href="megrendelofelvetel.php">Megrendelő felvétel</a></li>
                        <li><a href="megrendelojavitas.php">Megrendelő javítás</a></li>
                        <li><a href="megrendelotorles.php">Megrendelő törlés</a></li>
                    </ul>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Beszállító</a>
                    <ul class="dropdown-menu">
                        <li><a href="beszallitofelvetel.php">Beszállító felvétel</a></li>
                        <li><a href="beszallitojavitas.php">Beszállító javítás</a></li>
                        <li><a href="beszallitotorles.php">Beszállító törlés</a></li>
                    </ul>
                <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Lekérdezések</a>
                            <ul class="dropdown-menu">
                                <li><a href="termeklekerdezes.php">Termék lekérdezés</a></li>
                                <li><a href="megrendelolekerdezes.php">Megrendelő lekérdezés</a></li>
                            </ul>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span>Szia <?php echo $userRow['user_name']; ?>&nbsp;
                        <span></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Bejelentkezve</a></li>
                        <li><a href="logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;
                                Kilépés</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>

    <!-- Start Side Menu -->
    <div class="side">
        <a href="#" class="close-side"><i class="fa fa-times"></i></a>
        <div class="widget">
            <h6 class="title">Menü</h6>
            <ul class="link">
                <li><a href="arajanlat.php">Árajánlat készítéss</a></li>
                <li><a href="logout.php">Kijelentkezés</a></li>
            </ul>
        </div>
    </div>
    <!-- End Side Menu -->
</nav>
<div class="clearfix"></div>
<div class="site-wrapper">
    <!--kép-->
    <b class="glyphicon-open" style="background-color: #6a6a6a"></b>
    <div class="site-wrapper-inner">
        <div class="cover-container">
        </div>
    </div>
</div>
<!-- End Home -->

<div class="clearfix"></div>
