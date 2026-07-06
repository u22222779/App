 <?php   require_once($_SERVER['DOCUMENT_ROOT'].'/conx.php'); ?>
    <section class="col col-12" style="width: 100%;" id="divlistadoresultado">
        <div class="table-responsive">
            <?php
                    @$anio = $_POST['anio'];
                    @$mes = $_POST['mes']; 

                    @$campos = "";
                    @$contador = 0;
                    if(isset($_POST["temperatura"]))
                        { @$campos = $_POST["temperatura"]." "; @$contador++; }
                 
                    if(isset($_POST["HumedadRelativa"]))
                        { @$campos = $campos."".$_POST["HumedadRelativa"]." "; @$contador++; }
                            
                    if(isset($_POST["Precipitaciones"]))
                        { @$campos = $campos."".$_POST["Precipitaciones"]." "; @$contador++; }
                        
                    if(isset($_POST["RadiacionUV"]))
                        { @$campos = $campos."".$_POST["RadiacionUV"]." "; @$contador++;}

                    if(isset($_POST["SensacionTermica"]))
                        { @$campos = $campos."".$_POST["SensacionTermica"]; @$contador++;}                        

                        if(@$contador > 1){
                            $resultado = str_replace(" ", ",", $campos); // reemplaza espacios por comas
                            $campos = trim($resultado, ',');  //elimina las comas del inicio y del final 
                        }
                        if(!empty($campos)){
                            $sql="SELECT $campos FROM estacion_met WHERE YEAR(fecha) = $anio AND MONTH(fecha) = $mes AND `activo` = '1'";
                            $result=mysqli_query($link,$sql);
                                        
                            $row_cnt = mysqli_num_rows(@$result);
                            if($row_cnt==0){  // si no hay filas, ojo fuera del while, no entra si es 0           
                            ?> 
                                <div class="alert alert-warning fade in">
                                <i class="fas fa-exclamation-triangle"></i>
                                    <strong>&nbsp;&nbsp;No se encontraron registros.</strong>
                                </div>                 
                            <?php  } //end if

                            $numorden = 0;      
                            while($row = mysqli_fetch_object($result)){ //OJO si es object va ' $row->... '
                            //formatear campo tipo 'date' de phpmyadmin a normal
                            ?>
                <!-- ************ITERACION*WHILE**********************************************-->        
                <?php if(isset($_POST["temperatura"])) {   ?>    <div><img style="width: 100%;padding-bottom: 25px;" src="<?php echo $row->temperatura;?>" alt="Temperatura (°C)"></div> <?php  } ?>
                <?php if(isset($_POST["HumedadRelativa"])) {  ?> <div><img style="width: 100%;padding-bottom: 25px;" src="<?php echo $row->humedad_relativa;?>" alt="Humedad Relativa (%)"></div> <?php }  ?>
                <?php if(isset($_POST["Precipitaciones"])) {  ?> <div><img style="width: 100%;padding-bottom: 25px;" src="<?php echo $row->precipitaciones;?>" alt="Precipitaciones (mm)"></div> <?php  } ?>
                <?php if(isset($_POST["RadiacionUV"])) {  ?>     <div><img style="width: 100%;padding-bottom: 25px;" src="<?php echo $row->radiacion_UV;?>" alt="Índice UV"></div>   <?php }  ?> 
                <?php if(isset($_POST["SensacionTermica"]) && ($row->SensacionTermica != NULL))  {  ?>     <div><img style="width: 100%;padding-bottom: 25px;" src="<?php echo $row->SensacionTermica;?>" alt="SensacionTermica"></div>   <?php }  ?>             
                <?php  
                               }                        
                        } else{ ?>
                                    <div class="alert alert-warning fade in">
                                        <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;Debe de elegir al menos una condición climática!</strong>
                                    </div> 
                 <?php  } ?>
                <!-- *************************************************************************--> 
                <?php

                    mysqli_close($link);
                ?>                                         
</div>                            

    </section>
                        