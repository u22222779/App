<?php
// Guardar los datos recibidos en variables:
$buscarv = $_POST['buscarv'];
$fecha = $_POST['fecha'];
$apaterno = $_POST['apaterno'];
$amaterno = $_POST['amaterno'];
$nombres = $_POST['nombres'];
$tipodoc = $_POST['tipodoc'];
$ndoc = $_POST['ndoc'];
$departamento_id = $_POST['departamento_id'];
$provincia_id= $_POST['provincia_id'];
$distrito_id = $_POST['distrito_id'];
$tipo_via = $_POST['tipo_via'];
$nom_via = $_POST['nom_via'];
$num_via = $_POST['num_via'];
$ubicacion = $_POST['ubicacion'];
$fono_dom = $_POST['fono_dom'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$tit_reclamo = $_POST['tit_reclamo'];
$det_reclamo = $_POST['det_reclamo'];



//INSERTAR DATOS EN UNA TABLA
$link = mysqli_connect("localhost", "munilapa_user001", "X3P=%{7%,4*1") or die ('Error es: '.mysqli_error());
mysqli_select_db($link, "munilapa_2016");

$q = "INSERT INTO reclamaciones (id, fecha, datos, a_paterno, a_materno, nombres, tipo_doc, n_doc, depart, prov, distr, tipo_via, nom_via, n_via, ubica_via, fono, celular, email, tit_reclamo, detalle_reclamo)
VALUES (NULL,'$fecha','$buscarv','$aparterno','$amaterno','$nombres','$tipodoc','$ndoc','$departamento_id','$provincia_id','$distrito_id','$tipo_via','$nom_via','$num_via','$ubicacion','$fono_dom','$celular','$email','$tit_reclamo','$det_reclamo')";

$rs = mysqli_query($link,$q);
if($rs == false) {
	echo '<p>Error al insertar los campos en la tabla.</p>';
}else{
	echo '<p>Los datos se han insertado correctamente.</p>';
}//fin INSERTAR DATOS EN UNA TABLA




// Definir el correo de destino:
$dest = "informes@munilapampa.gob.pe"; 
 
// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
$headers = "From: $nombres <$email>\r\n";  
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Aqui definimos el asunto y armamos el cuerpo del mensaje
$asunto = "Formulario - Reclamaciones";
$cuerpo = "Nombre: ".$nombres."<br>";
$cuerpo .= "Email: ".$email."<br>";
$cuerpo .= "Titulo Reclamo: ".$tit_reclamo."<br>";
$cuerpo .= "Detalle Reclamo: ".$det_reclamo;
 
// Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
if($nombres != '' && $email != '' && $tit_reclamo != '' && $det_reclamo != ''){
    mail($dest,$asunto,$cuerpo,$headers); //ENVIAR!
}

?>