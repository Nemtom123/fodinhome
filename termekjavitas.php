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
$bekeres = $javit->runQuery("SELECT * FROM temektabla WHERE termek_ara_netto != 0 ORDER BY termekneve ASC");
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
            <i class="glyphicon 	glyphicon glyphicon-thumbs-up">-</i>Sikeres rögzítés gratulálok
        </div>
        <?php
    }


    $eredmeny = $_POST['jav'];
    $bekeres = $javit->termKerdez($eredmeny);
    $ujsor = $bekeres->fetch(PDO::FETCH_ASSOC);
    $betesz = new Termek();
    if (isset($_POST['btn-rogzit'])) {
        try {
           $ujsor['termek_ara_netto'];
            $afa27 = 1.27;
            foreach ($_POST AS $key => $value) {

                $termekneve = strip_tags($_POST['termekneve']);
                $termek_id = $_POST['termek_id'];
                $termek_ara_netto = strip_tags($_POST['termek_ara_netto']);
                $termek_mennyiseg = strip_tags($_POST['termek_mennyiseg']);
                $ujtermeknetto = strip_tags($_POST['termek_ujnetto']);
                $ujmennyiseg = strip_tags($_POST['uj_termek_mennyiseg']);
                $csokkenes = $ujsor['csokkenes'];
                $beszallito_id = $ujsor['beszallito_id'];
                $osssznetto = $termek_ara_netto * $termek_mennyiseg;
                $tbrutto = $termek_ara_netto * $afa27;
                $osszbrutto = $osssznetto * $afa27;
                $ujossznetto = $ujtermeknetto * $ujmennyiseg;
                $ujtbrutto = $ujtermeknetto * $afa27;
                $ujosszbrutto = $ujossznetto * $afa27;
                $novekedes = $termek_mennyiseg  + $ujmennyiseg;



                if (!empty($termekneve) and !empty($termek_ara_netto) and !empty($termek_mennyiseg and
                        $termek_ara_netto != 0 and $termek_mennyiseg != 0))
                {
                    $betesz->termekUpDate($termek_id, $termek_ara_netto, $termek_mennyiseg, $osssznetto,
                        $osszbrutto,
                        $csokkenes, $ujossznetto, $ujosszbrutto,$ujtermeknetto,$tbrutto, $novekedes,
                        $ujmennyiseg,$ujtbrutto,$termekneve,$beszallito_id);
                    $betesz->redirect('termekjavitas.php?joined.');
                }
                else if (!empty($termekneve) and !empty($termek_ara_netto) and !empty($termek_mennyiseg) and
                    $ujtermeknetto != 0 and $ujmennyiseg != 0 and !empty($ujtermeknetto) and !empty($ujmennyiseg))
                {
                    $betesz->termekUpDate($termek_id, $termek_ara_netto, $termek_mennyiseg, $osssznetto,
                        $osszbrutto,
                        $csokkenes, $ujossznetto, $ujosszbrutto,$ujtermeknetto,$tbrutto, $novekedes,
                        $ujmennyiseg,$ujtbrutto,$termekneve,$beszallito_id);
                    $betesz->redirect('termekjavitas.php?joined.');
                } else if (!empty($termekneve) and $termek_ara_netto == 0 and $termek_mennyiseg == 0 and $ujtermeknetto == 0 and $ujmennyiseg == 0)
                {

                    $betesz->termekUpDate($termek_id, $termek_ara_netto, $termek_mennyiseg, $osssznetto,
                        $osszbrutto,
                        $osszbrutto, $ujossznetto, $ujosszbrutto,$ujtermeknetto,$tbrutto, $novekedes,
                        $ujmennyiseg,$ujtbrutto,$termekneve, $beszallito_id);
                    $betesz->redirect('termekjavitas.php?joined.');
                }


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
                        Új termék ára netto
                    </th>
                    <th class="text-center">
                        Új mennyiség
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
                               value="<?php echo $ujsor['termekneve']; ?>" pattern="[A-Za-z 0-9, öÖüÜóÓőŐúÚéÉáÁűŰíÍ
                               * / \s]{3,20}" title="Betüket lehet beütni" required/>
                        <input type="hidden" class="form-control" name="termek_id" id="usr"
                               value="<?php echo $ujsor['termek_id']; ?>"/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="termek_ara_netto" id="usr"
                               value="<?php echo $ujsor['termek_ara_netto']; ?> " pattern="[0-9\s]{1,50}"
                               title="Számokat lehet beütni" required/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="termek_mennyiseg" id="usr"
                               value="<?php echo $ujsor['termek_mennyiseg']; ?>" pattern="[0-9\s]{1,50}"
                               title="Számokat lehet beütni" required/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="termek_ujnetto" id="usr"
                               value="<?php echo $ujsor['termek_ujnetto']; ?> " pattern="[0-9\s]{1,50}"
                               title="Számokat lehet beütni" required/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="uj_termek_mennyiseg" id="usr"
                               value="<?php echo $ujsor['uj_termek_mennyiseg']; ?>" pattern="[0-9\s]{1,50}"
                               title="Számokat lehet beütni" required/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="termek_megyseg" id="usr"
                               value="<?php echo $ujsor['termek_megyseg']; ?>" pattern="[A-Za-z, öÖüÜóÓőŐúÚéÉáÁűŰíÍ
                               \s]{2,20}" title="Betüket lehet beütni" disabled/>
                    </td>
                </tr>
                <tr id='addr1'></tr>
                </tbody>
            </table>
        </div>
    </div>
    <button class="btn btn-danger pull-left" id="rogzit" name="btn-rogzit" value="rogzit"
            type="submit" onclick="myFunction()">Rögzít
    </button>
<?php }
include_once("raktarfooter.php");
?>
<script>
   function myFunction() {
       swal({
           title: 'Sikeres Rögzítés!!!!',
           text: '',
           timer: 5000,
           onOpen: function () {
               swal.showLoading()
           }
       }).then(
           function () {},
           // handling the promise rejection
           function (dismiss) {
               if (dismiss === 'timer') {
                   console.log('I was closed by the timer')
               }
           }
       )
   }
</script>