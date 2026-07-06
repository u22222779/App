<!DOCTYPE html>
<html lang="es">
<head>
<title>.:: SEDIR ::.</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="https://www.sedir.org.pe/css/style.css" />
<meta name="keywords" content="">
<meta name="description" content="">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
 
 <!--MENU RESPONSIVE-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
<link rel="stylesheet" href="https://sedir.org.pe/css/estiloresponsive.css">  

<style>
    .notitex {
    color: #5b6d5a;
    font-size: 14px;
    font-family: 'Roboto', sans-serif, Arial;
    line-height: 17px;
}
    .form-control {
    display: block;
    width: 200px;
    height: 40px;
    padding: 6px 12px;
    font-size: 13px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 0;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.checkbox-clima {
    display:flex;
    flex-wrap:wrap;
}
    .checkbox-clima>.checkbox-item  ~ .checkbox-item {  /* Afecta a partir del 2do hno. menos al 1ro */
        padding-left:20px;
    }    
.combo-clima {
    display:flex;
    flex-wrap:wrap;
    margin: 15px 0;
}
.combo-clima>div ~ div {  /* Afecta a partir del 2do hno. menos al 1ro */
        padding-left:40px;
    } 


.row {
    padding:10px 40px 5px;
}
.label{
    font-weight: bold;
}
.btn-default {
    color: #fff;
    background-color: #739e73;
    border: none;
}
.btn {
    display: inline-block;
    margin-bottom: 0;
    font-weight: 400;
    text-align: center;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    background-image: none;
    white-space: nowrap;
    padding: 6px 12px;
    font-size: 13px;
    line-height: 1.42857143;
    border-radius: 2px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.checkbox-clima{

}
.checkbox-item{
    
}
</style>
<!--mostrar contenidos -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
$(document).ready(function(){
    
    $('#btn_buscar_condiciones').on('click', function(e) {
        e.preventDefault();
        var dataString = $('#form-filtros').serialize();
        //alert('Datos serializados: '+dataString);
        				$.ajax({
        					url: 'estacion-meteorologica-sedir-tabla.php',
        					data:dataString,
        					type: 'post',
                            beforeSend:function(){
                              $("#cargando").css("display", "block");
                              },                              
        					success: function (data){
        					    $("#conte-clima").css("display", "block"); // display tabla
        						$("#conte-clima").html(data);
                                $('html, body').animate({ scrollTop: $("#conte-clima").offset().top}, 1000);  //EXCELENTE PARA POSICIONAR EL FOCUS                                 
 
        					}//success #btn_buscar_placa
        				}); //ajax 1
    
                $(document).ajaxStart(function(){// gif cargando
                    
                    $("#cargando").css({"display": "block", "padding": "0 15px"});
                });
                $(document).ajaxComplete(function(){
                    $("#cargando").css("display", "none");
                });

    	});	//onclick BUSCAR POR PLACA 


});// document Ready
</script>
</head>
	
<body>

<div id="boxed_layout">
	<div id="top_bg">

		<!--header2-->	
			<?php  include ("header2.php") ?>
		<!--fin de header2-->		
  	
		<section style="width:1080px; background-color: #FFF; padding-bottom:60px;margin: auto;"><!--fondo gris-->

                <!-- title -->
                  
                    <div style="padding: 30px 0;">
                         <img src="imgs/Button-cond-ESTAC-METE.jpg" alt="">
                    </div>

                <!-- FORM -->
                <form action="javascript:void(0);" method="post" id="form-filtros" class="smart-form">
                   <div class="notitex" style="padding-left: 20px;"> <i class="fas fa-cloud-sun-rain"></i> <b>Estación Meteorológica - SEDIR</b></div>
                        <div class="notitex">
                        <div style="padding:10px 40px 5px; text-align: justify; line-height: 25px;">
                          La Estación Meteorológica de SEDIR está ubicada en el distrito de Moro a 485 msnm. A continuación les presentamos la <strong>Temperatura (ºC), La Humedad Relativa, Precipitaciones y la Radiación UV</strong>, de nuestra estación Meteorológica de <strong>SEDIR</strong> .
                        </div>
                        </div>
                         <div class="row notitex">
                            <div class="combo-clima">
                                <div>
                                    <label class="label">Elige año:</label>
                                    <select name="anio" id="anio" class="form-control" style="">
                                            <option value="2023" selected="">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                    </select> 
                                </div>
                            
                                <div>
                                    <label class="label">Elige mes:</label>
                                    <select name="mes" id="mes" class="form-control" style="">
                                        <?php $mes = date("m")-1; //mes 1 al 12 con 0 ?>

                                            <option value="01"<?php if ($mes == "01") {echo " selected";} ?>>ENERO</option>
                                            <option value="02"<?php if ($mes == '02') {echo " selected";} ?>>FEBRERO</option>
                                            <option value="03"<?php if ($mes == '03') {echo " selected";} ?>>MARZO</option>
                                            <option value="04"<?php if ($mes == '04') {echo " selected";} ?>>ABRIL</option>
                                            <option value="05"<?php if ($mes == '05') {echo " selected";} ?>>MAYO</option>
                                            <option value="06"<?php if ($mes == '06') {echo " selected";} ?>>JUNIO</option>
                                            <option value="07"<?php if ($mes == '07') {echo " selected";} ?>>JULIO</option>
                                            <option value="08"<?php if ($mes == '08') {echo " selected";} ?>>AGOSTO</option>
                                            <option value="09"<?php if ($mes == '09') {echo " selected";} ?>>SETIEMBRE</option>
                                            <option value="10"<?php if ($mes == '10') {echo " selected";} ?>>OCTUBRE</option>
                                            <option value="11"<?php if ($mes == '11') {echo " selected";} ?>>NOVIEMBRE</option>
                                            <option value="12"<?php if ($mes == '12') {echo " selected";} ?>>DICIEMBRE</option>
             
                                    </select> 
                                </div>                             
                            </div>
                            
                            <div style="margin: 32px 0 0;"> <label class="label">Condición Climática:</label></div>
                            <section class="checkbox-clima" style="margin: 15px 0">
                                <div class="checkbox-item">
                                    <input style="transform:scale(1.28);" id="temperatura" name="temperatura" type="checkbox" value="temperatura">
                                    <label for="temperatura">Temperatura</label>
                                </div>
                                <div class="checkbox-item">
                                    <input style="width:20px;transform:scale(1.28);" id="HumedadRelativa" name="HumedadRelativa" type="checkbox" value="humedad_relativa">
                                    <label for="HumedadRelativa">Humedad Relativa</label>
                                </div>
                                <div class="checkbox-item">
                                    <input style="width:20px;transform:scale(1.28);" id="Precipitaciones" name="Precipitaciones" type="checkbox" value="precipitaciones">
                                    <label for="Precipitaciones">Precipitaciones</label>
                                </div>
                                <div class="checkbox-item">
                                    <input style="width:20px;transform:scale(1.28);" id="RadiacionUV" name="RadiacionUV" type="checkbox" value="radiacion_UV">
                                    <label for="RadiacionUV" >Radiación UV</label>
                                </div>
                             </section>    

                             <section class="" style="margin-top: 45px;">
                                <label class="input-group">
                                     <div class="input-group-btn open">
                                         <button type="button" id="btn_buscar_condiciones" class="btn btn-default" tabindex="-1" style="height: 40px; display:flex; flex-wrap: wrap; align-content: center;">
                                            <div><i class="fa fa-search-plus"></i> BUSCAR </div>
                                            <div> <span id="cargando" style="display:none;">
                                                     <img src="https://www.sedir.org.pe/imgs/cargando.gif" style="width: 25px; height: 25px;" alt="">
                                                  </span>
                                            </div>
                                         </button>

                                      </div>
                                 </label>
                             </section>
                             
                        </div> <!-- div row -->

                </form><!-- end FORM -->


                
        <!-- RESULTADO DE LA TABLA -->
        <div class="row" id="conte-clima">
            <!--resultado por Ajax  -->
        </div>  

		</section>
		
		
		<!--footer-->	
			<?php  include ("footer.php") ?>
		<!--fin de footer-->		

	
			

	</div>
</div>
    <script src="https://www.sedir.org.pe/js/menu.js"></script>  <!-- MENU RESPONSIVE -->
   
    <script src="https://www.sedir.org.pe/js/over.js" type="text/javascript"></script>  
    <script src="https://www.sedir.org.pe/js/idioma.js" type="text/javascript"></script>
</body>
</html>