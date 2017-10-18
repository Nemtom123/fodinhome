<?php
require_once("session.php");
require_once("Raktar.php");
require_once("Termek.php");
require_once("error.php");
require_once("Megrenedelo.php");
require_once("Kiadas.php");

$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
include_once("raktarheader.php");
?>

<!-- Start Navigation -->
<?php include_once("raktarmenu.php"); ?>
<!-- Container (Contact Section) -->
<?php

$javit = new Termek();
$keres = $javit->runQuery("SELECT * FROM temektabla WHERE termek_mennyiseg > 0 XOR uj_termek_mennyiseg > 0  ORDER BY termekneve ASC");
$keres->execute(array());

$beker = new Termek();
$talal = $beker->runQuery("SELECT * FROM temektabla WHERE termek_mennyiseg > 0 XOR uj_termek_mennyiseg > 0 ORDER BY termekneve ASC");
$talal->execute(array());

$javitas = new Megrenedelo();
$kereses = $javitas->runQuery("SELECT * FROM megrendelo ORDER BY megrendelocsaladi ASC");
$kereses->execute(array());

$megrendelo = new Megrenedelo();
$leker = $megrendelo->runQuery("SELECT * FROM megrendelo ORDER BY megrendelocsaladi ASC");
$leker->execute(array());

if (isset($_POST['rogzit'])) {
    $kiad = new Kiadas();
    $csokken = new Termek();
    try {
        $afa27 = 1.27;
        foreach ($_POST['megrendelo_id'] AS $key => $value) {


            $tomb0 = $value;
            $tomb1 = $_POST['termek_id'][$key];
            $tomb2 = $_POST['Mennyiség'][$key];
            $tomb3 = $_POST['Rögzítésiidő'][$key];
            $bekeres = $csokken->runQuery("SELECT * FROM temektabla WHERE termek_id = $tomb1");
            $bekeres->execute(array());
            $adat = $bekeres->fetch(PDO::FETCH_ASSOC);
            $sum = 0;
            if ($adat['termek_mennyiseg'] == '0' ) {
                echo '<script language="javascript">window.top.location.href = "termekkiadas.php";</script>';

            }
            else if ($tomb2 >= $adat['termek_mennyiseg'] and $tomb2 == 0){
                echo '<script language="javascript">window.top.location.href = "termekkiadas.php";</script>';
            }
            else  {
            $tomb4 = $adat['termek_id'];
            $tomb5 = $adat['termek_ara_netto'];
            $tomb6 = $adat['termek_mennyiseg'];
            $tomb7 = $adat['termek_ujnetto'];
            $tomb8 = $adat['uj_termek_mennyiseg'];
            $tomb9 = $adat['osssznetto'];
            $tomb10 = $adat['osszbrutto'];
            $tomb11 = $adat['csokkenes']+$_POST['Mennyiség'];
            $tomb12 = $adat['novekedes'];
            $tomb13 = $adat['ujossznetto'];
            $tomb14 = $adat['ujosszbrutto'];
            $tomb15 = $adat['tbrutto'];
            $tomb16 = $adat['ujtbrutto'];
            $tbrutto = $tomb5 * $afa27;
            $tomb6 = $tomb6 - $tomb2; // csokkentett darabszám
            $tomb17 = $tomb9 - $tomb5 * $tomb2; // össznetto megrendelő
            $tomb18 = $tomb10 - $tomb2 * $tbrutto; // össznetto megrendelő
            $csokken->termekUpDate($tomb1,$tomb5,$tomb6,$tomb17,$tomb18, $tomb2, $tomb13, $tomb14, $tomb7, $tomb15,$tomb12,$tomb8, $tomb16);
            echo '<script language="javascript">window.top.location.href = "termekkiadas.php";</script>';
            //$kiad->kiadasRogzit($tomb0, $tomb1, $tomb2, $tomb3);
                }
        }

    }catch
    (PDOException $e) {
        echo $e->getMessage();
    }

    $leker->redirect('termekkiadas.php?joined.');
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
include("termekkiadasform.php");
include_once("raktarfooter.php");
?>
