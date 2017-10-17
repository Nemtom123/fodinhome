<?php
require_once("session.php");
require_once("error.php");
require_once("Beszallito.php");
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
include_once("raktarheader.php");
?>

<?php include_once("raktarmenu.php"); ?>
<br/><br><br><br>
<?php

$javit = new Beszallito();

$keres = $javit->runQuery("SELECT * FROM beszallitok ORDER BY beszallito_nev ASC");
$keres->execute(array());

$beker = new Beszallito();
$talal = $beker->runQuery("SELECT * FROM beszallitok ORDER BY beszallito_nev ASC");
$talal->execute(array());

$lekerdez = new Beszallito();
$beszallito = $lekerdez->runQuery("SELECT * FROM beszallitok ORDER BY beszallito_nev ASC");
$beszallito->execute(array());

$lekert = array();
if (isset($_POST['btn-rogzit'])) {
    try {
        while ($sor = $beszallito->fetch(PDO::FETCH_ASSOC)) {
            $lekert[$sor['beszallito_id']] = $sor['beszallito_nev'];
        }
        $letezik = array();
        $nem_letezik = array();
        foreach ($_POST['beszallito_nev'] as $key => $value) {
            $tomb2 = $_POST['beszallito_nev'][$key];
            $tomb3 = $_POST['beszallito_kod'][$key];
            $tomb4 = $_POST['beszallito_ido'][$key];
            if (TombKereses($lekert, $tomb2)) {
                array_push($letezik, $tomb2);
            } else {
                array_push($nem_letezik, $tomb2);
                $lekerdez->BeszallitoRogzit($tomb2, $tomb3, $tomb4);

            }

        }
       $lekerdez->redirect('beszallitofelvetel.php?joined.');

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    exit;
}
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

?>

</div>

</form>
<form method="post" class="rogzit">
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


        include("beszallitofelvitelform.php");
        include_once("raktarfooter.php");
        ?>
