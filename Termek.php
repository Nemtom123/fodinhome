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
            $bekeres = $this->conn->prepare("SELECT *  FROM temektabla ORDER BY termekneve ASC");
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
            $bekeres = $this->conn->prepare("SELECT *  FROM temektabla WHERE termek_id= :termek_id");
            $bekeres->execute(array(':termek_id' => $termek_id));
            $bekeres->execute();

            return $bekeres;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function terKerdez($termek_id)
    {

        try {
            $bekeres = $this->conn->prepare("SELECT *  FROM temektabla WHERE termek_id= :termek_id");
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

    public function upDate($termekneve, $termek_id, $termek_ara_netto, $termek_mennyiseg, $termek_megyseg, $ujtermek,
                           $ujmennyiseg)
    {

        try {
            $bekeres = $this->conn->prepare("UPDATE temektabla  SET termekneve= :termekneve, termek_id= :termek_id, termek_ara_netto= :termek_ara_netto, termek_mennyiseg= :termek_mennyiseg, termek_megyseg= :termek_megyseg, termek_ujnetto= :termek_ujnetto, uj_termek_mennyiseg= :uj_termek_mennyiseg WHERE termek_id = :termek_id");
            $bekeres->bindparam(":termekneve", $termekneve);
            $bekeres->bindparam(":termek_id", $termek_id);
            $bekeres->bindparam(":termek_ara_netto", $termek_ara_netto);
            $bekeres->bindparam(":termek_mennyiseg", $termek_mennyiseg);
            $bekeres->bindparam(":termek_megyseg", $termek_megyseg);
            $bekeres->bindparam(":termek_ujnetto", $ujtermek);
            $bekeres->bindparam(":uj_termek_mennyiseg", $ujmennyiseg);

            $bekeres->execute();

            return $bekeres;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function frissitDate($termek_id, $termek_ara_netto, $termek_mennyiseg, $termek_megyseg,
                                $osssznetto, $osszbrutto, $novekedes, $tbrutto, $termek_date, $beszallito_id)
    {

        try {
            $bekeres = $this->conn->prepare("UPDATE temektabla  SET termek_id= :termek_id, termek_ara_netto= :termek_ara_netto, termek_mennyiseg= 
:termek_mennyiseg, termek_megyseg= :termek_megyseg,  osssznetto= :osssznetto, osszbrutto= :osszbrutto, novekedes= 
:novekedes, tbrutto= :tbrutto, termek_date= :termek_date, beszallito_id= :beszallito_id WHERE termek_id= :termek_id");
            $bekeres->bindparam(":termek_id", $termek_id, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_ara_netto", $termek_ara_netto, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_mennyiseg", $termek_mennyiseg, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_megyseg", $termek_megyseg, PDO::PARAM_STR);
            $bekeres->bindparam(":osssznetto", $osssznetto, PDO::PARAM_STR);
            $bekeres->bindparam(":osszbrutto", $osszbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":novekedes", $novekedes, PDO::PARAM_STR);
            $bekeres->bindparam(":tbrutto", $tbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_date", $termek_date,PDO::PARAM_STR);
            $bekeres->bindparam(":beszallito_id", 	$beszallito_id,PDO::PARAM_STR);


            $bekeres->execute();

            return $bekeres;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function frissitesekDate($termek_id, $termek_ujnetto, $uj_termek_mennyiseg,
                                    $ujossznetto, $ujosszbrutto, $novekedes, $ujtbrutto, $ujtermek_date,
                                    $ujbeszallito_id)
    {

        try {
            $bekeres = $this->conn->prepare("UPDATE temektabla  SET termek_id= :termek_id, termek_ujnetto= :termek_ujnetto, uj_termek_mennyiseg= 
:uj_termek_mennyiseg, ujossznetto= :ujossznetto, ujosszbrutto= :ujosszbrutto, novekedes= 
:novekedes, ujtbrutto= :ujtbrutto, ujtermekdate= :ujtermekdate, ujbeszallito_id= :ujbeszallito_id WHERE termek_id= 
:termek_id");
            $bekeres->bindparam(":termek_id", $termek_id, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_ujnetto", $termek_ujnetto, PDO::PARAM_STR);
            $bekeres->bindparam(":uj_termek_mennyiseg", $uj_termek_mennyiseg, PDO::PARAM_STR);
            $bekeres->bindparam(":ujossznetto", $ujossznetto, PDO::PARAM_STR);
            $bekeres->bindparam(":ujosszbrutto", $ujosszbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":novekedes", $novekedes, PDO::PARAM_STR);
            $bekeres->bindparam(":ujtbrutto", $ujtbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":ujtermekdate", $ujtermek_date,PDO::PARAM_STR);
            $bekeres->bindparam(":ujbeszallito_id", 	$ujbeszallito_id,PDO::PARAM_STR);


            $bekeres->execute();

            return $bekeres;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function termekUpDate($termek_id, $termek_ara_netto, $termek_mennyiseg, $osssznetto, $osszbrutto, $csokkenes, $ujossznetto, $ujosszbrutto, $termek_ujnetto,
                                $tbrutto, $novekedes, $uj_termek_mennyiseg, $ujtbrutto, $termekneve, $beszallito_id)
    {

        try {
            $bekeres = $this->conn->prepare("UPDATE temektabla  SET termek_id= :termek_id, termek_ara_netto= :termek_ara_netto, termek_mennyiseg= 
:termek_mennyiseg, osssznetto= :osssznetto, osszbrutto= :osszbrutto, csokkenes= :csokkenes,  ujossznetto= 
:ujossznetto, ujosszbrutto= :ujosszbrutto, termek_ujnetto= :termek_ujnetto, tbrutto= :tbrutto, novekedes= :novekedes,
 uj_termek_mennyiseg= :uj_termek_mennyiseg, ujtbrutto= :ujtbrutto, termekneve= :termekneve, beszallito_id= :bszallito_id WHERE termek_id= :termek_id");
            $bekeres->bindparam(":termek_id", $termek_id, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_ara_netto", $termek_ara_netto, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_mennyiseg", $termek_mennyiseg, PDO::PARAM_STR);
            $bekeres->bindparam(":osssznetto", $osssznetto, PDO::PARAM_STR);
            $bekeres->bindparam(":osszbrutto", $osszbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":csokkenes", $csokkenes, PDO::PARAM_STR);
            $bekeres->bindparam(":ujossznetto", $ujossznetto, PDO::PARAM_STR);
            $bekeres->bindparam(":ujosszbrutto", $ujosszbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_ujnetto", $termek_ujnetto, PDO::PARAM_STR);
            $bekeres->bindparam(":tbrutto", $tbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":novekedes", $novekedes, PDO::PARAM_STR);
            $bekeres->bindparam(":uj_termek_mennyiseg", $uj_termek_mennyiseg, PDO::PARAM_STR);
            $bekeres->bindparam(":ujtbrutto", $ujtbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":termekneve", $termekneve, PDO::PARAM_STR);
            $bekeres->bindparam(":beszallito_id", $beszallito_id, PDO::PARAM_STR);

            $bekeres->execute();

            return $bekeres;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    } public function termekkiadasUpDate($termek_id, $termek_ara_netto, $termek_mennyiseg, $osssznetto, $osszbrutto,
                                    $csokkenes, $ujossznetto, $ujosszbrutto, $termek_ujnetto,
                                $tbrutto, $novekedes, $uj_termek_mennyiseg, $ujtbrutto, $termekneve)
    {

        try {
            $bekeres = $this->conn->prepare("UPDATE temektabla  SET termek_id= :termek_id, termek_ara_netto= :termek_ara_netto, termek_mennyiseg= 
:termek_mennyiseg, osssznetto= :osssznetto, osszbrutto= :osszbrutto, csokkenes= :csokkenes,  ujossznetto= 
:ujossznetto, ujosszbrutto= :ujosszbrutto, termek_ujnetto= :termek_ujnetto, tbrutto= :tbrutto, novekedes= :novekedes,
 uj_termek_mennyiseg= :uj_termek_mennyiseg, ujtbrutto= :ujtbrutto, termekneve= :termekneve WHERE termek_id= :termek_id");
            $bekeres->bindparam(":termek_id", $termek_id, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_ara_netto", $termek_ara_netto, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_mennyiseg", $termek_mennyiseg, PDO::PARAM_STR);
            $bekeres->bindparam(":osssznetto", $osssznetto, PDO::PARAM_STR);
            $bekeres->bindparam(":osszbrutto", $osszbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":csokkenes", $csokkenes, PDO::PARAM_STR);
            $bekeres->bindparam(":ujossznetto", $ujossznetto, PDO::PARAM_STR);
            $bekeres->bindparam(":ujosszbrutto", $ujosszbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_ujnetto", $termek_ujnetto, PDO::PARAM_STR);
            $bekeres->bindparam(":tbrutto", $tbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":novekedes", $novekedes, PDO::PARAM_STR);
            $bekeres->bindparam(":uj_termek_mennyiseg", $uj_termek_mennyiseg, PDO::PARAM_STR);
            $bekeres->bindparam(":ujtbrutto", $ujtbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":termekneve", $termekneve, PDO::PARAM_STR);


            $bekeres->execute();

            return $bekeres;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
 public function termekekUpDate($termek_id, $termek_ara_netto, $termek_mennyiseg, $osssznetto, $osszbrutto, $ujossznetto, $ujosszbrutto, $termek_ujnetto,
                                $tbrutto, $novekedes, $uj_termek_mennyiseg, $ujtbrutto, $beszallito_id)
    {

        try {
            $bekeres = $this->conn->prepare("UPDATE temektabla  SET termek_id= :termek_id, termek_ara_netto= :termek_ara_netto, termek_mennyiseg= 
:termek_mennyiseg, osssznetto= :osssznetto, osszbrutto= :osszbrutto,  ujossznetto= 
:ujossznetto, ujosszbrutto= :ujosszbrutto, termek_ujnetto= :termek_ujnetto, tbrutto= :tbrutto, novekedes= :novekedes,
 uj_termek_mennyiseg= :uj_termek_mennyiseg, ujtbrutto= :ujtbrutto, beszallito_id= :bszallito_id WHERE termek_id= :termek_id");
            $bekeres->bindparam(":termek_id", $termek_id, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_ara_netto", $termek_ara_netto, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_mennyiseg", $termek_mennyiseg, PDO::PARAM_STR);
            $bekeres->bindparam(":osssznetto", $osssznetto, PDO::PARAM_STR);
            $bekeres->bindparam(":osszbrutto", $osszbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":ujossznetto", $ujossznetto, PDO::PARAM_STR);
            $bekeres->bindparam(":ujosszbrutto", $ujosszbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":termek_ujnetto", $termek_ujnetto, PDO::PARAM_STR);
            $bekeres->bindparam(":tbrutto", $tbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":novekedes", $novekedes, PDO::PARAM_STR);
            $bekeres->bindparam(":uj_termek_mennyiseg", $uj_termek_mennyiseg, PDO::PARAM_STR);
            $bekeres->bindparam(":ujtbrutto", $ujtbrutto, PDO::PARAM_STR);
            $bekeres->bindparam(":beszallito_id", $beszallito_id, PDO::PARAM_STR);

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

