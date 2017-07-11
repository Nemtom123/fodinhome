<?php
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.06.19.
 * Time: 12:54
 */
?>
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


    <title>Fodin-Home Kft</title>
    <link rel="icon" href="image/favicon.ico">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">



    <!-- Bootstrap Core CSS -->
    <link href="bootsnav-master/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootsnav-master/css/animate.css" rel="stylesheet">
    <link href="bootsnav-master/css/bootsnav.css" rel="stylesheet">
    <link href="bootsnav-master/css/style.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    <!-- Image -->
    <link href="bootsnav-master/images/brand/logo-black.png" rel="import">
    <!-- Icons -->
    <link href="fonts/FontAwesome/font-awesome.css" rel="stylesheet">

    <!-- Font Style -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="typed.js-master/js/typed.js" type="text/javascript"></script>
    <script src="typed.js-master/js/typednext.js" type="text/javascript"></script>
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
                                        <li><a href="kozponti.html">Központi</a></li>
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
<div class="clearfix"></div>
<div class="site-wrapper">
    <!--kép-->
    <a href="#" class="photo"><img src="bootsnav-master/images/thumb/fa.png" class="cart-thumb" alt="" /></a>
    <div class="site-wrapper-inner">
        <div class="cover-container">
        </div>
    </div>
</div>
<!-- End Home -->
<div class="clearfix"></div>
<!-- Start Adsense -->
<div class="container margintop50">
    <script type="text/javascript">
        ( function() {
            if (window.CHITIKA === undefined) { window.CHITIKA = { 'units' : [] }; };
            var unit = {"calltype":"async[2]","publisher":"adamnurdin93","width":300,"height":250,"sid":"Chitika Default"};
            var placement_id = window.CHITIKA.units.length;
            window.CHITIKA.units.push(unit);
            document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
        }());
    </script>
    <script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>
</div>
<!-- End Adsense -->
<div  style="color: #5f5f5f; padding-left:120px"><h5>Készlet</h5></div>
<div class="col-lg-12" style="color: #5f5f5f">

    <table class="table table-responsive table-striped table-inverse">

        <thead class="alert">
        <tr>
            <th>#</th>
            <th>Megnevezés</th>
            <th>Egység</th>
            <th>Mennyiség</th>
            <th>Brutto</th>
            <th>Nettó</th>
            <th>Nyomtatás</th>
            <th>Törlés</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td scope="row">valami</td>
            <td scope="row"></td>
            <td scope="row"></td>
            <td scope="row"></td>
            <td scope="row"></td>
            <td scope="row"></td>
            <td scope="row"></td>
</div>

</div>
</tr>
<tr>
    <th scope="row">2</th>
    <td scope="row">valami</td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>

</tr>
<tr>
    <th scope="row">3</th>
    <td scope="row">valami</td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>

</tr>
<tr>
    <th scope="row">4</th>
    <td scope="row">valami</td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>

</tr>
<tr>
    <th scope="row">5</th>
    <td scope="row">valami</td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>

</tr>
<tr>
    <th scope="row">6</th>
    <td scope="row">valami</td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>

</tr>
<tr>
    <th scope="row">7</th>
    <td scope="row">valami</td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>

</tr>
<tr>
    <th scope="row">8</th>
    <td scope="row">valami</td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>

</tr>
<tr>
    <th scope="row">9</th>
    <td scope="row">valami</td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>

</tr>
<tr>
    <th scope="row">10</th>
    <td scope="row">valami</td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>

</tr>
<tr>
    <th scope="row">11</th>
    <td scope="row">valami</td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>

</tr>
<tr>
    <th scope="row">12</th>
    <td scope="row">valami</td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>
    <td scope="row"></td>

</tr>

</tbody>

</table>

<br><br><br><br><br>
<div class="clearfix"></div>

<script>
    $(document).ready(function() {
        $("body").flowUp("p", { transalteY: 350, duration: 1 });
    });
</script>



<div class="clearfix"></div>
<!-- Start Footer -->
<footer class="footer"  style="background-color: #2f6f9f">
    <div class="text-center" style="background-color:#FFFFFF " >
        <a class="up-arrow" href="index.html" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"  style="color: #2f6f9f"></span>
        </a><br><br>
        <p  style="color: #2f6f9f">Licenced by FODIN HOME KFT</p>

    </div>
</footer>

<!-- End Footer -->
<!-- Bootsnavs -->
<script src="bootsnav-master/js/bootsnav.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src='css3-animate-it-master/js/css3-animate-it.js'></script>
<script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="bootstrap-4-dev/docs/assets/js/ie10-viewport-bug-workaround.js"></script>


</body>
</html>