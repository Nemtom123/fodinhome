<?php
require_once("session.php");
require_once("Raktar.php");
require_once("Termek.php");
require_once("error.php");
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
include_once ("raktarheader.php");
?>

<!-- Start Navigation -->
<?php include_once ("raktarmenu.php");?>
<br/><br><br><br>
<!-- Container (Contact Section) -->
<?php

$javit = new Raktar();

$keres = $javit->runQuery("SELECT * FROM megnevezes ORDER BY megnevezes ASC");
$keres->execute(array());


include ("termekkiadasform.php");
include_once ("raktarfooter.php");
?>
