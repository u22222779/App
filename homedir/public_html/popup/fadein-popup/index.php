<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FadeIn Popup jQuery Demo</title>
<style>
#content {
    width: 900px;
    margin: 0px auto;
    padding: 2em 1em;
}
#popup {
	left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1001;
}

.content-popup {
	margin:0px auto;
	margin-top:120px;
	position:relative;
	padding:10px;
	width:955px;
	min-height:500px;
	border-radius:4px;
	background-color:#FFFFFF;
	box-shadow: 0 2px 5px #666666;
}

.content-popup h2 {
	color:#48484B;
	border-bottom: 1px solid #48484B;
    margin-top: 0;
    padding-bottom: 4px;
}

.popup-overlay {
	left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 999;
	display:none;
	background-color: #777777;
    cursor: pointer;
    opacity: 0.7;
}

.close {
	position: absolute;
    right: 15px;
    z-index: 9999;
}
</style>
<script type="text/javascript" src="http://pechinecas.gob.pe/web/popup/fadein-popup/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#open').click(function(){
		$('#popup').fadeIn('slow');
		$('.popup-overlay').fadeIn('slow');
		$('.popup-overlay').height($(window).height());
		return false;
	});
	
	$('#close').click(function(){
		$('#popup').fadeOut('slow');
		$('.popup-overlay').fadeOut('slow');
		return false;
	});
});
</script>
</head>
<body>
<div><a href="#" id="open">click aqui</a></div>

<div id="popup" style="display: none;">
    <div class="content-popup">
        <div class="close"><a href="#" id="close"><img src="http://pechinecas.gob.pe/web/popup/fadein-popup/images/close.png"/></a></div>
        <div>
            <?php include($_SERVER['DOCUMENT_ROOT'].'/web/infraestructura_de_riego/highcharts/popup/indexpopup2.php');?>
        </div>
    </div>
</div>
<div class="popup-overlay"></div>
</body>
</html>
