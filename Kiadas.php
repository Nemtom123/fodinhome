<?php
require_once('dbconfig.php');
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017.10.15.
 * Time: 7:32
 */
class Kiadas
{
    private $kapcsolodas;

    public function __construct()
    {
        $database = new Database();
        $db = $database->dbConnection();
        $this->kapcsolodas = $db;
    }

    public function runQuery($adatbazis)
    {
        $kiadas = $this->kapcsolodas->prepare($adatbazis);
        return $kiadas;
    }
    public function kiadasRogzit($megrendelo_id, $termek_id, $mennyiseg, $kiadasi_ido, $regiar, $ujar)
    {
        try {
            $kiadas = $this->kapcsolodas->prepare("INSERT INTO termekkiadas (megrendelo_id,termek_id,mennyiseg,kiadasi_ido,regiar,ujar) 
            VALUES(:megrendelo_id,:termek_id,:mennyiseg,:kiadasi_ido,:regiar,:ujar)");

            $kiadas->bindparam(":megrendelo_id", $megrendelo_id, PDO::PARAM_STR);
            $kiadas->bindparam(":termek_id", $termek_id, PDO::PARAM_STR);
            $kiadas->bindparam(":mennyiseg", $mennyiseg, PDO::PARAM_STR);
            $kiadas->bindparam(":kiadasi_ido", $kiadasi_ido, PDO::PARAM_STR);
            $kiadas->bindparam(":regiar", $regiar, PDO::PARAM_STR);
            $kiadas->bindparam(":ujar", $ujar, PDO::PARAM_STR);

            $kiadas->execute();

            return $kiadas;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}