<?php
//CLASE PARA VALIDAR LA IMAGEN
class ImageVal {
  //FUNCION PARA DETERMINAR LA IMAGEN CORRESPONDIENTE
  public function imageVal(){
    //VARIABLES PARA LA CARGA DE ARCHIVOS
    $name= $_FILES['imagePost']['name'];
    $type= $_FILES['imagePost']['type'];  
    $size= $_FILES['imagePost']['size'];
    //VARIABLE PARA ALMACENAR LAS IMAGENES INGRESADAS
    $fold= '/PHPbuscatuhogar1/imagenes/';
    //TAMAÑO DE ARCHIVO
    if($size<=3400000){
      //TIPOS DE ARCHIVOS ADMITIDOS
      if($type=='image/jpeg' || $type=='image/jpg' || 
         $type=='image/png' || $type=='image/gif'){
       
        $destino= $_SERVER['DOCUMENT_ROOT']. $fold;
          //CARGAMOS IMAGEN, SU NOMBRE Y DESTINO
        move_uploaded_file($_FILES['imagePost']['tmp_name'],                            
                         $destino. $name);
        return $name;
        
      } else {
        header('location: ../vistas/agregarPublicacion.php');
      }
    } else {
      header('location: ../vistas/agregarPublicacion.php');
    }
  
  }
  
}
class ImageVal2 {
  //FUNCION PARA DETERMINAR LA IMAGEN CORRESPONDIENTE
  public function imageVal2(){
    //VARIABLES PARA LA CARGA DE ARCHIVOS
    $name= $_FILES['imagePost2']['name'];
    $type= $_FILES['imagePost2']['type'];  
    $size= $_FILES['imagePost2']['size'];
    //VARIABLE PARA ALMACENAR LAS IMAGENES INGRESADAS
    $fold2= '/PHPbuscatuhogar1/imagenes/';
    //TAMAÑO DE ARCHIVO
    if($size<=3400000){
      //TIPOS DE ARCHIVOS ADMITIDOS
      if($type=='image/jpeg' || $type=='image/jpg' || 
         $type=='image/png' || $type=='image/gif'){
       
        $destino= $_SERVER['DOCUMENT_ROOT']. $fold2;
          //CARGAMOS IMAGEN, SU NOMBRE Y DESTINO
        move_uploaded_file($_FILES['imagePost2']['tmp_name'],                            
                         $destino. $name);
        return $name;
        
      } else {
        header('location: ../vistas/agregarPublicacion.php');
      }
    } else {
      header('location: ../vistas/agregarPublicacion.php');
    }
  
  }
  
}
class ImageVal3 {
  //FUNCION PARA DETERMINAR LA IMAGEN CORRESPONDIENTE
  public function imageVal3(){
    //VARIABLES PARA LA CARGA DE ARCHIVOS
    $name= $_FILES['imagePost3']['name'];
    $type= $_FILES['imagePost3']['type'];  
    $size= $_FILES['imagePost3']['size'];
    //VARIABLE PARA ALMACENAR LAS IMAGENES INGRESADAS
    $fold3= '/PHPbuscatuhogar1/imagenes/';
    //TAMAÑO DE ARCHIVO
    if($size<=3400000){
      //TIPOS DE ARCHIVOS ADMITIDOS
      if($type=='image/jpeg' || $type=='image/jpg' || 
         $type=='image/png' || $type=='image/gif'){
       
        $destino= $_SERVER['DOCUMENT_ROOT']. $fold3;
          //CARGAMOS IMAGEN, SU NOMBRE Y DESTINO
        move_uploaded_file($_FILES['imagePost3']['tmp_name'],                            
                         $destino. $name);
        return $name;
        
      } else {
        header('location: ../vistas/agregarPublicacion.php');
      }
    } else {
      header('location: ../vistas/agregarPublicacion.php');
    }
  
  }
  
}
class ImageVal4 {
  //FUNCION PARA DETERMINAR LA IMAGEN CORRESPONDIENTE
  public function imageVal4(){
    //VARIABLES PARA LA CARGA DE ARCHIVOS
    $name= $_FILES['imagePost4']['name'];
    $type= $_FILES['imagePost4']['type'];  
    $size= $_FILES['imagePost4']['size'];
    //VARIABLE PARA ALMACENAR LAS IMAGENES INGRESADAS
    $fold4= '/PHPbuscatuhogar1/imagenes/';
    //TAMAÑO DE ARCHIVO
    if($size<=3400000){
      //TIPOS DE ARCHIVOS ADMITIDOS
      if($type=='image/jpeg' || $type=='image/jpg' || 
         $type=='image/png' || $type=='image/gif'){
       
        $destino= $_SERVER['DOCUMENT_ROOT']. $fold4;
          //CARGAMOS IMAGEN, SU NOMBRE Y DESTINO
        move_uploaded_file($_FILES['imagePost4']['tmp_name'],                            
                         $destino. $name);
        return $name;
        
      } else {
        header('location: ../vistas/agregarPublicacion.php');
      }
    } else {
      header('location: ../vistas/agregarPublicacion.php');
    }
  
  }
  
}




 




 
?>
