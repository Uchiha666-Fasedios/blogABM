<?php
/**
 *
 */
class DataBase 
{

  public static function connect(){

    $db = new mysqli('localhost','root','','tienda_master');
$db->query("SETNAME 'utf8'");
return $db;
  }

}
