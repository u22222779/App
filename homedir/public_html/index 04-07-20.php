<?php setcookie("nombre", 1, time() + (60*5) );
//creación de una cookie de 5 min para recargar el popup SÓLO UNA VEZ
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>.:: SEDIR ::.</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="http://www.sedir.org.pe/css/style.css" />
<link rel="icon" href="http://sedir.org.pe/assets/img/favicon.png" type="image/x-icon">
<meta name="keywords" content="">
<meta name="description" content="">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='//rec.getsmartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', '19aa725ffd5a672733a2bb35bb706a0d8655996c');
</script>
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
		<section style="width:1080px; background-color: #dccd94;"><!--fondo de ejemplo-->
			<div class="vc_row">
					<div class=""><?php include ("slide/index.html") ?></div>
			</div>
		</section>
					
		<section style="width:1080px; background-color: #FFF;padding-bottom: 25px;">
            <div class="vc_row">
                <div class="vc_row" style="width: 66%; padding: 0;">
                       <div class="vc_row_img">
                            <a href="unidades-productivas2.php" style="text-align: center;">
                                <img src="imgs/unidades-productivas.jpg" alt="">
                            </a>
                       </div>
                        <div class="vc_row_img"><img src="imgs/Biblioteca-virtual.jpg" alt=""></div>
                        <div class="vc_row_img">
                            <a href="revista-boletines.php" target="_blank" style="text-align: center;">
                                <img src="imgs/Publicaciones.jpg" alt="">
                            </a>
                        </div>
                        <div class="vc_row_img">
                            <a href="https://www.accuweather.com/es/pe/moro/261940/weather-forecast/261940" target="_blank" style="text-align: center;">
                                <img src="imgs/clima.jpg" alt="">
                            </a>
                        </div>  
                </div>
                <div style="width: 33%; padding: 0;" >
                        <div>
                            <!-- RADIO SEDIR-->
                    <iframe width="312" height="286" scrolling="no" border="0" style="border: 0; box-shadow: 1px 1px 0  #fff;" src="http://xcdn.player.streamingradio.me/sedir/"></iframe>

                        </div>
                </div>
            </div>
		</section>
		
    
        <section style="width:1080px; background-color: #FFF; padding-bottom: 40px;"><!--fondo saludo alcalde, video-->
			<div class="vc_verde">
                    <div class="vc_verde_left">
                        
                        <div class="verde_title"><span>AGRICULTURA: Desarrollo Integral </span>
                   
<p>
<img src="imgs/Portada_01.png" alt="" style="float: left; padding: 0 10px 20px 0; max-width: 150px;">     
La asociación, Servicio para el Desarrollo Integral Rural – SEDIR, tiene como propósito contribuir en el desarrollo agrícola y agroindustrial del valle del Nepeña, mediante el fortalecimiento de capacidades locales, asistencia técnica y extensión agraria.
</p>
<p>
Nuestra área de intervención involucra a dos ámbitos: Zona costa, en el cual la actividad se concentra más que todo en la fruticultura; y el ámbito de la sierra, espacio en el cual la práctica agrícola es más con fines de autoconsumo, pero que a la vez hay potenciales para un desarrollo productivo con un valor diferenciado, cuyos productos serían destinados a mercados especializados.
</p>
 

                        </div>
                    </div>
					<div class="vc_verde_right">
                        <div class="verde_title"><span style="float:left">Canal Audiovisual:&nbsp; </span><span style="font-weight:bold;float:left">[ir a canal &nbsp;</span> 
                            <a href="https://www.youtube.com/channel/UCj_gLQ28-KSR608PiIN7K1Q">
                                <img src="imgs/youtube.png" alt="" width="33px" style="font-weight:bold;float:left">
                            </a>
                            <span style="font-weight:bold;float:left">]</span></div>
                        <iframe width="415" height="234" src="https://www.youtube.com/embed/WSmBsIVM0Uc" frameborder="0" allowfullscreen></iframe>

                    </div>
			</div>
		</section> 

        
		<section style="width:1080px; background-color: #FFF; padding-bottom: 0px;"><!--Noticias y face-->
            <?php include ("noticias/index.php") ?>
		</section>
        
        <!--
        <section style="width:1080px; background-color: #FFF; padding-bottom: 40px;">googlemap
                    <div style="width:1050px; margin: auto;"><img src="imgs/title_googlemaps.jpg" alt=""></div>
                    <div style="width:1050px; margin: auto;">
                         
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15756.743781723419!2d-78.18955683298233!3d-9.137672159633842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91abf1984245514b%3A0x73d2f621f8918525!2sMoro!5e0!3m2!1ses-419!2spe!4v1492747913500" width="1050" height="410" frameborder="0" style="border:0" allowfullscreen></iframe>                     
                        
                        
                        
                    </div>
		</section>-->
        
        
      
		<section style="width:1080px; background-color: #FFF; padding-bottom:60px;"><!--fondo gris-->
			<div class="vc_gris">
                    <div class="vc_gris_left">
                        <div class="gris_title">Servicios <span>EN LINEA</span></div>
                        <img src="imgs/sample1.jpg" alt="">
                    </div>
					<div class="vc_gris_right">
                        <div class="gris_title">Links</div>
                            <div class="links"><a href="http://www.acu.pe">www.acu.pe</a></div>
                            <div class="links"><a href="http://www.munimoro.gob.pe">www.munimoro.gob.pe</a></div>
                            <div class="links"><a href="http://www.parroquiademoro.pe">www.parroquiademoro.pe</a></div>
                            <div class="links"><a href="http://www.development-way.blogspot.com">www.development-way.blogspot.com</a></div>
                            <div class="links"><a href="http://www.sistemas.minag.gob.pe/sisap/portal">www.sistemas.minag.gob.pe/sisap/portal</a></div>
                            <div class="links"><a href="http://www.minagri.gob.pe/portal">www.minagri.gob.pe/portal</a></div>
                            <div class="links"><a href="http://www.senasa.gob.pe/senasa">www.senasa.gob.pe/senasa</a></div>
                            <div class="links"><a href="http://www.inia.gob.pe">www.inia.gob.pe</a></div>
                            <div class="links"><a href="http://www.prohass.com.pe">www.prohass.com.pe</a></div>
                            <div class="links"><a href="http://www.promango.org/es">www.promango.org/es</a></div>
                            <div class="links"><a href="http://www.peruorganico.com/blog/acerca-de" class="links">www.peruorganico.com/blog/acerca-de</a></div>
                            <div class="links"><a href="http://www.portalfruticola.com">www.portalfruticola.com</a></div>

                    </div>
			</div>
		</section>
		
		<!--footer-->	
			<?php  include ("footer.php") ?>
		<!--fin de footer-->		

		<div class=""><?php //include ("popup/indexFORM.php") ?></div>	
			

	</div>
</div>
    <script src="http://www.sedir.org.pe/js/over.js" type="text/javascript"></script>  
    <script src="http://www.sedir.org.pe/js/idioma.js" type="text/javascript"></script>
</body>
</html>