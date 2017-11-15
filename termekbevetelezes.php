<?php
require_once("session.php");
require_once("Raktar.php");
require_once("Termek.php");
require_once("error.php");
require_once ("Beszallito.php");
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
include_once("raktarheadertermek.php");
?>
<?php include_once("raktarmenu.php"); ?>
<?php
$beszallito = new Beszallito();
$beszallitoleker = $beszallito->runQuery("SELECT * FROM beszallitok ORDER BY beszallito_nev ASC");
$beszallitoleker->execute(array());

$javit = new Termek();
$keres = $javit->runQuery("SELECT * FROM temektabla  ORDER BY termekneve ASC");
$keres->execute(array());

$beker = new Termek();
$talal = $beker->runQuery("SELECT * FROM temektabla WHERE termek_ara_netto = 0 OR  termek_ujnetto = 0 ORDER BY termekneve ASC");
$talal->execute(array());

$lekerdez = new Termek();
$bekeres = $lekerdez->runQuery("SELECT * FROM temektabla ORDER BY termekneve ASC");
$bekeres->execute(array());
$betesz = new Termek();

$beszall = new Beszallito();
if (isset($_POST['rogzit'])) {

    try {
        $afa27 = 1.27;
        foreach ($_POST['termek_id'] as $key => $value) {
            $termek_id = $value;
            $bekeres = $javit->termKerdez($termek_id);
            $ujsor = $bekeres->fetch(PDO::FETCH_ASSOC);
            $termek_ara_netto = strip_tags($_POST['termek_ara_netto'][$key]);
            $termek_mennyiseg = strip_tags($_POST['termek_mennyiseg'][$key]);
            $termek_megyseg = strip_tags($_POST['termek_megyseg'][$key]);
            $ujtermeknetto = strip_tags($_POST['Ujáranetto'][$key]);
            $ujmennyiseg = strip_tags($_POST['uj_termek_mennyiseg'][$key]);
            $termek_date = strip_tags($_POST['Rögzítésiidő'][$key]);
            $beszallito_id =  strip_tags($_POST['beszallito_id'][$key]);
            $mennyiseg = $ujsor['termek_mennyiseg'];
            $osssznetto = $termek_ara_netto * $termek_mennyiseg;
            $tbrutto = $termek_ara_netto * $afa27;
            $osszbrutto = $osssznetto * $afa27;
            $ujossznetto = $ujtermeknetto * $ujmennyiseg;
            $ujtbrutto = $ujtermeknetto * $afa27;
            $ujosszbrutto = $ujossznetto * $afa27;
            $novekedes = $mennyiseg  + $ujmennyiseg;
           if (!empty($termek_id) and !empty($termek_ara_netto) and !empty($termek_mennyiseg) and $ujtermeknetto ==
                   0 and $ujmennyiseg == 0 and $termek_megyseg !='Mennyiségi egység választás')
            {
              $betesz->frissitDate($termek_id, $termek_ara_netto, $termek_mennyiseg, $termek_megyseg,
                    $osssznetto,  $osszbrutto,
                    $termek_mennyiseg,$tbrutto, $termek_date,$beszallito_id);
               // $betesz->redirect('termekbevetelezes.php?joined.');
            }
            else if (!empty($termek_id) and !empty($ujtermeknetto) and !empty($ujmennyiseg) and $ujtermeknetto != 0 and $ujmennyiseg != 0 and $termek_megyseg !='Mennyiségi egység választás')
            {
               $betesz->frissitesekDate($termek_id, $ujtermeknetto, $ujmennyiseg,
                    $ujossznetto, $ujosszbrutto, $novekedes,$ujtbrutto,$termek_date, $beszallito_id);
              // $betesz->redirect('termekbevetelezes.php?joined.');
            }
            else if (!empty($termek_id) and $termek_ara_netto == 0 and $termek_mennyiseg == 0 and
                $ujtermeknetto == 0 and $ujmennyiseg == 0)
            {
                $termek_ara_netto = 0;
                $betesz->termekekUpDate($termek_id, $termek_ara_netto, $termek_ara_netto, $termek_ara_netto,
                    $termek_ara_netto,
                    $termek_ara_netto, $termek_ara_netto, $termek_ara_netto,$termek_ara_netto,$termek_ara_netto, $termek_ara_netto,
                    $termek_ara_netto, $beszallito_id);
               $betesz->redirect('termekbevetelezes.php?joined.');
            }

        }


    } catch
    (PDOException $e) {
        echo $e->getMessage();
    }
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
