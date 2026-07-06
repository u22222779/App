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
    border-radius: 12px;
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

});// document Ready   
</script>
	
<body>
<!-- Cargando... -->
<div style="width: 110px;height: 30px;top: 0px;display: none;position: fixed;z-index: 10000;border: 1px solid rgb(240, 195, 109);background-color: rgb(249, 237, 190);padding-top: 3px;text-align: center; left: 50%; transform: translateX(-50%);" id="cargando">
            <img src="imgs/cargando2.gif" alt="" width="20px" height="20px">
            <b style="font-family: 'Open Sans',Arial,Helvetica,Sans-Serif; font-size: 13px; box-sizing: border-box;">Cargando....</b>
</div>

<div id="boxed_layout">
	<section style="width:auto; background-color: #FFF; padding-bottom:60px;"><!--fondo gris-->
                    <div id="contenido" style="margin: 0px auto;text-align: center;width: auto;">
                        <!-- FORMULARIO -->
                        <form id="formVoucher" name="formVoucher" enctype="multipart/form-data" method="post">
                            <div style="background-color:#e9ece8; padding;10px; margin-bottom: 1.5em;" for="subir-archivo">
                                            <span class="subir-archivo">
                                                <input id="subir-archivo" type="file" accept="image/*" name="subir-archivo">
                                            </span><!-- para subir archivo 1-->
                                            <label for="subir-archivo" class="custom-file-upload" style="margin: 15px 30px;width: 245px;position: relative;">
                                                <i class="fa fa-cloud-upload" style="position: absolute; left: 15px;"></i>
                                                <span id="nombre-file-1">&nbsp;&nbsp;&nbsp;Luz - Distriluz </span>
                                                <span style="align:right;position: absolute;right: 2px;">
                                                    <span style="padding:4px;margin:4px;background-color: #f9a313;">&nbsp;&nbsp;&nbsp;</span>
                                                    <span style="padding:4px;margin:4px;background-color: #32b915;">&nbsp;&nbsp;&nbsp;</span>
                                                </span>
                                            </label>
                            </div>
                                                
                            <label class="input" id="">
                                    <button type="button" name="btn_envio-voucher" class="enviar" style="">
                                        <i class="fa fa-send" style="margin-right: 10px;"></i> ENVIAR
                                    </button>
                            </label>
                            
                        </form> <!-- FORMULARIO -->


                    </div><!-- contenido -->
   	</section>				
</div>

</body>
</html>