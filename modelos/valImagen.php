<?php

  //LLAMAMOS A MODELO SUBIR IMAGEN, PUBLICACIÓN Y A SU VEZ LA CONEXIÓN CORRESPONDIENTE
  include_once '../modelos/subirImagen.php';    
 
  include_once '../conexion/Conexion.php';

  include_once '../modelos/publicacion.php';
  //VARIABLE PARA GUARDAR CONTENIDO DE IMAGEVAL CORRESPONDIENTE PARA VALIDAR LA IMAGEN
  $parImg= new ImageVal();
  $parImg2= new ImageVal2();
  $parImg3= new ImageVal3();
  $parImg4= new ImageVal4();
  //VARIABLE PARA CLASE PUBLICACIÓN
  $imageIns= new Publicacion();
  //LLAMAMOS VARIABLE DE LA CLASE PUBLICACIÓN(IMAGEINS) PARA INSERTAR LA IMAGEN CON SU VALIDACIÓN CORRESPONDIENTE
  $imageIns->insertar($parImg, $parImg2, $parImg3, $parImg4);

?>