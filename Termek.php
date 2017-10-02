<?php
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.08.27.
 * Time: 19:32
 */

require_once('dbconfig.php');


class Termek
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
    }

    public function runQuery($adatbazis)
    {
        $bekeres = $this->conn->prepare($adatbazis);
        return $bekeres;
    }


    public function termekRogzit($termekneve, $termek_megyseg, $termek_ara_netto,
                                 $termek_date, $termek_mennyiseg, $termek_ujnetto)
    {
        try {
            $bekeres = $this->conn->prepare("INSERT INTO temektabla (termekneve,termek_megyseg,termek_ara_netto,termek_date,termek_mennyiseg,termek_ujnetto) 
            VALUES(:termek_megyseg,:termek_ara_netto,:termek_date,:termek_mennyiseg, :termek_ujnetto )");
            $bekeres->bindparam(":termekneve", $termekneve, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_megyseg", $termek_megyseg, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_ara_netto", $termek_ara_netto, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_date", $termek_date, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_mennyiseg", $termek_mennyiseg, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_ujnetto", $termek_mennyiseg, PDO::PARAM_STR);
            $bekeres->execute();

            return $bekeres;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function termekNevRogzit($megnevezes_id, $termekneve)
    {
        try {
            $bekeres = $this->conn->prepare("INSERT INTO temektabla (megnevezes_id,termekneve)  VALUES(:megnevezes_id,:termekneve)");
            $bekeres->bindparam(":megnevezes_id", $megnevezes_id, PDO::PARAM_STR);
            $bekeres->bindparam(":termekneve", $termekneve, PDO::PARAM_STR);
            $bekeres->execute();

            return $bekeres;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function termekTorol($termek_id)
    {

        try {
            $bekeres = $this->conn->prepare("DELETE FROM temektabla  WHERE  termek_id= :termek_id");
            $bekeres->bindparam(":termek_id", $termek_id);
            $bekeres->execute();

            return $bekeres;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function termekBeRogzit($termekneve)
    {
        try {
            $bekeres = $this->conn->prepare("INSERT INTO temektabla (termekneve)  VALUES(:termekneve)");
            $bekeres->bindparam(":termekneve", $termekneve);
            // $bekeres->bindparam(":termek_date", $termek_date);


            $bekeres->execute();

            return $bekeres;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @param $termekneve
     * @param $termek_id
     * @return mixed
     */
    public function termekleKerdez($termekneve, $termek_id)
    {

        try {
            $bekeres = $this->kapcsolat->prepare("SELECT *  FROM temektabla ORDER BY termekneve ASC");
            $bekeres->execute(array(':termekneve' => $termekneve, ':termek_id' => $termek_id));
            $bekeres->execute();

            return $bekeres;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function termKerdez($termek_id)
    {

        try {
            $bekeres = $this->kapcsolat->prepare("SELECT *  FROM temektabla ORDER BY termekneve ASC");
            $bekeres->execute(array(':termek_id' => $termek_id));
            $bekeres->execute();

            return $bekeres;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function termekKerdez($termekneve)
    {

        try {
            $bekeres = $this->conn->prepare("SELECT termek_id, megnevezes FROM temektabla ORDER BY termekneve ASC");
            $bekeres->execute(array(':megnevezes' => $termekneve));
            $bekeres->execute();

            return $bekeres;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function upDate($termekneve, $termek_id, $termek_ara_netto, $termek_mennyiseg, $termek_megyseg)
    {

        try {
            $bekeres = $this->conn->prepare("UPDATE temektabla  SET termekneve= :termekneve, termek_id= :termek_id, termek_ara_netto= :termek_ara_netto, termek_mennyiseg= :termek_mennyiseg, termek_megyseg= :termek_megyseg WHERE termek_id = :termek_id");
            $bekeres->bindparam(":termekneve", $termekneve);
            $bekeres->bindparam(":termek_id", $termek_id);
            $bekeres->bindparam(":termek_ara_netto", $termek_ara_netto);
            $bekeres->bindparam(":termek_mennyiseg", $termek_mennyiseg);
            $bekeres->bindparam(":termek_megyseg", $termek_megyseg);
            $bekeres->execute();

            return $bekeres;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function frissitDate($termek_id, $termek_ara_netto, $termek_mennyiseg, $termek_megyseg,
                                $osssznetto, $osszbrutto, $novekedes, $ujossznetto, $ujosszbrutto, $termek_ujnetto,
                                $tbrutto, $termek_date)
    {

        try {
            $bekeres = $this->conn->prepare("UPDATE temektabla  SET termek_id= :termek_id, termek_ara_netto= :termek_ara_netto, termek_mennyiseg= :termek_mennyiseg, termek_megyseg= :termek_megyseg,  osssznetto= :osssznetto, osszbrutto= :osszbrutto, novekedes= :novekedes, ujossznetto= :ujossznetto, ujosszbrutto= :ujosszbrutto, termek_ujnetto= :termek_ujnetto, tbrutto= :tbrutto, termek_date= :termek_date WHERE termek_id= :termek_id");
            $bekeres->bindparam(":termek_id", $termek_id, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_ara_netto", $termek_ara_netto, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_mennyiseg", $termek_mennyiseg, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_megyseg", $termek_megyseg, PDO::PARAM_STR);
            $bekeres->bindparam(":osssznetto", $osssznetto, PDO::PARAM_STR);
            $bekeres->bindparam(":osszbrutto", $osszbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":novekedes", $novekedes, PDO::PARAM_STR);
            $bekeres->bindparam(":ujossznetto", $ujossznetto, PDO::PARAM_STR);
            $bekeres->bindparam(":ujosszbrutto", $ujosszbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_ujnetto", $termek_ujnetto, PDO::PARAM_STR);
            $bekeres->bindparam(":tbrutto", $tbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_date", $termek_date,PDO::PARAM_STR);

            $bekeres->execute();

            return $bekeres;
        } catch (PDOException $e) {
            echo $e->getMessage();
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

