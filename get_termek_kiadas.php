<?php

require_once('Termek.php');
$termekbeker = new Termek();
session_start();
if (!empty($_POST['netto'])) {

    $termek_id = $_POST['netto'];
    $bekeres = $termekbeker->runQuery("SELECT * FROM temektabla WHERE termek_id = $termek_id and novekedes != 0 " );
    $bekeres->execute(array());
    $adat = $bekeres->fetch(PDO::FETCH_ASSOC);

}

print json_encode( array("adat" => $adat, "i" => $_POST['i'] ) );





?>
