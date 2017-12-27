<?php

/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.11.26.
 * Time: 19:52
 */
class Lekerdezesek
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



    public function Kiad($kiadas_id)
    {

        try {
            $leker = $this->kapcsolat->prepare("SELECT * FROM termekkiadas WHERE kiadas_id= :kiadas_id ORDER BY kiadas_id");
            $leker->execute(array(':kiadas_id' => $kiadas_id));
            $leker->execute();

            return $leker;
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