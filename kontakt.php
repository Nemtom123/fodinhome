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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
        #googleMap {
            width: 100%;
            height: 400px;
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
        }

    </style>
</head>
<body>
<!-- Start Navigation -->
<?php include_once ("menu.php");?>
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
        <form method="post" name="myemailform" action="form-to-email.php">
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Név" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
            </div>
            <textarea class="form-control" id="comments" name="message" placeholder="Üzenet" rows="5"></textarea>
            <br>
            <div class="row">
                <div class="col-md-12 form-group">
                    <button class="btn pull-right" name="submit" type="submit">Küldés</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<br>
<!-- Add Google Maps -->
<div id="googleMap"></div>
<script>
    function myMap() {
        var myCenter = new google.maps.LatLng(48.10420, 20.75900);
        var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        var marker = new google.maps.Marker({position:myCenter});
        marker.setMap(map);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

<!-- Start Footer -->
<footer class="footer"  style="background-color: #FFFFFF">
    <div class="text-center" style="background-color:#FFFFFF" >
        <a class="up-arrow" href="kontakt.php" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up" style="color: #2f6f9f"></span>
        </a><br><br><br><br><br><br>
        <p style="color: #2f6f9f; background-color: #FFFFFF">Licenced by FODIN HOME KFT</p>
    </div>
</footer>

<!-- End Footer -->

<!-- Placed at the end of the document so the pages load faster -->
<script language="JavaScript">
    // Code for validating the form
    // Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
    // for details
    var frmvalidator  = new Validator("myemailform");
    frmvalidator.addValidation("name","req","Kérjük adja meg a nevét");
    frmvalidator.addValidation("email","req","Kérjük, adja meg az email címét");
    frmvalidator.addValidation("email","email","Nem valós email");
</script>
<script type="bootsnav-master/text/javascript" src="bootsnav-master/js/jquery.min.js"></script>
<script type="text/javascript" src="bootnav-master/js/bootstrap.min.js"></script>
<!-- Bootsnavs -->
<script src="bootsnav-master/js/bootsnav.js"></script>

<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>


</body>
</html>