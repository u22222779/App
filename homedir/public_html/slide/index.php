<!DOCTYPE html>
<html><head>
<title>Demo Fashion Responsive Slider Tutorial</title>
	<meta https-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta https-equiv="Content-Type" content="text/html; charset=utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=0, maximum-scale=1.0, user-scalable=1"> 
    <link rel="stylesheet" type="text/css" href="https://sedir.org.pe/slide/css/styles.css" media="all">
    <link rel="stylesheet" type="text/css" href="https://sedir.org.pe/slide/css/demo.css" media="all">
    <!-- jQuery -->
    <script type="text/javascript" src="httpss://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- FlexSlider -->
    
    <script type="text/javascript" src="https://sedir.org.pe/slide/jquery.flexslider.js"></script>
    <script type="text/javascript" src="httpss://www.freshdesignweb.com/demo/fashion-responsive-slider/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>
</head>
<body>

<!-- TRANSFORMAR FECHA EN NUMERO DE SEMANA POR MES -->
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
			return @$retWeek;
		}

		@$FechaHoy = "".date('Y-m-d')."";
		@$SemanaNumero = weekOfMonth(@$FechaHoy);
		if($SemanaNumero > 5) {
			@$SemanaNumero = 3;
		}
		//echo "<p></p>".@$FechaHoy."<p></p>";
	?>

<div class="container">
     <div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	    	<li style="width: 100%; float: left; margin-right: -100%; display: list-item;">
	    		<a href=""><img src="https://sedir.org.pe/slide/images/slider/Sem<?php echo @$SemanaNumero; ?>-Portada01.jpg" alt="" title=""></a>
<!--	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Asistencia técnica</h2><p>Find the perfect hairstyle a la Lauren Conrad for every type of festive fête.</p></div>
                </div>-->
	    	</li>
	    	<li style="width: 100%; float: left; margin-right: -100%; display: none;">
	    		<a href="" target="_top"><img src="https://sedir.org.pe/slide/images/slider/Sem<?php echo @$SemanaNumero; ?>-Portada02.jpg" alt="" title=""></a>
                <div class="flex-caption">
 <!--	            <div class="caption_title_line">
                         <h2>QUIÉNES SOMOS</h2>
                         <p>SEDIR es una organización dedicada a las actividades de desarrollo agrícola, pecuario y agroindustrial en el distrito de Moro y el valle Nepeña.</p>
                     </div>-->
                </div>
	    	</li>
	    	<li style="width: 100%; float: left; margin-right: -100%; display: none;">
	    		<a href="" target="_top">
	    		<img src="https://sedir.org.pe/slide/images/slider/Sem<?php echo @$SemanaNumero; ?>-Portada03.jpg" alt="" title=""></a>
                <div class="flex-caption">
 <!--               <div class="caption_title_line">
                         <h2>SEDIR,</h2>
                         <p>participó en el desfile por el 199 Aniversario de Creación Política del distrito de Moro</p>
                     </div>-->
                </div>
	    	</li>
	    	<li style="width: 100%; float: left; margin-right: -100%; display: none;">
	    		<a href=""><img src="https://sedir.org.pe/slide/images/slider/Sem<?php echo @$SemanaNumero; ?>-Portada04.jpg" alt="" title=""></a>
<!--	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Desarrollo de Capacidades</h2><p>The bodycon dress is a key silhouette for this season's party girl; from sleek colour-block panelling to geometric prints the bodycon.</p></div>
                </div>-->
	    	</li>
	    	<li style="width: 100%; float: left; margin-right: -100%; display: none;">
	    		<a href=""><img src="https://sedir.org.pe/slide/images/slider/Sem<?php echo @$SemanaNumero; ?>-Portada05.jpg" alt="" title=""></a>
<!--	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Desarrollo de Capacidades</h2><p>The bodycon dress is a key silhouette for this season's party girl; from sleek colour-block panelling to geometric prints the bodycon.</p></div>
                </div>-->
	    	</li>
   		    		    	
	    </ul>
	  <ol class="flex-control-nav"><li><a class="active">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li><li><a class="">4</a></li></ol><ul class="flex-direction-nav"><li><a class="prev" href="#">Previous</a></li><li><a class="next" href="#">Next</a></li></ul>
	</div>
    </div>
    </div>  
</body>
</html>