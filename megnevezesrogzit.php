<?php
require_once("session.php");
require_once("Raktar.php");
require_once("error.php");
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
include_once ("raktarheader.php");
?>
<?php include_once("raktarmenu.php"); ?>
<br><br>
<?php
require_once("Raktar.php");
$rogzit = new Raktar();

//print "<pre>";

//print "</pre>";
$lekert = array();
if (isset($_POST['btn-rogzit'])) {

    $leker = $rogzit->leKerdez("SELECT megnevezes FROM megnevezes ");
    $leker->execute(array());

    while ($sor = $leker->fetch(PDO::FETCH_ASSOC)) {
        $lekert[$sor['megnevezes_id']] = $sor['megnevezes'];
    }
/*
    print  "<pre>";
    print_r($lekert);
    print  "</pre>";
*/
    $letezik = array();
    $nem_letezik = array();

    foreach ($_POST as $key => $altomb) {
        if (is_array($altomb)) {
            foreach ($altomb as $key2 => $value2) {
                if (TombKereses($lekert, $value2)) {
                    array_push($letezik, $value2);
                    $error[] = $ertek." Létezik már az adatbázisban";
                } else {
                    array_push($nem_letezik, $value2);
                    $rogzit->rogzit($value2);

                }

            }
        }
    }
    $rogzit->redirect('megnevezesrogzit.php?joined.');

    exit;


function TombKereses($amiben, $amit)
{
    $vissza = FALSE;
    foreach ($amiben as $kulcs => $ertek) {
        if (strtolower($ertek) === strtolower($amit)) {
            $vissza = TRUE;
        }
    }
    return $vissza;
}
}
?>
<form method="post" class="btn-rogzit">
    <div class="container-fluid" style="margin-top:80px;">


        <h2 class="form-signin-heading"></h2>
        <?php
        if (isset($error)) {
            foreach ($error as $error) {
                ?>
                <div class="alert alert-danger">
                    <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                </div>
                <?php
            }
        } else if (isset($_GET['joined'])) {
            ?>
            <div class="alert alert-info">
                <i class="glyphicon-user 	glyphicon glyphicon-thumbs-up">-</i>Sikeres
                rögzítés-<b>Gratulálok</b>
            </div>
            <?php
        }

        ?>
    </div>

</form>
<?php

include_once('anyagbevetform.php');
include_once ("raktarfooter.php");
?>
