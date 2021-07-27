<?php
//LLAMAMOS A LA CONEXIÓN CORRESPONDIENTE A LA BD
require '../conexion/Conexion.php';
//CREAMOS UNA SESIÓN
session_start();
//GUARDAMOS LOS VALORES CORRESPONDIENTES EN VARIABLES
$email = $_POST['email'];
$password = ($_POST['password']);

//CONSULTA DE DATOS
$consulta="SELECT*FROM usuarios where email='$email' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);
//CONTADOR
$contar=mysqli_num_rows($resultado);
//FUNCION PARA DETERMINAR AL USUARIO SI EXISTE UN CORREO, O DEBERA REGISTRARSE
if($contar ==1){
    while ($row=mysqli_fetch_array($resultado)) {
        if ($email = $row['email'] && $password = $row['password']) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['idusuario'] = $row['idusuario'];
            
            header("location: ../vistas/paginaPrincipal.php");
        }
    }
    
}else {
    echo '<script language="javascript">alert("Error de autentificacion, Inicie Sesión Nuevamente...");window.location.href="../login/salir.php"</script>';
}
//SU EXISTE UNA SESIÓN INICIADA Y NO ES CERRADA SERA REDIRECCIONADA A LA PÁGINA PRINCIPAL
if (isset($_SESSION['idusuario'])) {
    header("location: ../vistas/paginaPrincipal.php");
}
?>