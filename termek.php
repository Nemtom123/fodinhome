<?php
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.08.27.
 * Time: 19:32
 */

namespace Termek;


class Termek
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

    public function rogzit($termekneve,$termeknetto,$termekbevetido,$termekmennyiseg,$termekmennyisegiegyseg)
    {
        try
        {
            $leker = $this->kapcsolat->prepare("INSERT INTO termekek(termekneve)  VALUES(:termekneve)");
            $leker->bindparam(":termekneve",$termekneve);
            $leker->bindparam(":termeknetto",$termeknetto);
            $leker->bindparam(":termekbevetido",$termekbevetido);
            $leker->bindparam(":termekmennyiseg",$termekmennyiseg);
            $leker->bindparam(":termekmennyisegiegyseg",$termekmennyisegiegyseg);


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