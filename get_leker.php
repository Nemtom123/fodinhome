<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017.10.25.
 * Time: 7:22
 */
require_once('Termek.php');
$getbeker = new Termek();
session_start();

if (!empty($_POST['globalis_leker'])) {

    $globalis_leker = $_POST['globalis_leker'];
    $bekeres = $getbeker->runQuery("SELECT * FROM temektabla WHERE termek_id = $globalis_leker");
    $bekeres->execute(array());
    $rendelo = $bekeres->fetch(PDO::FETCH_ASSOC);

}
print json_encode( array("rendelo" => $rendelo['termek_mennyiseg'], "i" => $_POST['i'] ) );
?>