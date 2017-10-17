<?php
require_once("session.php");
require_once("Raktar.php");
require_once("Beszallito.php");
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
<br/><br>
<?php
echo '<form method="post" class="media" name="jav">';
echo '<br><br><br><br>';
$javit = new Beszallito();

$keres = $javit->runQuery("SELECT * FROM beszallitok ORDER BY beszallito_nev ASC");
$keres->execute();
?>
<div id="contact" class="container">
    <h3 class="text-center">Beszállító javítás</h3>
    <label class="text-center">Üdvözöllek : <?php print($userRow['user_name']); ?></label>
    <div class="row">
    </div>
</div>
<?php
include_once('beszallitojavitasform.php');

if (isset($error)) {
    foreach ($error as $error) {
        ?>
        <div class="alert alert-danger">
            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
        </div>
        <?php
    }
}

if (isset($_POST['jav'])) {
$eredmeny = $_POST['jav'];
/** @var TYPE_NAME $eredmeny */
$kereses = $javit->BeszallitoLeKerdez($eredmeny);
$kereses->execute();
$sor = $kereses->fetch(PDO::FETCH_ASSOC);
$rogzit = new Beszallito();


if (isset($_POST['btn-rogzit'])) {
$beszallitonev = strip_tags($_POST['beszallito_nev']);
$megnevezes_id = $_POST['beszallito_id'];
$beszallitokod = $_POST['beszallito_kod'];

if ($beszallitonev == "") {
    $error[] = "Ne hagyd üresen kérlek !";
} else {
try {
$leker = $rogzit->runQuery("SELECT * FROM beszallitok WHERE beszallito_nev=:beszallito_nev ORDER BY beszallito_nev DESC ");
$leker->execute(array(':beszallito_nev' => $beszallitonev));
$row = $leker->fetch(PDO::FETCH_ASSOC);

if ($row['beszallito_nev'] == $beszallitonev and $row['beszallito_kod'] == $beszallitokod) {
    $rogzit->redirect('beszallitojavitas.php?joined');;
} else {
$nev = strip_tags($_POST['beszallito_nev']);
$kod = strip_tags($_POST['beszallito_kod']);
$id = strip_tags($_POST['beszallito_id']);
if ($rogzit->BeszallitoupDate($nev, $kod, $id)) {
} else if (isset($_GET['joined'])) { ?>
<div class="alert alert-info">
    <i class="glyphicon 	glyphicon glyphicon-thumbs-up">-</i>Sikeres rögzítés-<b onChange="this
                        .form.submit()">Gratulálok</b>
    <?php
    }
    }
    $rogzit->redirect('beszallitojavitas.php?joined');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    }
    }
    ?>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <table class="table table-bordered  table-hover" id="tab_logic">
                <thead class="alert-success">
                <tr>
                    <th class="text-center">
                        #
                    </th>
                    <th class="text-center">
                        Beszállító neve
                    </th>
                    <th class="text-center">
                        Beszállítói kód
                    </th>
                    <th class="text-center">
                        Rögzítési idő
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr id='addr0'>
                    <td>
                        1
                    </td>
                    <td>
                        <input type="text" class="form-control" name="beszallito_nev" id="usr"
                               value="<?php echo $sor['beszallito_nev']; ?>" pattern="[A-Za-z, öÖüÜóÓőŐúÚéÉáÁűŰíÍ
                                0-9/-\s]{3,20}" title="Betüket lehet beütni" required/>
                        <input type="hidden" class="form-control" name="beszallito_id" id="usr"
                               value="<?php echo $sor['beszallito_id']; ?>"/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="beszallito_kod" id="usr"
                               value="<?php echo $sor['beszallito_kod']; ?>" pattern="[0-9 /-\s]{1,50}"
                               title="Számokat lehet beütni" required/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="beszallito_ido" id="usr"
                               value="<?php echo $sor['beszallito_ido']; ?>" disabled/>
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
                title: '',
                text: 'Sikeres Rögzítés!!!!',
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