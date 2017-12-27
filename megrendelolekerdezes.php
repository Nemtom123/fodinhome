<?php
require_once("session.php");
require_once("Raktar.php");
require_once("Termek.php");
require_once("error.php");
require_once("Megrenedelo.php");
require_once("Kiadas.php");
require_once("Beszallito.php");
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
include_once("raktarheader.php"); ?>
<?php include_once("raktarmenu.php"); ?>
<br xmlns=""><br><br><br>
<div id="contact" class="container">
    <h3 class="text-center">Megrendelő raktár készlet</h3>
    <label class="text-center">Üdvözöllek : <?php print($userRow['user_name']); ?></label>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <form method="post" width="33%" align="center">
                <input type="text" placeholder="Keresés" name="find" class="input"
                       style="color:#aa0000;border-color: darkorange;"
                       onChange="this.form.submit()"></label>
                <table id="valaki" class="table table-bordered  table-hover" cellspacing="0" width="100%">
                    <thead class="alert-inverse">
                    <tr style="background-color: darkorange">
                        <th class="text-center">
                            #
                        </th>
                        <th class="text-center">
                            Megrendelő
                        </th>
                        <th class="text-center">
                            Termékneve
                        </th>
                        <th class="text-center">
                            Termék ára netto
                        </th>
                        <th class="text-center">
                            Mennyiség
                        </th>
                        <th class="text-center">
                            Új ár netto
                        </th>
                        <th class="text-center">
                            Új Mennyiség
                        </th>

                        <th class="text-center">
                            Kiadási idő
                        </th>
                    </tr>
                    <tfoot>
                    <th class="text-center">
                        #
                    </th>
                    <th class="text-center">
                        Megrendelő
                    </th>
                    <th class="text-center">
                        Termékneve
                    </th>
                    <th class="text-center">
                        Termék ára netto
                    </th>
                    <th class="text-center">
                        Mennyiség
                    </th>
                    <th class="text-center">
                        Új ár netto
                    </th>
                    <th class="text-center">
                        Új Mennyiség
                    </th>

                    <th class="text-center">
                        Kiadási idő
                    </th>
                    </tfoot>
                    </thead>
                    <?php
                    $legtobb = 100;
                    $termekek = new Termek();
                    $leker = $termekek->runQuery("SELECT count(*) AS db FROM temektabla ");
                    $leker->execute(array());
                    $darab = $leker->fetch(PDO::FETCH_ASSOC);
                    $maxoldal = $darab['db'] / $legtobb;
                    $oldal = isset($_GET['oldal']) ? abs((int)$_GET['oldal']) : 1;
                    if ($oldal <= 0) {
                        $oldal = 1;
                    } else if ($oldal >= $maxoldal) {
                        $oldal = $maxoldal;
                    }
                    $offset = ($oldal - 1) * $legtobb;

                    if (isset($_POST['find'])) {
                        $termek = new Termek();
                        $keres = $termek->runQuery("SELECT * FROM termekkiadas
                     LEFT JOIN temektabla ON termekkiadas.termek_id = temektabla.termek_id
                     LEFT JOIN megrendelo ON termekkiadas.megrendelo_id = megrendelo.megrendelo_id WHERE 
                     megrendelocsaladi LIKE  '%" . $_POST['find'] . "%'
                     OR megrendelokereszt LIKE  '%" . $_POST['find'] . "%'
                     OR termekneve LIKE  '%" . $_POST['find'] . "%'
                     ORDER BY `kiadas_id` DESC LIMIT " . $legtobb . " ");
                        $keres->execute(array());

                    } else {
                        $termek = new Termek();
                        $keres = $termek->runQuery("SELECT * FROM termekkiadas
                     LEFT JOIN temektabla ON termekkiadas.termek_id = temektabla.termek_id
                     LEFT JOIN megrendelo ON termekkiadas.megrendelo_id = megrendelo.megrendelo_id 
                     ORDER BY `kiadas_id` DESC LIMIT " . $legtobb . " ");
                        $keres->execute(array());
                    }
                    // $sor = $keres->fetch(PDO::FETCH_ASSOC);
                    $y = 1;
                    $txt = fopen("nyomtat.txt", "w");
                    while ($sor = $keres->fetch(PDO::FETCH_ASSOC)) {
                        $text = "";
                        ?>
                        <?php $bg_color = $y % 2 === 0 ? "orange" : "white";
                        echo ' <tbody><tr style="background-color:' . $bg_color . ';">';
                        ?>
                        <td>
                            <?php
                            print "<input type='hidden' name='szam' value='" . $y . "'>";
                            echo $y++;
                            ?>
                        </td>
                        <td>

                            <?php
                            print " <option name='nev'  value='" . $sor['megrendelo_id'] . "'>" . $sor['megrendelocsaladi'] .
                                " " . $sor['megrendelokereszt'] . "</option>";
                            ?>
                        </td>
                        <td>
                            <?php
                            print " <option  value='" . $sor['termek_id'] . "'>" . $sor['termekneve'] . "</option>";
                            ?>
                        </td>
                        <td>
                            <?php
                            print " <option value='" . $sor['termek_id'] . "'>" . $sor['regiar'] . "</option>";
                            ?>
                        </td>
                        <td>
                            <?php
                            print " <option  value='" . $sor['termek_id'] . "'>" . $sor['regi_db'] . "</option>";
                            ?>
                        </td>
                        <td>
                            <?php
                            print " <option  value='" . $sor['termek_id'] . "'>" . $sor['ujar'] . "</option>";
                            ?>
                        </td>
                        <td>
                            <?php
                            print " <option name='uj_db' value='" . $sor['termek_id'] . "'>" . $sor['uj_db'] . "</option>";
                            ?>
                        </td>
                        <td>
                            <?php
                            print " <option name='termek_date' value='" . $sor['termek_id'] . "'>" . $sor['termek_date'] . "</option>";
                            ?>
                        </td>
                        <?php
                        $text .= $sor['megrendelocsaladi'] . " " . $sor['megrendelokereszt'] . ";";
                        $text .= $sor['termekneve'] . ";";
                        $text .= $sor['regiar'] . ";";
                        $text .= $sor['regi_db'] . ";";
                        $text .= $sor['ujar'] . ";";
                        $text .= $sor['uj_db'] . ";";
                        $text .= $sor['termek_date'];
                        $text .= chr(10);
                        fwrite($txt, $text);
                    }
                    fclose($txt);
                    $oldalszam = 100;
                    $oldalszam2 = $oldalszam / 2;
                    $linkoffset = ($oldal > $oldalszam2) ? $oldal - $oldalszam / 2 : 0;
                    $linkend = $linkoffset + $oldalszam;

                    if ($maxoldal - $oldalszam2 < $oldal) {
                        $linkoffset = $maxoldal - $oldalszam;
                        if ($linkoffset < 0) {
                            $linkoffset = 0;
                        }
                        $linkend = $maxoldal;
                    }
                    echo '<p align=center style="">';
                    if ($oldal > 1) {
                        print "<a href='?oldal=" . ($oldal - 1) . " style='color: #9acfea'>Előző</a>";
                    }


                    for ($i = 1 + $linkoffset; $i <= $linkend and $i <= $maxoldal; $i++) {
                        $style = ($i == $oldal) ? "color: red" : "color: blue;";
                        print " <a class='paginate_button current' aria-controls='example' data-dt-idx='1' tabindex='0' href='?oldal=$i' style='$style'>$i.oldal</a>   ";

                    }
                    if ($oldal < $maxoldal) {
                        print "<a href='?oldal=" . ($oldal + 1) . " style='color: #9acfea'>Következő</a>";

                    }

                    ?>
                </table>
                <?php
                if (isset($_POST)) {

                    echo '<table id="valaki" class="table table-bordered  table-hover" cellspacing="0" width="100%">';
                    echo '<td class="text-center"><a href="PHPExcel-1.8/Examples/idopont.php"><img src="image/Excel-icon.png" width="100" height="100" target="button" class="btn btn-default"></a></td>';

                }
                ?>
                <td><a href="TCPDF-master/examples/pdf.php"><img src="image/Print.ico" class="center-block
                    btn-col-sm-6" width="100" height="100" class="img-circle" type="submit"></a></button>
                </td>
                </table>
            </form>
        </div>
    </div>

</div>
<?php
include_once("raktarfooter.php");
?>


