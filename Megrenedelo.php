<?php

/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.09.09.
 * Time: 19:29
 */

require_once('dbconfig.php');

class Megrenedelo
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
        $megrendelo = $this->kapcsolodas->prepare($adatbazis);
        return $megrendelo;
    }


    public function megrendeloRogzit($megrendelocsaladi, $megrendelokereszt, $megrendelokod, $megrendelodate)
    {
        try {
            $megrendelo = $this->kapcsolodas->prepare("INSERT INTO megrendelo (megrendelocsaladi,megrendelokereszt,	megrendelokod,megrendelodate) 
            VALUES(:megrendelocsaladi,:megrendelokereszt,:megrendelokod,:megrendelodate )");

            $megrendelo->bindparam(":megrendelocsaladi", $megrendelocsaladi, PDO::PARAM_STR);
            $megrendelo->bindparam(":megrendelokereszt", $megrendelokereszt, PDO::PARAM_STR);
            $megrendelo->bindparam(":megrendelokod", $megrendelokod, PDO::PARAM_STR);
            $megrendelo->bindparam(":megrendelodate", $megrendelodate, PDO::PARAM_STR);
            $megrendelo->execute();

            return $megrendelo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function megrendeloTorol($megrendelo_id)
    {

        try {
            $megrendelo = $this->kapcsolodas->prepare("DELETE FROM megrendelo  WHERE  megrendelo_id= :megrendelo_id");
            $megrendelo->bindparam(":megrendelo_id", $megrendelo_id);
            $megrendelo->execute();

            return $megrendelo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function megrendeloBeRogzit($megrendelocsaladi)
    {
        try {
            $megrendelo = $this->kapcsolodas->prepare("INSERT INTO megrendelo (megrendelocsaladi)  VALUES(:megrendelocsaladi)");
            $megrendelo->bindparam(":megrendelocsaladi", $megrendelocsaladi);


            $megrendelo->execute();

            return $megrendelo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function megrendeloleKerdez($megrendelocsaladi, $megrendelo_id)
    {

        try {
            $megrendelo = $this->kapcsolodas->prepare("SELECT *  FROM megrendelo ORDER BY megrendelocsaladi ASC");
            $megrendelo->execute(array(':megrendelocsaladi' => $megrendelocsaladi, ':megrendelo_id' => $megrendelo_id));
            $megrendelo->execute();

            return $megrendelo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function megrendeloKerdez($megrendelocsaladi)
    {

        try {
            $megrendelo = $this->kapcsolodas->prepare("SELECT $megrendelocsaladi FROM megrendelo ORDER BY $megrendelocsaladi ASC");
            $megrendelo->execute(array(':megrendelocsaladi' => $megrendelocsaladi));
            $megrendelo->execute();

            return $megrendelo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function megrendelLeKerdez($megrendelo_id)
    {

        try {
            $megrendelo = $this->kapcsolodas->prepare("SELECT * FROM megrendelo WHERE megrendelo_id= :megrendelo_id");
            $megrendelo->execute(array(':megrendelo_id' => $megrendelo_id));
            $megrendelo->execute();

            return $megrendelo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function frissitDate($megrendelocsaladi, $megrendelo_id, $megrendelokereszt, $megrendelokod)
    {

        try {
            $megrendelo = $this->kapcsolodas->prepare("UPDATE megrendelo  SET megrendelocsaladi= :megrendelocsaladi, megrendelo_id= :megrendelo_id, megrendelokod= :megrendelokod WHERE megrendelo_id = :megrendelo_id");
            $megrendelo->bindparam(":megrendelocsaladi", $megrendelocsaladi, PDO::PARAM_STR);
            $megrendelo->bindparam(":megrendelo_id", $megrendelo_id, PDO::PARAM_STR);
            $megrendelo->bindparam(":megrendelokereszt", $megrendelokereszt, PDO::PARAM_STR);
            $megrendelo->bindparam(":megrendelokod", $megrendelokod, PDO::PARAM_STR);
            $megrendelo->execute();

            return $megrendelo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function upDate($megrendelocsaladi, $megrendelo_id)
    {

        try {
            $megrendelo = $this->kapcsolodas->prepare("UPDATE megrendelo  SET megrendelocsaladi= :megrendelocsaladi, megrendelo_id= :megrendelo_id WHERE megrendelo_id= :megrendelo_id");
            $megrendelo->bindparam(":megrendelocsaladi", $megrendelocsaladi);
            $megrendelo->bindparam(":megrendelo_id", $megrendelo_id);
            $megrendelo->execute();

            return $megrendelo;
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