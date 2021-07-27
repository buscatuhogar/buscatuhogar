<?php
//LLAMAMOS A GLOBAL
require_once "global.php";

$conexion = new mysqli(DB_HOST, DB_USERNAME, DB_PASS, DB_NAME);
//CREAMOS CLASE PARA REALIZAR DISTINTAS FUNCIONES HACIA LA BASE DE DATOS
class Conexion {
  
  private $host, $Huser, $Hpass, $db, $charset;
   
  public function __construct() {
    $this->host= 'localhost';
    $this->Huser= 'root';
    $this->Hpass= '';
    $this->db= 'buscatuhogar';
    $this->charset= 'utf8';
  }
   //CONEXIÓN HACIA LA BASE DE DATOS
  public function conectar(){
    try {
      $connection="mysql:host=".$this->host.";dbname=".
                  $this->db.";charset=".$this->charset;
      
      $con=new PDO($connection,$this->Huser,$this->Hpass);
      
      $con->setAttribute(PDO::ATTR_ERRMODE, 
                       PDO::ERRMODE_EXCEPTION);
      
    }catch(Exception $e){
      echo 'Error PDO: '.$e->getLine();
    }
         
    return $con;
  }
  
}
?>