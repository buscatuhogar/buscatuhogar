<?php 
//INICIAMOS LA SESIÓN
session_start();
$idusuario= $_SESSION['idusuario'];
$email = $_SESSION['email'];

//FUNCIÓN PARA ACTUALIZAR EL PERFIL DE USUARIO
if(isset($_POST['actualizar']))
{
  $email = mysqli_real_escape_string($conexion,$_POST['email']);
  $password = mysqli_real_escape_string($conexion,$_POST['password']);

  $consulta="SELECT*FROM usuarios where email='$email' and password='$password'";
  $resultado=mysqli_query($conexion,$consulta);
  $contar=mysqli_num_rows($resultado);
  if ($contar == 0) {
    
  $sql = "UPDATE usuarios SET email = '$email', password = '$password' WHERE idusuario = '$idusuario'";
  $actualizar=mysqli_query($conexion,$sql);

   if ($actualizar) {
    echo '<script language="javascript">alert("Perfil Actualizado Correctamente, Inicie Sesión Nuevamente...");window.location.href="../login/salir.php"</script>';
   
	
   } 
  }else {
    echo "El correo esta utilizado escoga otro";
  }
  
}  


?>