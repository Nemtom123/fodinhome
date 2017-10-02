<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017.09.23.
 * Time: 10:25
 */


require_once('Termek.php');
$db_handle = new Termek();
session_start();
if (!empty($_POST['netto'])) {

    $termek_id = $_POST['netto'];
    $bekeres = $db_handle->runQuery("SELECT * FROM temektabla WHERE termek_id = $termek_id");
    $bekeres->execute(array());
    $adat = $bekeres->fetch(PDO::FETCH_ASSOC);

}
print json_encode( array("adat" => $adat, "i" => $_POST['i'] ) );

?>


