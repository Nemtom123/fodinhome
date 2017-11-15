<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="hu"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="hu"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="hu"> <![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->
<head xmlns="">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootsnav is a multi purpose header based with Bootstrap, you can build any header style with bootsnav only with a few minutes">
    <meta name="keywords" content="Bootsnav, Menu, Navigation, Navbar, Bootstrap, Dropdown, Multi Dropdown, Megamenu">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <title>Fodin-Home Kft</title>
    <link rel="icon" href="image/favicon.ico">

    <link rel="stylesheet" href="css3-animate-it-master/css/animations.css" type="text/css">

    <!-- STUFF JUST FOR THIS TEMPLATE -->
    <link href="https://unpkg.com/nanogallery2@1.3.0/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://unpkg.com/nanogallery2@1.3.0/dist/jquery.nanogallery2.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="bootsnav-master/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css3-animate-it-master/example-assets/style.css" type="text/css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="bootsnav-master/css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS-->

    <link href="bootsnav-master/css/bootsnav.css" rel="stylesheet">
    <link href="bootsnav-master/css/style.css" rel="stylesheet">
    <link href="bootsnav-master/css/animate.css" rel="stylesheet">
    <!-- Image -->
    <link href="bootsnav-master/images/brand/logo-black.png" rel="import">
    <!-- Icons -->
    <link href="fonts/FontAwesome/font-awesome.css" rel="stylesheet">
    <script src="css3-animate-it-master/js/css3-animate-it.js"></script>
    <style>
        .buttonHolder{ text-align: center; }
    </style>


</head>

<!-- Start Navigation -->
<?php
include_once ("menu.php");
?>
<!-- End Home -->
<div class="clearfix"></div>
<!-- Start Adsense -->
<div class="container margintop50">
</div>
<!-- End Adsense -->
<div class="clearfix"></div>
<header class='mainHeader15'>
    <div class='container'>
        <div class='animatedParent' data-sequence='500' >
            <h2 class='animated growIn slower'  data-id='1' style="color: darkred">Reflektorfényben a gipszkarton</h2>
            <h2 class='animated bounceInRight slower'  data-id='2' style="color: #FFFFFF">Kérje árajánlatunkat</h2>
            <h2 class='animated bounceInRight slower'  data-id='2' style="color: #FFFFFF">Ebben a hónappban 10% kedvezmény</h2>

        </div>
    </div>
</header>

<div class='container'>
    <div class='animatedParent'>
        <h2 class='animated growIn slowest'>Gipszkarton a mai mondern lakások elengedhetetlen része.</h2>
    </div>
    <button type="button" class="btn-lg btn-info center-block" data-toggle="modal"
            data-target="#myModal">Árajánlat kérés
    </button>


    <form id="register1" <?php echo 'action=" belepett.php "'?> method="post" onsubmit="return check()">
        <!--<form id="register" action="" method="post" onsubmit="return check()">-->

        <h2 style="text-align: center"></h2>
        <br>
        <form id="register" <?php echo 'action=" belepes.php "'?> method="post" onsubmit="return check()">
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header modal-header-info">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h6><i class="glyphicon glyphicon-align-right"></i>Levélküldés</h6>
                        </div>

                        <div class="modal-body">
                            <div style="text-align: center; width: auto; height: auto">
                                <img src="image/level.png" alt="Avatar" class="avatar">
                            </div>
                            <form class="noteform" id="notesmodal" method="post">
                                <fieldset>
                                    <p style="align-content: center; color: #3f3f3f">Email</p>
                                    <input type="text" name="ugyfel" id="ugyfel" class="form-control"
                                           data-live-search="true" placeholder="Pl:kovacs.janos@gmail.com"/>
                                    <br>
                                    <p style="align-content: center; color: #3f3f3f">Üzenet</p>
                                    <div class="col-lg-pull-12 ">
                                        <label for="uzenet"></label>
                                        <textarea type="massage-text" name="uzenet" id="uzenet"
                                                  class="form-control"
                                                  data-live-search="true" rows="6">
                                            </textarea>

                                        <br>
                                    </div>
                                </fieldset>
                                <br>
                            </form>
                            <div class="col-sm-offset-5 col-sm-2 text-center">
                                <input type="submit" name="submit" class="btn btn-danger"
                                       data-toggle="modal" data-target="#myModal"
                                       id="submitnote" value="Küldés" />
                            </div>

                            <br>
                            <br>
                            <br>

                            <div class="modal-footer modal-footer-info" >
                                <button type="button" class="btn btn-default"
                                        data-dismiss="modal">Bezár
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class='animatedParent row article'>
            <h3 class='animated bounceInDown'>Világszerte egyre népszerűbb belsőépítészeti megoldás !</h3>
        </div>
        <div class="modal fade" id="myModal1" role="dialog" >
            <div class="modal-dialog">
                <!-- Modal butorok-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Szerelés</h4>
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
                                    <img src="image/gipsz11.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Kezdetek</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz21.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Felkészülés</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz31.JPG" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Szerelés közben</p></div>
                                </div>
                            </div><!-- /.carousel-inner -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <h6><br>Szerelési tervezet<br>
                            - Ütemezett feladatok<br>
                            - Kalkuláció a váratlan eseményekre<br>
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
                        <h4 class="modal-title">Ütemterv</h4>
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
                                    <img src="image/gipsz11.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Kezdetek</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz112.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Felkészülés</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz211.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Szerelés közben</p></div>
                                </div>
                            </div><!-- /.carousel-inner -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <h6><br>Ütemterv betartása<br>
                            - A tervezés szerinti munkavégzés<br>
                        </h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                    </div>
                </div>
                <!-- Modal butorok end-->
            </div>
        </div>

        <div class="modal fade" id="myModal3" role="dialog">
            <div class="modal-dialog">

                <!-- Modal butorok-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Konzultáció a megrendelővel</h4>
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
                                    <img src="image/gipsz311.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Kezdetek</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz312.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Felkészülés</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz313.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Szerelés közben</p></div>
                                </div>
                            </div><!-- /.carousel-inner -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <h6><br>További igények felmerülés esetén<br>
                            - Újabb ütemterv készítés<br>
                            - Az ütemterv követése révén az erőforrások jobban beoszthatóvá válnak<br>

                        </h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                    </div>
                </div>
                <!-- Modal butorok end-->
            </div>
        </div>

        <div class='greyBackground' style="background: white; color: #5f5f5f;">
            <div class='container' >


                <div class='animatedParent'>
                    <hr class='animated fadeInDown slow' />
                </div>
                <div class='animatedParent row article'>
                    <h3 class='animated bounceInDown'>Szerelés</h3>

                    <div class='col-md-4'>
                        <p class='animated bounceInDown slow'>
                            <div class="thumbnail animated bounceInDown slow">
                                <img src="image/gipsz31.JPG" alt="Smiley face" height="284" width="381">
                        <p style="text-align: center"><strong >Szerelés</strong></p>
                        <p style="text-align: center">Ütemtervek</p>
                        <div class="buttonHolder">
                            <button class="btn" data-toggle="modal" data-target="#myModal7"
                                    style="background-color: #aa0000; color: white">Leírás</button>
                        </div>
                    </div>

                </div>

                <div class='col-md-4'>
                    <p class='animated bounceInUp slow'>
                        <div class="thumbnail animated bounceInUp slow">
                            <img src="image/gipsz32.jpg" alt="Smiley face" height="360" width="480">
                    <p style="text-align: center"><strong >Ütemezett feladatok</strong></p>
                    <p style="text-align: center">Tervek alapján</p>
                    <div class="buttonHolder">
                        <button class="btn" data-toggle="modal" data-target="#myModal8"
                                style="background-color: #aa0000; color: white">Leírás</button>
                    </div>
                </div>

            </div>
            <div class='col-md-4'>
                <p class='animated bounceInDown slow'>
                    <div class="thumbnail animated bounceInDown slow">
                        <img src="image/gipsz33.jpg" alt="Smiley face" height="306" width="408">
                <p style="text-align: center"><strong >Újabb igények esetén</strong></p>
                <p style="text-align: center">kívánt határidőre való elkészítésé</p>
                <div class="buttonHolder">
                    <button class="btn" data-toggle="modal" data-target="#myModal9" style="background-color: #aa0000; color: white">Leírás</button>
                </div>
            </div>

        </div>


        <div class='animatedParent col-md-12'>
<pre class='animated bounceInRight slow' style="background-color: #282E34; color: white">
    <?php echo htmlspecialchars("<div class='animatedParent' "); ?><span
            class='highlighter'><?php echo htmlspecialchars("data-sequence='500'") ?></span><?php echo htmlspecialchars(">A gipszkarton alapanyaga gipsz(CaSO4•2H2O) és kartonpapír!</h2>"); ?>


    <?php echo htmlspecialchars("<h2 class='animated bounceInDown' "); ?><span class='highlighter'><?php echo htmlspecialchars("data-id='1'"); ?></span><?php echo htmlspecialchars(">Lassan kiszorítja a hagyományos vakolási eljárásokat.</h2>"); ?>


    <?php echo htmlspecialchars("<h2 class='animated bounceInDown' "); ?><span class='highlighter'><?php echo htmlspecialchars("data-id='2'"); ?></span><?php echo htmlspecialchars(">Könnyebb, költséghatékonyabb és nem utolsósorban klimatizáló hatású.</h2>"); ?>


    <?php echo htmlspecialchars("<h2 class='animated bounceInDown' "); ?><span class='highlighter'><?php echo htmlspecialchars("data-id='3'"); ?></span><?php echo htmlspecialchars(">A lapok viszonylagos nagysága átlag kb 2,5 m2.</h2>"); ?>

    <?php echo htmlspecialchars("</div>"); ?>
    <?php echo htmlspecialchars("</div>"); ?>

</pre>
        </div>
        <div class='animatedParent'>
            <hr class='animated fadeInDown slow' />
        </div>
        <div class="modal fade" id="myModal4" role="dialog" >
            <div class="modal-dialog">
                <!-- Modal butorok-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Szerelés</h4>
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
                                    <img src="image/gipsz31.JPG" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Kezdetek</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz32.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Felkészülés</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz311.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Szerelés közben</p></div>
                                </div>
                            </div><!-- /.carousel-inner -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <h6><br>Szerelési tervezet<br>
                            - Ütemezett feladatok<br>
                            - Kalkuláció a váratlan eseményekre<br>
                        </h6>
                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                    </div>
                </div>
                <!-- Modal butorok end-->
            </div>
        </div>


        <div class="modal fade" id="myModal5" role="dialog">
            <div class="modal-dialog">

                <!-- Modal butorok-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ütemterv</h4>
                    </div>
                    <div class="modal-body">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="10" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="11"></li>
                                <li data-target="#myCarousel" data-slide-to="12"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="image/gipsz31.JPG" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Kezdetek</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz32.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Felkészülés</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz311.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Szerelés közben</p></div>
                                </div>
                            </div><!-- /.carousel-inner -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <h6><br>Ütemterv betartása<br>
                            - A tervezés szerinti munkavégzés<br>
                        </h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                    </div>
                </div>
                <!-- Modal butorok end-->
            </div>
        </div>

        <div class="modal fade" id="myModal6" role="dialog">
            <div class="modal-dialog">

                <!-- Modal butorok-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Konzultáció a megrendelővel</h4>
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
                                    <img src="image/gipsz31.JPG" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Kezdetek</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz32.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Felkészülés</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz311.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Szerelés közben</p></div>
                                </div>
                            </div><!-- /.carousel-inner -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <h6><br>További igények felmerülés esetén<br>
                            - Újabb ütemterv készítés<br>
                            - Az ütemterv követése révén az erőforrások jobban beoszthatóvá válnak<br>

                        </h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                    </div>
                </div>
                <!-- Modal butorok end-->
            </div>
        </div>

        <div class='greyBackground' style="background: white; color: #5f5f5f;">
            <div class='container' >


                <div class='animatedParent'>
                    <hr class='animated fadeInDown slow' />
                </div>
                <div class='animatedParent row article'>
                    <h3 class='animated bounceInDown'>Szerelés</h3>

                    <div class='col-md-4'>
                        <p class='animated bounceInDown slow'>
                            <div class="thumbnail animated bounceInDown slow">
                                <img src="image/gipsz31.JPG" alt="Smiley face" height="284" width="381">
                        <p style="text-align: center"><strong >Szerelés</strong></p>
                        <p style="text-align: center">Ütemtervek</p>
                        <div class="buttonHolder">
                            <button class="btn" data-toggle="modal" data-target="#myModal7"
                                    style="background-color: #aa0000; color: white">Leírás</button>
                        </div>
                    </div>

                </div>

                <div class='col-md-4'>
                    <p class='animated bounceInUp slow'>
                        <div class="thumbnail animated bounceInUp slow">
                            <img src="image/gipsz32.jpg" alt="Smiley face" height="360" width="480">
                    <p style="text-align: center"><strong >Ütemezett feladatok</strong></p>
                    <p style="text-align: center">Tervek alapján</p>
                    <div class="buttonHolder">
                        <button class="btn" data-toggle="modal" data-target="#myModal8"
                                style="background-color: #aa0000; color: white">Leírás</button>
                    </div>
                </div>

            </div>
            <div class='col-md-4'>
                <p class='animated bounceInDown slow'>
                    <div class="thumbnail animated bounceInDown slow">
                        <img src="image/gipsz33.jpg" alt="Smiley face" height="306" width="408">
                <p style="text-align: center"><strong >Újabb igények esetén</strong></p>
                <p style="text-align: center">kívánt határidőre való elkészítésé</p>
                <div class="buttonHolder">
                    <button class="btn" data-toggle="modal" data-target="#myModal9" style="background-color: #aa0000; color: white">Leírás</button>
                </div>
            </div>

        </div>



        <div class='animatedParent col-md-12'>
<pre class='animated bounceInRight slow' style="background-color: #282E34; color: white">
     <?php echo htmlspecialchars("<h2 class='animated bounceInDown' "); ?><span class='highlighter'><?php echo htmlspecialchars("data-id='3'"); ?></span><?php echo htmlspecialchars("><span class='highlighter'></span>Amit érdemes tudni !</h2>"); ?>

    <?php echo htmlspecialchars("<div class='animatedParent' "); ?><span class='highlighter'><?php echo
        htmlspecialchars("data-sequence='500'") ?></span><?php echo htmlspecialchars(">Csökkenti a zajokat.</h2>"); ?>

    <?php echo htmlspecialchars("<h2 class='animated bounceInDown' "); ?><span class='highlighter'><?php echo
        htmlspecialchars("data-id='1'"); ?></span><?php echo htmlspecialchars(">Megakadályozza a gyors tűz terjedését.</h2>"); ?>

    <?php echo htmlspecialchars("<h2 class='animated bounceInDown' "); ?><span class='highlighter'><?php echo
        htmlspecialchars("data-id='2'"); ?></span><?php echo htmlspecialchars(">Használat a fűrdőszobában és nedves helyen.</h2>"); ?>

    <?php echo htmlspecialchars("<div class='animatedParent' "); ?><span class='highlighter'><?php echo
        htmlspecialchars("data-sequence='500'") ?></span><?php echo htmlspecialchars(">A kollégák helyszinen megvizsgálják a lehetséges megoldásokat,<b>megbeszélés után</b>tervrajzot készítenek a megrendelő számára.</h2>"); ?>

    <?php echo htmlspecialchars("<h2 class='animated bounceInDown' "); ?><span class='highlighter'><?php echo
        htmlspecialchars("data-id='1'"); ?></span><?php echo htmlspecialchars(">A tervrajz ennek megfelelően bemutatásra kerűl.</h2>");?>

    <?php echo htmlspecialchars("<h2 class='animated bounceInDown' "); ?><span class='highlighter'><?php echo
        htmlspecialchars("data-id='2'"); ?></span><?php echo htmlspecialchars(">A bemutatott terveket még lehet korrigálni, ha esetleg más elgondolás vagy ötlet jutott eszébe a megrendelőnek.</h2>"); ?>


</pre>
        </div>
        <div class='animatedParent'>
            <hr class='animated fadeInDown slow' />
        </div>
        <div class="modal fade" id="myModal7" role="dialog" >
            <div class="modal-dialog">
                <!-- Modal butorok-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Szerelés</h4>
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
                                    <img src="image/gipsz31.JPG" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Kezdetek</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz32.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Felkészülés</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz311.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Szerelés közben</p></div>
                                </div>
                            </div><!-- /.carousel-inner -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <h6><br>Szerelési tervezet<br>
                            - Ütemezett feladatok<br>
                            - Kalkuláció a váratlan eseményekre<br>
                        </h6>
                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                    </div>
                </div>
                <!-- Modal butorok end-->
            </div>
        </div>


        <div class="modal fade" id="myModal8" role="dialog">
            <div class="modal-dialog">

                <!-- Modal butorok-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ütemterv</h4>
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
                                    <img src="image/gipsz31.JPG" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Kezdetek</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz32.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Felkészülés</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz311.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Szerelés közben</p></div>
                                </div>
                            </div><!-- /.carousel-inner -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <h6><br>Ütemterv betartása<br>
                            - A tervezés szerinti munkavégzés<br>
                        </h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                    </div>
                </div>
                <!-- Modal butorok end-->
            </div>
        </div>

        <div class="modal fade" id="myModal9" role="dialog">
            <div class="modal-dialog">

                <!-- Modal butorok-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Konzultáció a megrendelővel</h4>
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
                                    <img src="image/gipsz31.JPG" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Kezdetek</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz32.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Felkészülés</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz311.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Szerelés közben</p></div>
                                </div>
                            </div><!-- /.carousel-inner -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <h6><br>További igények felmerülés esetén<br>
                            - Újabb ütemterv készítés<br>
                            - Az ütemterv követése révén az erőforrások jobban beoszthatóvá válnak<br>

                        </h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                    </div>
                </div>
                <!-- Modal butorok end-->
            </div>
        </div>

        <div class='greyBackground' style="background: white; color: #5f5f5f;">
            <div class='container' >


                <div class='animatedParent'>
                    <hr class='animated fadeInDown slow' />
                </div>
                <div class='animatedParent row article'>
                    <h3 class='animated bounceInDown'>Szerelés</h3>

                    <div class='col-md-4'>
                        <p class='animated bounceInDown slow'>
                            <div class="thumbnail animated bounceInDown slow">
                                <img src="image/gipsz31.JPG" alt="Smiley face" height="284" width="381">
                        <p style="text-align: center"><strong >Szerelés</strong></p>
                        <p style="text-align: center">Ütemtervek</p>
                        <div class="buttonHolder">
                            <button class="btn" data-toggle="modal" data-target="#myModal7"
                                    style="background-color: #aa0000; color: white">Leírás</button>
                        </div>
                    </div>

                </div>

                <div class='col-md-4'>
                    <p class='animated bounceInUp slow'>
                        <div class="thumbnail animated bounceInUp slow">
                            <img src="image/gipsz32.jpg" alt="Smiley face" height="360" width="480">
                    <p style="text-align: center"><strong >Ütemezett feladatok</strong></p>
                    <p style="text-align: center">Tervek alapján</p>
                    <div class="buttonHolder">
                        <button class="btn" data-toggle="modal" data-target="#myModal8"
                                style="background-color: #aa0000; color: white">Leírás</button>
                    </div>
                </div>

            </div>
            <div class='col-md-4'>
                <p class='animated bounceInDown slow'>
                    <div class="thumbnail animated bounceInDown slow">
                        <img src="image/gipsz33.jpg" alt="Smiley face" height="306" width="408">
                <p style="text-align: center"><strong >Újabb igények esetén</strong></p>
                <p style="text-align: center">kívánt határidőre való elkészítésé</p>
                <div class="buttonHolder">
                    <button class="btn" data-toggle="modal" data-target="#myModal9" style="background-color: #aa0000; color: white">Leírás</button>
                </div>
            </div>

        </div>



        <div class='animatedParent col-md-12'>
<pre class='animated bounceInRight slow' style="background-color: #282E34; color: white">
   <p style="color: red; font-size: larger">
   - Díszítő elemek
   - Rejtett világítások
   - Tetőterek borítása
   - Válaszfalak</p>
</pre>
        </div>
        <div class='animatedParent'>
            <hr class='animated fadeInDown slow' />
        </div>
        <div class="modal fade" id="myModal10" role="dialog" >
            <div class="modal-dialog">
                <!-- Modal butorok-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Szerelés</h4>
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
                                    <img src="image/gipsz31.JPG" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Kezdetek</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz32.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Felkészülés</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz311.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Szerelés közben</p></div>
                                </div>
                            </div><!-- /.carousel-inner -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <h6><br>Szerelési tervezet<br>
                            - Ütemezett feladatok<br>
                            - Kalkuláció a váratlan eseményekre<br>
                        </h6>
                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                    </div>
                </div>
                <!-- Modal butorok end-->
            </div>
        </div>


        <div class="modal fade" id="myModal11" role="dialog">
            <div class="modal-dialog">

                <!-- Modal butorok-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ütemterv</h4>
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
                                    <img src="image/gipsz31.JPG" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Kezdetek</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz32.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Felkészülés</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz311.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Szerelés közben</p></div>
                                </div>
                            </div><!-- /.carousel-inner -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <h6><br>Ütemterv betartása<br>
                            - A tervezés szerinti munkavégzés<br>
                        </h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                    </div>
                </div>
                <!-- Modal butorok end-->
            </div>
        </div>

        <div class="modal fade" id="myModal12" role="dialog">
            <div class="modal-dialog">

                <!-- Modal butorok-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Konzultáció a megrendelővel</h4>
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
                                    <img src="image/gipsz31.JPG" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Kezdetek</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz32.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Felkészülés</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz311.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Szerelés közben</p></div>
                                </div>
                            </div><!-- /.carousel-inner -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <h6><br>További igények felmerülés esetén<br>
                            - Újabb ütemterv készítés<br>
                            - Az ütemterv követése révén az erőforrások jobban beoszthatóvá válnak<br>

                        </h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                    </div>
                </div>
                <!-- Modal butorok end-->
            </div>
        </div>

        <div class='greyBackground' style="background: white; color: #5f5f5f;">
            <div class='container' >


                <div class='animatedParent'>
                    <hr class='animated fadeInDown slow' />
                </div>
                <div class='animatedParent row article'>
                    <h3 class='animated bounceInDown'>Szerelés</h3>

                    <div class='col-md-4'>
                        <p class='animated bounceInDown slow'>
                            <div class="thumbnail animated bounceInDown slow">
                                <img src="image/gipsz31.JPG" alt="Smiley face" height="284" width="381">
                        <p style="text-align: center"><strong >Szerelés</strong></p>
                        <p style="text-align: center">Ütemtervek</p>
                        <div class="buttonHolder">
                            <button class="btn" data-toggle="modal" data-target="#myModal7"
                                    style="background-color: #aa0000; color: white">Leírás</button>
                        </div>
                    </div>

                </div>

                <div class='col-md-4'>
                    <p class='animated bounceInUp slow'>
                        <div class="thumbnail animated bounceInUp slow">
                            <img src="image/gipsz32.jpg" alt="Smiley face" height="360" width="480">
                    <p style="text-align: center"><strong >Ütemezett feladatok</strong></p>
                    <p style="text-align: center">Tervek alapján</p>
                    <div class="buttonHolder">
                        <button class="btn" data-toggle="modal" data-target="#myModal8"
                                style="background-color: #aa0000; color: white">Leírás</button>
                    </div>
                </div>

            </div>
            <div class='col-md-4'>
                <p class='animated bounceInDown slow'>
                    <div class="thumbnail animated bounceInDown slow">
                        <img src="image/gipsz33.jpg" alt="Smiley face" height="306" width="408">
                <p style="text-align: center"><strong >Újabb igények esetén</strong></p>
                <p style="text-align: center">kívánt határidőre való elkészítésé</p>
                <div class="buttonHolder">
                    <button class="btn" data-toggle="modal" data-target="#myModal9" style="background-color: #aa0000; color: white">Leírás</button>
                </div>
            </div>

        </div>


        <div class='animatedParent col-md-12'>
<pre class='animated bounceInRight slow' style="background-color: #282E34; color: white">
A gipszkarton válaszfalak használata sok esetben megkönnyítheti életünk.
Könnyen és gyorsan oszthatjuk ketté a tereket, tégla és habarcs nélkül.
Gipszkartont használhatunk a vezetékek elrejtéséhez, hang-, és hőszigeteléshez,
különböző belsőépítészeti megoldások megvalósításához.
A legnagyobb előnye a gipszkarton válaszfalaknak,
hogy sokkal egyszerűbben felhúzhatók, mint egy téglafal.
Jó hír mindenkinek, hogy kevesebb munkával és megtakarítással jár.
Nem elhanyagolható szempont az sem, hogy az így felhúzott falak könnyen,
viszonylag kevés ráfordítással elbonthatóak, áthelyezhetőek.
A felhúzás után, azonnal csinosíthatjuk: festhetjük, csempézhetjük, tapétázhatjuk.
Könnyen dolgozhatunk vele, milliméter pontossággal vágható és alakítható.
</pre>
        </div>

        <div class='animatedParent'>
            <hr class='animated fadeInDown slow' />
        </div>
        <div class="modal fade" id="myModal13" role="dialog" >
            <div class="modal-dialog">
                <!-- Modal butorok-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Szerelés</h4>
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
                                    <img src="image/gipsz31.JPG" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Kezdetek</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz32.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Felkészülés</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz311.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Szerelés közben</p></div>
                                </div>
                            </div><!-- /.carousel-inner -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <h6><br>Szerelési tervezet<br>
                            - Ütemezett feladatok<br>
                            - Kalkuláció a váratlan eseményekre<br>
                        </h6>
                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                    </div>
                </div>
                <!-- Modal butorok end-->
            </div>
        </div>


        <div class="modal fade" id="myModal14" role="dialog">
            <div class="modal-dialog">

                <!-- Modal butorok-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ütemterv</h4>
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
                                    <img src="image/gipsz31.JPG" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Kezdetek</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz32.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Felkészülés</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz311.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Szerelés közben</p></div>
                                </div>
                            </div><!-- /.carousel-inner -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <h6><br>Ütemterv betartása<br>
                            - A tervezés szerinti munkavégzés<br>
                        </h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                    </div>
                </div>
                <!-- Modal butorok end-->
            </div>
        </div>

        <div class="modal fade" id="myModal15" role="dialog">
            <div class="modal-dialog">

                <!-- Modal butorok-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Konzultáció a megrendelővel</h4>
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
                                    <img src="image/gipsz31.JPG" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Kezdetek</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz32.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Felkészülés</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz311.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Szerelés közben</p></div>
                                </div>
                            </div><!-- /.carousel-inner -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <h6><br>További igények felmerülés esetén<br>
                            - Újabb ütemterv készítés<br>
                            - Az ütemterv követése révén az erőforrások jobban beoszthatóvá válnak<br>

                        </h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                    </div>
                </div>
                <!-- Modal butorok end-->
            </div>
        </div>

        <div class='greyBackground' style="background: white; color: #5f5f5f;">
            <div class='container' >


                <div class='animatedParent'>
                    <hr class='animated fadeInDown slow' />
                </div>
                <div class='animatedParent row article'>
                    <h3 class='animated bounceInDown'>Szerelés</h3>

                    <div class='col-md-4'>
                        <p class='animated bounceInDown slow'>
                            <div class="thumbnail animated bounceInDown slow">
                                <img src="image/gipsz31.JPG" alt="Smiley face" height="284" width="381">
                        <p style="text-align: center"><strong >Szerelés</strong></p>
                        <p style="text-align: center">Ütemtervek</p>
                        <div class="buttonHolder">
                            <button class="btn" data-toggle="modal" data-target="#myModal7"
                                    style="background-color: #aa0000; color: white">Leírás</button>
                        </div>
                    </div>

                </div>

                <div class='col-md-4'>
                    <p class='animated bounceInUp slow'>
                        <div class="thumbnail animated bounceInUp slow">
                            <img src="image/gipsz32.jpg" alt="Smiley face" height="360" width="480">
                    <p style="text-align: center"><strong >Ütemezett feladatok</strong></p>
                    <p style="text-align: center">Tervek alapján</p>
                    <div class="buttonHolder">
                        <button class="btn" data-toggle="modal" data-target="#myModal8"
                                style="background-color: #aa0000; color: white">Leírás</button>
                    </div>
                </div>

            </div>
            <div class='col-md-4'>
                <p class='animated bounceInDown slow'>
                    <div class="thumbnail animated bounceInDown slow">
                        <img src="image/gipsz33.jpg" alt="Smiley face" height="306" width="408">
                <p style="text-align: center"><strong >Újabb igények esetén</strong></p>
                <p style="text-align: center">kívánt határidőre való elkészítésé</p>
                <div class="buttonHolder">
                    <button class="btn" data-toggle="modal" data-target="#myModal9" style="background-color: #aa0000; color: white">Leírás</button>
                </div>
            </div>

        </div>


        <div class='animatedParent col-md-12'>
<pre class='animated bounceInRight slow' style="background-color: #282E34; color: white;">
    <p style="color: red; font-size: larger" >
    - Álmenyezetek készítése
    - Rejtett világítások
    - Tetőterek borítása
    - Válaszfalak </p>
    Gipszkarton lapok segítségével már meglévő falfelületek hő-, és hangszigetelése is kivitelezhető, ha a falfelület és a
    karton közé szigetelőanyagot helyezünk el. A gipszkarton egy másik felhasználási lehetősége az álmennyezetek építése.
    A legtöbb esetben a belmagasság csökkentése, ezáltal a fűtésköltségek csökkentése a cél, de elrejthetjük a vezetékeket,
    berendezéseket is.
</pre>
        </div>
        <div class='animatedParent'>
            <hr class='animated fadeInDown slow' />
        </div>
        <div class="modal fade" id="myModal16" role="dialog" >
            <div class="modal-dialog">
                <!-- Modal butorok-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Szerelés</h4>
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
                                    <img src="image/gipsz31.JPG" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Kezdetek</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz32.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Felkészülés</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz311.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Szerelés közben</p></div>
                                </div>
                            </div><!-- /.carousel-inner -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <h6><br>Szerelési tervezet<br>
                            - Ütemezett feladatok<br>
                            - Kalkuláció a váratlan eseményekre<br>
                        </h6>
                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                    </div>
                </div>
                <!-- Modal butorok end-->
            </div>
        </div>


        <div class="modal fade" id="myModal17" role="dialog">
            <div class="modal-dialog">

                <!-- Modal butorok-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ütemterv</h4>
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
                                    <img src="image/gipsz31.JPG" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Kezdetek</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz32.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Felkészülés</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz311.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Szerelés közben</p></div>
                                </div>
                            </div><!-- /.carousel-inner -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <h6><br>Ütemterv betartása<br>
                            - A tervezés szerinti munkavégzés<br>
                        </h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                    </div>
                </div>
                <!-- Modal butorok end-->
            </div>
        </div>

        <div class="modal fade" id="myModal18" role="dialog">
            <div class="modal-dialog">

                <!-- Modal butorok-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Konzultáció a megrendelővel</h4>
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
                                    <img src="image/gipsz31.JPG" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Kezdetek</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz32.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Felkészülés</p></div>
                                </div>
                                <div class="item">
                                    <img src="image/gipsz311.jpg" title="GIPSZKARTON PROFIL" alt="Smiley face">
                                    <div class="carousel-caption"><p>Szerelés közben</p></div>
                                </div>
                            </div><!-- /.carousel-inner -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <h6><br>További igények felmerülés esetén<br>
                            - Újabb ütemterv készítés<br>
                            - Az ütemterv követése révén az erőforrások jobban beoszthatóvá válnak<br>

                        </h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Bezárás</button>
                    </div>
                </div>
                <!-- Modal butorok end-->
            </div>
        </div>

        <div class='greyBackground' style="background: white; color: #5f5f5f;">
            <div class='container' >


                <div class='animatedParent'>
                    <hr class='animated fadeInDown slow' />
                </div>
                <div class='animatedParent row article'>
                    <h3 class='animated bounceInDown'>Szerelés</h3>

                    <div class='col-md-4'>
                        <p class='animated bounceInDown slow'>
                            <div class="thumbnail animated bounceInDown slow">
                                <img src="image/gipsz31.JPG" alt="Smiley face" height="284" width="381">
                        <p style="text-align: center"><strong >Szerelés</strong></p>
                        <p style="text-align: center">Ütemtervek</p>
                        <div class="buttonHolder">
                            <button class="btn" data-toggle="modal" data-target="#myModal7"
                                    style="background-color: #aa0000; color: white">Leírás</button>
                        </div>
                    </div>

                </div>

                <div class='col-md-4'>
                    <p class='animated bounceInUp slow'>
                        <div class="thumbnail animated bounceInUp slow">
                            <img src="image/gipsz32.jpg" alt="Smiley face" height="360" width="480">
                    <p style="text-align: center"><strong >Ütemezett feladatok</strong></p>
                    <p style="text-align: center">Tervek alapján</p>
                    <div class="buttonHolder">
                        <button class="btn" data-toggle="modal" data-target="#myModal8"
                                style="background-color: #aa0000; color: white">Leírás</button>
                    </div>
                </div>

            </div>
            <div class='col-md-4'>
                <p class='animated bounceInDown slow'>
                    <div class="thumbnail animated bounceInDown slow">
                        <img src="image/gipsz33.jpg" alt="Smiley face" height="306" width="408">
                <p style="text-align: center"><strong >Újabb igények esetén</strong></p>
                <p style="text-align: center">kívánt határidőre való elkészítésé</p>
                <div class="buttonHolder">
                    <button class="btn" data-toggle="modal" data-target="#myModal9" style="background-color: #aa0000; color: white">Leírás</button>
                </div>
            </div>

        </div>


        <div class='animatedParent col-md-12'>
<pre class='animated bounceInRight slow' style="background-color: #282E34; color: white">
    Nagyon kedvelt felhasználási területe az egyedi falfülkék, tárolók, beugrók,
rejtett világítás kialakítása. Az ötleteinknek semmi sem szab határt.
Egy kis fantáziával egyedivé varázsolhatjuk otthonunkat.
Leggyakrabban az úgynevezett oszlopvázas építést alkalmazzák,
amikor egy fém tartószerkezetre helyezik rá a lapokat.<br>
Itt csak egy igazi ötletre van szükség!
Nincs akadály az íves vagy boltíves esetleg szögletes kialakításnál.
Sokoldalúan alakítható a gipszkarton mely feldobja a lakás stílusát.
Nagyban befolyásolja azt az életérzést ami lakásunkba kőrülvesz és
egyben a felállított értékrendet.<br>
A gipszkarton álmenyezetekkel gyorsan, esztétikusan és tisztán takarhatjuk
el a kilátszó födémet. Az így elékszített álmennyezetekbe hő és hangszigetelő
anyagok építhetők be, valamint különboző gépészeti egységek is helyet kaphatnak
a vezetékezésükkel együtt. Két különböző megoldás létezik, a bonyolultabb esetben
le kell függeszteni a gipszkarton álmenyezetet, ekkor van lehetőség gépészeri
elemek beépítésére. Burkolni kell a födémet, akkor fixen a legegyszerűbb módon
rögzíthetjük a gipszkarton lapokat.
</pre>
        </div>
        <div class='animatedParent'>
            <hr class='animated fadeIn slow' />
        </div>



        <!-- End Home -->

        <div class="clearfix"></div>
        <br>
        <!-- Container (Contact Section) -->
        <div id="contact" class="container">
            <h3 class="text-center">Lépjen kapcsolatba velünk</h3>
            <p class="text-center"><em>Mi önökért vagyunk!</em></p>

            <div class="row">
                <div class="col-md-4">
                    <p>Küldjön üzenetet.</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span>Miskolc Győri K. 24/B 3531</p>
                    <p><span class="glyphicon glyphicon-phone"></span>Telefon: +36309123668</p>
                    <p><span class="glyphicon glyphicon-envelope"></span>Email: fodinhome@fodinhome.hu</p>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Név" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                        </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Üzenet" rows="5"></textarea>
                    <br>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <button class="btn pull-right" type="submit">Küldés</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <!-- Start Footer -->
        <footer class="footer animatedParent"  style="background-color: #FFFFFF">
            <div class="text-center animated growIn" style="background-color:#FFFFFF" >
                <a class="up-arrow" href="kontakt.php" data-toggle="tooltip" title="TO TOP">
                    <span class="glyphicon glyphicon-chevron-up" style="color: #2f6f9f"></span>
                </a><br><br><br><br><br><br>
                <p style="color: #2f6f9f; background-color: #FFFFFF">Licenced by FODIN HOME KFT</p>
            </div>
        </footer>


        <!-- End Footer -->

        <!-- Bootsnavs -->

        <!-- Placed at the end of the document so the pages load faster -->
        <script src="bootsnav-master/js/bootsnav.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src='css3-animate-it-master/js/css3-animate-it.js'></script>
        <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>




</div>
