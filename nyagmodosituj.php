<?php
require_once("session.php");
require_once("Raktar.php");

$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
include_once ("raktarheader.php");
?>

<?php include_once ("raktarmenu.php");?>
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

<?php include_once ('anyagmodositform3.php'); ?>

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
            <i class="glyphicon 	glyphicon glyphicon-thumbs-up">-</i>Sikeres rögzítés-<b onChange="this
                      .form.submit()">Gratulálok</b>
        </div>
        <?php
    }


    $eredmeny = $_POST['jav'];
    $keres = $javit->runQuery("SELECT * FROM megnevezes WHERE megnevezes_id = $eredmeny");
    $keres->execute(array());
    $ujsor = $keres->fetch(PDO::FETCH_ASSOC);
    $rogzit = new Raktar();

    if (isset($_POST['btn-rogzit'])) {
        $megnevezes = strip_tags($_POST['felulir']);
        $megnevezes_id = $_POST['felulir_id'];

        if ($megnevezes == "") {
            $error[] = "Ne hagyd üresen kérlek !";
        } else {
            try {
                $leker = $rogzit->runQuery("SELECT megnevezes FROM megnevezes WHERE megnevezes=:megnevezes ORDER BY megnevezes DESC ");
                $leker->execute(array(':megnevezes' => $megnevezes));
                $row = $leker->fetch(PDO::FETCH_ASSOC);

                if ($row['megnevezes'] == $megnevezes) {
                    $error[] = "Létezik ez a megnevezés:" . " $megnevezes ";
                } else {
                    if ($rogzit->upDate($megnevezes, $megnevezes_id)) {
                        $rogzit->redirect('nyagmodosituj.php?joined');
                    } else if (isset($_GET['joined'])) {
                        ?>
                        <div class="alert alert-info">
                            <i class="glyphicon 	glyphicon glyphicon-thumbs-up">-</i>Sikeres rögzítés-<b
                                    onChange="this
                      .form.submit()">Gratulálok</b>
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
            <table class="table table-bordered  table-hover"  id="tab_logic">
                <thead class="alert-warning">
                <tr >
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
                        <input type="text"class="form-control" name="felulir" id="usr" value="<?php echo $ujsor['megnevezes']; ?>" />
                        <input type="hidden"class="form-control" name="felulir_id" id="usr" value="<?php echo $ujsor['megnevezes_id']; ?>" />
                    </td>
                </tr>
                <tr id='addr1'></tr>
                </tbody>
            </table>
        </div>
    </div>

    <button class="btn btn-danger pull-left" id="rogzit" name="btn-rogzit" value="rogzit"
            type="submit" >Rögzít</button>
    </div>
    </form>
<?php }
include_once ("raktarfooter.php");
?>
