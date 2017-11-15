<?php
require_once('Beszallito.php');
$megrendelobeker = new Beszallito();
session_start();
$eredmeny = array();
if (!empty($_POST['globalis_megrendelo_tomb'])) {

    $globalis_megrendelo_tomb = $_POST['globalis_megrendelo_tomb'];
    $bekeres = $megrendelobeker->runQuery("SELECT * FROM beszallitok WHERE beszallito_id = (".$globalis_megrendelo_tomb
        .") ");
    $bekeres->execute(array());
    $eredmeny = $bekeres->fetch(PDO::FETCH_ASSOC);
}

print json_encode( array("eredmeny" => $eredmeny,"i" => $_POST['i']  ) );
?>