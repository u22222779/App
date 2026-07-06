<?php require_once($_SERVER['DOCUMENT_ROOT'].'/conx.php');
	$id = mysqli_real_escape_string($link, $_GET['id']);
	$query="SELECT * FROM Webinar WHERE id = ". mysqli_real_escape_string($link, $id) ." limit 0,1";
	$result=mysqli_query($link,$query);
	$row = mysqli_fetch_object($result);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->   
<title>.:: SEDIR ::.</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="https://www.sedir.org.pe/css/style.css" />
<link rel="icon" href="https://sedir.org.pe/assets/img/favicon.png" type="image/x-icon">
<meta name="keywords" content="">
<meta name="description" content="">
    <!-- Open Graph -->
		<meta property="og:type" content="article"> 
		<meta property="og:site_name" content="sedir.org.pe"> 
		<meta property="og:title" content="<?php echo $row->tema; ?>"> 
		<meta property="og:description" content="<?php echo substr(strip_tags($row->subtemas), 0, 130) ;?>">
		<meta property="og:url" content="https://www.sedir.org.pe/webinar-detalle.php?id=<?php echo $id; ?>"> 
		<meta property="og:image" content="<?php echo $row->jpgyoutube; ?>">
		<meta content="100134106679300" property="fb:admin">
		<meta content="473245603047221" property="fb:app_id">
	<!-- fin Open Graph -->     
    
<link rel='stylesheet' id='superhero-carrois-gothic-css' href='httpss://fonts.googleapis.com/css?family=Carrois+Gothic&ver=4.4.1-alpha-36109' type='text/css' media='all' />
<link href='httpss://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='//rec.getsmartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', '19aa725ffd5a672733a2bb35bb706a0d8655996c');
</script>

<!--EFECTO HIGHSLIDE DE IMAGENES-->  
<script type="text/javascript" src="highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />  
<script type="text/javascript">
hs.graphicsDir = 'highslide/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'rounded-white';
hs.fadeInOut = true;
//hs.dimmingOpacity = 0.75;
// Add the controlbar
hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: .75,
		position: 'bottom center',
		hideOnMouseOut: true
	}
});
</script>
    
    
 <style>    
     .notitex{
        color: #5b6d5a;
        font-size: 14px;
        font-family: 'Roboto', sans-serif, Arial;
        line-height: 17px;
     }
     .notitit{
        padding: 0 0 6px 0;
        font-weight: bolder;
        color: #5f7d5d;
        font-size: 19px;
        font-family: Carrois Gothic;
        line-height: 20px;
     }
      .notidate{
        color: #869686;
        font-size: 13px;
        font-family: 'Roboto', sans-serif, Arial;
        line-height: 18px;
     }   
     .noti-detallee{
        width: 1050px;
        display: flex;
        margin: auto;
        box-sizing: border-box;
        padding: 0 0 20px;
     }  
div.line {
  background-image: url("https://www.sedir.org.pe/imgs/webinar/line.jpg");
  background-repeat: repeat-x;  height: 30px
}     
     
 /** WEBINAR**/  
     
     
     #WebinarOficial{
         text-align:  right;
     }

     article.webinar {
            background-color: #fff;
            border: #ccc solid 1px;
            border-radius: 3px;
            padding: 15px;
            margin-top: 17px;
            margin: 17px 10px 20px 10px;
            width: 95%;
            display: inline-block;
            text-align: center;
            vertical-align: top;
            -webkit-box-shadow: 0px 0px 83px -27px rgba(143,136,143,0.92); */
            -moz-box-shadow: 0px 0px 83px -27px rgba(143,136,143,0.92);
            box-shadow: 10px 10px 30px -20px rgb(143 136 143 / 92%);
        }   
     article.webinar figure {     
            margin: 0;
            padding: 0;
        }
        article.webinar img {
            border: #ccc solid 1px;
            margin-bottom: 5px;
            max-width: 100%;
            width: 100%;
            vertical-align: top;
            text-decoration: none;
            border: 0;
        }
        article.webinar p {
            margin-bottom: 5px;
        }     
        article.webinar .webinar_botones p {
            margin-bottom: 0px;
        }  
        article.webinar .webinar_botones p a{
            display: block;
            width: auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 8px 0;   
            font-weight: normal;
            text-decoration: none;
            color: #303030;            
        }      
   
     
  /** WEBINAR**/   
     
     
     
     
     
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

         <div style="width: 100%; margin: auto; margin-left: -10px; clear: both; background: url(https://sedir.org.pe/slide/images/shadow_top.png) no-repeat top center;
    padding: 30px 0 0 0;
"></div> 

					
		<section style="width:1080px; background-color: #FFF;margin: auto;">

            <div class="">
            <div class="noti-detallee" >

                <div style="width:100%; padding:8px; ">
                        <div style="display:flex; justify-content:space-between;">
                            <div> 
                            <a href="webinar.php">
                                <div class="notitit" style="padding:15px 0 15px; "><img src="imgs/T-webinar.jpg" alt=""></div>
                            </a></div> 
                            <div> 
                            <a href="javascript:window.history.back();">
                                <div style="padding:15px; "><img src="imgs/volver.jpg" alt=""></div>
                            </a> </div>                        
                        </div>    
                        <div class="notitex">
                        <!-- WEBINARS-->  
                        <div id="WebinarOficial">
                            
                            
                     <?php
                                  //formatear campo tipo 'date' de phpmyadmin a normal
                                  $fecha = date_create_from_format('Y-m-d', $row->fecha);
                     ?>
                              <!-- *****************************************************************************-->                             
                                <article class="webinar">
  
                                        <div style="display:flex;flex-direction:column;">
                                          <div>
                                            <img src="<?php echo $row->cabecera;?>" alt="Cabecera webinar">
                                          </div>
                                          <div style="padding:20px 40px 25px">
                                            <?php echo $row->cuerpo;?>
                                          </div>
                                          <div style="display:flex;flex-direction:column; margin:auto;">
                                              <div style="display:flex;flex-direction:row;">
                                                 
                                                  <!-- YOUTUBE -->
                                                  <div style="margin: 20px 40px; max-width:344px; max-height:210px; border: #ccc solid 1px;">
                                                     <?php if (!empty($row->jpgyoutube)) {  ?>
                                                       <img src="<?php echo $row->jpgyoutube;?>" width="344" height="210" alt="Portada Youtube">
                                                     <?php  }else{ ?> <!--CUANDO NO HAY IMAGEN-->
                                                        <img src="https://www.sedir.org.pe/imgs/webinar/VIDEO-NO-Disponible.jpg" width="344" height="210" alt="Portada VIDEO">
                                                     <?php  } ?> 
                                                  </div>
                                                  
                                                  <!-- PDF -->
                                                  <div style="margin: 20px 40px; max-width:344px; max-height:210px; border: #ccc solid 1px;">
                                                     <?php if (!empty($row->jpgpdf)) {  ?> 
                                                        <img src="<?php echo $row->jpgpdf;?>" width="344" height="210" alt="Portada PDF">
                                                     <?php  }else{ ?> <!--CUANDO NO HAY IMAGEN-->
                                                        <img src="https://www.sedir.org.pe/imgs/webinar/PDF-NO-Disponible.jpg" width="344" height="210" alt="Portada PDF">
                                                     <?php  } ?>   
                                                  </div>

                                              </div>
                                              
                                              <!-- Botones -->    
                                              <div style="display:flex;flex-direction:row;">
                                                 <!-- Boton youtube --> 
                                                 <div style="padding: 20px 40px;" > 
                                                    <?php if (!empty($row->urlyoutube)) {  ?>
                                                         <a href="<?php echo $row->urlyoutube;?>" target="_blank">
                                                            <img src="https://www.sedir.org.pe/imgs/webinar/Btn-ver-youtube.png" alt="Ver Youtube">
                                                         </a>
                                                    <?php  }else { ?> 
                                                            <img src="https://www.sedir.org.pe/imgs/webinar/Btn-ver-youtube.png" alt="Ver Youtube">
                                                    <?php  } ?> 
                                                          
                                                 </div>
                                                 <!-- Boton PDF --> 
                                                 <div style="padding: 20px 40px;">
                                                    <?php if (!empty($row->urlpdf)) {  ?>
                                                         <a href="<?php echo $row->urlpdf;?>" target="_blank">
                                                             <img src="https://www.sedir.org.pe/imgs/webinar/Btn-descarga-pdf.png" alt="Ver PDF">
                                                         </a>
                                                     <?php  }else {?> 
                                                             <img src="https://www.sedir.org.pe/imgs/webinar/Btn-descarga-pdf.png" alt="Ver PDF">
                                                     <?php  }?> 
                                                 </div>
                                              </div>                                                

                                           </div>
                                           <div style="display:flex;flex-direction:column;">
                                              <div class="line"> </div>
                                              <div style="margin:auto;">
                                                  <a href="https://www.sedir.org.pe/que-hacemos2.php" target="_blank">
                                                    <img src="https://www.sedir.org.pe/imgs/webinar/Btn-MasServicios.png" alt="Ver Youtube">
                                                  </a>
                                              </div>
                                              <div style="margin:auto;">
                                                  <img src="https://www.sedir.org.pe/imgs/webinar/Btn-redes.png" alt="Ver Youtube">
                                              </div> 
                                          </div>       
                                        </div>                                              
                                              
                                              
                                              
                                              
                                </article>
                              <!-- *****************************************************************************--> 
                        <?php
                            ///INCREMENTAR DONTADOR DE IMPRESIONES     
                              @$visitas = $row->visualizaciones+1;

                              $intro = "UPDATE `Webinar` SET visualizaciones= '$visitas' WHERE id= '$id'";

                              mysqli_query($link, $intro) or die('<b>No puedes meter Datos</b>');  
                        ?> 

                        </div> <!--WebinarOficial-->
    
                            
                        <!-- WEBINARS-->
                            
                            
                            
                            
                            
                        </div>
        	     </div>
              
                
            </div>
                
            
            </div>

		</section>
		
		
		<!--footer-->	
			<?php  include ("footer.php") ?>
		<!--fin de footer-->		

			

	</div>
</div>
    <script src="https://www.sedir.org.pe/js/over.js" type="text/javascript"></script>
    <script src="https://www.sedir.org.pe/js/idioma.js" type="text/javascript"></script>
</body>
</html>