<?php
require_once('Termek.php');
$termekbeker = new Termek();
session_start();
$erkezik = array();
if (!empty($_POST['globalis_termek_tomb'])) {

    $globalis_termek_tomb = $_POST['globalis_termek_tomb'];
    if ( substr($globalis_termek_tomb,-1) == ","){
        $globalis_termek_tomb = substr($globalis_termek_tomb,0, -1);
    }
    $le = $termekbeker->runQuery("SELECT * FROM temektabla WHERE  termek_id NOT IN (".$globalis_termek_tomb.") and termek_mennyiseg > 0  ORDER BY termekneve ");

    $le->execute(array());
    while ($sor = $le->fetch(PDO::FETCH_ASSOC)) {
        array_push( $erkezik, array( "termek_id" => $sor['termek_id'], "termekneve" => $sor['termekneve'] ) );
    }
}
print json_encode(array("erkezik" =>$erkezik,"i" => $_POST['i']));
?>

