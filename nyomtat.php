<?php
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.12.09.
 * Time: 13:59
 */
if (isset($_POST)) {
$i = 0;
for ($i=1;$i<=$_POST['szam']; $i++){
    echo '<pre>';
        print_r($_POST['0']);
    echo '</pre>';
}
$txt = fopen("nyomtat.txt", "w");
    foreach ($_POST AS $value ) {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        $text = $_POST['megrendelo'] . " " . $_POST['termekneve'] . " " . $_POST['regiar'] . " " . $_POST['regi_db'] . " " . $_POST['ujar'] . " " . $_POST['uj_db'] . " " . $_POST['termek_date'] . "\n";
        fwrite($txt, $text);
    }
    fclose($txt);
}