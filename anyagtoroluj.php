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
<body>
<!-- Start Navigation -->
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
    <h3 class="text-center">Megnevezés csoport javítás</h3>
    <label class="text-center">Üdvözöllek : <?php print($userRow['user_name']); ?></label>
    <div class="row">
    </div>
</div>

<?php include_once('anyagmodositform3.php'); ?>

<br>
<?php

if (isset($_POST['jav'])) {

    $eredmeny_id = $_POST['jav'];
    $keres = $javit->runQuery("SELECT * FROM megnevezes WHERE megnevezes_id = $eredmeny_id");
    $keres->execute(array());
    $ujsor = $keres->fetch(PDO::FETCH_ASSOC);
    $torol = new Raktar();


    if (isset($_POST['btn-rogzit'])) {
        $megnevezes = strip_tags($_POST['felulir']);
        $megnevezes_id = $_POST['felulir_id'];

        if ($megnevezes == '') {
            $error[] = "Ne hagyd üresen kérlek !";
        } else {
            try {
                $leker = $torol->runQuery("SELECT megnevezes FROM megnevezes WHERE megnevezes=:megnevezes ORDER BY megnevezes DESC ");
                $leker->execute(array(':megnevezes' => $megnevezes));
                $row = $leker->fetch(PDO::FETCH_ASSOC);

                if ($row['megnevezes'] != $megnevezes) {
                    $error[] = "Létezik ez a megnevezés:" . " $megnevezes ";
                } else {
                    if ($torol->megnevezesTorol($megnevezes_id)) {
                        $torol->redirect('anyagtoroluj.php?joined');

                    } else if (isset($_GET['joined'])) {
                        ?>
                        <div class=" btn-alert alert-info">
                            <i class="glyphicon 	glyphicon glyphicon-thumbs-up">-</i>Sikeres rögzítés-<b onChange="this
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
            <table class="table table-bordered  table-hover" id="tab_logic">
                <thead class="alert-info">
                <tr>
                    <th class="text-center">
                        #
                    </th>
                    <th class="text-center">
                        Megnevezési csoport törlés
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
            type="submit">Töröl
    </button>
    </div>
    </form>
<?php } ?>
<!-- Start Footer -->

<br><br><br><br><br><br><br><br><br><br><br><br>
<div class="clearfix"></div>
<!-- Start Footer -->
<footer class="footer" style="background-color: #FFFFFF">
    <div class="text-center" style="background-color:#FFFFFF">
        <a class="up-arrow" href="kontakt.php" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up" style="color: #2f6f9f"></span>
        </a>
        <p style="color: #2f6f9f; background-color: #FFFFFF">Licenced by FODIN HOME KFT</p>
    </div>
</footer>

<!-- End Footer -->

<!-- Placed at the end of the document so the pages load faster -->
<script type="bootsnav-master/text/javascript" src="bootsnav-master/js/jquery.min.js"></script>
<script type="text/javascript" src="bootsnav-master/js/bootstrap.min.js"></script>
<!-- Bootsnavs -->
<script src="bootsnav-master/js/bootsnav.js"></script>

<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>


</body>
</html>
