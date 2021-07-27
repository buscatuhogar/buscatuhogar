<head>
<script defer src="/your-path-to-fontawesome/js/all.js"></script>
</head>
<!-- MODAL PARA AGREGAR UNA PUBLICACION -->
<div  class="modal fade" id="nuevaPublicacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content" >
      <div  style="text-align: center; background-color: #FFFAFA;">
      <br>
        <div class="col " style="text-align: center;">
          <div >     
                  <!-- TITULO DE INGRESO PUBLICACION -->
            <h3>¡Publica tu aviso!</h3> 
          </div> 
        </div>
        <div class="col" >   
        <i type="button" data-bs-dismiss="modal" aria-label="Close" class="fas fa-2x fa-sign-out-alt"></i>   
          
        </div>
        <br>
      </div>
      
      
      <div class="modal-body" style="background-color: #eeeded; ">
      
        <div class="container-fluid">
          <br>
          <form action='../modelos/valImagen.php' method='post' class='card-body' enctype="multipart/form-data">


                <div class="row" >
                  <div class="col-6 col-sm-3 container "  >
                      <div style="text-align: center;">
                        <h4>¡Selecciona tus requisitos!</h4>
                      </div>
                      <br>
                      <hr>
                    <div style=" ">
                    <div class="row">
                        <div class="col">                      
                          <h6><i class="fas fa-handshake"></i> Corredor de propiedades</h6> 
                        </div>
                        <div class="col">
                          <div id="afiliado" style="text-align: end;">
                            <label><select name="afiliadoPost" class=' mb-3' required>
                              <?php 
                              include_once '../conexion/Conexion.php';
                              $consulta="SELECT respuesta FROM requisitos";
                              $ejecutar = mysqli_query($conexion,$consulta);
                              foreach ($ejecutar as $opciones){?>
                                <option  value="<?php echo $opciones['respuesta']?>" ><?php echo $opciones['respuesta']?></option>
                                <?php }?>
                            </select></label>
                          </div> 
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                      <div class="col" >
                      <h6><i class="far fa-address-card"></i> Cedula de Identidad Vigente</h6>
                      </div>
                        <div class="col">
                          <div id="dni" style="text-align: end;"> 
                              <label><select name="dniPost" class=' mb-3' required>
                                <?php 
                                include_once '../conexion/Conexion.php';
                                $consulta="SELECT respuesta FROM requisitos";
                                $ejecutar = mysqli_query($conexion,$consulta);
                                foreach ($ejecutar as $opciones){?>
                                  <option  value="<?php echo $opciones['respuesta']?>" ><?php echo $opciones['respuesta']?></option>
                                  <?php }?>
                              </select></label>
                          </div> 
                        </div> 
                        <hr>                   
                     </div>                  
                      <div class="row">
                        <div class="col">                          
                         <h6><i class="far fa-file-alt"></i> Contrato Trabajo Vigente</h6> 
                        </div>
                        <div class="col">
                          <div id="trabajo" style="text-align: end;"> 
                            <label><select name="trabajoPost" class=' mb-3' required>
                              <?php 
                              include_once '../conexion/Conexion.php';
                              $consulta="SELECT respuesta FROM requisitos";
                              $ejecutar = mysqli_query($conexion,$consulta);
                              foreach ($ejecutar as $opciones){?>
                                <option  value="<?php echo $opciones['respuesta']?>" ><?php echo $opciones['respuesta']?></option>
                                <?php }?>
                            </select></label>
                          </div> 
                        </div>
                        <hr>
                      </div>
                      <div class="row">
                        <div class="col">                            
                          <h6><i class="far fa-file-alt"></i> Certificado Antiguedad Laboral</h6>
                        </div>
                        <div class="col">
                          <div id="certificado" style="text-align: end;">
                              <label><select name="certificadoPost" class=' mb-3' required>
                                <?php 
                                include_once '../conexion/Conexion.php';
                                $consulta="SELECT respuesta FROM requisitos";
                                $ejecutar = mysqli_query($conexion,$consulta);
                                foreach ($ejecutar as $opciones){?>
                                  <option  value="<?php echo $opciones['respuesta']?>" ><?php echo $opciones['respuesta']?></option>
                                  <?php }?>
                              </select></label>
                          </div> 

                        </div>
                        <hr>
                      </div>
                      <div class="row">
                        <div class="col"> 
                          <h6><i class="far fa-file-alt"></i> Liquidaciones de Sueldo (3 Meses)</h6>
                        </div>
                        <div class="col">
                          <div id="liquidacion" style="text-align: end;"> 
                            <label><select name="liquidacionesPost" class=' mb-3' required>
                              <?php 
                              include_once '../conexion/Conexion.php';
                              $consulta="SELECT respuesta FROM requisitos";
                              $ejecutar = mysqli_query($conexion,$consulta);
                              foreach ($ejecutar as $opciones){?>
                                <option  value="<?php echo $opciones['respuesta']?>" ><?php echo $opciones['respuesta']?></option>
                                <?php }?>
                            </select></label>
                          </div> 
                        </div>
                        <hr>
                      </div>
                      <div class="row">
                        <div class="col">                           
                          <h6><i class="far fa-file-alt"></i> Cotizaciones Previsionales</h6> 
                        </div>
                        <div class="col">                         
                          <div id="cotizacion" style="text-align: end;"> 
                            <label><select name="cotizacionesPost" class=' mb-3' required>
                              <?php 
                              include_once '../conexion/Conexion.php';
                              $consulta="SELECT respuesta FROM requisitos";
                              $ejecutar = mysqli_query($conexion,$consulta);
                              foreach ($ejecutar as $opciones){?>
                                <option  value="<?php echo $opciones['respuesta']?>" ><?php echo $opciones['respuesta']?></option>
                                <?php }?>
                            </select></label>
                          </div>

                        </div>
                        <hr>
                      </div>
                      <div class="row">
                        <div class="col">                            
                          <h6><i class="far fa-file-alt"></i> Certificado Dicom</h6>
                        </div>
                        <div class="col">
                          <div id="dicom" style="text-align: end;">
                            <label><select name="dicomPost" class='mb-3' required>
                              <?php 
                              include_once '../conexion/Conexion.php';
                              $consulta="SELECT respuesta FROM requisitos";
                              $ejecutar = mysqli_query($conexion,$consulta);
                              foreach ($ejecutar as $opciones){?>
                               <option  value="<?php echo $opciones['respuesta']?>" ><?php echo $opciones['respuesta']?></option>
                                <?php }?>
                            </select></label>
                          </div>
                        </div>
                        <hr>
                      </div>                                        
                      <div class="row">
                        <div class="col"> 
                          <h6><i class="fas fa-lightbulb"></i> Servicios Basicos (Incorporado en el Precio)</h6>
                        </div>
                        <div class="col">
                          <div id="servicio" style="text-align: end;">
                            <label><select name="serviciosPost" class=' mb-3' required>
                              <?php 
                              include_once '../conexion/Conexion.php';
                              $consulta="SELECT respuesta FROM requisitos";
                              $ejecutar = mysqli_query($conexion,$consulta);
                              foreach ($ejecutar as $opciones){?>
                                <option  value="<?php echo $opciones['respuesta']?>" ><?php echo $opciones['respuesta']?></option>
                                <?php }?>
                            </select></label>
                          </div>  
                        </div>
                        <hr>
                      </div>
                      <div class="row">
                        <div class="col">                                                                  
                          <h6><i class="fas fa-dog"></i> Mascotas</h6> 
                        </div>
                        <div class="col">
                          <div id="mascota" style="text-align: end;">
                            <label><select name="mascotaPost" class=' mb-3' required>
                              <?php 
                              include_once '../conexion/Conexion.php';
                              $consulta="SELECT respuesta FROM requisitos";
                              $ejecutar = mysqli_query($conexion,$consulta);
                              foreach ($ejecutar as $opciones){?>
                                <option  value="<?php echo $opciones['respuesta']?>" ><?php echo $opciones['respuesta']?></option>
                                <?php }?>
                            </select></label>
                          </div>
                        </div>
                        <hr>
                      </div>
                      <div class="row">
                        <div class="col">                      
                          <h6><i class="fas fa-parking"></i> Estacionamientos</h6>
                        </div>
                        <div class="col">
                          <div id="estacionamiento" style="text-align: end;">
                            <label><select name="estacionamientoPost" class=' mb-3' required>
                              <?php 
                              include_once '../conexion/Conexion.php';
                              $consulta="SELECT respuesta FROM requisitos";
                              $ejecutar = mysqli_query($conexion,$consulta);
                              foreach ($ejecutar as $opciones){?>
                                <option  value="<?php echo $opciones['respuesta']?>" ><?php echo $opciones['respuesta']?></option>
                                <?php }?>
                            </select></label>
                          </div>
                        </div>
                        <hr>
                      </div>
                      <div class="row">
                        <div class="col">                         
                          <h6><i class="fas fa-dollar-sign"></i> Metodo de Pago Mensual</h6>
                        </div>
                        <div class="col">
                          <div id="pago" style="text-align: end;"> 
                            <label><select name="pagoPost" class='mb-3' required>
                              <?php 
                              include_once '../conexion/Conexion.php';
                              $consulta="SELECT * FROM pago";
                              $ejecutar = mysqli_query($conexion,$consulta);
                              foreach ($ejecutar as $opciones){?>
                                <option  value="<?php echo $opciones['respuesta']?>" ><?php echo $opciones['respuesta']?></option>
                                <?php }?>
                            </select></label>
                          </div> 
                        </div>
                      </div>


                    </div>
                    
                  </div>
                  
                  <div class="col-6 col-sm-3">
                      <div style="text-align: center;">
                        <h4>¡Selecciona!</h4>
                      </div>
                      <br>
                      <hr>
                    
                    <div class="row">
                        <div class="col"> 
                          <h6><i class="fas fa-home"></i> Casa o Departamento</h6>                                                
                        </div>
                        <div class="col">
                          <div id="categoria" style="text-align: end;">
                            <label><select name="categoriaPost" style="width: 150px;" class='form-control' required>
                              <?php 
                              include_once '../conexion/Conexion.php';
                              $consulta="SELECT * FROM categoria";
                              $ejecutar = mysqli_query($conexion,$consulta);
                              foreach ($ejecutar as $opciones){?>
                                <option  value="<?php echo $opciones['nombre']?>" ><?php echo $opciones['nombre']?></option>
                                <?php }?>
                            </select></label>
                          </div>                         
                        </div>
                        
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col"> 
                          <h6><i class="fas fa-dollar-sign"></i> Precio</h6>                                                
                        </div>
                        <div class="col">
                          <div style="text-align: end;">                                       
                           <label><input type='number'  style="width: 150px;" class='form-control mb-3' name='precioPost' placeholder='precio' required></label>                                       
                          </div>                         
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col"> 
                          <h6><i class="fas fa-mobile-alt"></i> Celular</h6>                                                  
                        </div>
                        <div class="col" style="text-align: end;">
                          <div >                          
                            <label ><input type='text' style="width: 150px;" class='form-control mb-3' name='numeroPost' placeholder='numero' required>               </label>            
                          </div>                       
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col">  
                          <h6><i class="fas fa-city"></i> Región</h6>                                                
                        </div>
                        <div class="col">
                          <div id="region" style="text-align: end;">
                            <label><select name="regionPost" style="width: 150px;" class='form-control mb-3' required>
                              <?php 
                              include_once '../conexion/Conexion.php';
                              $consulta="SELECT * FROM regiones";
                              $ejecutar = mysqli_query($conexion,$consulta);
                              foreach ($ejecutar as $opciones){?>
                                <option  value="<?php echo $opciones['region_nombre']?>" ><?php echo $opciones['region_nombre']?></option>
                                <?php }?>
                            </select></label>
                          </div>                                                 
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col"> 
                          <h6><i class="fas fa-building"></i> Comuna</h6>                                                    
                        </div>
                        <div class="col">
                          <div id="comuna"style="text-align: end;"> 
                            <label><select name="comunaPost" style="width: 150px;" class='form-control mb-3' required>
                              <?php 
                              include_once '../conexion/Conexion.php';
                              $consulta="SELECT * FROM comunas ORDER BY comuna_nombre ASC";
                              $ejecutar = mysqli_query($conexion,$consulta);
                              foreach ($ejecutar as $opciones){?>
                                <option  value="<?php echo $opciones['comuna_nombre']?>" ><?php echo $opciones['comuna_nombre']?></option>
                                <?php }?>
                            </select></label>
                         </div>                        
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col"> 
                          <h6><i class="fas fa-street-view"></i> Dirección:</h6>                                      
                        </div>
                        <div class="col">
                          <input type='text' class='form-control mb-3' name='direccionPost' placeholder='Ej: Direccion 212' required><p></p>                                                
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col"> 
                                  <h6><i class="far fa-file-alt"></i> Descripción de tu aviso:</h6>                                        
                        </div>
                        <div class="col">
                                <textarea  type='text' class='form-control mb-3' name='descripcionPost' placeholder='Descripcion' required></textarea>
                                                        
                        </div>
                    </div>
                    
                     

                   

                  </div>

                  
                  <div class="col-6 col-sm-3 container">
                      <div style="text-align: center;">
                        <h4>¡Sube tus Imágenes!</h4>
                      </div>
                      <br>
                      <hr>
                    <div class="row justify-content-center container">
                      
                         <!--CREACION EL INGRESO DE IMAGEN MEDIANTE BOOTSTRAP 5-->
                    
                      <div class="col-8 col-sm-6">
                          <div style="text-align: center;">
                           <h6>Imagen principal</h6>
                          </div>
                          <hr>
                          <div class="custom-file" >
                            <input type="file"  class="form-control" id="file" name='imagePost'  accept="image/*" onchange="previewImage();" required>
                            <br>
                            <img id="preview"style="border: 0px; widgth: 50px; height: 150px;">
                          </div>
                      </div>
                    <!--CREACION EL INGRESO DE IMAGEN MEDIANTE BOOTSTRAP 5-->
                    
                      <div class="col-4 col-sm-6">
                          <div style="text-align: center;">
                           <h6>Otro</h6>
                          </div>
                          <hr>
                        <div class="custom-file"   >
                          <input type="file"  class="form-control" id="file2" name='imagePost2'  accept="image/*" onchange="previewImage2();" required>    
                          <br>                 
                            <img id="preview2"style="border: 0px; widgth: 50px; height: 150px;">
                        </div>
                      </div>

                      
                      <div class="w-100"></div>
                        <br><br>  
                      <!--CREACION EL INGRESO DE IMAGEN MEDIANTE BOOTSTRAP 5-->
                      
                      <div class="col-8 col-sm-6">
                          <div style="text-align: center;">
                           <h6>Otro</h6>
                          </div>
                          <hr>
                        <div class="custom-file"  >
                        <input type="file"  class="form-control" id="file3" name='imagePost3' accept="image/*" onchange="previewImage3();" required> 
                        <br>                    
                          <img id="preview3"style="border: 0px; widgth: 50px; height: 150px;">
                        </div>
                      </div>
                      <!--CREACION EL INGRESO DE IMAGEN MEDIANTE BOOTSTRAP 5-->
                      
                      <div class="col-4 col-sm-6">
                          <div style="text-align: center;">
                           <h6>Otro</h6>
                          </div>
                          <hr>
                        <div class="custom-file">
                        <input type="file"  class="form-control" id="file4" name='imagePost4' accept="image/*" onchange="previewImage4();" required>      
                        <br>              
                          <img id="preview4"style="border: 0px; widgth: 50px; height: 150px;">
                        </div>
                      </div>

                    </div>
                     
                  </div>
                </div>
         
            <br>
            <hr>
            <br>
             <!-- BOTON PARA INGRESAR LA PUBLICACION -->
            <div style="text-align: center;">
              <input type='submit' class="btn btn-primary " name='insertarBtn' value='Publicar'>
            </div>
        </div>
        </form>
      </div>
    </div>
    <br>
  </div>
</div>
<script>
    function previewImage() {
        var file = document.getElementById("file").files;
        if (file.length > 0) {
            var fileReader = new FileReader();
 
            fileReader.onload = function (event) {
                document.getElementById("preview").setAttribute("src", event.target.result);
            };
 
            fileReader.readAsDataURL(file[0]);
        }
    }
    function previewImage2() {
        var file = document.getElementById("file2").files;
        if (file.length > 0) {
            var fileReader = new FileReader();
 
            fileReader.onload = function (event) {
                document.getElementById("preview2").setAttribute("src", event.target.result);
            };
 
            fileReader.readAsDataURL(file[0]);
        }
    }
    function previewImage3() {
        var file = document.getElementById("file3").files;
        if (file.length > 0) {
            var fileReader = new FileReader();
 
            fileReader.onload = function (event) {
                document.getElementById("preview3").setAttribute("src", event.target.result);
            };
 
            fileReader.readAsDataURL(file[0]);
        }
    }
    function previewImage4() {
        var file = document.getElementById("file4").files;
        if (file.length > 0) {
            var fileReader = new FileReader();
 
            fileReader.onload = function (event) {
                document.getElementById("preview4").setAttribute("src", event.target.result);
            };
 
            fileReader.readAsDataURL(file[0]);
        }
    }
</script>
