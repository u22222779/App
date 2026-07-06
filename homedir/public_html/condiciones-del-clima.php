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
@media only screen and (max-width: 600px) {
  body {
    background-color: lightblue;
  }
}
</style>
</head>
	
<body>

<div id="boxed_layout">
	<div id="top_bg">

		<!--header2-->	
		    <?php //include ("header.php") ?>
        <?php include ("sedirhead/index.html") ?>
		<!--fin de header2-->		
  	
		<section style="width:1080px; background-color: #FFF; padding-bottom:60px;margin: auto;"><!--fondo gris-->

                <!-- CABECERA -->
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); grid-gap: 50px 200px; padding:20px;">
                   
                    <div style="grid-column: 1/3;">
                         <img src="imgs/Button-cond-del-clima.jpg" alt="">
                    </div>                   
                   
                    <div style="justify-self: start;">
                         <a href="estacion-meteorologica.php"><img src="imgs/Button-cond-ESTAC-METE.jpg" alt=""></a>
                    </div>

                    <div style="justify-self: end;">
                        <a href="https://www.accuweather.com/es/pe/moro/261940/weather-forecast/261940"><img src="imgs/Button-cond-ACCUW.jpg" alt=""></a>
                    </div>
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