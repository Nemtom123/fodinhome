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
<?php
include_once ("menu.php");
?>
<!-- End Navigation -->

<div class="clearfix"></div>
<!-- End Home -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img  src="image/bont1.jpg" alt="FODIN-HOME KFT">
        </div>

        <div class="item">
            <img src="image/bont2.jpg" alt="FODIN-HOME KFT ">
        </div>

        <div class="item">
            <img  src="image/bont14.jpg" alt="FODIN-HOME KFT">
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
    <div class='animatedParent col-md-12'>
        <table class="table table-hover">
            <thead>
            <tr>

                <th style="color: #5f5f5f; font-size: x-large"><br>Lakó és nem lakó házak építése és átalakítása<br><br></th>

            </tr>
            </thead>

            <tbody>
            <tr>
                <td style="color: #5f5f5f">
                    <p style="font-size: x-large">
                        Fodin-home KFT  a lakó és nem lakó épületek építése és felújítása piacán, már évek óta kiemelkedő
                        szerepet tölt be.
                        Megrendelőink igényeit szemelőtt tartva az építkezést vagy felújítást, teljeskörű felmérést és kalkulációt végzünk.
                        Fő célunk, hogy a lakó és nem lakó épületek építése és felújítása során tökéletesen illeszkedjen környezetbe,
                        mely minden szempontnak megfelel. Ezt követően munkatársaink a kiviteli terveket elkészítik, és engedélyeztetik.
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $("body").flowUp("table", { transalteY: 350, duration: 100 });
        });
    </script>


    <div class="modal fade" id="myModal42" role="dialog">
        <div class="modal-dialog">

            <!-- Modal butorok-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Lakó és nem lakó házak építése és átalakítása</h4>
                </div>
                <div class="modal-body">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="image/lak4.jpg" title="Házak építése" alt="lak4.jpg">
                                <div class="carousel-caption"><p>Házak építése</p></div>
                            </div>
                            <div class="item">
                                <img src="image/lak5.jpg" title="Házak építése" alt="lak5.jpg">
                                <div class="carousel-caption"><p>Házak építése</p></div>
                            </div>
                            <div class="item">
                                <img src="image/lak6.jpg" title="Házak építése" alt="lak6.jpg">
                                <div class="carousel-caption"><p>Házak építése</p></div>
                            </div>
                        </div><!-- /.carousel-inner -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                    <h6><br>Házak építése<br>
                        - Családi házak<br>
                        - Társasházak<br>
                    </h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                </div>
            </div>
            <!-- Modal butorok end-->
        </div>
    </div>

    <div class="modal fade" id="myModal43" role="dialog">
        <div class="modal-dialog">

            <!-- Modal butorok-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nem lakó házak építése és átalakítása</h4>
                </div>
                <div class="modal-body">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="image/lak7.jpg" title="Nem lakó házak építése és átalakítása" alt="lak7.jpg">
                                <div class="carousel-caption"><p>Nem lakó házak építése és átalakítása</p></div>
                            </div>
                            <div class="item">
                                <img src="image/lak8.jpg" title="Nem lakó házak építése és átalakítása" alt="lak8.jpg">
                                <div class="carousel-caption"><p>Nem lakó házak építése és átalakítása</p></div>
                            </div>
                            <div class="item">
                                <img src="image/lak9.jpg" title="Nem lakó házak építése és átalakítása" alt="lak9.jpg">
                                <div class="carousel-caption"><p>Nem lakó házak építése és átalakítása</p></div>
                            </div>
                        </div><!-- /.carousel-inner -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                    <h6><br>Nem lakó házak építése és átalakítása<br>
                        - Nyaralók<br>
                        - Fészer....stb<br>
                    </h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                </div>
            </div>
            <!-- Modal butorok end-->
        </div>
    </div>

    <div class="modal fade" id="myModal44" role="dialog">
        <div class="modal-dialog">

            <!-- Modal butorok-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Átalakítás</h4>
                </div>
                <div class="modal-body">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="image/lak10.jpg" title="Átalakítás" alt="lak10.jpg">
                                <div class="carousel-caption"><p>Átalakítás</p></div>
                            </div>
                            <div class="item">
                                <img src="image/lak11.jpg" title="Átalakítás" alt="lak11.jpg">
                                <div class="carousel-caption"><p>Átalakítás</p></div>
                            </div>
                            <div class="item">
                                <img src="image/lak12.jpg" title="Átalakítás" alt="lak12.jpg">
                                <div class="carousel-caption"><p>Átalakítás</p></div>
                            </div>
                        </div><!-- /.carousel-inner -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                    <h6><br>Lakó és nem lakó házak átalakítása<br>
                        - Vállaljuk bárházi, családi, nyaralók, ipari létesítmények és különböző objektumok átalakítását
                        valamint renoválását, felujítását.<br>
                    </h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                </div>
            </div>
            <!-- Modal butorok end-->
        </div>
    </div>


    <!-- Sequencing -->

    <div class='animatedParent'>
        <hr class='animated fadeInDown slow' />
    </div>
    <div class='animatedParent row article'>
        <h3 class='animated bounceInDown'>Lakó és nem lakó házak építése és átalakítása</h3>
        <div class='col-md-4'>
            <p class='animated bounceInDown slow'>
                <div class="thumbnail animated bounceInDown slow">
                    <img src="image/lak4.jpg" alt="lak4.jpg" height="500" width="302">
            <p style="text-align: center"><strong >Házak építése</strong></p>
            <p style="text-align: center">Családi ház</p>
            <div class="buttonHolder">
                <button class="btn" data-toggle="modal" data-target="#myModal42"
                        style="background-color: #aa0000; color: white">Leírás</button>
            </div>
        </div>
        </p>
    </div>

    <div class='col-md-4'>
        <p class='animated bounceInUp slow'>
            <div class="thumbnail animated bounceInUp slow">
                <img src="image/lak2.jpg" alt="lak2.jpg" height="300" width="302">
        <p style="text-align: center"><strong >Lakó és nem lakó házak építése</strong></p>
        <p style="text-align: center">Nyaraló építés</p>
        <div class="buttonHolder">
            <button class="btn" data-toggle="modal" data-target="#myModal43"
                    style="background-color: #aa0000; color: white">Leírás</button>
        </div>
    </div>
    </p>
</div>
<div class='col-md-4'>
    <p class='animated bounceInDown slow'>
        <div class="thumbnail animated bounceInDown slow">
            <img src="image/lak3.jpg" alt="lak3.jpg" height="300" width="302">
    <p style="text-align: center"><strong>Átalakítás</strong></p>
    <p style="text-align: center">Lakások illetve nem lakások felujítása</p>
    <div class="buttonHolder">
        <button class="btn" data-toggle="modal" data-target="#myModal44" style="background-color: #aa0000; color: white">Leírás</button>
    </div>
</div>
</p>
</div>

</div>

<div class='animatedParent'>
    <hr class='animated fadeInDown slow' />
</div>



<div class='animatedParent'>
    <hr class='animated fadeInDown slow' />
</div>


<table class="table table-hover">
    <thead>
    <tr>
        <th style="color: #5f5f5f; font-size: x-large">Építés, tervezés</th>
        <th style="color: #5f5f5f; font-size: x-large">Generálozás</th>

    </tr>
    </thead>

    <tbody>
    <tr>
        <td style="color: #5f5f5f">
            <p style="font-size: x-large">
                Új társasházak és új családi házak továbbá irodák, valamint raktárépületek tervezésével és
                kivitelezésével szintén foglalkozunk. Alapos és precíz tervezéssel, minőségi alapanyagokkal
                és kifogástalan kivitelezéssel vívtuk ki megrendelőink bizalmát.

            </p>
        </td>
        <td style="color: #5f5f5f">
            <p style="font-size: x-large">
                Egyik fő szakterületünk a generálozás. Vállaljuk lakóházak és társasházak, irodák, raktárépületek
                generálozását ehhez kapcsolódóan az összes renoválást és beépítését, és a belsőépítészetet is.
            </p>
        </td>
    </tr>
    </tbody>
</table>

<div class='animatedParent'>
    <hr class='animated fadeIn slow' />
</div>

<table class="table table-hover">
    <thead>
    <tr>
        <th style="color: #5f5f5f; font-size: x-large">Áraink tájékoztatás jellegűek</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td style="color: #5f5f5f">
            <p style="font-size: x-large">
                Az építkezésről általában különböző mesterek jutnak eszünkbe: Kőműves, Viz és Gáz szerelő, villany,
                Ács, nos ez még nem merűl ki ennyiben. Anyagbeszerzési idő  valamint a munkálatok koordinálása , az
                e-napló vezetése, a szakhatósági engedélyek, NAV bejelentések, a közműszolgáltatók
                szerződései. Földhivatali papírok ügyintézése, banki hitel szervezzése, hogy a felépült ház
                használatbavételi engedélyt kapjon. Ebben az esetben lesz kulcsrakész házunk.
                Ezt nevezzük generálkivitelezésnek. Az árak tartalmazzák ezen szolgáattásokat is.
            </p>
        </td>
    </tbody>
</table>

<div class='animatedParent'>
    <hr class='animated fadeIn slow' />
</div>
<table id="valaki" class="table table-bordered  table-hover" cellspacing="0" width="100%">
    <thead class="alert-info">
    <tr style="background-color: darkorange">
        <th class="text-center">
            <p>Kategória</p>
            <p>Megnevezés/Ár</p>
        </th>
        <th class="text-center">
            <p>1. kategória</p>
            <p>270.000 Ft/m²</p>
        </th>
        <th class="text-center">
            <p>2. kategória</p>
            <p>310.000 Ft/m²</p>
        </th>
        <th class="text-center">
            <p>3. kategória</p>
            <p>350.000 Ft/m²</p>
        </th>
        <th class="text-center">
            <p>4. kategória</p>
            <p>390.000 Ft/m²</p>
        </th>
        <th class="text-center">
            <p>5. kategória</p>
            <p>440.000 Ft/m²</p>
        </th>
    </tr>
    </thead>
<tr style="color: #1d1d1d">
    <td >ALAPOZÁS</td>
    <td>Vasbeton sávalap C20 mixerbetonnal</td>
    <td>Vasbeton sávalap C25 mixerbetonnal</td>
    <td>Vasbeton sávalap C25 mixerbetonnal</td>
    <td>Vasbeton sávalap C25 mixerbetonnal</td>
    <td>Vasbeton sávalap C25 mixerbetonnal</td>
</tr>
    <tr style="color: #1d1d1d; background-color: darkorange">
        <td>KIEMELÉS</td>
        <td>Kisipari zsalukő</td>
        <td>Leier Uni zsalukő</td>
        <td>Leier Uni zsalukő</td>
        <td>Leier Uni zsalukő</td>
        <td>Leier Uni zsalukő</td>
    </tr>
    <tr style="color: #1d1d1d">
        <td >FŐFAL INDÍTÓSOR HŐSZIGETELÉS</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Perinsul</td>
    </tr><tr style="color: #1d1d1d; background-color: darkorange">
        <td>FALAZÁS/ÁTHIDALÓ</td>
        <td>Porotherm 30 N+F kézi habarccsal</td>
        <td>Porotherm 30 K Profi ragasztó habarccsal</td>
        <td>Porotherm 30 K Profi Dryfix </td>
        <td>Porotherm 38 K Profi Dryfix </td>
        <td>Porotherm 44 Thermo Profi Dryfix</td>
    </tr>
    <tr style="color: #1d1d1d">
        <td >KOSZORÚ ZSALUZÁS, HŐSZIGETELÉS</td>
        <td>EPS80 5 cm</td>
        <td>EPS80 5 cm</td>
        <td>Thermoboard</td>
        <td>Thermoboard</td>
        <td>Thermoboard</td>
    </tr>
    <tr style="color: #1d1d1d; background-color: darkorange">
        <td>ALJZAT VÍZSZIGETELÉS</td>
        <td>Guttabit GV45 EUR</td>
        <td>Guttabit SBS Elastobase GG4</td>
        <td>Icopal E-G 45 F/K </td>
        <td>Icopal SBS Elastobit GG40</td>
        <td>Icopal E-G 4 F/K Extra</td>
    </tr><tr style="color: #1d1d1d">
        <td>HŐHÍDMEGSZAKÍTÓ: ERKÉLYEKHEZ ÉS TERASZOKHOZ</td>
        <td></td>
        <td>Schöck Isokorb</td>
        <td>Schöck Isokorb</td>
        <td>Schöck Isokorb</td>
        <td>Schöck Isokorb</td>
    </tr><tr style="color: #1d1d1d; background-color: darkorange">
        <td >FÖDÉM</td>
        <td>Farács födém gipszkartonnal</td>
        <td>Farács födém gipszkartonnal</td>
        <td>Farács födém 2 rtg. gipszkartonnal</td>
        <td>Farács födém 2 rtg. gipszkartonnal</td>
        <td>Farács födém 2 rtg. gipszkartonnal</td>
    </tr>
</table>
<!-- End Home -->



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
