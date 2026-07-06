<!-- RESULTADO según BUSQUEDA CON COMBO -->
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/conx.php'); ?>
<div style="text-align: initial;margin-left:40px;">
                            <?php
                            @$anio = $_POST['anio'];
                            @$categoria = $_POST['categoria']; 
                            if($categoria == "Todos" && $anio == "Todos"){
                                @$sql1="SELECT * FROM `Webinar` WHERE activo = 1 ORDER BY `fecha` DESC";
                            }else{
                                if($anio != "Todos" && $categoria != "Todos"){
                                    @$sql1="SELECT * FROM `Webinar` WHERE activo = 1 AND YEAR(`fecha`) = '$anio' AND `categoria` LIKE '%$categoria%' ORDER BY `fecha` DESC";
                                }elseif($anio == "Todos"){
                                    @$sql1="SELECT * FROM `Webinar` WHERE activo = 1 AND `categoria` LIKE '%$categoria%' ORDER BY `fecha` DESC";
                                }else{
                                    @$sql1="SELECT * FROM `Webinar` WHERE activo = 1 AND YEAR(`fecha`) = '$anio' ORDER BY `fecha` DESC";
                                }
 

                            }

                               
                                @$result1=mysqli_query($link,$sql1);

                                while($row1 = mysqli_fetch_object($result1)){ //OJO si es object va ' $row->... '
                                        //formatear campo tipo 'date' de phpmyadmin a normal
                                        $fecha = date_create_from_format('Y-m-d', $row1->fecha);
                            ?>
                              <!-- *****************************************************************************-->                             
                                          <article class="webinar">
                                                <figure>
                                                    <?php   
                                                    @$idd= $row1->id; 
                                                    @$tema= $row1->tema; 
                                                    @$tema= urls_amigables($tema);
                                                    if (!empty($idd)) { ?> 
                                                        <!-- ********URL AMIGABLE***original*webinar-detalle.php?id=$1&title=$2 **--> 
                                                        <a href="/webinar/<?php echo $idd;?>/<?php echo $tema;?>">
                                                            <img src="<?php echo $row1->afiche;?>" width="140px" alt="Afiche Webinar">
                                                        </a>
                                                    <?php     
                                                    }  ?> 
                                                </figure>
                                                <p>Fecha: <?php echo date_format($fecha, 'd-m-Y'); ?></p>
                                                <div class="webinar_botones">
                                                    <?php   
                                                    if (!empty($idd)) {
                                                      ?>  
                                                    <p><a href="/webinar/<?php echo $idd;?>/<?php echo $tema;?>">Ver Detalle</a></p>
                                                    <?php     
                                                    }  ?>                                                  

                                                </div>
                                           </article>
                              <!-- *****************************************************************************--> 
                            <?php

                                }
                                mysqli_close($link);


                                //////////URLS AMIGABLES ////////
                                function urls_amigables($url) {
                                    // Tranformamos todo a minusculas
                                    $url = mb_strtolower($url);
                                    
                                    //Rememplazamos caracteres especiales latinos
                                    $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
                                    $repl = array('a', 'e', 'i', 'o', 'u', 'n');
                                    $url = str_replace ($find, $repl, $url);
                                    
                                    // Añaadimos los guiones
                                    $find = array(' ', '&', '\r\n', '\n', '+');
                                    $url = str_replace ($find, '-', $url);
                                    
                                    // Eliminamos y Reemplazamos demás caracteres especiales
                                    $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
                                    $repl = array('', '-', '');
                                    $url = preg_replace ($find, $repl, $url);
                                    
                                    return $url; 
                                }

                            ?> 
</div>
