<?php
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.08.21.
 * Time: 7:20
 */
?>


<!-- Start Navigation -->
<nav class="navbar navbar-default navbar-fixed navbar-transparent dark bootsnav">

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input class="form-control" placeholder="Keresés">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <div class="container">
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
            <a class="navbar-brand" href="#">
                <img src="bootsnav-master/images/brand/logo-white.png" class="logo logo-display" alt="">
                <img src="bootsnav-master/images/brand/logo-black.png" class="logo logo-scrolled" alt="">
            </a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li><a href="index.php">Fodin-Home</a></li>
                <li><a href="szolgaltatasaink.html">Amivel foglalkozunk</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Szolgáltatások részletesen</a>
                    <ul class="dropdown-menu">
                        <li><a href="bontas.php">Bontás munkálatok</a></li>
                        <li><a href="falvagas.php">Speciális falvágások</a></li>
                        <li><a href="lako.php">Lakó és nem lakó házak építése és átalakítása</a></li>
                        <li><a href="komuves.php">Kőműves munkák</a></li>
                        <li><a href="faiparimunkak.php">Faipari munkák</a></li>
                        <li><a href="szigeteles.php">Szigetelés</a></li>
                        <li><a href="falvagas.php">Ablakok-Redőny-Reluxa</a></li>
                        <li><a href="villanyszereles.php">Villanyszerelés</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Energia</a>
                            <ul class="dropdown-menu">
                                <li><a href="viz.php">Viz</a></li>
                                <li><a href="gaz.php">Gáz</a></li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Fűtés</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="padlo.php">Padló</a></li>
                                        <li><a href="kozponti.php">Központi</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="hidegburkolas.php">Hidegburkolás</a></li>
                        <li><a href="parkettazas.php">Parketázás</a></li>
                        <li><a href="gipszkarton.html">Gipszkartonozás</a></li>
                        <li><a href="falvagas.php">Tetőtér beépítés</a></li>
                        <li><a href="festes.php">Festés mázolás</a></li>
                    </ul>
                </li>
                <li><a href="kontakt.php">Kontakt</a></li>
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
                <li><a href="kontakt.php">Kontact</a></li>
            </ul>
        </div>
        <div class="widget">
            <h6 class="title">Ablakok, redőny, reluxa, árnyékolástechnika, biztonság, beltér</h6>
            <ul class="link">
                <li><a href="ablak.php">Ablak</a></li>
                <li><a href="redony.php">Redőny, Reluxa, Árnyékolás</a></li>
                <li><a href="belter.php">Bizttonsági és beltéri ajtók</a></li>
            </ul>
        </div>
        <div class="widget">
            <h6 class="title">Gépészeti munkák</h6>
            <ul class="link">
                <li><a href="viz.php">Viz</a></li>
                <li><a href="gaz.php">Gáz</a></li>
                <li><a href="padlo.php">Padló</a></li>
                <li><a href="kozponti.php">Központi</a></li>
            </ul>
        </div>
        <div class="widget">
            <h6 class="title">Bejelentkezés az oldalra</h6>
            <li><a href="login.php">Bejelentkezés</a> </li>
        </div>
    </div>
    <!-- End Side Menu -->
</nav>
<!-- End Navigation -->

<div class="clearfix"></div>
<div class="site-wrapper">
    <!--kép-->
   <img src="bootsnav-master/images/thumb/fa.png" class="cart-thumb"  />
    <div class="site-wrapper-inner">
        <div class="cover-container">
        </div>
    </div>
</div>
<!-- End Home -->

