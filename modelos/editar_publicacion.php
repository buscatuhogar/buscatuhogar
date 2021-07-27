<?php
//CLASE PARA EDITAR UNA PUBLICACIÓN
class PublicacionEdit extends Conexion{
  //OBTENEMOS LAS PUBLICACIONES CORRESPONDIENTES
  public function select($id){
    $data= null;
    
    $sql= 'SELECT * FROM publicaciones WHERE idpublicacion="'.$id.'"';
    if($consulta= $this->conectar()->query($sql)){
      while($row= $consulta->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row; 
      }
    }
    return $data;
  }
  //ACTUALIZAMOS LOS DATOS CORRESPONDIENTES A LA PUBLICACIÓN SELECCIONADA
  public function update($id){
    if(isset($_POST['editarBtn'])){
      if(empty($_POST['categoriaPostEdit']) && 
         empty($_POST['regionPostEdit']) && 
         empty($_POST['precioPostEdit']) && 
         empty($_POST['descripcionPostEdit']) && 
         empty($_POST['direccionPostEdit']) && 
         empty($_POST['imagePostEdit']) &&
         empty($_POST['imagePostEdit2']) &&
         empty($_POST['imagePostEdit3']) &&
         empty($_POST['imagePostEdit4']) &&
         empty($_POST['numeroPostEdit']) &&
         empty($_POST['comunaPostEdit']) &&
         empty($_POST['pagoPostEdit']) &&
         empty($_POST['serviciosPostEdit']) &&
         empty($_POST['mascotaPostEdit']) &&
         empty($_POST['estacionamientoPostEdit'])){

        echo '<script>alert("Fill in the blanks");</script>';      
      } else {
        
        $categoria= $_POST['categoriaPostEdit'];
        $region= $_POST['regionPostEdit'];
        $precio= $_POST['precioPostEdit'];
        $descripcion= $_POST['descripcionPostEdit'];
        $direccion= $_POST['direccionPostEdit'];
        $image= $_POST['imagePostEdit'];
        $image2= $_POST['imagePostEdit2'];
        $image3= $_POST['imagePostEdit3'];
        $image4= $_POST['imagePostEdit4'];
        $numero= $_POST['numeroPostEdit'];
        $comuna= $_POST['comunaPostEdit'];
        $pago= $_POST['pagoPostEdit'];
        $servicio= $_POST['serviciosPostEdit'];
        $mascota= $_POST['mascotaPostEdit'];
        $estacionamiento= $_POST['estacionamientoPostEdit'];
        
        $sql= 'UPDATE publicaciones SET categoria = "'.$categoria.'",  
              precio= "'.$precio.'", 
              descripcion= "'.$descripcion.'", 
              direccion= "'.$direccion.'", 
              image= "'.$image.'",
              image2= "'.$image2.'",
              image3= "'.$image3.'",
              image4= "'.$image4.'",
              numero= "'.$numero.'",
              region= "'.$region.'",
              comuna= "'.$comuna.'",
              pago= "'.$pago.'",
              servicios= "'.$servicio.'",
              mascota= "'.$mascota.'",
              estacionamiento= "'.$estacionamiento.'" WHERE idpublicacion = "'.$id.'"';
        $this->conectar()->query($sql);
        header('location: ../vistas/configuracion.php');
      }
    }
  
  }
}