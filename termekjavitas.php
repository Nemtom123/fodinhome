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

<!-- Start Navigation -->
<?php include_once("raktarmenu.php"); ?>
<!--suppress ALL -->
<br/><br>
<?php
echo '<form method="post" class="media" name="jav">';
echo '<br><br><br><br>';
$javit = new Termek();
$bekeres = $javit->runQuery("SELECT * FROM temektabla ORDER BY termek_id ASC");
$bekeres->execute(array());
?>

<div id="contact" class="container">
    <h3 class="text-center">Termék javítás</h3>
    <label class="text-center">Üdvözöllek : <?php print($userRow['user_name']); ?></label>
    <div class="row">
    </div>
</div>

<?php include_once('termekjavitasform.php'); ?>

<br>
<?php
if (isset($_POST['jav'])) {


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
            <i class="glyphicon 	glyphicon glyphicon-thumbs-up">-</i>Sikeres rögzítés gratulálok</>
        </div>
        <?php
    }


    $eredmeny = $_POST['jav'];
    $bekeres = $javit->runQuery("SELECT * FROM temektabla WHERE termek_id = $eredmeny");
    $bekeres->execute(array());
    $ujsor = $bekeres->fetch(PDO::FETCH_ASSOC);
    $betesz = new Termek();
    if (isset($_POST['btn-rogzit'])) {
        try {
            foreach ($_POST AS $key => $value) {
                $termekneve = strip_tags($_POST['termekneve']);
                $termek_id = $_POST['termek_id'];
                $termek_ara_netto = strip_tags($_POST['termek_ara_netto']);
                $termek_mennyiseg = strip_tags($_POST['termek_mennyiseg']);
                $termek_megyseg = strip_tags($_POST['termek_megyseg']);
                $betesz->upDate($termekneve, $termek_id, $termek_ara_netto, $termek_mennyiseg, $termek_megyseg);
                $betesz->redirect('termekjavitas.php?joined.');
                  }



        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    ?>
    <div class="row clearfix">




        <div class="col-md-12 column">
            <table class="table table-bordered  table-hover" id="tab_logic">
                <thead class="alert-info">
                <tr>
                    <th class="text-center">
                        #
                    </th>
                    <th class="text-center">
                        Termékneve___
                    </th>
                    <th class="text-center">
                        Termék ára netto
                    </th>
                    <th class="text-center">
                        Mennyiség
                    </th>
                    <th class="text-center">
                        Mennyiségi egység
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr id='addr0'>
                    <td>
                        1
                    </td>
                    <td>
                        <input type="text" class="form-control" name="termekneve" id="usr"
                               value="<?php echo $ujsor['termekneve']; ?>" pattern="[A-Za-z, öÖüÜóÓőŐúÚéÉáÁűŰíÍ
                               \s]{3,20}" title="Betüket lehet beütni" required/>
                        <input type="hidden" class="form-control" name="termek_id" id="usr"
                               value="<?php echo $ujsor['termek_id']; ?>"/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="termek_ara_netto" id="usr"
                               value="<?php echo $ujsor['termek_ara_netto']; ?> "  pattern="[0-9\s]{1,50}" title="Számokat lehet beütni" required/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="termek_mennyiseg" id="usr"
                               value="<?php echo $ujsor['termek_mennyiseg']; ?>"  pattern="[0-9\s]{1,50}" title="Számokat lehet beütni" required/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="termek_megyseg" id="usr"
                               value="<?php echo $ujsor['termek_megyseg']; ?>"  pattern="[A-Za-z, öÖüÜóÓőŐúÚéÉáÁűŰíÍ
                               \s]{2,20}" title="Betüket lehet beütni" required/>
                    </td>
                </tr>
                <tr id='addr1'></tr>
                </tbody>
            </table>
        </div>
    </div>
    <button class="btn btn-danger pull-left" id="rogzit" name="btn-rogzit" value="rogzit"
            type="submit" onclick="myFunction()" >Rögzít
    </button>
<?php }
include_once("raktarfooter.php");
?>
