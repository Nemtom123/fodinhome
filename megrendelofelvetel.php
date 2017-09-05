<?php
require_once("session.php");
require_once("Raktar.php");

$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="hu"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="hu"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="hu"> <![endif]-->
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
    <title>Üdv - <?php print($userRow['user_name']); ?></title>
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
    <link rel="stylesheet" href="termekbevet.css">
</head>
<body>
<!-- Start Navigation -->
<?php include_once ("raktarmenu.php");?>
<br><br>
<!-- Container (Contact Section) -->
<?php
require_once("Raktar.php");
$rogzit = new Raktar();
/*
print "<pre>";
print_r($_POST);
$szamlalo = sizeof($_POST['megnevezes']);
print_r($szamlalo);
foreach ( $_POST['megnevezes'] as $key => $value){

    $rogzit->rogzit($value);
}
for ($i = 0; $i<$szamlalo;$i++) {
   // $rogzit->rogzit($value);

}
print "</pre>";
*/

if(isset($_POST['btn-rogzit']))
{


    try
    {
        foreach ( $_POST['megnevezes'] as $key => $val) {
            $leker = $rogzit->runQuery("SELECT megnevezes FROM megnevezes WHERE megnevezes=:val");
            $leker->execute(array(':megnevezes' => $val));
            $row = $leker->fetch(PDO::FETCH_ASSOC);
        }
        if($row['megnevezes']== $value) {
            $error[] = "Létezik ez a megnevezés";
        }
        else {
            print_r($_POST);
            $szamlalo = sizeof($_POST['megnevezes']);
            foreach ( $_POST['megnevezes'] as $key => $value){
                $rogzit->rogzit($value);
                $rogzit->redirect('megnevezesrogzit.php?joined');
            }
            for ($i = 0; $i<$szamlalo;$i++) {

            }
        }
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}
?>
<form method="post" class="btn-rogzit">
    <div class="container-fluid" style="margin-top:80px;">


        <h2 class="form-signin-heading"></h2>
        <?php
        if(isset($error))
        {
            foreach($error as $error)
            {
                ?>
                <div class="alert alert-danger">
                    <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                </div>
                <?php
            }
        }
        else if(isset($_GET['joined']))
        {
            ?>
            <div class="alert alert-info">
                <i class="glyphicon 	glyphicon glyphicon-thumbs-up">-</i>Sikeres
                rögzítés-<b>Gratulálok</b>
            </div>
            <?php
        }
        ?>
    </div>

</form>
<?php

include_once ('megrenedelofelvetelform.php');

?>
<!-- Start Footer -->

<br><br><br><br><br><br><br><br><br><br><br><br>
<div class="clearfix"></div>
<!-- Start Footer -->
<footer class="footer"  style="background-color: #FFFFFF">
    <div class="text-center" style="background-color:#FFFFFF" >
        <a class="up-arrow" href="kontakt.php" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up" style="color: #2f6f9f"></span>
        </a>
        <p style="color: #2f6f9f; background-color: #FFFFFF">Licenced by FODIN HOME KFT</p>
    </div>
</footer>

<!-- End Footer -->

<!-- Placed at the end of the document so the pages load faster -->
<script type="bootsnav-master/text/javascript" src="bootsnav-master/js/jquery.min.js"></script>
<script type="text/javascript" src="bootsnav-master/js/bootstrap.min.js"></script>
<!-- Bootsnavs -->
<script src="bootsnav-master/js/bootsnav.js"></script>

<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>


</body>
</html>