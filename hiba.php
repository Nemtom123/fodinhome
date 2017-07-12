<?php

/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.07.12.
 * Time: 13:13
 */
 class hiba{

     public function hibas(){
         print '<h2><p style="color:red; text-align: center">Hiba az oldalon!!</p></h2>';
     }
     public function getLine(){
         print '<p style="color: #aa0000; text-align: center">Gyere vissza később!!</p>';
     }
     public function getFile(){
         '<p style="color: #aa0000;text-align: center">Javítás alatt az oldal!!!</p>';
     }
 }