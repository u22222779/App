<?php require_once($_SERVER['DOCUMENT_ROOT'].'/conx.php'); ?>
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
     
 /** WEBINAR**/  
     
     
     #WebinarOficial{
         text-align:  right;
     }
     
     @media only screen and (max-width: 1072px){
        article.webinar {
            width: 24%!important;
        }
     }
    @media only screen and (max-width: 768px){
        article.webinar{
            margin-right: 20px!important;
            width: 33%!important;
        }  
    }      
    @media only screen and (max-width: 500px){
        article.webinar {
            margin-right: 0!important;
            width: auto!important;
            display: block!important;
        }
     }
     article.webinar {
            background-color: #fff;
            border: #ccc solid 1px;
            border-radius: 3px;
            padding: 15px;
            margin-top: 17px;
            margin-right: 59px;
            width: 15%;
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
 <!--mostrar contenidos -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
$(document).ready(function(){
    
    $('#btn_buscar_condiciones').on('click', function(e) {
        e.preventDefault();
        var dataString = $('#form-filtros').serialize();
        //alert('Datos serializados: '+dataString);
        				$.ajax({
        					url: 'webinar-tabla.php',
        					data:dataString,
        					type: 'post',
                            beforeSend:function(){
                              $("#cargando").css("display", "block");
                              },                              
        					success: function (data){
        					    $("#WebinarOficial").css("display", "block"); // display tabla
        						$("#WebinarOficial").html(data);

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
                            <div style="padding:10px 40px 5px">
                                <p>
                                   Te compartimos la grabación (video) y su respectiva presentación (pdf) de forma gratuita de cada <strong>WEBINAR</strong> realizado. Si te interesa explorar más de estos temas o tienes preguntas puedes escribirnos a <strong>secretaria@sedir.org.pe</strong> y nos pondremos en contacto contigo.
                                </p>

                                <?php  $sqlA="SELECT fecha, tema, Inscripciones FROM `Webinar` ORDER BY fecha DESC LIMIT 1";
                                       $resultA=mysqli_query($link,$sqlA);
                                       $rowA = mysqli_fetch_object($resultA);
                                        $FechaWebinar = $rowA->fecha;
                                        $FechaAhora = date("Y-m-d"); 
                                        //fecha en español
                                        $fechaA = date_create_from_format('Y-m-d', $rowA->fecha);

                                       if($FechaWebinar >= $FechaAhora){
                                ?>       <!-- MUESTRA U OCULTA DATOS DEL PROX. WEBINAR -->
                                        <div class="proxWebi">
                                            <p>Prox. Webinar: <?php echo date_format($fechaA, 'd - m - Y');  ?> <strong>" <?php echo $rowA->tema; ?>"</strong></p>
                                            <p>Inscripciones: <a href="https://sedir.org.pe/<?php echo $rowA->Inscripciones; ?>"><strong>https://sedir.org.pe/<?php echo $rowA->Inscripciones; ?></strong> </a></p> 
                                        </div>
                                <?php 
                                      }// fin If
                                ?>

                                                 
                            </div>
                            
                        <!-- WEBINARS -->  
                <!-- FORM -->
                <form action="javascript:void(0);" method="post" id="form-filtros" class="smart-form">
                   <div class="notitex" style="padding-left: 40px;"> <i class="fas fa-cloud-sun-rain"></i> <b>Búsqueda Webinar - SEDIR</b></div>
                         <div class="row notitex">
                            <div class="combo-clima">
                                <div>
                                    <label class="label">Buscar por año:</label>
                                    <select name="anio" id="anio" class="form-control" style="">
                                            <option value="Todos" selected="">---Todos---</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                    </select> 
                                </div>
                            
                                <div>
                                    <label class="label">Buscar por Tema:</label>
                                    <select name="categoria" id="categoria" class="form-control" style="">
                                            <option value="Todos" selected="">---Todos---</option>
                                            <?php
                                                $sql="SELECT COUNT(`categoria`), `categoria` FROM `Webinar` GROUP BY `categoria`";
                                                $result=mysqli_query($link,$sql);
                                                while($row = mysqli_fetch_object($result)){ 

                                                    $MultiCategoria = explode(",",$row->categoria); // SI es más de una categ. NO se muestra, no es neces.
                                                    if(empty($MultiCategoria[1])){  
                                                    ?>
                                                        <option value="<?php echo $row->categoria;?>">

                                                            <?php echo $row->categoria;?>

                                                        </option>
                                                    <?php 
                                                    }
                                                }
                                                ?>
                                    </select> 
                                </div>   
                                <div class="input-group-btn open">
                                        <button type="button" id="btn_buscar_condiciones" class="btn btn-default" tabindex="-1" style="height: 40px; display:flex; flex-wrap: wrap; align-content: center; margin-top: 15px;">
                                        <div><i class="fa fa-search-plus"></i> BUSCAR </div>
                                        <div> <span id="cargando" style="display:none;">
                                                    <img src="https://www.sedir.org.pe/imgs/cargando.gif" style="width: 25px; height: 25px;" alt="">
                                                </span>
                                        </div>
                                        </button>
                                </div>    
                                
                            </div>

                             
                        </div> <!-- div row -->

                </form><!-- end FORM -->

                        <div id="WebinarOficial">
                            <!-- RESULTADO INCIAL CON 4 REGISTROS -->
                            <?php
                                $sql="SELECT * FROM Webinar WHERE activo = 1 ORDER BY fecha DESC LIMIT 4";
                                $result=mysqli_query($link,$sql);

                                while($row = mysqli_fetch_object($result)){ //OJO si es object va ' $row->... '
                                        //formatear campo tipo 'date' de phpmyadmin a normal
                                        $fecha = date_create_from_format('Y-m-d', $row->fecha);
                            ?>
                              <!-- *****************************************************************************-->                             
                                          <article class="webinar">
                                                <figure>
                                                    <?php   
                                                    @$idd= $row->id; 
                                                    @$tema= $row->tema; 
                                                    @$tema= urls_amigables($tema);
                                                    if (!empty($idd)) { ?> 
                                                        <!-- ********URL AMIGABLE***original*webinar-detalle.php?id=$1&title=$2 **--> 
                                                        <a href="/webinar/<?php echo $idd;?>/<?php echo $tema;?>">
                                                            <img src="<?php echo $row->afiche;?>" width="140px" alt="Afiche Webinar">
                                                        </a>
                                                    <?php     
                                                    }  ?> 
                                                </figure>
                                                <p>Fecha: <?php echo date_format($fecha, 'd-m-Y'); ?></p>
                                                <div class="webinar_botones">
                                                    <?php   
                                                    if (!empty($idd)) {
                                                      ?>  
                                                    <p><a href="/webinar/<?php echo $idd;?>/<?php echo $tema;?>">Ver Detalle</a></p>
                                                    <?php     
                                                    }  ?>                                                  

                                                </div>
                                           </article>
                              <!-- *****************************************************************************--> 
                            <?php

                                }
                                mysqli_close($link);


                                //////////URLS AMIGABLES ////////
                                function urls_amigables($url) {
                                    // Tranformamos todo a minusculas
                                    $url = mb_strtolower($url);
                                    
                                    //Rememplazamos caracteres especiales latinos
                                    $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
                                    $repl = array('a', 'e', 'i', 'o', 'u', 'n');
                                    $url = str_replace ($find, $repl, $url);
                                    
                                    // Añaadimos los guiones
                                    $find = array(' ', '&', '\r\n', '\n', '+');
                                    $url = str_replace ($find, '-', $url);
                                    
                                    // Eliminamos y Reemplazamos demás caracteres especiales
                                    $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
                                    $repl = array('', '-', '');
                                    $url = preg_replace ($find, $repl, $url);
                                    
                                    return $url; 
                                }

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