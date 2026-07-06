<?php
session_start();
$u=htmlspecialchars(addslashes(stripslashes(strip_tags(trim($_POST['user'])))));
$p=htmlspecialchars(addslashes(stripslashes(strip_tags(trim($_POST['pass'])))));
if(isset($_POST['login'])){
	if(empty($u) || empty($p)){
		if ($_POST['ses']!= "new"){
			echo '<script type="text/javascript">';
			echo 'alert("Debes llenar todos los datos!")';
			echo '</script>';
		}
	}
    
    else{
        
         $host_db = "localhost";
         $user_db = "sedirorg_userisi";
         $pass_db = "Hhv7x63Kt9D";
         $db_name = "sedirorg_db";
         $tbl_name = "usname_tbl";
         mysql_connect("$host_db", "$user_db", "$pass_db")or die("Cannot Connect to Data Base.");
         mysql_select_db("$db_name")or die("Cannot Select Data Base");

        $sql= "SELECT*FROM $tbl_name WHERE usname_tbl='$u' and pssnamle_tbl='$p'";
        $result=mysql_query($sql);
        $count = mysql_num_rows($result);   

        if($count == 1){//LOGUEO CORRECTO

            $_SESSION['usuario']=$u;
            $_SESSION['password']=$p;
            $_SESSION['autentificado']= "SI";
            $_SESSION['ultimoAcceso']= date("Y-n-j H:i:s");
            //sino, calculamos el tiempo transcurrido
            $fechaGuardada = $_SESSION["ultimoAcceso"];
            $ahora = date("Y-n-j H:i:s");
            $tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada));
            //comparamos el tiempo transcurrido
            if($tiempo_transcurrido >= 60) {
                //si pasaron 10 minutos o más
                unset ( $_SESSION ["usuario"] );
                session_destroy(); // destruyo la sesión
                session_set_cookie_params(0,"/"); 
                //sino, actualizo la fecha de la sesión
            }else {
                $_SESSION["ultimoAcceso"] = $ahora;
            }
        echo "<script language='JavaScript'>"; 
        echo //BIEN LOGUEADO
             "location.href='http://www.sedir.org.pe/cpanel/summernote/ingreso.php'";
        echo "</script>";		
        }
        else{//LOGUEO INCORRECTO
			echo '<script type="text/javascript">';
			echo 'alert("Ususario o clave incorrectos!")';
			echo '</script>';       
        }

	}
}?>
<html dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN DNM</title>
    <link rel="shortcut icon" href="http://www.sedir.org.pe/Template/mod1/panel/Login_files/Lock.ico">
    <!-- EXTERNAL CSS -->
    <link href="./Login_files/style_v2_optimized.css" rel="stylesheet" type="text/css">

    <!--[if IE 6]>
    <style type="text/css">
        img {
            behavior: url(/cPanel_magic_revision_1333618522/unprotected/cp_pngbehavior_login.htc);
        }
    </style>
    <![endif]-->

</head>
<body>


<img class="background-image" src="./Login_files/login-whisp.png">
<div id="login-wrapper" style="opacity: 1; visibility: visible;">
    
    <div id="content-container">
        <div id="login-container">
            <div id="login-sub-container">
                <div id="login-sub-header">
                    <img src="Login_files/cpanel-logo.png" alt="logo">
              </div>
                <div id="login-sub">
                    <div id="forms">

                        
                        <form id="login_form" action="index.php" method="post" target="_self">
                            <div class="input-req-login"><label for="user">Nombre de usuario</label></div>
                            <div class="input-field-login icon username-container">
                                <input name="user" id="user" autofocus="autofocus" value="" placeholder="Introduzca su nombre de usuario." class="std_textbox" type="text" tabindex="1" required="">
                            </div>
                            <div style="margin-top:30px;" class="input-req-login"><label for="pass">Contraseña</label></div>
                            <div class="input-field-login icon password-container">
                                <input name="pass" id="pass" placeholder="Ingrese su contraseña de la cuenta." class="std_textbox" type="password" tabindex="2" required="">
                            </div>
                            <div style="width: 285px;">
                                <div class="login-btn">
                                    <button name="login" type="submit" id="login_submit" tabindex="3">Acceder</button>
                                </div>

                             </div>
                            <div class="clear" id="push"></div>
                        </form>

                    <!--CLOSE forms -->
                    </div>

                <!--CLOSE login-sub -->
                </div>
            <!--CLOSE login-sub-container -->
            </div>
        <!--CLOSE login-container -->
        </div>

            </div>
<!--Close login-wrapper -->
</div>
    <div class="copyright">Copyright © <?=date('Y')?>  Panel, SEDIR</div>


</body></html>