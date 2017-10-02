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
include_once ("raktarheader.php");
?>
<?php include_once("raktarmenu.php"); ?>
<br/><br>
<?php
echo '<form method="post" class="media" name="jav">';
echo '<br><br><br><br>';
$lekerdez = new Termek();
$bekeres = $lekerdez->runQuery("SELECT * FROM temektabla ORDER BY termekneve ASC");
$bekeres->execute(array());
?>
<?php include_once('termektorolform.php'); ?>

<br>
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
        <div class="alert alert-danger">
            <i class="glyphicon 	glyphicon glyphicon-thumbs-up">-</i>Sikeres törlés-<b onChange="this
                      .form.submit()">Jó ötlet volt ? hmm</b>
        </div>
        <?php
    }

if (isset($_POST['jav'])) {
    $eredmeny = $_POST['jav'];
    $beker = new Termek();
    $bekeres = $beker->runQuery("SELECT * FROM temektabla WHERE termek_id = $eredmeny");
    $bekeres->execute(array());
    $ujsor = $bekeres->fetch(PDO::FETCH_ASSOC);
    $rogzit = new Termek();

    if (isset($_POST['btn-rogzit'])) {
        $termekneve = strip_tags($_POST['felulir']);
        $termek_id = $_POST['felulir_id'];

        if ($termekneve == "") {
            $error[] = "Ne hagyd üresen kérlek !";
        } else {
            try {
                $bekeres = $beker->runQuery("SELECT * FROM temektabla ORDER BY termekneve ASC");
                $bekeres->execute(array(':termekneve' => $termekneve, ':termek_id' => $termek_id));
                $row = $bekeres->fetch(PDO::FETCH_ASSOC);

                if ($row['termekneve'] == $termekneve) {
                    $error[] = "Létezik ez a megnevezés:" . " $termekneve ";
                } else {
                    if ($rogzit->termekTorol($termek_id)) {
                        $rogzit->redirect('termektorol.php?joined');
                    } else if (isset($_GET['joined'])) {
                        ?>
                        <div class="alert alert-info">
                            <i class="glyphicon 	glyphicon glyphicon-thumbs-up">-</i>Sikeres rögzítés Gratulálok</b>
                        </div>
                        <?php
                    }
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
                <thead class="alert-info">
                <tr>
                    <th class="text-center">
                        #
                    </th>
                    <th class="text-center" style="color: #aa0000">
                        Termék törlése (Inkább használd a javítást !!!)...
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
                               value="<?php echo $ujsor['termekneve']; ?>"/>
                        <input type="hidden" class="form-control" name="felulir_id" id="usr"
                               value="<?php echo $ujsor['termek_id']; ?>"/>
                    </td>
                </tr>
                <tr id='addr1'></tr>
                </tbody>
            </table>
        </div>
    </div>

    <button class="btn btn-danger pull-left" id="rogzit" name="btn-rogzit" value="rogzit"
            type="submit">Rögzít
    </button>
    </div>
    </form>
<?php }
include_once ("raktarfooter.php");
?>
