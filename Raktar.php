<?php
require_once('dbconfig.php');
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.08.23.
 * Time: 0:12
 */
class Raktar
{
    private $kapcsolat;

    public function __construct()
    {
        $database = new Database();
        $db = $database->dbConnection();
        $this->kapcsolat = $db;
    }

    public function runQuery($adatbazis)
    {
        $leker = $this->kapcsolat->prepare($adatbazis);
        return $leker;
    }

    public function rogzit($megnevezes)
    {
        try
        {
            $leker = $this->kapcsolat->prepare("INSERT INTO megnevezes(megnevezes)  VALUES(:megnevezes)");
            $leker->bindparam(":megnevezes",$megnevezes);


            $leker->execute();

            return $leker;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function leKerdezes($megnevezes_id,$megnevezes){

        try
        {
            $leker = $this->kapcsolat->prepare("SELECT megnevezes_id, megnevezes FROM megnevezes");
            $leker->execute(array(':megnevezes_id'=>$megnevezes_id, ':megnevezes'=>$megnevezes));
            $leker->execute();

            return $leker;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
   public function upDate($megnevezes,$megnevezes_id){

        try
        {
            $leker = $this->kapcsolat->prepare("UPDATE megnevezes  SET megnevezes= :megnevezes, megnevezes_id= :megnevezes_id WHERE megnevezes_id = :megnevezes_id");
            $leker->bindparam(":megnevezes", $megnevezes);
            $leker->bindparam(":megnevezes_id",$megnevezes_id);
            $leker->execute();

            return $leker;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    public function megnevezesTorol($megnevezes_id){

        try
        {
            $leker = $this->kapcsolat->prepare("DELETE FROM megnevezes  WHERE  megnevezes_id= :megnevezes_id");
            $leker->bindparam(":megnevezes_id",$megnevezes_id);
            $leker->execute();

            return $leker;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    public function redirect($url)
    {
        header("Location: $url"); exit();
    }

    public function fetch($rs) {

        $row = mysqli_fetch_assoc($rs);

        return $row;
    }



}