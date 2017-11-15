<?php
require_once("session.php");
require_once("Raktar.php");
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
include_once("raktarheader.php");
?>

<?php include_once("raktarmenu.php"); ?>
    <br/><br>
<?php
echo '<form method="post" class="media" name="jav">';
echo '<br><br><br><br>';
$javit = new Raktar();
$keres = $javit->runQuery("SELECT * FROM megnevezes ORDER BY megnevezes ASC");
$keres->execute(array());
?>
    <div id="contact" class="container">
        <h3 class="text-center">Megnevezés javítás</h3>
        <label class="text-center">Üdvözöllek : <?php print($userRow['user_name']); ?></label>
        <div class="row">
        </div>
    </div>

<?php include_once('anyagmodositform3.php'); ?>

    <br>
<?php
if (isset($_POST['jav'])) {
    $eredmeny_id = $_POST['jav'];
    $keres = $javit->beKeres($eredmeny_id);
    $ujsor = $keres->fetch(PDO::FETCH_ASSOC);
    $javitas = new Raktar();

    if (isset($_POST['btn-rogzit'])) {
        $megnevezes = strip_tags($_POST['felulir']);
        $megnevezes_id = $_POST['felulir_id'];

        if ($megnevezes == '') {
            $error[] = "Ne hagyd üresen kérlek !";
        } else {
            try {
                $leker = $javitas->runQuery("SELECT megnevezes FROM megnevezes WHERE megnevezes=:megnevezes ORDER BY megnevezes DESC ");
                $leker->execute(array(':megnevezes' => $megnevezes));
                $row = $leker->fetch(PDO::FETCH_ASSOC);
                $javitas->upDate($megnevezes, $megnevezes_id);
                $javitas->redirect('nyagmodosituj.php?joined');

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
    ?>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <table class="table table-bordered  table-hover" id="tab_logic">
                <thead class="alert-warning">
                <tr>
                    <th class="text-center">
                        #
                    </th>
                    <th class="text-center">
                        Megnevezés javítása
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
                               value="<?php echo $ujsor['megnevezes']; ?>"/>
                        <input type="hidden" class="form-control" name="felulir_id" id="usr"
                               value="<?php echo $ujsor['megnevezes_id']; ?>"/>
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
    </div>
    </form>
<?php
    include_once("raktarfooter.php");
}
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
