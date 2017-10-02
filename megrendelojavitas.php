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

<?php include_once('megrenedelojavitasform.php'); ?>

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
    $megrendelo = $javit->runQuery("SELECT * FROM megrendelo WHERE megrendelo_id = $eredmeny");
    $megrendelo->execute(array());
    $ujsor = $megrendelo->fetch(PDO::FETCH_ASSOC);
    $betesz = new Megrenedelo();

    if (isset($_POST['btn-rogzit'])) {
        try {
            foreach ($_POST AS $key => $value) {
                $megnevezes = strip_tags($_POST['megrendelocsaladi']);
                $megnevezes_id = $_POST['megrendelo_id'];
                $megrendelokereszt = strip_tags($_POST['megrendelokereszt']);
                $megrendelovaros = strip_tags($_POST['megrendelovaros']);
                $megrendeloutca = strip_tags($_POST['megrendeloutca']);
                $megrendelohazszam = strip_tags($_POST['megrendelohazszam']);
                $megrendeloemelet = strip_tags($_POST['megrendeloemelet']);
                $megrendeloemail = strip_tags($_POST['megrendeloemail']);
                $megrendelotelefon = strip_tags($_POST['megrendelotelefon']);
                $megrendelomobil = strip_tags($_POST['megrendelomobil']);
                $betesz->frissitDate($megnevezes, $megnevezes_id, $megrendelokereszt, $megrendelovaros,
                            $megrendeloutca, $megrendelohazszam, $megrendeloemelet, $megrendeloemail,
                            $megrendelotelefon, $megrendelomobil);
                $betesz->redirect('megrendelojavitas.php?joined.');

            }

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
                        Város
                    </th>
                    <th class="text-center">
                        Utca
                    </th>
                    <th class="text-center">
                        Házszsám
                    </th>
                    <th class="text-center">
                        Emelet
                    </th>
                    <th class="text-center">
                        Email
                    </th>
                    <th class="text-center">
                        Telefonszám
                    </th>
                    <th class="text-center">
                        Mobilszám
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
                        <input type="text" class="form-control" name="megrendelovaros" id="usr"
                               value="<?php echo $ujsor['megrendelovaros']; ?>" pattern="[A-Za-z, öÖüÜóÓőŐúÚéÉáÁűŰíÍ
                               \s]{3,20}" title="Betüket lehet beütni" required/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="megrendeloutca" id="usr"
                               value="<?php echo $ujsor['megrendeloutca']; ?>" pattern="[A-Za-z, öÖüÜóÓőŐúÚéÉáÁűŰíÍ
                               \s]{3,20}" title="Betüket lehet beütni" required/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="megrendelohazszam" id="usr"
                               value="<?php echo $ujsor['megrendelohazszam']; ?>"  pattern="[0-9\s]{1,50}" title="Számokat lehet beütni" required/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="megrendeloemelet" id="usr"
                               value="<?php echo $ujsor['megrendeloemelet']; ?>"  pattern="[0-9 / \s]{1,50}"
                               title="Számokat lehet beütni" required/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="megrendeloemail" id="usr"
                               value="<?php echo $ujsor['megrendeloemail']; ?>"   pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" class="form-control"
                               placeholder="Email*" id="email" required/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="megrendelotelefon" id="usr"
                               value="<?php echo $ujsor['megrendelotelefon']; ?>" pattern="[0-9  /-\s]{1,50}"
                               title="Számokat lehet beütni" required/>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="megrendelomobil" id="usr"
                               value="<?php echo $ujsor['megrendelomobil']; ?>" pattern="[0-9 - / \s]{1,50}"
                               title="Számokat lehet beütni" required/>
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
<?php }
include_once("raktarfooter.php");
?>
