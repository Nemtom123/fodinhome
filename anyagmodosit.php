<?php
require_once("session.php");
require_once("Raktar.php");

$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap-3.3.7/dist/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css" type="text/css"  />
    <title>welcome - <?php print($userRow['user_email']); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap-3.3.7/dist/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
    <link rel="icon" href="image/favicon.ico">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="bootsnav-master/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootsnav-master/css/animate.css" rel="stylesheet">
    <link href="bootsnav-master/css/bootsnav.css" rel="stylesheet">
    <link href="bootsnav-master/css/style.css" rel="stylesheet">
    <link href="bootstrap-3.3.7/docs/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
    <link href="bootsnav-master/images/brand/logo-black.png" rel="import">
    <link href="fonts/FontAwesome/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="typed.js-master/js/typed.js" type="text/javascript"></script>
    <script src="typed.js-master/js/typednext.js" type="text/javascript"></script>
    <style type="text/css">
        .body{
            background-color: #6a6a6a;
        }
    </style>
</head>
<body class="body">
<?php include_once ("raktarmenu.php");  ?>
<div class="clearfix"></div>

<div class="container-fluid" style="margin-top:80px;">

    <div class="container">

        <label class="h5">Üdvözöllek : <?php print($userRow['user_name']); ?></label>
        <hr />
        <h3 class="text-center" style="color:white">Anyagok-Megnevezések javítása</h3>
        <h4>
            <a href="home.php"><span class="glyphicon glyphicon-home"> Rögzítés</span></a> &nbsp;
            <a href="anyagmodosit.php"><span class="glyphicon glyphicon-apple" style="color: #9acfea"> Modosítás</span></a>
            <a href="anyagtorol.php"> <span class="glyphicon glyphicon-bed"> Törlés</span></a>
        </h4>
    </div>
</div>
<div class="clearfix"></div>

<?php
require_once("Raktar.php");
$javit = new Raktar();

$keres = $javit->runQuery("SELECT * FROM megnevezes ORDER BY megnevezes ASC");
$keres->execute(array());
?>
<form method="post" class="media" name="jav">
    <div class="container">
            <div class="container">
                <h2>Megenevezés kivélasztás</h2>
                <div class="form-group">
                        <label for="sel1">Válaszd ki a megfelelő anyagcsoportot):</label>
                        <select class="form-control" id="sel1" name="jav" onChange="this.form.submit()">
                            <?php
                                while ($sor = $keres->fetch(PDO::FETCH_ASSOC)){
                                print "<option value='".$sor['megnevezes_id']."' >".$sor['megnevezes']."</option>";
                                }
                            ?>
                        </select>
                    </div>
            </div>
        </div>
        <br>

<?php
if (isset($_POST['jav'])){


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
                        <i class="glyphicon 	glyphicon glyphicon-thumbs-up">-</i>Sikeres rögzítés-<b onChange="this
                      .form.submit()">Gratulálok</b>
                    </div>
                    <?php
                }


    $eredmeny = $_POST['jav'];
    $keres = $javit->runQuery("SELECT * FROM megnevezes WHERE megnevezes_id = $eredmeny");
    $keres->execute(array());
    $ujsor = $keres->fetch(PDO::FETCH_ASSOC);
    $rogzit = new Raktar();

if(isset($_POST['btn-rogzit']))
{
    $megnevezes = strip_tags($_POST['felulir']);
   $megnevezes_id = $_POST['felulir_id'];

    if($megnevezes=="")	{
        $error[] = "Ne hagyd üresen kérlek !";
    }
    else
    {
        try
        {
            $leker = $rogzit->runQuery("SELECT megnevezes FROM megnevezes WHERE megnevezes=:megnevezes ORDER BY megnevezes DESC ");
            $leker->execute(array(':megnevezes'=>$megnevezes ));
            $row=$leker->fetch(PDO::FETCH_ASSOC);

            if($row['megnevezes'] == $megnevezes) {
                $error[] = "Létezik ez a megnevezés:"." $megnevezes ";
            }
            else
            {
                if($rogzit->upDate($megnevezes, $megnevezes_id)) {
                    $rogzit->redirect('anyagmodosit.php?joined');
                }
            else if(isset($_GET['joined']))
            {
                     ?>
                <div class="alert alert-info">
                 <i class="glyphicon 	glyphicon glyphicon-thumbs-up">-</i>Sikeres rögzítés-<b onChange="this
                      .form.submit()">Gratulálok</b>
                </div>
            <?php
            }
                }

        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}
?>

    <div class="container">

        <h2 class="form-signin-heading"></h2>
        <div class="container">
            <label for="usr" >Megnevezés:<?php echo  $ujsor['megnevezes']; ?></label>
            <input type="text"class="form-control" name="felulir" id="usr" value="<?php echo $ujsor['megnevezes'];

            ?>" />
            <input type="hidden"class="form-control" name="felulir_id" id="usr" value="<?php echo $ujsor['megnevezes_id'];

            ?>" />
        </div>
        <br>
        <div class="container">
            <button class="btn-danger" name="btn-rogzit" onChange="this.form.submit()">Rögzít</button>
        </div>

    </div>
</form>
<?php } ?>
<br>
<br>
<br>
<!-- Start Footer -->
<br>
<div class="modal-footer" style="position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 80px;
  background-color: #ffffff;">
    <div class="container; text-center" style="background-color: #ffffff">
        <a class="up-arrow" href="anyagmodosit.php" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up" style="color: black"></span>
        </a>
        <p style="color: black">Licenced by FODIN HOME KFT</p>
    </div>

</div>


<script type="bootsnav-master/text/javascript" src="bootsnav-master/js/jquery.min.js"></script>
<script src="bootsnav-master/js/bootsnav.js"></script>
<script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
<script>window.jQuery || document.write('&lt;script src="../../assets/js/vendor/jquery.min.js">&lt;\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>