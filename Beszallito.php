<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2017.10.07.
 * Time: 9:25
 */

require_once('dbconfig.php');

class Beszallito
{
    private $kapcsolodik;

    public function __construct()
    {
        $database = new Database();
        $db = $database->dbConnection();
        $this->kapcsolodik = $db;
    }

    public function runQuery($adatbazis)
    {
        $beszallito = $this->kapcsolodik->prepare($adatbazis);
        return $beszallito;
    }

    public function BeszallitoRogzit($beszallito_nev, $beszallito_kod, $beszallito_ido)
    {
        try {
            $beszallito = $this->kapcsolodik->prepare("INSERT INTO beszallitok (beszallito_nev,beszallito_kod,beszallito_ido) 
            VALUES(:beszallito_nev,:beszallito_kod,:beszallitzo_ido)");
            $beszallito->bindparam(":beszallito_nev", $beszallito_nev, PDO::PARAM_STR);
            $beszallito->bindparam(":beszallito_kod", $beszallito_kod, PDO::PARAM_STR);
            $beszallito->bindparam(":beszallitzo_ido", $beszallito_ido, PDO::PARAM_STR);

            $beszallito->execute();

            return $beszallito;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function BeszallitoTorol($beszallito_id)
    {

        try {
            $beszallito = $this->kapcsolodik->prepare("DELETE FROM beszallitok  WHERE  beszallito_id= :beszallito_id");
            $beszallito->bindparam(":beszallito_id", $beszallito_id, PDO::PARAM_STR);
            $beszallito->execute();

            return $beszallito;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function BeszallitoKerdez($beszallito_nev, $beszallito_id)
    {

        try {
            $beszallito = $this->kapcsolodik->prepare("SELECT *  FROM beszallitok ORDER BY beszallito_nev ASC");
            $beszallito->execute(array(':beszallito_nev' => $beszallito_nev, ':beszallito_id' => $beszallito_id));
            $beszallito->execute();

            return $beszallito;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function BeszallitoLeKerdez($beszallito_id)
    {

        try {
            $beszallito = $this->kapcsolodik->prepare("SELECT *  FROM beszallitok WHERE beszallito_id= :beszallito_id ");
            $beszallito->execute(array(':beszallito_id' => $beszallito_id));
            $beszallito->execute();

            return $beszallito;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function BeszallitoupDate($beszallito_nev, $beszallito_kod, $beszallito_id)
    {

        try {
            $beszallito = $this->kapcsolodik->prepare("UPDATE beszallitok  SET beszallito_nev= :beszallito_nev, beszallito_kod= :beszallito_kod, beszallito_id= :beszallito_id WHERE beszallito_id = :beszallito_id");
            $beszallito->bindparam(":beszallito_nev", $beszallito_nev);
            $beszallito->bindparam(":beszallito_kod", $beszallito_kod, PDO::PARAM_STR);
            $beszallito->bindparam(":beszallito_id", $beszallito_id);
            $beszallito->execute();

            return $beszallito;
        } catch (PDOException $beszallito) {
            echo $beszallito->getMessage("szar");
        }
    }


    public function redirect($url)
    {
        header("Location: $url");
        exit();
    }

    public function fetch($rs)
    {

        $row = mysqli_fetch_assoc($rs);
        return $row;
    }
}

