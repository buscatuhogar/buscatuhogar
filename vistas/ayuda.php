<!--VALIDAR LA SESIÓN -->
<?php
if (strlen(session_id()) < 1)
  session_start();
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buscatuhogar</title>

  

  
  <!-- IMPORTANCIONES DE BOOTSTRAP 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/estilo.css">
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

 <!--IMPORTAMOS CSS REFERENTE PARA MENU LATERAL-->
  <link rel="stylesheet" href="../css/sidebar.css">
</head>

<body>
  <div class="wrapper">
    <!-- SIDEBAR  -->
    <nav id="sidebar">
      <!-- INGRESAMOS UNA IMAGEN AVATAR DEFAULT PARA CADA USUARIO -->
      <div class="sidebar-header" style="text-align: center;">
        <img class="img-thumbnail"  src="../img/avatar2.png ?>" width="60px" style="border-radius: 2rem; cursor:pointer; ">
      </div>

      <ul class="list-unstyled components" >
         <!-- LLAMAMOS AL CORREO INGRESADO POR EL USUARIO -->
      <div style="text-align: center;" >
        <p>
          <?php echo $_SESSION['email'];?>
        </p>
        </div>
        <!-- BOTONES CON DISTINTAS OPCIONES -->
        <!-- OPCION DE VOLVER A HOME -->
        <li>
              <a href="paginaPrincipal.php" >Home</a>
             
            </li>
            <!-- OPCION DE MENU PUBLICACION  -->  
        <li class="active">
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Publicaciones</a>
          <ul class="collapse list-unstyled" id="homeSubmenu">
            <!-- INGRESAR UNA NUEVA PUBLICACION -->
            <li>
              <!-- AL SELECCIONAR NOS REDIRIGIRA HACIA UNA VENTA MODAL PARA AGREGAR PUBLICACION -->
              <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Nueva Publicación</a>
             
            </li>
            
          </ul>
        </li>

        <li>
           <!-- OPCION DE CONFIGURACION -->
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Configuración</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
             <!-- OPCION DE EDITAR CUENTA -->
            <li>
              <a href="configuracion.php">Editar Cuenta</a>
            </li>

          </ul>

        </li>


        <li>
          <br>
          <br>
          <br>
          <br>
        </li>
        <!-- OPCION DE AYUDA -->
        <div style="text-align: center;">
        <li> 
        <a href="ayuda.php">Ayuda</a>
        </li>
        </div>
        
      </ul>
      <br>
      <br>
      <br>
      <!-- OPCION DE CERRAR SESIÓN ACTUAL PARA VOLVER A LA PAGINA INICIO -->
      <ul class="list-unstyled CTAs">
        <a href="../login/salir.php" class="btn-secondary alert-warning">Cerrar sesión</a>
      </ul>
      
    </nav>
    
    <!-- NAVBAR PARA OPCIONES DE MENU(DESPLAZAMIENTO MENU LATERAL) Y AYUDA PARA EL USUARIO  -->
    <div id="content"  style="background-color: #FFFAF0;">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <!-- ABRIR Y CERRRAR MENU LATERAL-->
          <button type="button" id="sidebarCollapse" class="btn " style="background-color: rgb(169, 177, 240); ">
            <i class="fas fa-align-left" ></i>
            <span>Menú</span>
          </button>
         
        

        </div>
      </nav>

      <main>

      <div class="col-sm-6">
        <div id="cnt_form">
          <form id="contact-form" class="contact" name="contact-form" method="post" action="enviar2.php">
            <div class="form-group">
              <input type="text" name="nombre" class="form-control name-field" placeholder="Tu nombre" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control mail-field" placeholder="Tu correo" required>
            </div>
            <div class="form-group">
              <textarea name="mensaje" id="mensaje" class="form-control" placeholder="Mensaje" required></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

          </form>
        </div>
      </div>

      <div class="fondo-ayuda">
        <!--CONTENIDO PARA AYUDA A USUARIO-->
        <div class="contenido">
            <!--TEXTO NECESITA AYUDA-->
            <h1>¿Necesitas ayuda? ¡Escríbenos!</h1>
           <br>
            <h4><i class="fas fa-envelope"></i>soportebuscatuhogar@gmail.com</h4>
            <h4><i class="fas fa-tty"></i>+56912345678</h4>

           <br>
           
            


            <h5>Explicación de cómo funciona nuestra página web</h5>
            <!--VIDEO DE FUNCIONAMIENTO DE PAGINA WEB-->
            <iframe width="500" height="250" src="https://www.youtube.com/embed/YoVUP8ExjWg?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 </div>
      

      </div>

    </div>    


    

   
  </div>


  


  
<!-- IMPORTACIONES SCRIPTS JS -->
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <script src="../js/sidebar.js"></script>




</body>

</html>