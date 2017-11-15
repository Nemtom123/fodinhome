<?php
require_once("session.php");
require_once("error.php");
require_once("Megrenedelo.php");
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

$javit = new Megrenedelo();

$keres = $javit->runQuery("SELECT * FROM megrendelo ORDER BY megrendelocsaladi ASC");
$keres->execute(array());

$beker = new Megrenedelo();
$talal = $beker->runQuery("SELECT * FROM megrendelo ORDER BY megrendelocsaladi ASC");
$talal->execute(array());

$lekerdez = new Megrenedelo();
$megrendelo = $lekerdez->runQuery("SELECT * FROM megrendelo ORDER BY megrendelocsaladi ASC");

$lekert = array();
if (isset($_POST['btn-rogzit'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    try {
        while ($sor = $megrendelo->fetch(PDO::FETCH_ASSOC)) {
            $lekert[$sor['megrendelo_id']] = $sor['megrendelocsaladi'];
        }

        $letezik = array();
        $nem_letezik = array();
        foreach ($_POST['megrendelokod'] as $key => $value) {
            $tomb1 = $value;
            $tomb10 = $_POST['megrendelocsaladi'][$key];
            $tomb2 = $_POST['megrendelokereszt'][$key];
            $tomb9 = $_POST['megrendelodate'][$key];
            if (TombKereses($lekert, $tomb1)) {
                array_push($letezik, $tomb1);
            } else {
                array_push($nem_letezik, $tomb1);
                $lekerdez->megrendeloRogzit($tomb10, $tomb2, $tomb1, $tomb9);

            }

        }
        $lekerdez->redirect('megrendelofelvetel.php?joined.');

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    exit;
}
/**
 * @param $amiben
 * @param $amit
 * @return bool
 */
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


        include("megrenedelofelvetelform.php");
        include_once("raktarfooter.php");
        ?>
