<?php
require_once("session.php");
require_once("Raktar.php");
require_once("Megrenedelo.php");
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
$javit = new Megrenedelo();

$megrendelo = $javit->runQuery("SELECT * FROM megrendelo ORDER BY megrendelocsaladi ASC");
$megrendelo->execute(array());
?>
<div id="contact" class="container">
    <h3 class="text-center">Megrendelő javítás</h3>
    <label class="text-center">Üdvözöllek : <?php print($userRow['user_name']); ?></label>
    <div class="row">
    </div>
</div>

<?php include_once('megrenedelojavitasform.php');

if (isset($_POST['jav'])) {
    if (isset($error)) {
            foreach ($error as $error) {
            ?>
                <div class="alert alert-danger">
                    <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                </div>
        <?php
        }
    }

    $eredmeny = $_POST['jav'];
    $megrendelo = $javit->megrendelLeKerdez($eredmeny);
    $megrendelo->execute();
    $ujsor = $megrendelo->fetch(PDO::FETCH_ASSOC);
    $betesz = new Megrenedelo();

    if (isset($_POST['btn-rogzit'])) {
        try {
            foreach ($_POST AS $key => $value) {
                $megnevezes = strip_tags($_POST['megrendelocsaladi']);
                $megnevezes_id = $_POST['megrendelo_id'];
                $megrendelokereszt = strip_tags($_POST['megrendelokereszt']);
                $megrendelokod = strip_tags($_POST['megrendelokod']);
                $betesz->frissitDate($megnevezes, $megnevezes_id, $megrendelokereszt, $megrendelokod);
            }
            $betesz->redirect('megrendelojavitas.php?joined.');
        } catch (PDOException $e) {
            echo $e->getMessage();
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
                        Családinév
                    </th>
                    <th class="text-center">
                        Keresztnév
                    </th>
                    <th class="text-center">
                        Kód
                    </th>
                    <th class="text-center">
                        Dátum
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr id='addr0'>
                    <td>
                        1
                    </td>
                    <td>
                        <input type="text" class="form-control" name="megrendelocsaladi" id="usr"
                               value="<?php echo $ujsor['megrendelocsaladi']; ?>" pattern="[A-Za-z, öÖüÜóÓőŐúÚéÉáÁűŰíÍ
                               \s]{3,20}" title="Betüket lehet beütni" required/>
                        <input type="hidden" class="form-control" name="megrendelo_id" id="usr"
                               value="<?php echo $ujsor['megrendelo_id']; ?>"/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="megrendelokereszt" id="usr"
                               value="<?php echo $ujsor['megrendelokereszt']; ?>" pattern="[A-Za-z, öÖüÜóÓőŐúÚéÉáÁűŰíÍ
                               \s]{3,20}" title="Betüket lehet beütni" required/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="megrendelokod" id="usr"
                               value="<?php echo $ujsor['megrendelokod']; ?>" pattern="[0-9 - / \s]{1,50}"
                               title="Számokat lehet beütni" required/>
                    </td>
                    <td>
                        <input class="form-control" id="rogzitesiido" name="megrendelodate[0]" value="<?php echo
                        $date = date('Y-m-d'); ?>" type="text" required>
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
            text: 'Sikeres javítás!!!!',
            timer: 5000,
            onOpen: function () {
                swal.showLoading()
            }
        }).then(
            function () {
            },
            // handling the promise rejection
            function (dismiss) {
                if (dismiss === 'timer') {
                    console.log('I was closed by the timer')
                }
            }
        )
    }
</script>