<!DOCTYPE html>
<html>
<head>
	<title>Popup CSS3 - Autopopup</title>
	<link rel="stylesheet" href="https://sedir.org.pe/popup/css/demopopup.css" type="text/css">
	<link rel="stylesheet" href="https://sedir.org.pe/popup/css/popup.css" type="text/css">	
</head>
<body>
    <?php
    if( !isset( $_COOKIE['nombre']) )//cookie para cargar el popup SÓLO 1 VEZ (setcookie está en index principal)
     {
      ?>
        <div class="popup-wrapper" id="popup2">
            <div class="popup-container">
                <div style="postition: relative;">
                    <img src="https://www.sedir.org.pe/imgs/popup/Convocatoria05-2021.jpg" alt="Análisis de Materia seca">
                </div>
                <a href="#popup2"><div class="popup-close" style="cursor:pointer;">X</div></a>
            </div>
        </div>
        
    <?php
    }
    ?>
</body>
</html>