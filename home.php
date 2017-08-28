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

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap-3.3.7/dist/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css" type="text/css"  />
    <title>Megint itt? hmm? - <?php print($userRow['user_name']); ?></title>
    <link rel="icon" href="image/favicon.ico">
    <link href="bootstrap-3.3.7/fonts/glyphicons-halflings-regular.ttf"/>
    <link href="bootstrap-3.3.7/fonts/glyphicons-halflings-regular.woff2"/>
    <link href="bootstrap-3.3.7/fonts/glyphicons-halflings-regular.woff"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="bootsnav-master/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootsnav-master/css/animate.css" rel="stylesheet">
    <link href="bootsnav-master/css/bootsnav.css" rel="stylesheet">
    <link href="bootsnav-master/css/style.css" rel="stylesheet">
    <link href="bootstrap-3.3.7/docs/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Image -->
    <link href="bootsnav-master/images/brand/logo-black.png" rel="import">
    <!-- Icons -->
    <link href="fonts/FontAwesome/font-awesome.css" rel="stylesheet">
    <!-- Font Style -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="bootstrap-3.3.7/docs/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <link href="bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <link href="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
    <script
            href="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js">
    </script>
    <![endif]-->
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
            <h3 class="text-center" style="color:white">Anyagok-Megnevezések</h3>
        <h4>
            <a href="home.php"><span class="glyphicon glyphicon-home" style="color: #9acfea;vertical-align: bottom"> Rögzítés</span></a> &nbsp;
            <a href="anyagmodosit.php"> <span class="glyphicon glyphicon-apple" style="vertical-align: bottom">
                    Modosítás    </span></a>
            <a href="anyagtorol.php"> <span class="glyphicon glyphicon-sound-7-1" style="vertical-align:
            bottom"> Törlés </span> </a>
        </h4>
    </div>


    <div class="clearfix"></div>
<?php
require_once("Raktar.php");
$rogzit = new Raktar();

if(isset($_POST['btn-rogzit']))
{
    $megnevezes = strip_tags($_POST['megnevezes']);

    if($megnevezes=="")	{
        $error[] = "Ne hagyd üresen kérlek !";
    }
    else
    {
        try
        {
            $leker = $rogzit->runQuery("SELECT megnevezes FROM megnevezes WHERE megnevezes=:megnevezes");
            $leker->execute(array(':megnevezes'=>$megnevezes));
            $row=$leker->fetch(PDO::FETCH_ASSOC);

            if($row['megnevezes']==$megnevezes) {
                $error[] = "Létezik ez a megnevezés";
            }
            else
            {
                if($rogzit->rogzit($megnevezes)){
                    $rogzit->redirect('home.php?joined');
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
                      <i class="glyphicon 	glyphicon glyphicon-thumbs-up">-</i>Sikeres rögzítés-<b onChange="this
                      .form.submit()">Gratulálok</b>
                 </div>
             <?php
			}
            ?>


<div class="container">
    <label for="usr" >Megnevezés</label>
    <input type="text"placeholder="Csavarok" class="form-control" name="megnevezes" id="usr"value="<?php if(isset
    ($error)){echo
    $megnevezes;
    }?>" />
</div>
<br>
<div class="container">
<button class="btn-danger" name="btn-rogzit">Rögzít</button>
</div>
</div>
</div>
</form>
<br><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<!-- Start Footer -->

<footer class="modal-header">
    <div class="container" >
        <a class="up-arrow" href="home.php" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up" style="color: #ffffff;"></span>
        </a>
        <p style="color: #ffffff;">Licenced by FODIN HOME KFT</p>
    </div>
</footer>

</body>

<script type="bootsnav-master/text/javascript" src="bootsnav-master/js/jquery.min.js"></script>
<link href="bootsnav-master/js/bootsnav.js">
<link href="bootstrap-3.3.7/dist/js/bootstrap.min.js">
<script>window.jQuery || document.write('&lt;script src="../../assets/js/vendor/jquery.min.js">&lt;\/script>')</script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
   integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></>
<link href="bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js">
