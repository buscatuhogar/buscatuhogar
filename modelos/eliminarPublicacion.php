<!--IMPORTACION DE CONEXIÓN A BD, MODELO PUBLICACIÓN Y CLASES-->
<?php
   //LLAMAMOS A LA CONEXIÓN CORRESPONDIENTE Y A SU MODELO PUBLICACIÓN 
  include_once '../conexion/Conexion.php';
  include_once '../modelos/publicacion.php';
  //OBTENEMOS LA ID Y SE GUARDA EN UNA VARIABLE LLAMADA ID
  $id= $_GET['id'];
  //VARIABLE PARA LA CLASE PUBLICACIÓN
  $image = new Publicacion();
  //VARIABLE DE LA CLASE PUBLICACIÓN, LE ASIGNAMOS LA FUNCIÓN DE ELIMINAR CORRESPONDIENTE AL ID DE LA PUBLICACIÓN
  $image->eliminar($id);
  
  header('location: ../vistas/configuracion.php');
  
?>