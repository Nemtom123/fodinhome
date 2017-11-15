<?php
require_once("session.php");
require_once("Raktar.php");
require_once("error.php");
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
include_once("raktarheader.php");
?>
<?php include_once("raktarmenu.php"); ?>
<br><br><br><br>
<?php
include_once('anyagbevetform.php');
$rogzit = new Raktar();
$lekert = array();
$leker = $rogzit->leKerdez("SELECT megnevezes FROM megnevezes ");
$leker->execute(array());

if (!isset($_POST['btn-rogzit'])) {
    try {
        while ($sor = $leker->fetch(PDO::FETCH_ASSOC)) {
            $lekert[$sor['megnevezes_id']] = $sor['megnevezes'];
        }
        $letezik = array();
        $nem_letezik = array();
       if(isset($_POST['megnevezes'])){
        foreach ($_POST['megnevezes'] as $key => $value) {
            $tomb2 = $_POST['megnevezes'][$key];
            if (TombKereses($lekert, $tomb2)) {
                array_push($letezik, $tomb2);
            } else {
                array_push($nem_letezik, $tomb2);
                $rogzit->rogzit($tomb2);
            }
        }
       }
        //$rogzit->redirect('megnevezesrogzit.php?joined.');
    }catch (PDOException $e) {
        echo $e->getMessage();
    }
    exit;
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
include_once("raktarfooter.php");
?>
<script>
    function myFunction() {
        swal({
            title: 'Sikeres rögzités!!!!',
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
