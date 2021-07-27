<?php
//REANUDAMOS LA SESIÓN
session_start();
//ELIMINAMOS EL CORREO Y EL ID DEL USUARIO PARA INICIAR NUEVAMENTE
unset($_SESSION['email']);
unset($_SESSION['id']);
session_unset();
//DESTRUYE LA SESIÓN POR COMPLETO
session_destroy();
//REDIRECCIONAMOS HACIA EL INDEX
header("location: ../index.html");



?>
