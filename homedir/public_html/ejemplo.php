<!DOCTYPE html>
<html lang="es">
<head>
<title>.:: SEDIRrrrr ::.</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="http://www.sedir.org.pe/mod1/web/css/style.css" />
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
    
    
<div id="">
				<ul id="" class="" style="">
					<li id="menu-item-6" class="menu-item">
						<a href="http://www.sedir.org.pe/mod1/web/">INICIO</a>
					</li>
                    
  					<li id="menu-item-7" class="menu-item">
                     
						  <a href="http://www.sedir.org.pe/mod1/web/nosotros.php">NOSOTROS</a>
						  <div id="arrow2" style="display:none;" class="arrow_submenu"></div>
                       
					</li>    
                    
					<li id="menu-item-8" class="menu-item">
						<a href="http://www.sedir.org.pe/mod1/web/que-hacemos.php">QUE HACEMOS</a>
						<div id="arrow3" style="display:none;" class="arrow_submenu"></div>
					</li>                    
                    
					<li id="menu-item-9" class="menu-item">
						<a href="http://www.sedir.org.pe/mod1/web/que-hacemos.php">SERVICIOS Y PRODUCTOS</a>
                        <div id="arrow4" style="display:none;" class="arrow_submenu"></div>
					</li>
                    
					<li id="menu-item-10" class="menu-item">
						<a href="contacto.php" target="_top">CONTACTO</a>
					</li>
				</ul>
    
</div>
<div>
	
	<?php
		function weekOfMonth($qDate) {
			$dt = strtotime($qDate);
			$day  = date('j',$dt);
			$month = date('m',$dt);
			$year = date('Y',$dt);
			$totalDays = date('t',$dt);
			$weekCnt = 1;
			$retWeek = 0;
			for($i=1;$i<=$totalDays;$i++) {
				$curDay = date("N", mktime(0,0,0,$month,$i,$year));
				if($curDay==7) {
					if($i==$day) {
						$retWeek = $weekCnt+1;
					}
					$weekCnt++;
				} else {
					if($i==$day) {
						$retWeek = $weekCnt;
					}
				}
			}
			return $retWeek;
		}

		
		$FechaHoy = "".date('Y-m-d')."";
		echo weekOfMonth($FechaHoy); // gives me 2;
		echo $FechaHoy."<p> esto es una pruebaaaa</p>";
	?>


</div>
    <script src="http://www.sedir.org.pe/mod1/web/js/over.js" type="text/javascript"></script> 
    <script type="text/javascript">
        $(document).ready(function(){

            $("#menu-item-7").click(function(){
                    $(document).attr("title", "About Us");
            });



        });// fin ready 
    </script>      
</body>
</html>