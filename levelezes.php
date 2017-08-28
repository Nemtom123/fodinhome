<?php include_once ("levelezesheader.php");?>
<body>
<!-- Start Navigation -->
<?php include_once ("menu.php");?>

<?php

/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.06.12.
 * Time: 13:27
*/



if (!empty($_POST['visszanev']) and !empty($_POST['visszavaros']) and !empty($_POST['visszautca']) and !empty($_POST['visszahazszam'])
    and !empty($_POST['visszamail']) and !empty($_POST['visszairas'])
) {
    echo '<meta http-equiv="refresh" content="0; url="iras.php" />';
}
?>


    <table width="100%" align="center">
        <tr>
            <div width="100%">

                <br><br>

<?php
print ("<FORM METHOD='POST' ACTION='levelezesfeldolgozas.php'>");

echo ' <div align="center">
                     <h4 align="center" style="color:grey">Kérjen árajánlatot</h4>';

if (isset($_POST['visszanev'])) {
    echo '<div class="cell" >

                        <div class="input-control modern text iconic" data-role="input";>
                            <input type="text" name="ironeve" style="color: #00A048" value="' . $_POST['visszanev'] . '">
                            <span class="label">Név</span>
                            <span class="informer">Kérlek írd be a neved.</span>

                           <span class="placeholder" style="color: #00A048">' . $_POST['visszanev'] . '</span>
                            <span class="icon mif-user"></span>
                        </div>
                    </div>';
} else {
    echo '<div class="cell" >

                        <div class="input-control modern text iconic" data-role="input";>
                            <input type="text" name="ironeve">
                            <span class="label">Név</span>
                            <span class="informer">Kérlek írd be a neved.</span>

                           <span class="placeholder" name="ironeve">Kérlek írd be a neved</span>
                            <span class="icon mif-user"></span>
                        </div>
                    </div>';
}

if (isset($_POST['visszavaros'])) {
    echo '<div class="cell" >

                        <div class="input-control modern text iconic" data-role="input";>
                            <input type="text" name="varos" style="color: #00A048" value="' . $_POST['visszavaros'] . '">
                            <span class="label">Város</span>
                            <span class="informer">Város nevét írd be:)</span>

                           <span class="placeholder" style="color: #00A048">' . $_POST['visszavaros'] . '</span>
                            <span class="icon mif-home"></span>
                        </div>
                    </div>';
} else {
    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="varos">
                            <span class="label">Város </span>
                            <span class="informer">Város nevét írd be:)</span>
                            <span class="placeholder" >Város/Helység</span>
                            <span class="icon mif-home"></span>
                        </div>
                    </div>';
}
if (isset($_POST['visszautca'])) {

    echo '<div class="cell" >

                        <div class="input-control modern text iconic" data-role="input";>
                            <input type="text" name="utca" style="color: #00A048" value="' . $_POST['visszautca'] . '">
                            <span class="label">Utca</span>
                            <span class="informer">Utca:)</span>

                           <span class="placeholder" style="color: #00A048">' . $_POST['visszautca'] . '</span>
                            <span class="icon mif-home"></span>
                        </div>
                    </div>';
} else {
    echo '<div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="utca">
                            <span class="label">Utca</span>
                            <span class="informer">Utca</span>
                            <span class="placeholder" >Utca neve</span>
                            <span class="icon mif-home"></span>
                        </div>
                    </div>';
}


if (isset($_POST['visszahazszam'])) {

    echo '<div class="cell" >

                        <div class="input-control modern text iconic" data-role="input";>
                            <input type="text" name="hazszam" style="color: #00A048" value="' . $_POST['visszahazszam'] . '">
                            <span class="label"></span>
                            <span class="informer">Házszám:)</span>

                           <span class="placeholder" style="color: #00A048">' . $_POST['visszahazszam'] . '</span>
                            <span class="icon mif-home"></span>
                        </div>
                    </div>';
} else {
    echo ' <div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="hazszam">
                            <span class="label">Házszám</span>
                            <span class="informer">Házszám</span>
                            <span class="placeholder">Írd be a házszámot</span>
                            <span class="icon mif-home " ></span>
                        </div>
                    </div>';
}


if (isset($_POST['visszamail'])) {

    echo '<div class="cell" >

                        <div class="input-control modern text iconic" data-role="input";>
                            <input type="text" name="mail" style="color: #00A048" value="' . $_POST['visszamail'] . '">
                            <span class="label"></span>
                            <span class="informer">Mail:)</span>

                           <span class="placeholder" style="color: #00A048">' . $_POST['visszamail'] . '</span>
                            <span class="icon mif-home"></span>
                        </div>
                    </div>';
} else {
    echo '
                    <div class="cell">
                        <div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="mail">
                            <span class="label">E-mail</span>
                            <span class="informer">E-mail</span>
                            <span class="placeholder" >E-mail cím</span>
                            <span class="icon mif-mail"></span>
                        </div>
                    </div>';

}

echo '<br><br>

                      <div align="center"><span class="placeholder" style="color: grey" >Üzenet írása</span></div>
                      <br><hr>';
if (!isset($_POST['visszairas'])) {
    echo '<div align="center">
                    <div class="input-control textarea" name="iras">
                   <textarea style="width: 300px; margin: 0; height: auto;" name="iras" >' . $_POST['visszairas'] . '</textarea>
                   </div>
                   </div>';
} else {
    echo '<div align="center">
                    <div class="input-control textarea" name="iras">
                   <textarea style=" width: 300px; margin: 0; height:auto;" name="iras" >' . $_POST['visszairas'] . '</textarea>
                   </div>
                   </div>';

}

echo ' <br><br>
<div align="center"><button class="button danger block-shadow-danger text-shadow">Rögzít</button></div>
<br><br>
          ';


echo '
</td>
</tr>
</table>';

if ($_POST['nev'] == '') {
    $szoveg = $_POST['nev'];


}

$szoveg = "Nem töltötted ki";

?>

                <div class="clearfix"></div>
                <br><br><br><br><br><br><br><br>
                <div class="clearfix"</div>

        </tr>
    </table>
<!-- Start Footer -->
<?php
        include_once ("footer.php");
?>