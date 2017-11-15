<?php
require_once("session.php");
require_once("Megrenedelo.php");
require_once("error.php");

$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
require_once("raktarheader.php");
?>
<!-- Start Navigation -->
<?php include_once("raktarmenu.php"); ?>
<br/><br>
<?php
echo '<form method="post" class="media" name="jav">';
echo '<br><br><br><br>';

$javit = new Megrenedelo();

$keres = $javit->runQuery("SELECT * FROM megrendelo ORDER BY megrendelocsaladi ASC");
$keres->execute(array());
?>
<div id="contact" class="container">
    <h3 class="text-center">Megrendelő törlése</h3>
    <label class="text-center">Üdvözöllek : <?php print($userRow['user_name']); ?></label>
    <div class="row">
    </div>
</div>
<?php include_once('megrendelotorlesform.php'); ?>
<br>
<?php
if (isset($_POST['jav'])) {

    $eredmeny_id = $_POST['jav'];
    $keres = $javit->megrendelLeKerdez($eredmeny_id);
    $keres->execute();
    $ujsor = $keres->fetch(PDO::FETCH_ASSOC);
    $torol = new Megrenedelo();


    if (isset($_POST['btn-rogzit'])) {
        $megnevezes = strip_tags($_POST['felulir']);
        $megrendelo_id = $_POST['felulir_id'];

        if ($megnevezes == '') {
            $error[] = "Ne hagyd üresen kérlek !";
        } else {
            try {
               $torol->megrendeloTorol($megrendelo_id) ;
                    $torol->redirect('megrendelotorles.php?joined');

                 if (isset($_GET['joined'])) {
                    ?>
                    <div class=" btn-alert alert-info">
                        <i class="glyphicon 	glyphicon glyphicon-thumbs-up">-</i>Sikeres rögzítés-<b onChange="this
                      .form.submit()">Gratulálok</b>
                    </div>
                    <?php
                }
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
                        Megrendelő törlés
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr id='addr0'>
                    <td>
                        1
                    </td>
                    <td>
                        <input type="text" class="form-control" name="felulir" id="usr"
                               value="<?php echo $ujsor['megrendelocsaladi'] . ' ' . $ujsor['megrendelokereszt'] . ' ' . 'Kod:' . ' ' . $ujsor['megrendelokod']; ?>"/>
                        <input type="hidden" class="form-control" name="felulir_id" id="usr"
                               value="<?php echo $ujsor['megrendelo_id']; ?>"/>
                    </td>
                </tr>
                <tr id='addr1'></tr>
                </tbody>
            </table>
        </div>
    </div>

    <button class="btn btn-danger pull-left" id="rogzit" name="btn-rogzit" value="rogzit"
            type="submit" onclick="myFunction()">Töröl
    </button>
<?php }
include_once "raktarfooter.php";
?>

<script>
    function myFunction() {
        swal({
            title: 'Sikeres Törlés!!!!',
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
