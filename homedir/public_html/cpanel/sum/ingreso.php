<?php
session_start();
if(!empty($_SESSION['usuario'])){
		//sino, calculamos el tiempo transcurrido
		$fechaGuardada = $_SESSION["ultimoAcceso"];
		$ahora = date("Y-n-j H:i:s");
		$tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada));
		//comparamos el tiempo transcurrido
		if($tiempo_transcurrido >= 300) { // 5 minutos se cierra sesion
			//si pasaron 10 minutos o más
		 	unset ( $_SESSION ["usuario"] );
			session_destroy(); // destruyo la sesión
			session_set_cookie_params(0,"/"); 
			//sino, actualizo la fecha de la sesión
		}else {
			$_SESSION["ultimoAcceso"] = $ahora;
		}	
?>
<!DOCTYPE html>
   <html lang="en">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Ferdi Sonmezay">

		
		<title>Summernote - File Upload</title>
		
		<!-- Bootstrap, Fontawesome Core CSS --> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="https://www.sedir.org.pe/cpanel/sum/css/bootstrap.css" rel="stylesheet">
		<link href="https://www.sedir.org.pe/cpanel/sum/css/font-awesome.css" rel="stylesheet">
	  	<link href="https://www.sedir.org.pe/cpanel/sum/css/summernote.css" rel="stylesheet">

      <script type="text/javascript" src="https://www.sedir.org.pe/cpanel/sum/js/jquery-1.11.3-jquery.min.js"></script>
      <script type="text/javascript" src="funciones.js"></script> <!--llama a proceso.php(grabacion en DB) -->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	</head>
	<body>
 <!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container" style="padding-top:10px;">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a href="https://www.sedir.org.pe" target="_blank">
					<img src="https://www.sedir.org.pe/cpanel/summernote/img/logo.png" alt="ferdi sonmezay"	height="50">
				</a>
			</div>
           
            <div class="collapse navbar-collapse">
            	<div class="row">
            		<div class="col-md-6">
            			<p style="margin-top:10px;">.:: SEDIR ::. Panel noticias</p>
            		</div>
            		<div class="col-md-5 text-right" style="margin-top:8px;">
            			<div class="row">
            				<div class="col-md-9"></div>
            				<div class="col-md-1">
            					<a href="https://www.sedir.org.pe">
									  <i class="fa fa-globe fa-lg a-social-web a-social"></i>
								</a>
		            		</div>
		            		
		            		<div class="col-md-1">
            					<a href="https://twitter.com/">
		            				<i class="fa fa-twitter fa-lg a-social-twitter a-social"></i>
								</a>
		            		</div>
		            		
		            		<div class="col-md-1">
            					<a href="https://github.com/">
									 <i class="fa fa-github fa-lg a-social-github a-social"></i>
								</a>
		            		</div>
           				</div>
           			</div>
            	</div>
			</div>
        </div>
		<!-- /.container -->
	</nav>
	
	<div class="container" style="margin-top:80px;">
		
		<div class="row">
			
		</div>
		<div class="row"  style="padding-top:40px;">

<form id="form" class="for" action="proceso.php" method="post" enctype="multipart/form-data">   <!-- para subir archivo-->       
            <div><label>Fecha:</label><input class="small" type="date" name="fecha"></div>
            <div><label>Título:</label><input class="small" type="text" name="titulo" placeholder="Título" size="200" style="width:100%;margin-bottom:20px;"></div>
            <div><label>Copete / Bajada:</label><input class="small" type="text" name="copete" placeholder="Copete / Bajada" size="250" style="width:100%;margin-bottom:20px;"></div>

            <div style="width:100%;margin-bottom:20px;">
	           <label for="escaneo"> Cargar imagen principal:</label>
                <input id="uploadImage" type="file" accept="image/*" name="image" style="width:inherit;"> <!-- para subir archivo-->
	        </div>          
	        

	                                          	                                          
        <!-- editor WYSIWYG -->                                   
			<div class="summernote" id="summernote"></div>
            <textarea rows="1" name="summeroculto" class="summeroculto" style="visibility:hidden"></textarea>

        <!-- etiquetas -->
            <div style="width:100%;margin-bottom:20px;">
                <?php include 'tags.html'; ?>                
	        </div>        
	    <!-- checboxs -->
            <div style="width:100%;margin-bottom:20px;display:flex;flex-wrap: wrap;">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="border: 1px solid #a9a9a9;border-radius: 2px;padding: 10px;margin-right:30px; height:41px;">
                        <input type="checkbox" name="destacado" class="destacado" value="1" style="width: 18px; height: 18px;"> Nota Destacada
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="border: 1px solid #a9a9a9;border-radius: 2px;padding: 10px;margin-right:30px; height:41px;">
                        <input type="checkbox" name="activado" class="activado" value="1" style="width: 18px; height: 18px;"> Nota activada
                    </div>                
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="border: 1px solid #a9a9a9;border-radius: 2px;padding: 10px;margin-right: 30px;height:41px;">
                        <input type="checkbox" name="video" class="video" value="V" style="width: 18px; height: 18px;"> Audiovisual
                    </div>                            
            </div>
			
									
			<br>
                <div class="ajaxgif">
                    <img src="http://pechinecas.gob.pe/web/formulario/form/ajax.gif" class="ajaxgif hide" />
                </div>                
                <div class="msg"></div>
 
            <input id="button" class="fa fa-floppy-o btn btn-success" type="submit" value="&#xf0c7; Grabar datos">
    
			<br>

     
</form>
		</div>	<!-- class="row" -->
	</div>   <!-- class="container" -->
	
	<div style="background-color:#121314; color:#aaa; padding:30px 0px; margin-top:100px; font-size:10pt;">
		<div class="container text-right">
			Design & Developed with &nbsp;<i class="fa fa-heart-o fa-lg" style="color:#c02942;"></i> 
		</div>
	</div>

	<!-- jQuery -->
	<script src="./js/jquery.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/summernote.js"></script><!--en la linea 6732  "url: 'editor-upload.php'" para colocar url donde grabar las imagenes insertades con boton 'picture' dentro de textarea (no por input file)  -->   
	
    <!--<script src="funciones.js"></script> JS ISI en head-->
 

<? }
else
{
?>
	<p>USUARIO O CLAVE INCORRECTA!</p>
	<form action="https://www.sedir.org.pe/cpanel/sum/sesion/index.php" method="POST">
    <input name="ses" type="hidden" value="new"><!-- para que no salga directo en el login: "llene usuario y clave" -->
	<input name="login" type="submit" value="INICIAR SESION">
	</form>
<? } ?>
<!--/LOGIN/ -->
        
	   
	</body>
</html>