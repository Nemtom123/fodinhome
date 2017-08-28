<?php
include_once ("levelezesheader.php");
?>
<body>
<!-- Start Navigation -->

<?php
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.07.05.
 * Time: 11:35
 */
include_once ("menu.php");

echo ' <div align="center"><br><br>';


print ("<FORM METHOD='POST' ACTION='levelezes.php'>");

echo '<h4 align="center" style="color:grey">Üzenet küldés</h4>';

if ($_POST['ironeve'] == '' and $_POST['varos'] == '' and $_POST['utca'] == '' and $_POST['hazszam'] == '' and
    $_POST['email'] == ''

) {

}
else {
    echo ' <div align="center">';

}

if ($_POST['ironeve'] == ''){
    echo '<div class="cell" >

                        <div class="input-control modern text iconic" data - role = "input";>
                          <input type = "text">
                            <span class="label">Név</span>
                            <span class="informer">Név</span>
                            <span class="placeholder"  style="color:red">Nem töltötted ki!</span >
                            <span class="icon mif-user" ></span >
                       </div >';
} elseif ($_POST['ironeve'] == (preg_match("/^[a-zA-Z\s*\ öÖüÜóÓőŐúÚéÉáÁűŰíÍ-]*$/", $_POST['ironeve']))) {
    echo '   <h4 align="center">Nem jól töltöttedki az ürlapot!</h4>';
    echo '<div class="cell" >

                        <div class="input-control modern text iconic" data - role = "input";>
                            <input type = "text" >
                            <span class="placeholder"  style="color:red">Rossz karaktert írtál!</span >
                            <span class="icon mif-user" ></span >
                       </div >';
} elseif ($_POST['ironeve'] != (!preg_match('/^[0-9^\/]*$/', $_POST['ironeve']))) {
    echo '   <h4 align="center">Nem jól töltöttedki az ürlapot!</h4>';
    echo '<div class="cell" >

                        <div class="input-control modern text iconic" data - role = "input";>
                            <input type = "text"  >
                            <span class="placeholder"  style="color:red">Rossz karakter!</span >
                            <span class="icon mif-user" ></span >
                       </div >';
} else {

    echo '<div class="cell" >

                        <div class="input-control modern text iconic" data-role="input"  ;>

                             <input type="text" name="visszanev" style="color: #00A048 " value="' . $_POST['ironeve'] . '">
                            <span class="label">Név</span>
                            <span class="informer">Kérlek írd be a neved.</span>
                            
                           <span class="placeholder" style="color: #00A048" name="visszanev" >' . $_POST['ironeve'] . '</span>
                            <span class="icon mif-user"></span>
                        </div>
                    </div>';
    $ironeve = $_POST['ironeve'];
}


if ($_POST['varos'] == '') {

    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="varos">
                            <span class="label">Város</span>
                            <span class="informer">Város</span>
                            <span class="placeholder" name="varos" style="color: red">Nem töltötted ki!</span>
                            <span class="icon mif-home"></span>
                        </div>
                    </div>';

} elseif ($_POST['varos'] == (preg_match("/^[a-zA-Z\s*\ öÖüÜóÓőŐúÚéÉáÁűŰíÍ-]*$/", $_POST['varos']))) {

    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="varos">
                            <span class="label">Város</span>
                            <span class="informer">Város</span>
                            <span class="placeholder" name="varos" style="color: red">Rossz karakter!</span>
                            <span class="icon mif-home"></span>
                        </div>
                    </div>';

} elseif ($_POST['varos'] != (!preg_match('/^[0-9^\/]*$/', $_POST['varos']))) {

    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="varos">
                            <span class="label">Város</span>
                            <span class="informer">Város</span>
                            <span class="placeholder" name="varos" style="color: red">Rossz karakter!</span>
                            <span class="icon mif-home"></span>
                        </div>
                    </div>';

} else {
    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input" >
                            <input type="text" name="visszavaros" style="color: #00A048" value="' . $_POST['varos'] . '">
                            <span class="label">Város</span>
                            <span class="informer" style="color:green">Város</span>
                            <span class="placeholder" name="varos" style="color: #00A048">' . $_POST['varos'] . '</span>
                            <span class="icon mif-home"></span>
                        </div>
                    </div>';
    $varos = $_POST['varos'];
}

if ($_POST['utca'] == '') {

    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input" >
                            <input type="text" name="utca">
                            <span class="label">Utca</span>
                            <span class="informer">Utca neve?</span>
                            <span class="placeholder" name="utc" style="color: red">Nem töltötted ki!</span>
                            <span class="icon mif-home"></span>
                        </div>
                             </div>';

} elseif ($_POST['utca'] == (preg_match("/^[a-zA-Z\s*\ öÖüÜóÓőŐúÚéÉáÁűŰíÍ-]*$/", $_POST['utca']))) {

    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="utca">
                            <span class="label">Utca</span>
                            <span class="informer">Utca neve?</span>
                            <span class="placeholder" name="utc" style="color: red">Rossz karakter!</span>
                            <span class="icon mif-home"></span>
                        </div>
                             </div>';

} elseif ($_POST['utca'] != (!preg_match('/^[0-9^\/]*$/', $_POST['utca']))) {


    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="utca">
                            <span class="label">Utca</span>
                            <span class="informer">Utca neve?</span>
                            <span class="placeholder" name="utc" style="color: red">Rossz karakter!</span>
                            <span class="icon mif-home"></span>
                             </div>
                             </div>';

} else {

    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input" >
                            <input type="text" name="visszautca" style="color: #00A048 " value="' . $_POST['utca'] . '" >
                            <span class="label">Utca neve?</span>
                            <span class="informer">Utca neve?</span>
                            <span class="placeholder" style="color: #00A048" >' . $_POST['visszautca'] . '</span>
                            <span class="icon mif-home"></span>
                        </div>
                    </div>';
    $utca = $_POST['utca'];
}

if ($_POST['hazszam'] == '') {
    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="hazszam">
                            <span class="label">Házszám</span>
                            <span class="informer">Házszám</span>
                            <span class="placeholder" style="color: red">Ne hagyd üresen!</span>
                            <span class="icon mif-home " ></span>
                        </div>
                    </div>';
} elseif ($_POST['hazszam'] == (preg_match("/^[a-zA-Z\s*\ öÖüÜóÓőŐúÚéÉáÁűŰíÍ-]*$/", $_POST['hazszam']))) {
    echo '<div class="cell">
                              <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="hazszam">
                            <span class="label">Házszám</span>
                            <span class="informer">Házszám</span>
                            <span class="placeholder" style="color: red">Rossz karaktert ütöttél!</span>
                            <span class="icon mif-home " ></span>
                               </div>
                              </div>';
} elseif ($_POST['hazszam'] == (!preg_match('/^[0-9^\/]*$/', $_POST['hazszam']))) {
    echo '<div class="cell">
                              <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="hazszam">
                            <span class="label">Házszám</span>
                            <span class="informer">Házszám</span>
                            <span class="placeholder" style="color: red">Rossz karaktert ütöttél!</span>
                            <span class="icon mif-home " ></span>
                               </div>
                              </div>';
} else {
    echo '<div class="cell">
                              <div class="input-control modern text iconic" data-role="input" >
                                <input type="text"  name="visszahazszam" style="color: #00A048 " value="' . $_POST['hazszam'] . '">
                            <span class="label">Házszám</span>
                            <span class="informer">Házszám</span>
                            <span class="placeholder" style="color: #00A048">' . $_POST['hazszam'] . '</span>
                            <span class="icon mif-home " ></span>
                               </div>
                              </div>';
    $hazszam = $_POST['hazszam'];
}

if ($_POST['mail'] == '') {

    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="mail">
                            <span class="label">E-mail!</span>
                            <span class="informer">E-mail</span>
                            <span class="placeholder" style="color:red" >Nem töltötted ki!</span>
                            <span class="icon mif-mail"></span>
                        </div>
                    </div>';

} elseif ($_POST['mail'] == (preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $_POST['mail']))) {
    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="mail">
                            <span class="label">E-mail</span>

                            <span class="placeholder" style="color:red" >Nem valós az email!</span>
                            <span class="icon mif-mail"></span>
                        </div>
                    </div>';
} else {
    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input" >
                            <input type="text" name="visszamail" style="color: #00A048 " value="' . $_POST['mail'] . '" >
                            <span class="label">E-mail!</span>

                            <span class="placeholder" style="color: #00A048" >' . $_POST['mail'] . '</span>
                            <span class="icon mif-mail"></span>
                        </div>
                    </div>';
    $mail = $_POST['mail'];
}


echo '
                    <br><br>
                      <div align="center"><span class="placeholder" >Üzenet írása</span></div>
                      <br>';
include 'db.inc.php';

if (!($connection = @mysql_connect($hostName, $username, $password))) {
    echo(mysql_error());
}
if (!mysql_select_db($databaseName, $connection)) {
    echo(mysql_error());
}
$utolso_id = mysql_result(mysql_query("SELECT * FROM Level order by level_id desc limit 0,1"), 0);

$query = "SELECT * FROM Level WHERE level_id=" . $utolso_id . "  ";
if (!($result = @mysql_query($query, $connection))) {
    echo(mysql_error());
}
$sor = @mysql_fetch_array($result);


if ($_POST['iras'] == '') {
    echo $_POST['iras'];
    echo '<div align="center">
                    <div class="input-control textarea" name="iras">
                   <textarea style="width: 300px; margin: 0; height: 109px; color: red" >Nem írtál semmit!</textarea>
                   </div>';
} elseif ($_POST['iras'] == $sor['iras']) {
    echo '<div align="center">
                    <div class="input-control textarea" name="visszairas">
                   <textarea style="width: 300px; margin: 0; height: 109px; color: red" name="visszairas" >Ezt a szőveget rögzítettük</textarea>
                   </div>';

} elseif ($_POST['iras'] != $sor['iras']) {
    echo '<div align="center">
                    <div class="input-control textarea" name="visszairas">
                   <textarea style="width: 300px; margin: 0; height: 109px; color: #00A048" name="visszairas" >' . $_POST['iras'] . '</textarea>
                   </div>';
    $iras = $_POST['iras'];
}


echo '</div>
                   <br><br>
<div align="center"><button class="button danger block-shadow-danger text-shadow">Vissza</button></div>
<br><br>
          ';

if (!empty($ironeve) and !empty($varos) and !empty($utca) and !empty($hazszam)
    and !empty($mail) and !empty($iras)
) {

    mysql_query("

    INSERT INTO `Level` (`iro_neve`, `varos`, `utca`, `hazszam`, `mail`, `iras`, `ldatum`)
     VALUES ('$ironeve', '$varos', '$utca', '$hazszam', '$mail', '$iras', NOW());

   ");
}
?>


<div class="clearfix"></div>
<br><br><br><br>
<?php include_once ("footer.php"); ?>