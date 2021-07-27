<?php
//CLASE PUBLICACIÓN PARA REALIZACIÓN DE DIFERENTES FUNCIONES  
class Publicacion extends Conexion{
  //FUNCIÓN PARA INSERTAR UNA PUBLICACIÓN
  public function insertar($img, $img2, $img3, $img4){
    if(isset($_POST['insertarBtn'])){
      if(empty($_POST['categoriaPost']) && empty($_POST['regionPost']) && empty($_POST['comunaPost']) && empty($_POST['precioPost']) && empty($_POST['descripcionPost']) && empty($_POST['direccionPost']) && empty($_POST['imagePost']) && empty($_POST['imagePost2']) && empty($_POST['imagePost3']) && empty($_POST['imagePost4']) && empty($_POST['numeroPost']) && empty($_POST['dniPost']) && empty($_POST['trabajoPost']) && empty($_POST['certificadoPost']) && empty($_POST['liquidacionesPost']) && empty($_POST['cotizacionesPost']) && empty($_POST['dicomPost']) && empty($_POST['pagoPost']) && empty($_POST['afiliadoPost']) && empty($_POST['serviciosPost']) && empty($_POST['mascotaPost']) && empty($_POST['estacionamientoPost'])){
        echo '<script>alert("Fill in the blanks");</script>';      
      } else {
    
        $categoria= $_POST['categoriaPost'];
        $region= $_POST['regionPost'];
        $comuna= $_POST['comunaPost'];
        $precio= $_POST['precioPost'];
        $descripcion= $_POST['descripcionPost'];
        $direccion= $_POST['direccionPost'];
        $numero = $_POST['numeroPost'];
        $dni = $_POST['dniPost'];
        $trabajo = $_POST['trabajoPost'];
        $certificado = $_POST['certificadoPost'];
        $liquidacion = $_POST['liquidacionesPost'];
        $cotizacion = $_POST['cotizacionesPost'];
        $dicom = $_POST['dicomPost'];
        $pago = $_POST['pagoPost'];
        $afiliado = $_POST['afiliadoPost'];
        $servicio = $_POST['serviciosPost'];
        $mascota = $_POST['mascotaPost'];
        $estacionamiento = $_POST['estacionamientoPost'];
        //LLAMAMOS A SU CLASE IMAGEVAL PARA SER VALIDADA LA IMAGEN PARA SER INGRESADA
        $image= $img->imageVal();
        $image2= $img2->imageVal2();
        $image3= $img3->imageVal3();
        $image4= $img4->imageVal4();
        session_start();
        $email = $_SESSION['email'];
        
        $sql= 'INSERT INTO publicaciones (categoria, precio, region, comuna, descripcion, direccion, image, image2, image3, image4, numero, dni, trabajo, certificado, liquidaciones, cotizaciones, dicom, pago, afiliado, servicios, mascota, estacionamiento, userlogin) VALUES ("'.$categoria.'","'.$precio.'","'.$region.'","'.$comuna.'","'.$descripcion.'","'.$direccion.'","'.$image.'","'.$image2.'","'.$image3.'","'.$image4.'","'.$numero.'","'.$dni.'","'.$trabajo.'","'.$certificado.'","'.$liquidacion.'","'.$cotizacion.'","'.$dicom.'","'.$pago.'","'.$afiliado.'","'.$servicio.'","'.$mascota.'","'.$estacionamiento.'","'.$email.'")';
        
        $this->conectar()->query($sql);
        header('location: ../vistas/paginaPrincipal.php');
      }
    }
  }
  //FUNCIÓN PARA MOSTRAR LAS PUBLICACIONES
  public function mostrar(){
    $data= null;
    
    $sql= 'SELECT * FROM publicaciones';
    if($consulta= $this->conectar()->query($sql)){
      while($row= $consulta->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row; 
      }
    }
    return $data;
  }
  //FUNCIÓN PARA ELIMINAR UNA PUBLICACIÓN
  public function eliminar($id){
    
    $sql= 'DELETE FROM publicaciones WHERE idpublicacion="'.$id.'"';
    $this->conectar()->query($sql);
  }

}
?>