<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="hu" xmlns:color="http://www.w3.org/1999/xhtml">
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
    <link href="carousel.css" rel="stylesheet">
    <!-- Image -->
    <link href="bootsnav-master/images/brand/logo-black.png" rel="import">
    <!-- Icons -->
    <link href="fonts/FontAwesome/font-awesome.css" rel="stylesheet">
    <link href="bootstrap-3.3.7\docs\examples\blog\blog.css" rel="stylesheet">

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


        .bgim {
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
            .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5, .bgimg-6 .bgimg-7{
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
                            <a href="szerviz.php" class="photo"><img src="image/NagyIstvan.jpg" class="cart-thumb"
                                                                     alt="Nagy István" /></a>
                            <h6><a href="szerviz.php">Nagy István</a></h6>
                            <p style="color: #5f5f5f">Víz - <span class="price" style="color: #5f5f5f">Ügyeletes</span></p>
                        </li>
                        <li>
                            <a href="szerviz.php" class="photo"><img src="image/OsváthTibi.jpg" class="cart-thumb"
                                                                     alt="Osváth Tibor" /></a>
                            <h6><a href="szerviz.php">Osváth Tibi</a></h6>
                            <p style="color: #5f5f5f">Villany - <span class="price" style="color: #5f5f5f">Ügyeletes</span></p>
                        </li>
                        <li class="total">
                            <span class="pull-right" style="color: #5f5f5f"><strong>Ügyeletben</strong>:3 - fő</span>
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
                <i class="fa fa-bars"></i>
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
                <li><a href="index.html">Fodin-Home</a></li>
                <li><a href="proba.php">Szolgáltatások</a></li>
                <li><a href="faiparimunkak">Faipari munkák</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Szolgáltatások részletesen</a>
                    <ul class="dropdown-menu">
                        <li><a href="parkettazas.php">Parketázás</a></li>
                        <li><a href="hidegburkolas.php">Hidegburkolás</a></li>
                        <li><a href="festes.php">Festés mázolás</a></li>
                        <li><a href="komuves.php">Kőműves munkák</a></li>
                        <li><a href="szigeteles.php">Szigetelés</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Energia</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Viz</a></li>
                                <li><a href="#">Gáz</a></li>
                                <li><a href="#">Villanyszerelés</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Fűtés</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Padló</a></li>
                                        <li><a href="#">Radiátor</a></li>
                                        <li><a href="#">Központi</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Gipszkartonozás</a></li>
                    </ul>
                </li>
                <li><a href="kontakt.php">Kontakt</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
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
                <li><a href="szakaszok.html">Szakaszok</a></li>
                <li><a href="epiteszet.php">Az építészet</a></li>
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
<!-- End Home -->
<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017.08.09.
 * Time: 19:08
 */

include ("include/config.php");
include ("include/db.php");




?>
<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="#">Kezdőlap</a>
            <a class="blog-nav-item" href="#">Új bejegyzés</a>
            <a class="blog-nav-item" href="#">Press</a>
            <a class="blog-nav-item" href="#">New hires</a>
            <a class="blog-nav-item" href="#">About</a>
        </nav>
    </div>
</div>

<div class="container">



    <div class="row">

        <div class="col-sm-8 blog-main">

            <div class="blog-header">
                <h1 class="blog-title">Házépítés</h1>
                <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
            </div>

            <div class="blog-post">
                <h2 class="blog-post-title">Sample blog post</h2>
                <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

                <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
                <hr>
                <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                <blockquote>
                    <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </blockquote>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                <h2>Heading</h2>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <h3>Sub-heading</h3>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <pre><code>Example code block</code></pre>
                <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                <h3>Sub-heading</h3>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <ul>
                    <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                    <li>Donec id elit non mi porta gravida at eget metus.</li>
                    <li>Nulla vitae elit libero, a pharetra augue.</li>
                </ul>
                <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                <ol>
                    <li>Vestibulum id ligula porta felis euismod semper.</li>
                    <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                    <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                </ol>
                <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
                <a href="#" class="btn btn-primary">Hozzászólás</a>
            </div><!-- /.blog-post -->

            <div class="blog-post">
                <h2 class="blog-post-title">Another blog post</h2>
                <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

                <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                <blockquote>
                    <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </blockquote>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <a href="#" class="btn btn-primary">Hozzászólás</a>
            </div><!-- /.blog-post -->

            <div class="blog-post">
                <h2 class="blog-post-title">New feature</h2>
                <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <ul>
                    <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                    <li>Donec id elit non mi porta gravida at eget metus.</li>
                    <li>Nulla vitae elit libero, a pharetra augue.</li>
                </ul>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                <a href="#" class="btn btn-primary">Hozzászólás</a>
            </div><!-- /.blog-post -->

            <nav>
                <ul class="pager">
                    <li><a href="#" >Previous</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </nav>

        </div><!-- /.blog-main -->
        <?php
        include ("include/sidebar.php");

        ?>

    </div><!-- /.row -->

</div><!-- /.container -->

<?php
include ("include/footer.php");

?>
