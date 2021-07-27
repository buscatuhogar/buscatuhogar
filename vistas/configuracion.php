<!-- LLAMAMOS A LA CONEXION DE LA BASE DE DATOS Y  AL MODELO PERSONA PARA SUS OPERACIONES QUE SE REQUIERAN EN SU PERFIL -->
<?php
require '../conexion/Conexion.php';
require '../modelos/Persona.php';
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!--IMPORTAMOS CSS REFERENTE PARA MENU LATERAL-->
  <link rel="stylesheet" href="../css/sidebar.css">
</head>

<body>
  <div class="wrapper">
    <!-- SIDEBAR  -->
    <nav id="sidebar">
      <!-- INGRESAMOS UNA IMAGEN AVATAR DEFAULT PARA CADA USUARIO -->
      <div class="sidebar-header" style="text-align: center;">
        <img class="img-thumbnail" src="../img/avatar2.png ?>" width="60px"
          style="border-radius: 2rem; cursor:pointer; ">
      </div>

      <ul class="list-unstyled components">
        <!-- BOTONES CON DISTINTAS OPCIONES -->
        <!-- OPCION DE VOLVER A HOME -->
        <li>
          <a href="paginaPrincipal.php">Home</a>

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
    <!-- LLAMAMOS A LA VISTA AGREGAR PUBLICACION PARA GENERAR UNA VENTANA MODAL PARA INGREGAR UNA NUEVA PUBLICACION -->
    <?php include '../vistas/modalAgregarPublicacion.php';?>
    <!-- CONTENIDO DE LA PAGINA   -->
    <div id="content"  style="background-color: #FFFAF0;">
      <!-- NAVBAR CON OPCION DE BOTON MENU PARA ABRIR Y CERRAR UN MENU LATERAL, OPCION DE AYUDA PARA EL USUARIO -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <!-- ABRIR Y CERRRAR MENU LATERAL-->
          <button type="button" id="sidebarCollapse" class="btn " style="background-color: rgb(169, 177, 240); ">
            <i class="fas fa-align-left" ></i>
            <span>Menú</span>
          </button>
          <!-- OPCION AYUDA -->
          <div style="text-align: center;">
            <button class="btn  my-2 my-sm-0"  style="background-color: rgb(169, 177, 240); " type="submit"
              onclick="location.href='ayuda.php'">Ayuda</button>

          </div>

        </div>
      </nav>

      </main>

      <div class="container" >
        <div class="row" >
          <div class="col-md-8 card" style="margin-left: auto; margin-right: auto;" >
            <div>
              <!-- FORMULARIO DE EDITAR PERFIL-->
              <form role="form" method="POST" action="" enctype="multipart/form-data" >
              <!-- TITULO DE FORMULARIO -->
                <div style="text-align: center;">
                  <br>
                  <h3>¡Edita tu perfil!</h3>
                  <br>


                </div>
                <div class="container">
                  <hr>
                  <!-- INGRESO DE DATOS -->
                  <!-- EDICION DE EMAIL -->
                  <label>Email:</label>

                  <div class="mb-3 row">
                    <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['email'];?>"
                      maxlength="50" required>
                  </div>
                  <!-- EDICION DE CONTRASEÑA -->
                  <label>Contraseña:</label>

                  <div class="mb-3 row">
                    <input type="text" class="form-control" name="password" maxlength="50" placeholder="*******"
                      required>
                  </div>
                </div>


                <!-- BOTON CONFIRMAR ACTUALIZAR -->
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                  <button class="btn btn-primary" type="submit" name="actualizar">Actualizar Datos</button>
                </div>
              </form>
            </div>

          </div>

        </div>
      </div>






      <br>
      <hr>
      <br>




      <!-- VISTAS DE PUBLICACIONES INGRESADAS POR UN USUARIO ORDENADAS EN TARJETAS REFERENTE A BOOTSTRAP 5 -->

      <div class="album py-5 bg-light">
        <div class="container">
          <!-- TARJETA BOOTSTRAP 5 -->
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
             <!-- LLAMAMOS A LA CONEXION DE LA BASE DE DATOS Y A MODELO PUBLICACION PARA REALIZAR DISTINTAS OPERACIONES QUE SE REQUIERA, EN ESTE CASO (MOSTRAR)  -->
            <?php
                                      
                                      include_once '../conexion/Conexion.php';
                                      include_once '../modelos/publicacionUnica.php';
                                      
                                      $image = new PublicacionUnica();
                                      $rows = $image->mostrar();
                                      if(!empty($rows)){
                                      foreach($rows as $row){
                                      ?>
            <div class="col">
               <!-- LLAMAMOS AL ID DE LA PUBLICACION QUE INGRESO EL USUARIO -->                           
              <div class="card h-100" data-toggle="modal" data-target="#mdl<?php echo $row['idpublicacion'];?>">
              <!-- PARA LA VISTA DE LA PUBLICACION MOSTRAMOS SU IMAGEN CORRESPONDIENTE --> 
                <img class="card-img-top" width="100%" height="225" alt="" src="/PHPbuscatuhogar1/imagenes/<?php
                      echo $row['image'];?>">
                <div class="card-body">
                  <!-- MOSTRAMOS LA CATEGORIA CORRESPONDIENTE A LA PUBLICACION -->
                  <h5 class="card-title">
                    <?php echo $row['categoria']; ?>
                  </h5>
                  <!-- MOSTRAMOS SU REGION -->
                  <p class="card-text">
                    <?php echo $row['region']; ?>
                  </p>
                </div>
                <!-- ADEMAS EL VALOR DEL ARRIENDO -->
                <div class="card-footer">
                  <small class="text-muted">El valor de arriendo es de: $
                    <?php echo $row['precio']; ?>
                  </small>
                  <hr>
                  <!-- BOTON PARA VER LA PUBLICACION EN UNA VENTANA MODAL -->
                  <button type="button" style="text-align: end;" class="btn btn-sm btn-outline-secondary">Ver
                    Arriendo</button>
                  <hr>
                  <!-- BOTON PARA EDITAR LA PUBLICACION DESDE SU ID PARA IDENTIFICAR LA PUBLICACION, NOS REDIRIGE A ÑA VISTA EDITAR PUBLICACION -->
                  <a href='editarPublicacion.php?id=<?php echo $row['idpublicacion']; ?>'>
                    <button type="button" class="btn btn-success">
                      Editar</button>
                  </a>
                  <!-- BOTON PARA ELIMINAR LA PUBLICACION DESDE EL ID DE LA PUBLICACION LO CUAL REDIRIGE HACIA MODELOS ELIMINAR PUBLICACION -->
                  <a href='../modelos/eliminarPublicacion.php?id=<?php echo $row['idpublicacion']; ?>'>
                    <button type="button" class="btn btn-danger">
                      Eliminar</button>
                  </a>

                </div>
              </div>
            </div>
            <!-- LLAMAMOS LA VISTA PUBLICACION PARA MOSTRAR LA PUBLICACION SELECCIONADA -->
            <?php include '../vistas/modalPublicacion.php';?>
            <?php }  } ?>
          </div>
        </div>


      </div>





    </div>
  </div>








  <!-- FOOTER CON COMENTARIOS SOBRE COPYRIGHT -->
  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Buscatuhogar</a>
      </p>
      <p class="mb-1">Buscatuhogar 2021 Copyright &copy; Todos los derechos reservados</p>

    </div>
  </footer>
  <!-- IMPORTACION DE SCRIPTS JS -->
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