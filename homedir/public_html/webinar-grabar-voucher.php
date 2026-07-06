
<?php
require($_SERVER['DOCUMENT_ROOT'].'/conx.php');
$tildes = $link->query("SET NAMES 'utf8'"); 
?>
    <?php           
                    //**************CAMPOS DEL NUEVA TAREA ***************/
                        $TEMA = $_POST['TEMA'];
                        $FECHA = $_POST['FECHA']; /* campo hidden*/
                        $FNAME= $_POST['FNAME'];
                        $DNI = $_POST['DNI'];
                        $CELULAR = $_POST['CELULAR'];
                        $EMAIL = $_POST['EMAIL'];
                       
                        //RECEPCION FILE *****************************************      
                        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf'); // valid extensions
                        $path = 'imgs/voucher/';

                        if(isset($_FILES['subir-archivo']))
                        {
                            $img = $_FILES['subir-archivo']['name'];
                            $tmp = $_FILES['subir-archivo']['tmp_name'];
                            $img = str_replace(' ','_',$img); //remplaza espacios 
                            if($img != ''){
                                $fech = date('j-m-y');
                                $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION)); 
                                $final_image = substr_replace($img, rand(10,50), -4)."_".$fech.".".$ext; //ejem salida: nom_archivo1000000_19-09-16.jpg 
                            }
                                if(in_array($ext, $valid_extensions)) 
                                {					
                                    $path = $path.strtolower($final_image);	
                                    if(move_uploaded_file($tmp,$path)) 
                                    {
                                        echo "<img src='https://www.sedir.org.pe/$path' style= 'max-width: 100px';/>";
                                        $FILE = "https://www.sedir.org.pe/".$path; //url de FILE 
                                    }
                                } 
                            //FIN RECEPCION FILE *****************************************  


                                $sql = "INSERT INTO `webinar_voucher` (id,tema,fecha,nombre,dni,telefono,email,ffile)
                                VALUES (NULL,'$TEMA','$FECHA','$FNAME','$DNI','$CELULAR','$EMAIL','$FILE')";
                                if ($link->query($sql) === TRUE) {
                                    //echo "New record created successfully";
                                } else {
                                    echo "Error: " . $sql . "<br>" . $link->error;
                                }                                                        
                                SmallBox(); //function Mensaje verde

                        } 

                        //E N V Í O  A   E M A I L 
                        // Definir el correo de destino:
                            $dest = "tesoreria@sedir.org.pe";  
                            
                            // Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
                            $headers = "From: $FNAME <$EMAIL>\r\n";  
                            $headers .= "X-Mailer: PHP5\n";
                            $headers .= 'MIME-Version: 1.0' . "\n";
                            $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
                            $headers .= 'Bcc: isimel@gmail.com' . "\r\n";
                            
                            
                            // Aqui definimos el asunto y armamos el cuerpo del mensaje
                            $asunto = "WEBINAR - Envío de voucher";
                            $cuerpo = "<b>TEMA WEBINAR:</b> ".$TEMA."<br>";
                            $cuerpo .= "<b>FECHA DE ENVÍO:</b> ".$FECHA."<br>";
                            $cuerpo .= "<b>NOMBRE:</b> ".$FNAME."<br>";
                            $cuerpo .= "<b>DNI:</b> ".$DNI."<br>";
                            $cuerpo .= "<b>CELULAR:</b> ".$CELULAR."<br>";
                            $cuerpo .= "<b>EMAIL:</b> ".$EMAIL."<br>";
                            $cuerpo .= "<b>VOUCHER:</b>".$FILE."<br>";
                            $cuerpo .= "<img style='padding:30px 0px; width: 600px;' src='$FILE' alt='Voucher'><br>";

                        // Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
                        if($TEMA != '' && $FNAME != '' && $DNI != '' && $EMAIL != ''){
                            mail($dest,$asunto,$cuerpo,$headers); //ENVIAR!
                        }//E N V Í O  A   E M A I L 
         

            $link->close();

         ?> 
     

  <?php function SmallBox(){ ?>  
        <div id="smallbox6" class="SmallBox animated fadeInRight fast" style="background-color: rgb(101, 146, 101);">
            <div class="textoFull"><span>Aviso del sistema</span><p><i class="fa fa-thumbs-o-up"></i> 
                <i>Se Registró correctamente.<br></i></p>
            </div>
            <div class="miniIcono">
                <i class="miniPic fa fa-check fa-2x fadeInRight animated"></i>
            </div>
        </div>   
    <?php } ?>      

