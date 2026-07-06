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
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Ferdi Sonmezay">
		<meta name="website" content="http://www.ferdisonmezay.com">
		<meta name="github" content="http://github.com/pherdee">
		
		<title>Summernote - File Upload</title>
		
		<!-- Bootstrap, Fontawesome Core CSS -->
		<link href="./css/bootstrap.css" rel="stylesheet">
		<link href="./css/font-awesome.css" rel="stylesheet">
	  	<link href="./css/summernote.css" rel="stylesheet">

      <script type="text/javascript" src="http://pechinecas.gob.pe/web/formulario/visitasguiadas/js/jquery-1.11.3-jquery.min.js"></script>
     <script type="text/javascript" src="http://sedir.org.pe/cpanel/summernote/funciones.js"></script>
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-lite.min.js"></script>
    		
	</head>

<body>
    <!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container" style="padding-top:10px;">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a href="http://www.sedir.org.pe" target="_blank">
					<img src="./img/logo.png" alt="ferdi sonmezay"	height="50">
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
            					<a href="http://www.sedir.org.pe">
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
            <div><label>Fecha:</label><input class="small" type="date" class="fecha" name="fecha" /></div>
            <div><label>Título:</label><input class="small" type="text" class="titulo" name="titulo" placeholder="Título" size="200" style="width:100%;margin-bottom:20px;"/></div>
            <div><label>Copete / Bajada:</label><input class="small" type="text" class="copete" name="copete" placeholder="Copete / Bajada" size="250" style="width:100%;margin-bottom:20px;"/></div>

            <div style="width:100%;margin-bottom:20px;">
	           <label for="escaneo"> Cargar imagen principal:</label>
                <input id="uploadImage" type="file" accept="image/*" name="image" style="width:inherit;"/> <!-- para subir archivo-->
	        </div>          
                        
        <!-- editor WYSIWYG -->                                       
           
            <textarea id="summernote" name="summeroculto" class="summeroculto" ></textarea>
            <script>
              $('#summernote').summernote({
                placeholder: 'Ingresa aquí el texto',
                tabsize: 2,
                height: 120,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });
            </script>
        <!-- etiquetas -->
            <div style="width:100%;margin-bottom:20px;">
                <?php include 'tags.html'; ?>                
	        </div>      
    
	    <!-- checboxs -->
            <div style="width:100%;margin-bottom:20px;display:flex;flex-wrap: wrap;">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"  style="border: 1px solid #a9a9a9;border-radius: 2px;padding: 10px;margin-right:30px; height:41px;">
                        <input type="checkbox" name="destacado" class="destacado" value="1" style="width: 18px; height: 18px;"> Nota Destacada
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"  style="border: 1px solid #a9a9a9;border-radius: 2px;padding: 10px;margin-right:30px; height:41px;">
                        <input type="checkbox" name="activado" class="activado" value="1" style="width: 18px; height: 18px;"> Nota activada
                    </div>                
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"  style="border: 1px solid #a9a9a9;border-radius: 2px;padding: 10px;margin-right: 30px;height:41px;">
                        <input type="checkbox" name="video" class="video" value="V" style="width: 18px; height: 18px;"> Audiovisual
                    </div>                
                    <br><br>               
            </div>
			
									
			<br/>
                <img src="http://pechinecas.gob.pe/web/formulario/form/ajax.gif" class="ajaxgif hide" />
                <div class="msg"></div>
    
            <input id="button" class="btn btn-success" type="submit" value="Grabar datos">
    
    		
    
			<br>

			<br>
			<br>
<!--			<textarea rows="5" style="width:100%;" id="result"></textarea>      -->
</form> 
				
		</div>	
	</div>
	
	<div style="background-color:#121314; color:#aaa; padding:30px 0px; margin-top:100px; font-size:10pt;">
		<div class="container text-right">
			Design & Developed with &nbsp;<i class="fa fa-heart-o fa-lg" style="color:#c02942;"></i> 
		</div>
	</div>
	<!-- jQuery -->

    <!--<script src="funciones.js"></script> JS ISI en head-->
 

<? }
else
{
?>
	<p>USUARIO O CLAVE INCORRECTA!</p>
	<form action="http://www.sedir.org.pe/cpanel/summernote/sesion/index.php" method="POST">
    <input name="ses" type="hidden" value="new"><!-- para que no salga directo en el login: "llene usuario y clave" -->
	<input name="login" type="submit" value="INICIAR SESION">
	</form>
<? } ?>
<!--/LOGIN/ -->
</body>
</html>