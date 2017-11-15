<?php
require_once('Beszallito.php');
$beszallitobekeres = new Beszallito();
session_start();
$eredmeny = array();
if (!empty($_POST['globalis_beszallito_tomb'])) {

    $globalis_beszallito_tomb = $_POST['globalis_beszallito_tomb'];
    $bekeres = $beszallitobekeres->runQuery("SELECT * FROM beszallitok WHERE beszallito_id = ("
        .$globalis_beszallito_tomb.") ");
    $bekeres->execute(array());
    $eredmeny = $bekeres->fetch(PDO::FETCH_ASSOC);
}

print json_encode( array("eredmeny" => $eredmeny,"i" => $_POST['i']  ) );
?>