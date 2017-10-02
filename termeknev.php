<?php
require_once("session.php");
require_once("Raktar.php");
require_once("Termek.php");
require_once("error.php");
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

$javit = new Raktar();

$keres = $javit->runQuery("SELECT * FROM megnevezes ORDER BY megnevezes ASC");
$keres->execute(array());

$beker = new Raktar();
$talal = $beker->runQuery("SELECT * FROM megnevezes ORDER BY megnevezes ASC");
$talal->execute(array());

$lekerdez = new Termek();
$bekeres = $lekerdez->runQuery("SELECT * FROM temektabla ORDER BY termekneve ASC");
$bekeres->execute(array());

$lekert = array();
if (isset($_POST['rogzit'])) {

    try {
        while ($sor = $bekeres->fetch(PDO::FETCH_ASSOC)) {
            $lekert[$sor['termek_id']] = $sor['termekneve'];
        }

        $letezik = array();
        $nem_letezik = array();

        foreach ($_POST['megnevezes_id'] as $key => $value) {
            $tomb1 = $value;
            $tomb2 = $_POST['termekneve'][$key];
            if (TombKereses($lekert, $tomb2)) {
                array_push($letezik, $tomb2);
            } else {
                array_push($nem_letezik, $tomb2);
                $lekerdez->termekNevRogzit($tomb1, $tomb2);

            }

        }
       $lekerdez->redirect('termeknev.php?joined.');

        exit;

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
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
        ?>
    </div>

</form>
<?php
include("termeknevform.php");
include_once("raktarfooter.php");
?>
