<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017.10.22.
 * Time: 10:56
 */
require_once('Megrenedelo.php');
$megrendelobeker = new Megrenedelo();
session_start();

if (!empty($_POST['megrendelo'])) {

    $megrendelo_id = $_POST['megrendelo'];
    $bekeres = $megrendelobeker->runQuery("SELECT * FROM megrendelo WHERE megrendelo_id = $megrendelo_id");
    $bekeres->execute(array());
    $rendelo = $bekeres->fetch(PDO::FETCH_ASSOC);

}
print json_encode( array("rendelo" => $rendelo['megrendelocsaladi'], "i" => $_POST['i'] ) );
?>