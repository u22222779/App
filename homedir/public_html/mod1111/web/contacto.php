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
		<section style="width:1080px; background-color: #FFF;padding: 30px 0 30px; background: url(http://munilapampa.gob.pe/web/slide/images/shadow_top.png) no-repeat top center;"><!--contacto-->
			<?php include($_SERVER['DOCUMENT_ROOT'].'/web/form/index.html'); ?>
		</section>
					
		<section style="width:1080px; background-color: #FFF;">
			<div class="vc_row">
					<div class="vc_row_img"><img src="imgs/cultura-libre.jpg" alt=""></div>
					<div class="vc_row_img"><img src="imgs/ciudad-sostenble.jpg" alt=""></div>
					<div class="vc_row_img">
                        <a href="http://munilapampa.gob.pe/web/libro_reclama.php" style="text-align: center;">
                            <img src="imgs/vecinos-puntuales.png" alt="">
                        </a>
                    </div>
					<div class="vc_row_img">
						<a href="http://munilapampa.gob.pe/web/popup/revista-fin.pdf" style="text-align: center;">
							<img src="imgs/Publicaciones11.png" alt="">
						</a>
					</div>
					<div class="vc_row_img"><img src="imgs/Seguridad.png" alt=""></div>
					<div class="vc_row_img"><img src="imgs/Innovacion.png" alt=""></div>
			</div>
		</section>
    

	
		<!--footer-->	
			<?php include ("footer.php") ?>
		<!--fin de footer-->	

	</div>
</div>			
</body>
</html>