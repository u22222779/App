<?php 
require($_SERVER['DOCUMENT_ROOT'].'/conx.php');
$tildes = $link->query("SET NAMES 'utf8'"); 
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
<!-- <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>

 <!--ICONS-->
<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
 
 <!--MENU RESPONSIVE-->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
<link rel="stylesheet" href="https://sedir.org.pe/css/estiloresponsive.css">  
 

<style>
body {
    margin: 0;
    font-family: "Inconsolata";
    font-family: "Open Sans",Arial,Helvetica,Sans-Serif;
}
.custom-file-upload {
    border: 1px solid #ccc;
    border-radius: 2px;
    display: inline-block;
    padding: 18px 8px;
    cursor: pointer;
    background-color: #165088;
    font-size: 12px;
    color: white;
    text-align: center;
    font-size: 100%;
}    
input[type="file"] {
    display: none;
    padding: 26px;
}
.yikes-easy-mc-form{
    color: #a2a2a2;
    text-align: left;
    display: inline-block;
    margin-bottom: 1.5em;
    width: 100%;

}
.yikes-easy-mc-form input[type="email"], .yikes-easy-mc-form input[type="number"], .yikes-easy-mc-form input[type="text"], .yikes-easy-mc-form input[type=text], select{
    box-sizing: border-box;
    display: block;
    width: 100%;
    max-width: 100%;    
    padding: 1.5278em;
    color: #777777;
    background-color: #f1f1f1!important;
    border: 2px solid rgba(51,51,51,.1);
    display: block;
    -moz-box-sizing: border-box;
    margin-bottom: 8px;
    min-height: 40px;
    width: 100%;
    font-size: 100%;
    line-height: 1.8;
    padding: 6px 12px;
    vertical-align: middle;    
}
::placeholder {
  color: #c3c3c3;
}
.enviar:hover {
    background-color: #1e6f22;
}

.enviar, input[type="button"]{
    display: block;
    width: 100%;
    margin-top: 1.5em;
    min-height: 40px;
    padding: 10px;
    cursor: pointer;
    font-family: inherit;
    background-color: #45a049;
    color: #fff;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    margin: 0;
    padding: 14px 20px;
    border: 0;
    cursor: pointer;
    text-align: center;
    letter-spacing: 0.1em;
    line-height: 1;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;    
}
/* PARA CAJITA MENSAJE divSmallBoxes */
.SmallBox {
    position: absolute;
    right: 5px;
    top: 20px;
    width: 420px;
    color: #fff;
    z-index: 9999;
    overflow: hidden;
    border: 1px solid transparent;
}
#divSmallBoxes{
    position: fixed;
    right: 0;
    top: 0;
    z-index: 9999;
}
.SmallBox .textoFull {
    width: 90%;
    float: left;
    padding-left: 20px;
}
.SmallBox span {
    font-size: 17px;
    font-weight: 300;
    letter-spacing: -1px;
    display: block;
    margin: 4px 0;
}
.miniIcono {
    height: 100%;
    font-size: 20px;
}
.animated.fadeInRight {
    -webkit-animation-name: fadeInRight;
    -moz-animation-name: fadeInRight;
    -o-animation-name: fadeInRight;
    animation-name: fadeInRight;
}
/* PARA CAJITA MENSAJE divSmallBoxes*/

</style>
</head>

<script>
$(document).ready(function(){
         // jquery para capturar el nombre del type FILE 
         jQuery('input[type=file]').change(function(){
            var filename = jQuery(this).val().split('\\').pop();
            var idname = jQuery(this).attr('id');
            console.log(jQuery(this));
            console.log(filename);
            console.log(idname);
            jQuery('span.'+idname).next().find('span').html(' '+filename); //OJO 
           });                                  
        // FIN jquery FILE     
    
    $("button[name~='btn_envio-voucher']").on("click", function(e){  //click grabar
        var formData = new FormData($('#formVoucher')[0]); //FUNCIONA PARA FILE
        //var op = $(this).parent().attr("id");
         if(validaFormVoucher()){ // retorna TRUE, Funcion de VALIDAR
                    // alert('Datos serializados tema: '+formData.tema);
                        $.ajax({
                            dataType : 'html',
                            url: 'webinar-grabar-voucher.php',
                            data:formData, // $idtarea." "$idalumno." ".$iddocente." ".$idaula
                            type: 'post',
                            contentType:false,
                            cache:false,
                            processData:false,
                            beforeSend:function(){
                                 $("#cargando").css("display", "block");
                               }, 
                             success: function (data){
                                 //acà es registro grabado!!!
                                 $("#contenido").css("display", "block");
                                 $("#contenido").html(""); //borra popup actual

                                $("#divSmallBoxes").html(data).fadeIn();//popup verde registro grabado
                                setTimeout(function(){ $("#divSmallBoxes").fadeToggle(); }, 6000);// se borra en 5 seg

                                $("#cargando").css("display", "none"); 

                                }//success

                            }); //ajax 2
                                    
            } //fin Valida FORM

    });	//fin click ENVIO TAREA 
     //valida Formulario Tarea Nueva
     function validaFormVoucher(){
            // Campos de texto
            if($("#FNAME").val() == ""){
                alert("Tiene que ingresar Nombres y Apellidos.");
                $("#FNAME").focus();      
                return false;
            }            
            if($("#DNI").val() == ""){
                alert("Tiene que ingresar su DNI (para comprobar depósito).");
                $("#DNI").focus();      
                return false;
            }
            if($("#CELULAR").val() == ""){
                alert("No indicó un nÚmero de celular.");
                $("#CELULAR").focus();
                return false; 
            }
            if($("#subir-archivo").val() == ""){
                alert("No cargó ningún Archivo (VOUCHER)");
                $("#subir-archivo").focus();
                return false;
            }

            // VALIDACIÓN DE   E M A I L
            if($("#EMAIL").val() == ""){
                alert("El campo Email está vacío.");
                $("#EMAIL").focus();
                return false;
            }
            if (ValidaEmail($("#EMAIL").val()) == false){
                alert("Ingrese un correo válido.");
                $("#EMAIL").focus();
                return false;
            }

            function ValidaEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            } // VALIDACIÓN DE   E M A I L

            return true; // Si todo está CORRECTO
        } //validaFormNuevaTarea() 


 
});// document Ready   
</script>
	
<body>
<!-- Cargando... -->
<div style="width: 110px;height: 30px;top: 0px;display: none;position: fixed;z-index: 10000;border: 1px solid rgb(240, 195, 109);background-color: rgb(249, 237, 190);padding-top: 3px;text-align: center; left: 50%; transform: translateX(-50%);" id="cargando">
            <img src="imgs/cargando2.gif" alt="" width="20px" height="20px">
            <b style="font-family: 'Open Sans',Arial,Helvetica,Sans-Serif; font-size: 13px; box-sizing: border-box;">Cargando....</b>
</div>

<div id="boxed_layout">
	<div id="top_bg">
		<!--header2-->	
		<?php  include ("header2.php") ?>
		<!--fin de header2-->		
  	
		<section style="width:auto; background-color: #FFF; padding-bottom:60px;"><!--fondo gris-->
			<div class="vc_gris-voucher" style="padding: 0 50px;  margin: auto 150px;">
                <!-- CABECERA -->
                <div style="flex-wrap:wrap; margin: 0px auto; text-align: center;">
                    <div style="margin: 0px auto; text-align: center;">
                        <img class="cabe" style="padding:30px 0px; width: 100%!important;" src="https://www.sedir.org.pe/imgs/webinar/CABECERA_voucher.jpg" alt="Cabecera webinar">              
                    </div>

                    <div id="contenido" style="margin: 0px auto;text-align: center;width: auto;">
                        <!-- FORMULARIO -->
                        <form id="formVoucher" name="formVoucher" enctype="multipart/form-data" method="post">
                            <section>
                                <!-- para SUBIR ARCHIVOS MULTIPLES DE IMGS-->
                                        <div style="background-color:#e9ece8; padding;10px; margin-bottom: 1.5em;" for="subir-archivo">
                                            <span class="subir-archivo">
                                                <input type="file" name="subir-archivo" id="subir-archivo" accept="image/*" capture="camera" />
                                                <!--<input id="subir-archivo" type="file" accept="image/*" name="subir-archivo"/> -->
                                            </span><!-- para subir archivo 1-->
                                            <label for="subir-archivo" class="custom-file-upload" style="margin: 15px 30px; width: 245px;">
                                                <i class="fa fa-cloud-upload"></i><span id="nombre-file-1">&nbsp;&nbsp;&nbsp;Subir voucher</span><!-- cambia con jquery el nom subido-->
                                            </label>
                                        </div>

                                        <input id="FECHA" type="hidden" name="FECHA" value="<?php echo date("d/m/Y"); ?>">
                                        

                                        <span class="yikes-easy-mc-form" style="margin-bottom:0;">Webinar</span>
                                        <select name="TEMA" id="TEMA" class="yikes-easy-mc-form" style="background-color:#e3f3d4!important;color: #6b6767; font-weight: bolder!important;">
                                            <?php
                                                //$sql="SELECT `fecha`, `tema` FROM (SELECT * FROM `Webinar` ORDER BY `fecha` DESC LIMIT 0,3 ) AS sub GROUP BY sub.`categoria` ORDER BY `fecha` DESC";
                                                // Es bueno pero ocultaba el Tercer webinar por ser de igual categoria y debe mostrar los 3 ultimos sin importar
                                                $sql="SELECT * FROM `Webinar` WHERE activo = 1 ORDER BY `fecha` DESC LIMIT 0,3";
                                                $result=mysqli_query($link,$sql);
                                                while($row = mysqli_fetch_object($result)){ 
                                                    $temaREC = mb_strimwidth("$row->tema", 0,55, "...") ;
                                                    @$date = new DateTime($row->fecha);
                                             ?>
                                                    <option value="<?php echo $row->tema;?>">
                                                    <?php $temaREC = mb_strtoupper($temaREC,"UTF-8"); // a mayusculas
                                                          echo "".$date->format('d-m-Y')." &nbsp;&nbsp; | &nbsp;&nbsp; ".$temaREC.""; ?>
                                                    </option>
                                                <?php 
                                                }
                                                ?>
                                        </select>


                                        <label for="yikes-easy-mc-form-1-FNAME" class="yikes-easy-mc-form">
                                           <span class="FNAME-label">Nombre y Apellidos</span>
                                            <input id="FNAME" name="FNAME" placeholder="" class="yikes-easy-mc-form" required="required" type="text" value="">
                                        </label>

                                        <div style="width:100%">
                                            <div style="width:40%; float:left;">
                                                <label for="DNI" class="yikes-easy-mc-form">
                                                    <span class="DNI-label">DNI:</span>
                                                    <input id="DNI" name="DNI" placeholder="" class="yikes-easy-mc-form" required="required" type="text" value="">
                                                </label>                                            
                                            </div>
                                            <div style="width:40%; float:right;">
                                                <label for="CELULAR" class="yikes-easy-mc-form">
                                                    <span class="CELULAR-label">Nº Celular:</span>
                                                    <input id="CELULAR" name="CELULAR" placeholder="" class="yikes-easy-mc-form" required="required" type="text" value="">
                                                </label>                                            
                                            </div>                                            
                                        </div>

                                        <label for="EMAIL" class="yikes-easy-mc-form">
                                            <span class="EMAIL-label">Dirección de correo electrónico</span>
                                            <input id="EMAIL" name="EMAIL" placeholder="ejemplo@gmail.com" class="yikes-easy-mc-form" required="required" type="email" value="">
                                        </label>
                             </section>                            
                                                
                            <label class="input" id="">
                                    <button type="button" name="btn_envio-voucher" class="enviar" style="">
                                        <i class="fa fa-send" style="margin-right: 10px;"></i> ENVIAR
                                    </button>
                            </label>
                            
                        </form> <!-- FORMULARIO -->
                        <div>
                            <span class="CELULAR-label" style="font-size:85%; color:#827c78;text-align:left;">Los datos asignados son confidenciales, su uso es solo para comprobación de recepción de su depósito, el nombre asignado en la casilla será como figurará en su certificado.</span>
                        </div>

                    </div><!-- contenido -->

                    <!-- popup verde para registro grabado -->
                        <div id="divSmallBoxes">
                            <!-- jala contenido por ajax de jquery -->
                        </div>
                </div>    
			</div>
		</section>				
		<!--footer-->	
			<?php  include ("footer.php") ?>
		<!--fin de footer-->		

		<div class=""><?php //include ("/popup/indexFORM.php") ?></div>	
			
	</div>
</div>
	<script src="https://www.sedir.org.pe/js/menu.js"></script>  <!-- MENU RESPONSIVE -->
   
    <script src="https://www.sedir.org.pe/js/over.js" type="text/javascript"></script>  
    <script src="https://www.sedir.org.pe/js/idioma.js" type="text/javascript"></script>
</body>
</html>