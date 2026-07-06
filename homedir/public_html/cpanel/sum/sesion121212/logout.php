<?php
 session_start ();
 if(!empty($_SESSION['usuario']))
 {
   // Borra todas las variables de sesión 
  $_SESSION = array(); 
  // Borra la cookie que almacena la sesión 
  if(isset($_COOKIE[session_start()])) { 
    setcookie(session_start(), '', time() - 42000, '/'); 
  } 
  // Finalmente, destruye la sesión 
  session_destroy(); 
 	echo "SESION FINALIZADA.</p>";
 	echo "	<form action='http://www.sedir.org.pe/cpanel/sum/sesion//index.php' method='POST'>";
	echo "  <input name='ses' type='hidden' value='new'>";
	echo "	<input name='login' type='submit' value='INICIAR SESION'>";
	echo "	</form>";
} 
?>