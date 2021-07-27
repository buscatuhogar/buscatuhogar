<?php
//CLASE PARA UNA PUBLICACIÓN UNICA
class PublicacionUnica extends Conexion{
  //FUNCIÓN MOSTRAR DESDE EL CORREO CORRESPONDIENTE DEL USUARIO REGISTRADO SU PUBLICACIÓN INGRESADA
  public function mostrar(){
    $data= null;
    $email= $_SESSION['email'];

    $sql= 'SELECT * FROM publicaciones WHERE userlogin="'.$email.'"';
    if($consulta= $this->conectar()->query($sql)){
      while($row= $consulta->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row; 
      }
    }
    return $data;
  }
  //ELIMINAR PUBLICACIÓN DESDE SU ID
  public function eliminar($id){
    
    $sql= 'DELETE FROM publicaciones WHERE idpublicacion="'.$id.'"';
    $this->conectar()->query($sql);
  }

}
?>