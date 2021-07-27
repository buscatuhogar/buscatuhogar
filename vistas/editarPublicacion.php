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
      <div class="sidebar-header" style="text-align: center;">
        <img class="img-thumbnail"  src="../img/avatar2.png ?>" width="60px" style="border-radius: 2rem; cursor:pointer; ">
      </div>
      <ul class="list-unstyled components" >                     
        <li>
              <a href="paginaPrincipal.php" >Home</a>
             
            </li>             
        <li class="active">
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Publicaciones</a>
          <ul class="collapse list-unstyled" id="homeSubmenu">            
            <li>
             
              <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Nueva Publicación</a>
             
            </li>           
          </ul>
        </li>
        <li>         
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Configuración</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">             
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
    <div id="content" style="background-color: #FFFAF0;">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">       
          <button type="button" id="sidebarCollapse" style="background-color: rgb(169, 177, 240); " class="btn ">
            <i class="fas fa-align-left"></i>
            <span>Menú</span>
          </button>                
          <div style="text-align: center;">
            <button class="btn  my-2 my-sm-0" style="background-color: rgb(169, 177, 240); " type="submit"
              onclick="location.href='ayuda.php'">Ayuda</button>
          </div>
        </div>
      </nav>
      <main>        
    <div class="container"  >     
        <div class='row' >        
            <div class='col-md-8 card' style="margin-left: auto; margin-right: auto;" >
              <div style="text-align: center;">           
              <h4 class='m-3'>¡Edita tu publicación!</h4>
              </div>
                
                <hr>
                <?php
          
            include_once '../conexion/Conexion.php';
            include_once '../modelos/editar_publicacion.php';

            $id= $_GET['id'];
            $publicacion= new PublicacionEdit();
            $publicacion->update($id);
            $rows= $publicacion->select($id);
            
            if(!empty($rows)){
              foreach($rows as $row){
          ?>
          
         <div style="margin-left: auto; margin-right: auto;" >
                
                <form action='' method='post' class='card-body' >

                <p>casa o departamento</p>               
                    <div id="categoria" >
                      <label><select name="categoriaPostEdit" class='form-control mb-3' 
                      value='<?php echo $row['categoria'];?>'>
                        <?php 
                        include_once '../conexion/Conexion.php';
                        $consulta="SELECT * FROM categoria";
                        $ejecutar = mysqli_query($conexion,$consulta);
                        foreach ($ejecutar as $opciones){?>
                          <option  value="<?php echo $opciones['nombre']?>" ><?php echo $opciones['nombre']?></option>
                          <?php }?>
                      </select></label>
                    </div>

                    <p>region</p>
                    <div id="region" >
                      <label><select name="regionPostEdit" class='form-control mb-3'>
                        <?php 
                        include_once '../conexion/Conexion.php';
                        $consulta="SELECT * FROM regiones";
                        $ejecutar = mysqli_query($conexion,$consulta);
                        foreach ($ejecutar as $opciones){?>
                          <option  value="<?php echo $opciones['region_nombre']?>" ><?php echo $opciones['region_nombre']?></option>
                          <?php }?>
                      </select></label>
                    </div>

                    <p>comuna</p>       
                <div id="comuna" >
                  <label><select name="comunaPostEdit" class='form-control mb-3'>
                    <?php 
                    include_once '../conexion/Conexion.php';
                    $consulta="SELECT * FROM comunas ORDER BY comuna_nombre ASC";
                    $ejecutar = mysqli_query($conexion,$consulta);
                     foreach ($ejecutar as $opciones){?>
                      <option  value="<?php echo $opciones['comuna_nombre']?>" ><?php echo $opciones['comuna_nombre']?></option>
                      <?php }?>
                  </select></label>
                </div>

                    <p>Precio:</p>
                <input type='text' class='form-control mb-3' name='precioPostEdit' placeholder='precio'
                    value='<?php echo $row['precio']; ?>' >

                    <p>Descripción:</p>
                <input type='text' class='form-control mb-3' name='descripcionPostEdit' placeholder='descripcion'
                    value='<?php echo $row['descripcion']; ?>' >

                    <p>Dirección:</p>
                <input type='text' class='form-control mb-3' name='direccionPostEdit' placeholder='direccion'
                    value='<?php echo $row['direccion']; ?>' >
                    
                    <div class="col">
                      <p>celular</p> 
                    <input type='text' class='form-control mb-3' name='numeroPostEdit' placeholder='numero' 
                    value='<?php echo $row['numero'];?>'>
                    
                    <p>Imagen Principal:</p>
                    <input type='file' class='form-control mb-3' id="file"  accept="image/*" onchange="previewImage();" name='imagePostEdit' placeholder='imagen'
                    value='<?php echo $row['image']; ?>' required>
                    <img class="card-img-top image" id="preview" width="100px" height="150px"  alt="" src="/PHPbuscatuhogar1/imagenes/<?php
                            echo $row['image'];?>">

                    <p>Imagen2:</p>
                    <input type='file' class='form-control mb-3' id="file2"  accept="image/*" onchange="previewImage2();" name='imagePostEdit2' placeholder='imagen'
                    value='<?php echo $row['image2']; ?>' required>
                    <img class="card-img-top image" id="preview2" width="100px" height="150px"  alt="" src="/PHPbuscatuhogar1/imagenes/<?php
                            echo $row['image2'];?>">


                    <p>Imagen3:</p>
                    <input type='file' class='form-control mb-3' id="file3"  accept="image/*" onchange="previewImage3();" name='imagePostEdit3' placeholder='imagen'
                    value='<?php echo $row['image3']; ?>' required> 
                    <img class="card-img-top image" id="preview3" width="100px" height="150px"  alt="" src="/PHPbuscatuhogar1/imagenes/<?php
                            echo $row['image3'];?>">

                    <p>Imagen4:</p>
                    <input type='file' class='form-control mb-3' id="file4"  accept="image/*" onchange="previewImage4();" name='imagePostEdit4' placeholder='imagen'
                    value='<?php echo $row['image4']; ?>' required>
                    <img class="card-img-top image" id="preview4" width="100px" height="150px"  alt="" src="/PHPbuscatuhogar1/imagenes/<?php
                            echo $row['image4'];?>">

                       

                <p>metodo de pago</p>
                <div id="pago" >
                  <label><select name="pagoPostEdit" class='form-control mb-3'>
                    <?php 
                    include_once '../conexion/Conexion.php';
                    $consulta="SELECT * FROM pago";
                    $ejecutar = mysqli_query($conexion,$consulta);
                     foreach ($ejecutar as $opciones){?>
                      <option  value="<?php echo $opciones['respuesta']?>" ><?php echo $opciones['respuesta']?></option>
                      <?php }?>
                  </select></label>
                </div> 

                <p>costo involucra servicios basicos</p>
                <div id="servicio" >
                  <label><select name="serviciosPostEdit" class='form-control mb-3'>
                    <?php 
                    include_once '../conexion/Conexion.php';
                    $consulta="SELECT respuesta FROM requisitos";
                    $ejecutar = mysqli_query($conexion,$consulta);
                     foreach ($ejecutar as $opciones){?>
                      <option  value="<?php echo $opciones['respuesta']?>" ><?php echo $opciones['respuesta']?></option>
                      <?php }?>
                  </select></label>
                </div>  

                <p>mascotas</p>
                <div id="mascota" >
                  <label><select name="mascotaPostEdit" class='form-control mb-3' >
                    <?php 
                    include_once '../conexion/Conexion.php';
                    $consulta="SELECT respuesta FROM requisitos";
                    $ejecutar = mysqli_query($conexion,$consulta);
                     foreach ($ejecutar as $opciones){?>
                      <option  value="<?php echo $opciones['respuesta']?>" ><?php echo $opciones['respuesta']?></option>
                      <?php }?>
                  </select></label>
                </div>

                <p>estacionamientos</p>
                <div id="estacionamiento" >
                  <label><select name="estacionamientoPostEdit" class='form-control mb-3'>
                    <?php 
                    include_once '../conexion/Conexion.php';
                    $consulta="SELECT respuesta FROM requisitos";
                    $ejecutar = mysqli_query($conexion,$consulta);
                     foreach ($ejecutar as $opciones){?>
                      <option  value="<?php echo $opciones['respuesta']?>" ><?php echo $opciones['respuesta']?></option>
                      <?php }?>
                  </select></label>
                </div> 
               
                <div style="text-align: center;">
                    <input type='submit' class='btn btn-block btn-success' name='editarBtn' value='Editar'>
                </div>
                <hr>
                </form>
         </div>                
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit"
                onclick="location.href='configuracion.php'">Volver atras</button>
              <br>
              <?php }  } ?>               
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