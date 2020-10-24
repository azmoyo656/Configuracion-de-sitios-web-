
<?php

class Conexion{



static public function conectar(){

$link8 = new PDO("mysql:host=localhost;dbname=web","root","");




$link8 -> exec("set names utf8");

return $link8;

}


}