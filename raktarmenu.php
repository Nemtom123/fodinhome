<?php
ob_start(); //this should be first line of your page
include_once ('Raktar.php');
$url = new Raktar();



?>
<nav class="navbar navbar-default navbar-fixed navbar-transparent active bootsnav" >

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
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                        <i class="fa glyphicon glyphicon-user"></i>
                        <span class="badge">3</span>
                    </a>
                    <ul class="dropdown-menu cart-list">
                        <li>
                            <a href="szerviz.php" class="photo"><img src="image/KirályGábor.jpg"
                                                                     class="cart-thumb" alt="Király Gábor" /></a>
                            <h6><a href="szerviz.php">Király Gábor</a></h6>
                            <p style="color: #5f5f5f">Gáz - <span class="price" style="color: #5f5f5f">Ügyeletes</span></p>
                        </li>
                        <li>
                            <a href="szerviz.php"
                               class="photo"><img src="image/NagyIstvan.jpg" class="cart-thumb" alt="Nagy István" /></a>
                            <h6><a href="szerviz.php">Nagy István</a></h6>
                            <p style="color: #5f5f5f">Víz - <span class="price" style="color: #5f5f5f">Ügyeletes</span></p>
                        </li>
                        <li>
                            <a href="szerviz.php"
                               class="photo"><img src="image/OsváthTibi.jpg" class="cart-thumb" alt="Osváth Tibor" /></a>
                            <h6><a href="szerviz.php">Osváth Tibi</a></h6>
                            <p style="color: #5f5f5f">Villany - <span class="price" style="color: #5f5f5f">Ügyeletes</span></p>
                        </li>
                        <li class="total">
                            <span class="pull-right" style="color: #5f5f5f"><strong>Ügyeletben</strong>: 3 - fő</span>
                            <a href="szerviz.php" class="btn btn-default btn-cart">Szervizes</a>
                        </li>
                    </ul>
                </li>
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
                <li><a href="index.html">Fodin-Home</a></li>
                <li><a href="proba.php">Szolgáltatások</a></li>
                <li><a href="faiparimunkak.php">Faipari munkák</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Raktárkészlet nyílvántartó</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Megnevezés csoport</a>
                            <ul class="dropdown-menu">
                                <li><a href="megnevezesrogzit.php">Megnevezés csoport rögzítés</a></li>
                                <li><a href="anyagmodosit.php">Megnevezés csoport javítás</a></li>
                                <li><a href="anyagtorol.php">Megnevezés csoport törlés</a></li>
                            </ul>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Termékbevételezés</a>
                            <ul class="dropdown-menu">
                                <li><a href="termekbevetelezes.php">Termék bevételezés</a></li>
                                <li><a href="gaz.php">Termék kiadás</a></li>
                                <li><a href="villanyszereles.php">Termék törlés</a></li>
                            </ul>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Projektek</a>
                            <ul class="dropdown-menu">
                                <li><a href="viz.php">Megrendelő felvétel</a></li>
                                <li><a href="gaz.php">Megrendelő javítás</a></li>
                                <li><a href="villanyszereles.php">Megrendelő törlés</a></li>
                            </ul>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Lekérdezések</a>
                            <ul class="dropdown-menu">
                                <li><a href="viz.php">Termék lekérdezés</a></li>
                                <li><a href="gaz.php">Megrendelő lekérdezés</a></li>
                            </ul
                        </li>
                    </ul>
                </li>
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
                <li><a href="leiras.php">Leírás</a></li>
                <li><a href="szerviz.php">Szervíz</a></li>
                <li><a href="bejegyzesek.php">Bejegyzések</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="kontakt.php">Kontact</a></li>
            </ul>
        </div>
        <div class="widget">
            <h6 class="title">További linkek</h6>
            <ul class="link">
                <li><a href="ujotthon.php">Új otthon</a></li>
                <li><a href="erdekessegek.php">Érdekességek</a></li>
                <li><a href="levelezes.php">Levelezés</a></li>
                <li><a href="epiteszet.php">Az építészet</a></li>
                <li><a href="login.php">Bejelentkezés</a></li>
            </ul>
        </div>
    </div>
    <!-- End Side Menu -->
</nav>