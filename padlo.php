<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
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
    <link rel="stylesheet" href="css3-animate-it-master/example-assets/style.css" type="text/css">
    <link rel="stylesheet" href="css3-animate-it-master/css/animations.css" type="text/css">
    <script src="css3-animate-it-master/js/css3-animate-it.js"></script>


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
    <script>
        document.addEventListener('DOMContentLoaded', function(){

            Typed.new("#typed", {
                stringsElement: document.getElementById('typed-strings'),
                typeSpeed: 30,
                backDelay: 500,
                loop: false,
                contentType: 'html', // or text
                // defaults to null for infinite loop
                loopCount: null,
                callback: function(){ foo(); },
                resetCallback: function() { newTyped(); }
            });

            var resetElement = document.querySelector('.reset');
            if(resetElement) {
                resetElement.addEventListener('click', function() {
                    document.getElementById('typed')._typed.reset();
                });
            }

        });

        function newTyped(){ /* A new typed object */ }

        function foo(){ console.log("Callback"); }

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function(){

            Typednext.new("#typednext", {
                stringsElement: document.getElementById('typed-strings'),
                typeSpeed: 30,
                backDelay: 500,
                loop: false,
                contentType: 'html', // or text
                // defaults to null for infinite loop
                loopCount: null,
                callback: function(){ foo(); },
                resetCallback: function() { newTypednext(); }
            });

            var resetElement = document.querySelector('.reset');
            if(resetElement) {
                resetElement.addEventListener('click', function() {
                    document.getElementById('typednext')._typed.reset();
                });
            }

        });

        function newTypednext(){ /* A new typed object */ }

        function foo(){ console.log("Callback"); }

    </script>
    <link href="main.css" rel="stylesheet"/>
    <style>
        .title-bar {
            padding: 5px 0;
            font-family: "Lucida Grande", sans-serif;
            font-size: 0.75em;
            text-align: center;
            text-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px;
            background-color: #f8f8f8;
            background-image: -webkit-linear-gradient(top, #f3f3f3, #bcbbbc);
            background-image: -moz-linear-gradient(top, #f3f3f3, #bcbbbc);
            background-image: linear-gradient(top, #f3f3f3, #bcbbbc);
            box-shadow: inset rgba(255, 255, 255, 0.7) 0px 1px 1px;
            border-bottom: #6a6a6a 1px solid;
        }
        /* code for animated blinking cursor */
        .typed-cursor{
            opacity: 1;
            font-weight: 100;
            -webkit-animation: blink 0.7s infinite;
            -moz-animation: blink 0.7s infinite;
            -ms-animation: blink 0.7s infinite;
            -o-animation: blink 0.7s infinite;
            animation: blink 0.7s infinite;
        }
        .text-body {
            height: 70px;
            background-color: rgba(0, 0, 0, 0.85);
            padding: 10px;
            color: #f0f0f0;
            text-shadow: #000 0px 1px 0px;
            font-family: "Consolas", "Courier New", "Courier";
            font-size: 1.75em;
            line-height: 1.40em;
            font-weight: 500;
            text-align: left;
            overflow: hidden;
            -webkit-transition: all 0.5s ease-out;
            -moz-transition: all 0.5s ease-out;
            -ms-transition: all 0.5s ease-out;
            -o-transition: all 0.5s ease-out;
            transition: all 0.5s ease-out;
        }
        .text-body2 {
            height: 250px;
            background-color: rgba(0, 0, 0, 0.85);
            padding: 10px;
            color: #f0f0f0;
            text-shadow: #000 0px 1px 0px;
            font-family: "Consolas", "Courier New", "Courier";
            font-size: 1.75em;
            line-height: 1.40em;
            font-weight: 500;
            text-align: left;
            overflow: hidden;
            -webkit-transition: all 0.5s ease-out;
            -moz-transition: all 0.5s ease-out;
            -ms-transition: all 0.5s ease-out;
            -o-transition: all 0.5s ease-out;
            transition: all 0.5s ease-out;
        }

        main.css-2 * {
            padding: 0;
            margin: 0;
        }
        @-webkit-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-webkit-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-moz-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-ms-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-o-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }

        .typed-fade-out{
            opacity: 0;
            animation: 0;
            transition: opacity .25s;
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
                <li><a href="index.php">Fodin-Home</a></li>
                <li><a href="szolgaltatasaink.html">Amivel foglalkozunk</a></li>
                <li><a href="faiparimunkak.php">Faipari munkák</a></li>

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
                                <li><a href="viz.php">Viz</a></li>
                                <li><a href="gaz.php">Gáz</a></li>
                                <li><a href="villanyszereles.php">Villanyszerelés</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Fűtés</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="padlo.php">Padló</a></li>
                                        <li><a href="kozponti.php">Központi</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="gipszkarton.html">Gipszkartonozás</a></li>
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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img  src="image/padlo5.jpg" alt="FODIN-HOME KFT">
        </div>

        <div class="item">
            <img src="image/padlo1.jpg" alt="FODIN-HOME KFT ">
        </div>

        <div class="item">
            <img  src="image/padlo2.jpg" alt="FODIN-HOME KFT">
        </div>

        <div class="item">
            <img src="image/padlo3.jpg" alt="FODIN-HOME KFT ">
        </div>

        <div class="item">
            <img src="image/padlo4.jpg" alt="FODIN-HOME KFT ">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Marketing messaging and featurettes
   ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container">

    <table class="table table-hover">
        <thead>
        <tr>
            <th style="color: red">Padlófűtés szöveg</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="background-color: #3f3f3f">Padlófűtés szöveg </td>
        </tr>
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $("body").flowUp("table", { transalteY: 350, duration: 100 });
        });
    </script>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal butorok-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Padlófűtés szöveg</h4>
                </div>
                <div class="modal-body">
                    <div style="text-align: center; width: auto; height: auto">
                        <img src="image/gipsz613.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face" height="300" width="302">
                    </div>
                    <h6><br>Padlófűtés szöveg<br>
                        - Padlófűtés szöveg<br>
                    </h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                </div>
            </div>
            <!-- Modal butorok end-->
        </div>
    </div>
    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog">

            <!-- Modal butorok-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Padlófűtés szöveg</h4>
                </div>
                <div class="modal-body">
                    <div style="text-align: center; width: auto; height: auto">
                        <img src="image/gipsz613.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face" height="300" width="302">
                    </div>
                    <h6><br>Padlófűtés szöveg<br>
                        - Padlófűtés szöveg<br>
                    </h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                </div>
            </div>
            <!-- Modal butorok end-->
        </div>
    </div>
    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">

            <!-- Modal butorok-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Padlófűtés szöveg</h4>
                </div>
                <div class="modal-body">
                    <div style="text-align: center; width: auto; height: auto">
                        <img src="image/gipsz613.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face" height="300" width="302">
                    </div>
                    <h6 style="color: #3f3f3f"><br>Padlófűtés szöveg<br>
                        - Padlófűtés szöveg<br>
                    </h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                </div>
            </div>
            <!-- Modal butorok end-->
        </div>
    </div>

    <!-- On Click Sequencing -->
    <div class='animatedParent row article'>
        <h3 class='animated bounceInDown'>Igazán pazar megoldások</h3>
        <div class='col-md-4'>
            <p class='animated bounceInDown slow'>
                <div class="thumbnail animated bounceInDown slow">
                    <img src="image/gipsz61.jpg" alt="Smiley face" height="300" width="302">
            <p style="color: #5e5e5e;text-align: center"><strong >Padlófűtés szöveg</strong></p>
            <p style="color: #5e5e5e; text-align: center">Padlófűtés szöveg</p>
            <div class="buttonHolder">
                <button class="btn" data-toggle="modal" data-target="#myModal"
                        style="background-color: #aa0000; color: white">Leírás</button>
            </div>
        </div>
        </p>
    </div>

    <div class='col-md-4'>
        <p class='animated bounceInUp slow'>
            <div class="thumbnail animated bounceInUp slow">
                <img src="image/gipsz62.jpg" alt="Smiley face" height="300" width="302">
        <p style=" color: #5e5e5e; text-align: center"><strong >Padlófűtés szöveg</strong></p>
        <p style="color: #5e5e5e; text-align: center">Padlófűtés szöveg</p>
        <div class="buttonHolder">
            <button class="btn" data-toggle="modal" data-target="#myModal1"
                    style="background-color: #aa0000; color: white">Leírás</button>
        </div>
    </div>
    </p>
</div>
<div class='col-md-4'>
    <p class='animated bounceInDown slow'>
        <div class="thumbnail animated bounceInDown slow">
            <img src="image/gipszkarton7.jpg" alt="Smiley face" height="300" width="302">
    <p style="color: #5e5e5e; text-align: center"><strong >Padlófűtés szöveg</strong></p>
    <p style="color: #5e5e5e; text-align: center">Padlófűtés szöveg</p>
    <div class="buttonHolder">
        <button class="btn" data-toggle="modal" data-target="#myModal2" style="background-color: #aa0000; color: white">Leírás</button>
    </div>
</div>
</p>
</div>

</div>

<div class='animatedParent'>
    <hr class='animated fadeInDown slow' />
</div>


<div class='animatedParent col-md-12'>
<pre class='animated bounceInUp slow' style="background-color: #282E34; color: white">
Padlófűtés szöveg

</pre>
</div>
<div class='animatedParent'>
    <hr class='animated fadeIn slow' />
</div>



<!-- End Home -->


<table class="table table-hover">
        <thead>
        <tr>
            <th style="color:red">Padlófűtés </th>


        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="background-color: #3f3f3f">Padlófűtés szöveg
            </td>
        </tr>
        </tbody>
    </table>

                    <div class="text-editor-wrap">
                        <div class="title-bar" style="color: #3f3f3f"><span class="title">FODIN-HOME KFT &mdash; bash &mdash; 138x<span class="terminal-height">15</span></span></div>
                        <div class="text-body2">
                            $ <span id="typednext"></span>
                        </div>
                    </div>

                </div>
    <script>
        $(document).ready(function() {
            $("body").flowUp("p", { transalteY: 350, duration: 1 });
        });
    </script>
<div class="clearfix"></div>
<!-- Start Footer -->
<footer class="footer"  style="background-color: #FFFFFF">
    <div class="text-center" style="background-color:#FFFFFF " >
        <a class="up-arrow" href="index.html" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"  style="color: #2f6f9f"></span>
        </a><br><br>
        <p  style="color: #2f6f9f">Licenced by FODIN HOME KFT</p>

    </div>
</footer>




<!-- End Footer -->

<!-- START JAVASCRIPT -->

<!-- Placed at the end of the document so the pages load faster -->
<script type="bootsnav-master/text/javascript" src="js/jquery.min.js"></script>
<script src="bootnav-master/js/bootstrap.min.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Bootsnavs -->
<script src="bootsnav-master/js/bootsnav.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
<script src='css3-animate-it-master/js/css3-animate-it.js'></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="bootstrap-4-dev/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="flowup/flowup.js"></script>
</body>
</html>
