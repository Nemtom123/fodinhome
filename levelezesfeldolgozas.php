<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="hu"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="hu"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="hu"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="hu">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootsnav is a multi purpose header based with Bootstrap, you can build any header style with bootsnav only with a few minutes">
    <meta name="keywords" content="Bootsnav, Menu, Navigation, Navbar, Bootstrap, Dropdown, Multi Dropdown, Megamenu">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <title>Fodin-Home Kft</title>
    <link rel="icon" href="image/favicon.ico">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://unpkg.com/nanogallery2@1.3.0/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://unpkg.com/nanogallery2@1.3.0/dist/jquery.nanogallery2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="bootsnav-master/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootsnav-master/css/animate.css" rel="stylesheet">
    <link href="bootsnav-master/css/bootsnav.css" rel="stylesheet">
    <link href="bootsnav-master/css/style.css" rel="stylesheet">

    <link href="docs/css/metro.css" rel="stylesheet">
    <link href="docs/css/metro-icons.css" rel="stylesheet">
    <link href="docs/css/metro-responsive.css" rel="stylesheet">
    <link href="docs/css/metro-schemes.css" rel="stylesheet">

    <link href="docs/css/docs.css" rel="stylesheet">

    <script src="docs/js/jquery-2.1.3.min.js"></script>
    <script src="docs/js/metro.js"></script>
    <script src="docs/js/docs.js"></script>
    <script src="docs/js/prettify/run_prettify.js"></script>
    <script src="docs/js/ga.js"></script>

    <!-- Image -->
    <link href="bootsnav-master/images/brand/logo-black.png" rel="import">
    <!-- Icons -->
    <link href="fonts/FontAwesome/font-awesome.css" rel="stylesheet">

    <!-- Font Style -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- Animate -->
    <link href="bootsnav-master/css/animate.css" rel="stylesheet">

    <!-- Bootsnav -->
    <link href="bootsnav-master/css/bootsnav.css" rel="stylesheet">

    <!-- Custom style -->
    <link href="bootsnav-master/css/style.css" rel="stylesheet">


    <style>
        body, html {

            margin: 0;
            font: 400 15px/1.8 "Lato", sans-serif;
            color: #5e5e5e;
        }
        .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5, .bgimg-6, .bgimg-7{
            position: relative;
            opacity: 0.65;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .bgimg-1 {
            background-image: url("image/livingroom3.jpg");
            min-height: 100%;
        }
        .bgimg-2 {
            background-image: url("image/bathroom2.jpg");
            min-height: 400px;
        }


        .bgimg-3 {
            background-image: url("image/living4.jpg");
            min-height: 400px;
        }

        .bgimg-4 {
            background-image: url("image/living1.jpg");
            min-height: 100%;
        }
        .bgimg-5 {
            background-image: url("image/bathroom1.jpg");
            min-height: 400px;
        }


        .bgimg-6 {
            background-image: url("image/bedroom1.jpg");
            min-height: 400px;
        }


        .bgimg-7 {
            background-image: url("image/livingroom3.jpg");
            min-height: 400px;
        }

        .caption {
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            text-align: center;
            color: #000;
        }

        .caption span.border {
            background-color: #111;
            color: #fff;
            padding: 18px;
            font-size: 25px;
            letter-spacing: 10px;
        }

        h3 {
            letter-spacing: 5px;
            text-transform: uppercase;
            font: 20px "Lato", sans-serif;
            color: #111;
        }

        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-device-width: 1024px) {
            .bgimg-1, .bgimg-2, .bgimg-3 .bgimg-4, .bgimg-5, .bgimg-6 .bgimg-7{
                background-attachment: scroll;
            }
        }
    </style>

</head>
<body>
<!-- Start Navigation -->
<nav class="navbar navbar-default navbar-fixed navbar-transparent dark bootsnav">

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
                            <a href="szerviz.html" class="photo"><img src="image/KirályGábor.jpg"
                                                                      class="cart-thumb" alt="Király Gábor" /></a>
                            <h6><a href="szerviz.html">Király Gábor</a></h6>
                            <p style="color: #5f5f5f">Gáz - <span class="price" style="color: #5f5f5f">Ügyeletes</span></p>
                        </li>
                        <li>
                            <a href="szerviz.html" class="photo"><img src="image/NagyIstvan.jpg" class="cart-thumb"
                                                                      alt="Nagy István" /></a>
                            <h6><a href="szerviz.html">Nagy István</a></h6>
                            <p style="color: #5f5f5f">Víz - <span class="price" style="color: #5f5f5f">Ügyeletes</span></p>
                        </li>
                        <li>
                            <a href="szerviz.html" class="photo"><img src="image/OsváthTibi.jpg" class="cart-thumb"
                                                                      alt="Osváth Tibor" /></a>
                            <h6><a href="szerviz.html">Osváth Tibi</a></h6>
                            <p style="color: #5f5f5f">Villany - <span class="price" style="color: #5f5f5f">Ügyeletes</span></p>
                        </li>
                        <li class="total">
                            <span class="pull-right" style="color: #5f5f5f"><strong>Ügyeletben</strong>:3 - fő</span>
                            <a href="szerviz.html" class="btn btn-default btn-cart">Szervizes</a>
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
                <i class="fa fa-bars"></i>
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
                <li><a href="proba.html">Szolgáltatások</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Szolgáltatások részletesen</a>
                    <ul class="dropdown-menu">
                        <li><a href="parkettazas.html">Parketázás</a></li>
                        <li><a href="hidegburkolas.html">Hidegburkolás</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Energia</a>
                            <ul class="dropdown-menu">
                                <li><a href="viz.html">Viz</a></li>
                                <li><a href="gaz.html">Gáz</a></li>
                                <li><a href="villanyszereles.html">Villanyszerelés</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Fűtés</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="padlo.html">Padló</a></li>
                                        <li><a href="radiator.html">Radiátor</a></li>
                                        <li><a href="kozponti.htm">Központi</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="gipszkarton.html">Gipszkartonozás</a></li>
                    </ul>
                </li>
                <li><a href="kontakt.html">Kontakt</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>

    <!-- Start Side Menu -->
    <div class="side">
        <a href="#" class="close-side"><i class="fa fa-times"></i></a>
        <div class="widget">
            <h6 class="title">Menü</h6>
            <ul class="link">
                <li><a href="leiras.html">Leírás</a></li>
                <li><a href="szerviz.html">Szervíz</a></li>
                <li><a href="bejegyzesek.php">Bejegyzések</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="kontakt.html">Kontact</a></li>
            </ul>
        </div>
        <div class="widget">
            <h6 class="title">További linkek</h6>
            <ul class="link">
                <li><a href="ujotthon.html">Új otthon</a></li>
                <li><a href="erdekessegek.html">Érdekességek</a></li>
                <li><a href="szakaszok.html">Szakaszok</a></li>
                <li><a href="epiteszet.html">Az építészet</a></li>
                <li><a href="login.php">Bejelentkezés</a></li>
            </ul>
        </div>
    </div>
    <!-- End Side Menu -->
</nav>
<!-- End Navigation -->

<div class="clearfix"></div>
<div class="site-wrapper">
    <!--kép-->
    <a href="#" class="photo"><img src="bootsnav-master/images/thumb/fa.png" class="cart-thumb" alt="" /></a>
    <div class="site-wrapper-inner">
        <div class="cover-container">
        </div>
    </div>
</div>


<?php
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.07.05.
 * Time: 11:35
 */


echo ' <div align="center"><br><br>';


print ("<FORM METHOD='POST' ACTION='levelezes.php'>");

echo '   <h4 align="center" style="color:grey">Üzenet küldés</h4>';
if ($_POST['ironeve'] == '' and $_POST['varos'] == '' and $_POST['utca'] == '' and $_POST['hazszam'] == '' and
    $_POST['email'] == ''

) {

}
else {
    echo ' <div align="center">';

}

if ($_POST['ironeve'] == ''){
    echo '<div class="cell" >

                        <div class="input-control modern text iconic" data - role = "input";>
                          <input type = "text">
                            <span class="label">Név</span>
                            <span class="informer">Név</span>
                            <span class="placeholder"  style="color:red">Nem töltötted ki!</span >
                            <span class="icon mif-user" ></span >
                       </div >';
} elseif ($_POST['ironeve'] == (preg_match("/^[a-zA-Z\s*\ öÖüÜóÓőŐúÚéÉáÁűŰíÍ-]*$/", $_POST['ironeve']))) {
    echo '   <h4 align="center">Nem jól töltöttedki az ürlapot!</h4>';
    echo '<div class="cell" >

                        <div class="input-control modern text iconic" data - role = "input";>
                            <input type = "text" >
                            <span class="placeholder"  style="color:red">Rossz karaktert írtál!</span >
                            <span class="icon mif-user" ></span >
                       </div >';
} elseif ($_POST['ironeve'] != (!preg_match('/^[0-9^\/]*$/', $_POST['ironeve']))) {
    echo '   <h4 align="center">Nem jól töltöttedki az ürlapot!</h4>';
    echo '<div class="cell" >

                        <div class="input-control modern text iconic" data - role = "input";>
                            <input type = "text"  >
                            <span class="placeholder"  style="color:red">Rossz karakter!</span >
                            <span class="icon mif-user" ></span >
                       </div >';
} else {

    echo '<div class="cell" >

                        <div class="input-control modern text iconic" data-role="input"  ;>

                             <input type="text" name="visszanev" style="color: #00A048 " value="' . $_POST['ironeve'] . '">
                            <span class="label">Név</span>
                            <span class="informer">Kérlek írd be a neved.</span>
                            
                           <span class="placeholder" style="color: #00A048" name="visszanev" >' . $_POST['ironeve'] . '</span>
                            <span class="icon mif-user"></span>
                        </div>
                    </div>';
    $ironeve = $_POST['ironeve'];
}


if ($_POST['varos'] == '') {

    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="varos">
                            <span class="label">Város</span>
                            <span class="informer">Város</span>
                            <span class="placeholder" name="varos" style="color: red">Nem töltötted ki!</span>
                            <span class="icon mif-home"></span>
                        </div>
                    </div>';

} elseif ($_POST['varos'] == (preg_match("/^[a-zA-Z\s*\ öÖüÜóÓőŐúÚéÉáÁűŰíÍ-]*$/", $_POST['varos']))) {

    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="varos">
                            <span class="label">Város</span>
                            <span class="informer">Város</span>
                            <span class="placeholder" name="varos" style="color: red">Rossz karakter!</span>
                            <span class="icon mif-home"></span>
                        </div>
                    </div>';

} elseif ($_POST['varos'] != (!preg_match('/^[0-9^\/]*$/', $_POST['varos']))) {

    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="varos">
                            <span class="label">Város</span>
                            <span class="informer">Város</span>
                            <span class="placeholder" name="varos" style="color: red">Rossz karakter!</span>
                            <span class="icon mif-home"></span>
                        </div>
                    </div>';

} else {
    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input" >
                            <input type="text" name="visszavaros" style="color: #00A048" value="' . $_POST['varos'] . '">
                            <span class="label">Város</span>
                            <span class="informer" style="color:green">Város</span>
                            <span class="placeholder" name="varos" style="color: #00A048">' . $_POST['varos'] . '</span>
                            <span class="icon mif-home"></span>
                        </div>
                    </div>';
    $varos = $_POST['varos'];
}

if ($_POST['utca'] == '') {

    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input" >
                            <input type="text" name="utca">
                            <span class="label">Utca</span>
                            <span class="informer">Utca neve?</span>
                            <span class="placeholder" name="utc" style="color: red">Nem töltötted ki!</span>
                            <span class="icon mif-home"></span>
                        </div>
                             </div>';

} elseif ($_POST['utca'] == (preg_match("/^[a-zA-Z\s*\ öÖüÜóÓőŐúÚéÉáÁűŰíÍ-]*$/", $_POST['utca']))) {

    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="utca">
                            <span class="label">Utca</span>
                            <span class="informer">Utca neve?</span>
                            <span class="placeholder" name="utc" style="color: red">Rossz karakter!</span>
                            <span class="icon mif-home"></span>
                        </div>
                             </div>';

} elseif ($_POST['utca'] != (!preg_match('/^[0-9^\/]*$/', $_POST['utca']))) {


    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="utca">
                            <span class="label">Utca</span>
                            <span class="informer">Utca neve?</span>
                            <span class="placeholder" name="utc" style="color: red">Rossz karakter!</span>
                            <span class="icon mif-home"></span>
                             </div>
                             </div>';

} else {

    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input" >
                            <input type="text" name="visszautca" style="color: #00A048 " value="' . $_POST['utca'] . '" >
                            <span class="label">Utca neve?</span>
                            <span class="informer">Utca neve?</span>
                            <span class="placeholder" style="color: #00A048" >' . $_POST['visszautca'] . '</span>
                            <span class="icon mif-home"></span>
                        </div>
                    </div>';
    $utca = $_POST['utca'];
}

if ($_POST['hazszam'] == '') {
    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="hazszam">
                            <span class="label">Házszám</span>
                            <span class="informer">Házszám</span>
                            <span class="placeholder" style="color: red">Ne hagyd üresen!</span>
                            <span class="icon mif-home " ></span>
                        </div>
                    </div>';
} elseif ($_POST['hazszam'] == (preg_match("/^[a-zA-Z\s*\ öÖüÜóÓőŐúÚéÉáÁűŰíÍ-]*$/", $_POST['hazszam']))) {
    echo '<div class="cell">
                              <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="hazszam">
                            <span class="label">Házszám</span>
                            <span class="informer">Házszám</span>
                            <span class="placeholder" style="color: red">Rossz karaktert ütöttél!</span>
                            <span class="icon mif-home " ></span>
                               </div>
                              </div>';
} elseif ($_POST['hazszam'] == (!preg_match('/^[0-9^\/]*$/', $_POST['hazszam']))) {
    echo '<div class="cell">
                              <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="hazszam">
                            <span class="label">Házszám</span>
                            <span class="informer">Házszám</span>
                            <span class="placeholder" style="color: red">Rossz karaktert ütöttél!</span>
                            <span class="icon mif-home " ></span>
                               </div>
                              </div>';
} else {
    echo '<div class="cell">
                              <div class="input-control modern text iconic" data-role="input" >
                                <input type="text"  name="visszahazszam" style="color: #00A048 " value="' . $_POST['hazszam'] . '">
                            <span class="label">Házszám</span>
                            <span class="informer">Házszám</span>
                            <span class="placeholder" style="color: #00A048">' . $_POST['hazszam'] . '</span>
                            <span class="icon mif-home " ></span>
                               </div>
                              </div>';
    $hazszam = $_POST['hazszam'];
}

if ($_POST['mail'] == '') {

    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="mail">
                            <span class="label">E-mail!</span>
                            <span class="informer">E-mail</span>
                            <span class="placeholder" style="color:red" >Nem töltötted ki!</span>
                            <span class="icon mif-mail"></span>
                        </div>
                    </div>';

} elseif ($_POST['mail'] == (preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $_POST['mail']))) {
    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="mail">
                            <span class="label">E-mail</span>

                            <span class="placeholder" style="color:red" >Nem valós az email!</span>
                            <span class="icon mif-mail"></span>
                        </div>
                    </div>';
} else {
    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input" >
                            <input type="text" name="visszamail" style="color: #00A048 " value="' . $_POST['mail'] . '" >
                            <span class="label">E-mail!</span>

                            <span class="placeholder" style="color: #00A048" >' . $_POST['mail'] . '</span>
                            <span class="icon mif-mail"></span>
                        </div>
                    </div>';
    $mail = $_POST['mail'];
}


echo '
                    <br><br>
                      <div align="center"><span class="placeholder" >Üzenet írása</span></div>
                      <br>';
include 'db.inc.php';

if (!($connection = @mysql_connect($hostName, $username, $password))) {
    echo(mysql_error());
}
if (!mysql_select_db($databaseName, $connection)) {
    echo(mysql_error());
}
$utolso_id = mysql_result(mysql_query("SELECT * FROM Level order by level_id desc limit 0,1"), 0);

$query = "SELECT * FROM Level WHERE level_id=" . $utolso_id . "  ";
if (!($result = @mysql_query($query, $connection))) {
    echo(mysql_error());
}
$sor = @mysql_fetch_array($result);


if ($_POST['iras'] == '') {
    echo $_POST['iras'];
    echo '<div align="center">
                    <div class="input-control textarea" name="iras">
                   <textarea style="width: 300px; margin: 0; height: 109px; color: red" >Nem írtál semmit!</textarea>
                   </div>';
} elseif ($_POST['iras'] == $sor['iras']) {
    echo '<div align="center">
                    <div class="input-control textarea" name="visszairas">
                   <textarea style="width: 300px; margin: 0; height: 109px; color: red" name="visszairas" >Ezt a szőveget rögzítettük</textarea>
                   </div>';

} elseif ($_POST['iras'] != $sor['iras']) {
    echo '<div align="center">
                    <div class="input-control textarea" name="visszairas">
                   <textarea style="width: 300px; margin: 0; height: 109px; color: #00A048" name="visszairas" >' . $_POST['iras'] . '</textarea>
                   </div>';
    $iras = $_POST['iras'];
}


echo '</div>
                   <br><br>
<div align="center"><button class="button danger block-shadow-danger text-shadow">Vissza</button></div>
<br><br>
          ';

if (!empty($ironeve) and !empty($varos) and !empty($utca) and !empty($hazszam)
    and !empty($mail) and !empty($iras)
) {

    mysql_query("

    INSERT INTO `Level` (`iro_neve`, `varos`, `utca`, `hazszam`, `mail`, `iras`, `ldatum`)
     VALUES ('$ironeve', '$varos', '$utca', '$hazszam', '$mail', '$iras', NOW());

   ");
}
?>


<div class="clearfix"></div>
<br><br><br><br>
<!-- Start Footer -->
<footer class="footer"  style="background-color: #2f6f9f">
    <div class="text-center" style="background-color:#FFFFFF " >
        <a class="up-arrow" href="parkettazas.html" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"  style="color: #2f6f9f"></span>
        </a><br><br>
        <p  style="color: #2f6f9f">Licenced by FODIN HOME KFT</p>

    </div>
</footer>
<!-- End Footer -->

<!-- Placed at the end of the document so the pages load faster -->
<script type="bootsnav-master/text/javascript" src="js/jquery.min.js"></script>
<script src="bootnav-master/js/bootstrap.min.js"></script>
<!-- Bootsnavs -->
<script src="bootsnav-master/js/bootsnav.js"></script>

<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="bootstrap-4-dev/docs/assets/js/ie10-viewport-bug-workaround.js"></script>


</body>
</html>

