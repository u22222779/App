<!DOCTYPE html>
<html lang="es">
<head>
<title>.:: MUNI LA PAMPA ::.</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="shortcut icon" type="image/x-icon" href="" />
<meta name="keywords" content="">
<meta name="description" content="">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
</head>
	
<body>
<div id="boxed_layout">
	<div id="top_bg">
		<?php include ("header.php") ?>
		<section style="width:1080px; padding: 30px 0 30px; background: url(http://munilapampa.gob.pe/web/slide/images/shadow_top.png) no-repeat top center;background-color: #FFF;"><!--transparencia-->
            <div style="transform: scaleY(1.2); font-family: 'Roboto', Arial, sans-serif; color: #094617; font-size: 15px; padding: 25px 0 0 100px; font-weight: bold;"><h1>Galería Fotográfica:</h1></div>
		
					
         <?php include ("galeria/galeria.html") ?>
	</section>
		<!--footer-->	
			<?php include ("footer.php") ?>
		<!--fin de footer-->	

	</div>
</div>			
</body>
</html>