<?php
  //LLAMAMOS A LA CONEXIÓN CORRESPONDIENTE DE LA BD
  require '../conexion/Conexion.php';
 
  //FUNCION PARA REGISTRAR A UN USUARIO NUEVO 
  if(isset($_POST['email']) && (($_POST['password']))){

    $email = $_POST['email'];
    $password = ($_POST['password']);

    $sql = "INSERT INTO `usuarios`(`email`, `password`) VALUES ('$email','$password');";

    if($conexion->query($sql) == true){
      header("location: ../index.html");
    }else{
      die("NO ES EL CORREO O CONTRASEÑA CORRECTA");
    }
  }
       
 
?>