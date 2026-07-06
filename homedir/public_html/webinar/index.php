<?php setcookie("nombre", 1, time() + (60*5) );
 require_once($_SERVER['DOCUMENT_ROOT'].'/conx.php'); 
//creación de una cookie de 5 min para recargar el popup SÓLO UNA VEZ
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>.:: SEDIR ::.</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="https://www.sedir.org.pe/css/style.css" />
<link rel="icon" href="https://sedir.org.pe/assets/img/favicon.png" type="image/x-icon">
<meta name="keywords" content="">
<meta name="description" content="">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
 
 <!--MENU RESPONSIVE-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
<link rel="stylesheet" href="https://sedir.org.pe/css/estiloresponsive.css">  
 
</head>
	
<body>

<div id="boxed_layout">
	<div id="top_bg">
		<!--header2-->	
		<?php  include ("../header2.php") ?>
		<!--fin de header2-->		
  	
		<section style="width:auto; background-color: #FFF; padding-bottom:60px;"><!--fondo gris-->
			<div class="">
                <!-- CABECERA --> 
                <div style="flex-wrap:wrap; margin: 0px auto; text-align: center;">
                    <div class="vc_gris-inscripciones" style="margin: 0px auto; text-align: center; width: 1024px;">
                                <!-- JALA DE BASE DE DATOS CABECERA  Y URL DE FORM GOOGLE-->
                                <?php  $sqlA="SELECT fecha, cabecera, Formgoogle FROM `Webinar` ORDER BY fecha DESC LIMIT 1";
                                       $resultA=mysqli_query($link,$sqlA);
                                       $rowA = mysqli_fetch_object($resultA);
                                ?>

                        <img class="cabe" style="padding: 10px!important;" src="<?php echo $rowA->cabecera; ?>" alt="Cabecera webinar">              
                    </div>

                    <div style="margin: 0px auto;text-align: center;width: auto;">
                        <iframe src="<?php echo $rowA->Formgoogle; ?>" width="100%" height="2135" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
						<?php
                                mysqli_close($link);
						?>
                    </div>
                </div>    
			</div>
		</section>				
		<!--footer-->	
			<?php  include ("../footer.php") ?>
		<!--fin de footer-->		

		<div class=""><?php //include ("../popup/indexFORM.php") ?></div>	
			
	</div>
</div>
	<script src="https://www.sedir.org.pe/js/menu.js"></script>  <!-- MENU RESPONSIVE -->
   
    <script src="https://www.sedir.org.pe/js/over.js" type="text/javascript"></script>  
    <script src="https://www.sedir.org.pe/js/idioma.js" type="text/javascript"></script>
</body>
</html>