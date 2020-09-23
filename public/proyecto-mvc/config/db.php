<?php
/**
 *
 */
class DataBase 
{

  public static function connect(){

    $db = new mysqli('localhost','root','111','tienda_master');
$db->query("SETNAME 'utf8'");
return $db;
  }

}
