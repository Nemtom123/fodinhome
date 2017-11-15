<?php
require_once('Megrenedelo.php');
$megrendelobeker = new Megrenedelo();
session_start();
$eredmeny = array();
if (!empty($_POST['globalis_megrendelo_tomb'])) {

    $globalis_megrendelo_tomb = $_POST['globalis_megrendelo_tomb'];
    $bekeres = $megrendelobeker->runQuery("SELECT * FROM megrendelo WHERE megrendelo_id = (".$globalis_megrendelo_tomb.") ");
    $bekeres->execute(array());
    $eredmeny = $bekeres->fetch(PDO::FETCH_ASSOC);
}

print json_encode( array("eredmeny" => $eredmeny,"i" => $_POST['i']  ) );
?>