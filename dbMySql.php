<?php
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.06.19.
 * Time: 19:19
 */

define('DB_SERVER','localhost');
define('DB_USER','Tom');
define('DB_PASS' ,'tom1969');
define('DB_NAME', 'fodinhome');

class DB_con
{
    /**
     * DB_con constructor.
     */
    function __construct()
    {
        /** @noinspection PhpDeprecationInspection */
        /** @noinspection PhpDeprecationInspection */
        $conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('Nem tudok kapcsolódni a szervezhez'.mysql_error());
        /** @noinspection PhpDeprecationInspection */
        mysql_select_db(DB_NAME, $conn);
    }

    /**
     * @param $name
     * @param $email
     * @param $jelszo
     * @return resource
     */
    public function insert($name, $email, $jelszo)
    {
        /** @noinspection PhpDeprecationInspection */
        $res = mysql_query("INSERT users(users_name,users_mail,users_jelszo) VALUES('$name','$email','$jelszo')");
        return $res;
    }

    public function select()
    {
        /** @noinspection PhpDeprecationInspection */
        $res=mysql_query("SELECT * FROM users");
        return $res;
    }
}