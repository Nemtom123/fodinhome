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


include_once("raktarheadertermek.php");
?>

<?php include_once("raktarmenu.php"); ?>
<br/><br><br><br>
<?php
$javit = new Raktar();
$keres = $javit->runQuery("SELECT * FROM temektabla ORDER BY termekneve ASC");
$keres->execute(array());

$beker = new Raktar();
$talal = $beker->runQuery("SELECT * FROM temektabla ORDER BY termekneve ASC");
$talal->execute(array());

$lekerdez = new Termek();
$bekeres = $lekerdez->runQuery("SELECT * FROM temektabla ORDER BY termekneve ASC");
$bekeres->execute(array());

if (isset($_POST['rogzit'])) {

    try {
        while ($sor = $bekeres->fetch(PDO::FETCH_ASSOC)) {
            $lekert[$sor['termek_id']] = $sor['termekneve'];
        }
        while ($sor2 = $bekeres->fetch(PDO::FETCH_ASSOC)) {
            $lekert2[$sor2['termek_id']] = $sor['termek_ara_netto'];
        }
        $letezik = array();
        $nem_letezik = array();
        $afa27 = 1.27;
        foreach ($_POST['termek_id'] as $key => $value) {
            $tomb1 = $value;
            $tomb2 = $_POST['termek_ara_netto'][$key];
            $tomb3 = $_POST['termek_mennyiseg'][$key];
            $tomb4 = $_POST['termek_megyseg'][$key];
            $tomb5 = $_POST['termek_date'][$key];

            $termekujara = 0;
            $ujossznetto = 0;
            $ujosszbrutto = 0;
            $osssznetto = $tomb2 * $tomb3;
            $tbrutto = $tomb2 * $afa27;
            $osszbrutto = $osssznetto * $afa27;
            $novekedes = +$tomb3;

            if (TombKereses($lekert2, $tomb2)) {
                array_push($letezik, $tomb2);
            } else {
                array_push($nem_letezik, $tomb1);
                $lekerdez->frissitDate($tomb1,
                    $tomb2, $tomb3, $tomb4, $osssznetto, $osszbrutto, $novekedes, $ujossznetto, $ujosszbrutto,
                    $termekujara, $tbrutto, $tomb5);

            }

        }
        $lekerdez->redirect('termekbevetelezes.php?joined.');
        exit;

    } catch
    (PDOException $e) {
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
include("termekbevetform2.php");
include_once("raktarfooter.php");
?>
