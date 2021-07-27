<head>
<script defer src="/your-path-to-fontawesome/js/all.js"></script>
</head>
<!-- MODAL ABRIR PUBLICACION-->
<div  class="modal fade" id="mdl<?php echo $row['idpublicacion'];?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen" role="document">
    <div class="modal-content" >
      <div  style="text-align: center; background-color: #FFFAFA;">
      <br>
        <div class="col " style="text-align: center;">
          <div >     
                  <!-- TITULO DE INGRESO PUBLICACION -->
            <h3>¡Selecionaste esta publicación!</h3> 
          </div> 
        </div>
        <div class="col" >
         
        <i type="button" data-dismiss="modal" class="fas fa-2x fa-sign-out-alt"></i>   
          
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
                        <h5>Requisitos de Arriendo</h5>
                      </div>
                      <br>
                      <hr>
                    <div style=" ">
                    <div class="row">
                        <div class="col">                      
                          <h6><i class="fas fa-handshake"></i> Corredor de propiedades</h6> 
                        </div>
                        <div class="col">
                          <div style="text-align: end;">
                          <?php echo $row['afiliado'];?>
                          </div> 
                        </div>
                        <hr>
                      </div>
                    <div class="row">
                      <div class="col" >
                      <h6><i class="far fa-address-card"></i> Cedula de Identidad</h6>
                      </div>
                        <div class="col">
                          <div  style="text-align: end;"> 
                              
                              <?php echo $row['dni'];?>
                              
                          </div> 
                        </div> 
                        <hr>                   
                     </div>                  
                      <div class="row">
                        <div class="col">                          
                         <h6><i class="far fa-file-alt"></i> Contrato Trabajo Vigente</h6> 
                        </div>
                        <div class="col">
                          <div style="text-align: end;"> 
                            
                            <?php echo $row['trabajo'];?>
                            
                          </div> 
                        </div>
                        <hr>
                      </div>
                      <div class="row">
                        <div class="col">                            
                          <h6><i class="far fa-file-alt"></i> Certificado Antiguedad Laboral</h6>
                        </div>
                        <div class="col">
                          <div style="text-align: end;">
                              
                              <?php echo $row['certificado'];?>
                              
                          </div> 

                        </div>
                        <hr>
                      </div>
                      <div class="row">
                        <div class="col"> 
                          <h6><i class="far fa-file-alt"></i> Liquidaciones de Sueldo (3 Meses)</h6>
                        </div>
                        <div class="col">
                          <div style="text-align: end;"> 
                          <?php echo $row['liquidaciones'];?>
                          </div> 
                        </div>
                        <hr>
                      </div>
                      <div class="row">
                        <div class="col">                           
                          <h6><i class="far fa-file-alt"></i> Cotizaciones Previsionales</h6> 
                        </div>
                        <div class="col">                         
                          <div style="text-align: end;"> 
                          <?php echo $row['cotizaciones'];?>
                          </div>

                        </div>
                        <hr>
                      </div>
                      <div class="row">
                        <div class="col">                            
                          <h6><i class="far fa-file-alt"></i> Certificado Dicom</h6>
                        </div>
                        <div class="col">
                          <div style="text-align: end;">
                          <?php echo $row['dicom'];?>
                          </div>
                        </div>
                        <hr>
                      </div>                     
                     
                      <div class="row">
                        <div class="col"> 
                          <h6><i class="fas fa-lightbulb"></i> Servicios Basicos (Incorporado en el Precio)</h6>
                        </div>
                        <div class="col">
                          <div style="text-align: end;">
                          <?php echo $row['servicios'];?>
                          </div>  
                        </div>
                        <hr>
                      </div>
                      <div class="row">
                        <div class="col">                                                                  
                          <h6><i class="fas fa-dog"></i> Mascotas</h6> 
                        </div>
                        <div class="col">
                          <div  style="text-align: end;">
                          <?php echo $row['mascota'];?>
                          </div>
                        </div>
                        <hr>
                      </div>
                      <div class="row">
                        <div class="col">                      
                          <h6><i class="fas fa-parking"></i> Estacionamientos</h6>
                        </div>
                        <div class="col">
                          <div  style="text-align: end;">
                          <?php echo $row['estacionamiento'];?>
                          </div>
                        </div>
                        <hr>
                      </div>
                      <div class="row">
                        <div class="col">                         
                          <h6><i class="fas fa-dollar-sign"></i> Metodo de Pago Mensual</h6>
                        </div>
                        <div class="col">
                          <div style="text-align: end;"> 
                          <?php echo $row['pago'];?>
                          </div> 
                        </div>
                        <hr>
                      </div>


                    </div>
                    
                  </div>
                  
                  <div class="col-6 col-sm-3">
                      <div style="text-align: center;">
                        <h5>Informacion</h5>
                      </div>
                      <br>
                      <hr>
                    
                    <div class="row">
                        <div class="col"> 
                          <h6><i class="fas fa-home"></i> Casa o Departamento</h6>                                                
                        </div>
                        <div class="col">
                          <div  style="text-align: end;">
                          <?php echo $row['categoria'];?>
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
                          <?php echo $row['precio'];?>                                    
                          </div>                         
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col"> 
                          <h6><i class="fas fa-mobile-alt"></i> Celular</h6>                                                  
                        </div>
                        <div class="col" style="text-align: end;">
                                                  
                        <?php echo $row['numero'];?> <a id="app-whatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=<?php echo $row['numero']?>"> 
                        <i class="fab fa-2x fa-whatsapp"></i></a>       
                                                 
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col">  
                          <h6><i class="fas fa-city"></i> Región</h6>                                                
                        </div>
                        <div class="col">
                          <div  style="text-align: end;">
                          <?php echo $row['region'];?>
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
                          <?php echo $row['comuna'];?>
                         </div>                        
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col"> 
                          <h6><i class="fas fa-street-view"></i> Dirección:</h6>                                      
                        </div>
                        <div class="col" style="text-align: end;">
                          <label style="width: 150px;"><?php echo $row['direccion'];?> </label>
                                                         
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col"> 
                                  <h6><i class="far fa-file-alt"></i> Descripción:</h6>                                        
                        </div>
                        <div class="col" style="text-align: end;" >
                            
                            <label style="width: 300px;"><?php echo $row['descripcion'];?></label>
                            
                                
                            
                        
                                                        
                        </div>
                    </div>
                    <hr>
                   
                     

                   

                  </div>
                  
                         
                           
                           

                  
                  <div class="col-6 col-sm-3 container">
                      <div style="text-align: center;">
                        <h5>Imágenes</h5>
                      </div>
                      <br>
                      <hr>
                    <div class="row justify-content-center container">
                      
                         <!--CREACION EL INGRESO DE IMAGEN MEDIANTE BOOTSTRAP 5-->
                    
                      <div class="col-8 col-sm-6">
                          
                          <div class="custom-file" >
                            <!-- MOSTRAMOS LA IMAGEN CORRESPONDIENTE A LA PUBLICACION SELECCIONADA -->                       
                             <img class="card-img-top image" width="100px" height="150px"  alt="" src="/PHPbuscatuhogar1/imagenes/<?php
                            echo $row['image'];?>">
                          </div>
                      </div>
                    <!--CREACION EL INGRESO DE IMAGEN MEDIANTE BOOTSTRAP 5-->
                    
                      <div class="col-4 col-sm-6">
                        
                        <div class="custom-file"   >
                         <!-- MOSTRAMOS LA IMAGEN CORRESPONDIENTE A LA PUBLICACION SELECCIONADA -->                       
                             <img class="card-img-top image" width="100px" height="150px"  alt="" src="/PHPbuscatuhogar1/imagenes/<?php
                            echo $row['image2'];?>">
                        </div>
                      </div>

                      
                      <div class="w-100"></div>
                        <br><br>  
                      <!--CREACION EL INGRESO DE IMAGEN MEDIANTE BOOTSTRAP 5-->
                      
                      <div class="col-8 col-sm-6">
                        
                        <div class="custom-file" >
                            <!-- MOSTRAMOS LA IMAGEN CORRESPONDIENTE A LA PUBLICACION SELECCIONADA -->                       
                            <img class="card-img-top image" width="100px" height="150px"  alt="" src="/PHPbuscatuhogar1/imagenes/<?php
                            echo $row['image3'];?>">
                        </div>
                      </div>
                      <!--CREACION EL INGRESO DE IMAGEN MEDIANTE BOOTSTRAP 5-->
                      
                      <div class="col-4 col-sm-6">
                        
                        <div class="custom-file">
                            <!-- MOSTRAMOS LA IMAGEN CORRESPONDIENTE A LA PUBLICACION SELECCIONADA -->                       
                            <img class="card-img-top image" width="100px" height="150px"  alt="" src="/PHPbuscatuhogar1/imagenes/<?php
                            echo $row['image4'];?>">
                        </div>
                      </div>

                    </div>
                    <hr>
                    <br>
                    <div style="text-align: center;">
                        <h5>¡Descubre el sector de la propiedad!</h5>
                    </div>
                    <br>
                    <div  style="text-align: center;">
                    <!-- MOSTRAMOS UBICACION DE GOOGLE STREET VIEW CON LA DIRECCION CORRESPONDIENTE A LA PUBLICACION QUE FUE INGRESADA POR X USUARIO -->
                    <iframe src="https://www.google.com/maps?q=<?php echo $row['direccion']?>&output=embed" 
                            width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                             
                        </div>
                    
                     
                  </div>
                </div>
                
         
            <br>
            <hr>
            <br>
             
            <div style="text-align: center;">
               <!-- CERRAR VENTANA MODAL DE VER UNA PUBLICACION -->
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        </form>
      </div>
    </div>
    <br>
        
    </div>
</div>

<script src="https://kit.fontawesome.com/7680029866.js" crossrigin="anonymous"></script>













