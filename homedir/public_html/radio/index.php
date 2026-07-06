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
     <!-- Open Graph -->
     <meta property="og:type" content="article"> 
		<meta property="og:site_name" content="sedir.org.pe"> 
		<meta property="og:title" content="Radio SEDIR"> 
		<meta property="og:description" content="Radio SEDIR">
		<meta property="og:url" content="https://sedir.org.pe/radio"> 
		<meta property="og:image" content="https://www.sedir.org.pe/imgs/RADIOSEDIR3.jpg">
		<meta content="100134106679300" property="fb:admin">
		<meta content="473245603047221" property="fb:app_id">
	<!-- fin Open Graph -->

<style>
    body {
        margin: 0;
        font-family: "Inconsolata";
        font-family: "Open Sans",Arial,Helvetica,Sans-Serif;
    }
    #MusesRadioPlayer-HTML5-player-0 {
        margin: 50px 0 0 125px;
    }
</style>
</head>

<body>
<div id="boxed_layout">
	<div id="top_bg">
		<!--header2-->	
		<?php  include ("../header2.php") ?>
		<!--fin de header2-->		
  	
		<section style="width:1080px; background-color: #FFF; padding-bottom:60px; margin:auto;"><!--fondo gris-->
                <!-- CABECERA -->

                        <div class="vc_row">
                            <div class="vc_row" style="width: 66%; padding: 0;">
                                <div class="vc_row_img">
                                    <img src="https://www.sedir.org.pe/imgs/RADIOSEDIR3.jpg" style="width: 100%;" alt="">
                                </div>  
                            </div>
                            <div class="vc_row" style="width: 34%; padding: 0;">
                            <div class="radio" style="background-image: url('https://www.sedir.org.pe/imgs/radio-online.jpg'); background-repeat: no-repeat; padding: 0; width:312px; height:290px;" >
                                        <!-- RADIO SEDIR http://xcdn.player.streamingradio.me/sedir/ -->
                                        <!--<iframe width="90" height="130" scrolling="no" border="0" style="border: 0; margin: 20px 0 0 125px;" src="https://rcdn.interconexion.net.pe/player/"></iframe> -->
                                <!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
                                <script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
                                <script type="text/javascript">
                                MRP.insert({
                                'url':'https://sp01.servidor.stream/8058/stream',
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
                        </div>


		</section>				
		<!--footer-->	
			<?php  include ("../footer.php") ?>
		<!--fin de footer-->		

		<div class=""><?php //include ("/popup/indexFORM.php") ?></div>	
			
	</div>
</div>
	<script src="https://www.sedir.org.pe/js/menu.js"></script>  <!-- MENU RESPONSIVE -->
   
    <script src="https://www.sedir.org.pe/js/over.js" type="text/javascript"></script>  
    <script src="https://www.sedir.org.pe/js/idioma.js" type="text/javascript"></script>
</body>
</html>