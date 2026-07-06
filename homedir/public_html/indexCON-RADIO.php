<?php setcookie("nombre", 1, time() + (60*5) );
//creación de una cookie de 5 min para recargar el popup SÓLO UNA VEZ
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>.:: SEDIR ::.</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="https://www.sedir.org.pe/css/style.css" />
<link rel="shortcut icon" type="image/ico" href="https://www.sedir.org.pe/favicon.ico">
<link rel="icon" type="image/png" sizes="32x32" href="https://www.sedir.org.pe/favicon_32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://www.sedir.org.pe/favicon_96x96.png">

<meta name="keywords" content="">
<meta name="description" content="">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
            $(".play-pause").css("top", "-30px!important");
            $(".bg-mask").css("background-color", "beige!important");
    });
</script>
<style>
    .bg-mask, .cover-site {
        background-color: beige!important;
    }
    .play-pause, #playerButton {
        top: -30px!important;
    }
    #MusesRadioPlayer-HTML5-player-0 {
    margin: 50px 0 0 125px;
    }
</style>
</head>
	
<body>
<div id="fb-root"></div><!--app facebook plugin pagina-->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=473245603047221";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>    
    
    
<div id="boxed_layout">
	<div id="top_bg">
		<?php include ("header.php") ?>
		<section style="width:100%; background-color: #e4dbba;margin: auto;"><!--fondo de ejemplo-->
			<div class="vc_row">
					<div class=""><?php include ("slide/index.php") ?></div>
			</div>
		</section>
					
		<section style="width:1080px; background-color: #FFF;padding-bottom: 25px;margin: auto;">
            <div class="vc_row">
                <div class="vc_row" style="width: 66%; padding: 0;">
                       <div class="vc_row_img">
                            <a href="unidades-productivas2.php" style="text-align: center;">
                                <img src="imgs/unidades-productivas.jpg" alt="">
                            </a>
                       </div>
                        <div class="vc_row_img">
                            <a href="BibliotecaAgricola.php" target="_blank" style="text-align: center;">
                                <img src="imgs/Biblioteca-virtual.jpg" alt="">
                            </a>
                        </div>
                        <div class="vc_row_img">
                            <a href="revista-boletines.php" target="_blank" style="text-align: center;">
                                <img src="imgs/Publicaciones.jpg" alt="">
                            </a>
                        </div>
                        <div class="vc_row_img">
                            <a href="https://www.sedir.org.pe/condiciones-del-clima.php" target="_blank" style="text-align: center;">
                                <img src="imgs/clima.jpg" alt="">
                            </a>
                        </div>  
                </div>
                <div class="radio" style="background-image: url('https://www.sedir.org.pe/imgs/radio-online.jpg'); background-repeat: no-repeat; padding: 0; width:312px; height:290px;" >
                            <!-- RADIO SEDIR http://xcdn.player.streamingradio.me/sedir/ -->
                            <!--<iframe width="90" height="130" scrolling="no" border="0" style="border: 0; margin: 20px 0 0 125px;" src="https://rcdn.interconexion.net.pe/player/"></iframe> -->
                    <!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
                    <script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
                    <script type="text/javascript">
                    MRP.insert({
                    'url':'https://turbo.2cdn.eu/sedir/stream.aac',
                    'lang':'es',
                    'codec':'aac',
                    'volume':90,
                    'autoplay':false,
                    'jsevents':true,
                    'buffering':0,
                    'title':'Radio Sedir',
                    'wmode':'transparent',
                    'skin':'xavi2',
                    'width':95,
                    'height':95
                    });
                    </script>
                    <!-- ENDS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->

                </div>
            </div>
		</section>
		
    
        <section style="width:1080px; background-color: #FFF; padding-bottom: 40px;margin: auto;"><!--fondo saludo alcalde, video -->
			<div class="vc_verde">
                    <div class="vc_verde_left">
                        
                        <div class="verde_title"><span>AGRICULTURA: Desarrollo Integral </span>
                   
<p>
<img src="imgs/Portada_01.png" alt="" style="float: left; padding: 0 10px 20px 0; max-width: 150px; height: 232px;">     
La asociación, Servicio para el Desarrollo Integral Rural – SEDIR, tiene como propósito contribuir en el desarrollo agrícola y agroindustrial del valle del Nepeña, mediante el fortalecimiento de capacidades locales, asistencia técnica y extensión agraria.
</p>
<p>
Nuestra área de intervención involucra a dos ámbitos: Zona costa, en el cual la actividad se concentra más que todo en la fruticultura; y el ámbito de la sierra, espacio en el cual la práctica agrícola es más con fines de autoconsumo, pero que a la vez hay potenciales para un desarrollo productivo con un valor diferenciado, cuyos productos serían destinados a mercados especializados.
</p>
 <p>La articulación de mercados es un aspecto clave para ambos escenarios, teniendo como destino el mercado externo.</p>

                        </div>
                    </div>
					<div class="vc_verde_right">
                        <div class="verde_title"><span style="float:left">Canal Audiovisual:&nbsp; </span><span style="font-weight:bold;float:left">[ir a canal &nbsp;</span> 
                            <a href="https://www.youtube.com/channel/UCj_gLQ28-KSR608PiIN7K1Q">
                                <img src="imgs/youtube.png" alt="" width="33px" style="font-weight:bold;float:left">
                            </a>
                            <span style="font-weight:bold;float:left">]</span></div>
                        <iframe width="415" height="234" src="https://www.youtube.com/embed/_zq9dehH6m8" frameborder="0" allowfullscreen></iframe>

                    </div>
			</div>
		</section> 

        
		<section style="width:1080px; background-color: #FFF; padding-bottom: 0px;margin: auto;"><!--Noticias y face-->
            <?php include ("noticias/index.php") ?>
		</section>
        
        <!--
        <section style="width:1080px; background-color: #FFF; padding-bottom: 40px;">googlemap
                    <div style="width:1050px; margin: auto;"><img src="imgs/title_googlemaps.jpg" alt=""></div>
                    <div style="width:1050px; margin: auto;">
                         
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15756.743781723419!2d-78.18955683298233!3d-9.137672159633842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91abf1984245514b%3A0x73d2f621f8918525!2sMoro!5e0!3m2!1ses-419!2spe!4v1492747913500" width="1050" height="410" frameborder="0" style="border:0" allowfullscreen></iframe>                     
                        
                        
                        
                    </div>
		</section>-->
        
  		
		<section style="width:1080px; background-color: #FFF; padding-bottom:60px;margin: auto;"><!--fondo gris-->
			<div class="vc_gris" style="flex-direction: column;">
                    <div class="vc_grispublicidad" style="background-color:#4c4c4c;">
                        <div class="gris_title">Nuestros<span>SERVICIOS</span></div>
                        <div style="display: flex; justify-content:space-around; padding:10px;">
                            <div><img src="imgs/Publicidad01.jpg" style="padding:10px;"alt=""></div>
                            <div><img src="imgs/Publicidad02.jpg" style="padding:10px;"alt=""></div>
                            <div><img src="imgs/Publicidad03.jpg" style="padding:10px;"alt=""></div>
                        </div>
                        
                    </div>
					<div class="vc_grisenlaces" style="background-color: #303030;">
                        <div class="gris_title">Enlaces<span>RECOMENDADOS</span></div>
                            <!--carousel-->	
                                <?php  include ("carousel/index.html") ?>
                            <!--fin de carousel-->

                    </div>
			</div>
		</section>		
		

		
		<!--footer-->	
			<?php  include ("footer.php") ?>
		<!--fin de footer-->		

		<div class=""><?php //include ("popup/indexFORM.php") ?></div>	
			

	</div>
</div>
    <script src="https://www.sedir.org.pe/js/over.js" type="text/javascript"></script>  
    <script src="https://www.sedir.org.pe/js/idioma.js" type="text/javascript"></script>
</body>
</html>