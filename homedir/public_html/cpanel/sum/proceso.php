1
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/conx.php'); ?>

<?php
$fecha= $_POST['fecha'];
$titulo = $_POST['titulo'];
$copete= $_POST['copete'];
$copete= "<strong><i>".$copete."</i></strong>";
$detalle = $_POST['summeroculto'];
$detalle = strip_tags($detalle,"<p>,<br>,<u>,<i>,<b>,<ul>,<ol>,<li>,<a>,<img>,<iframe>");// para eliminar etiqueta fonts diferentes (quedando solo Etiq. del 2do parámetro)
//$detalle = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $detalle);  reemplaza los atributos style

$tags = $_POST['tags'];
//checkboxs
    if(isset($_POST['destacado'])){ 
        $destacado = "1"; 
    }else{ $destacado = "0"; } 
       
    if(isset($_POST['activado'])){ 
        $activado = "1";  
    }else{ $activado = "0"; } 
       
    if(isset($_POST['video'])){ 
        $video = "V";  
    }else{ $video= "T"; } 

//RECEPCION DE FILE       
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf'); // valid extensions
//$path = 'img-uploads/'; // upload directory OJO con la ruta
$path = 'img-uploads/';

if(isset($_FILES['image']))
{
	$img = $_FILES['image']['name'];
	$tmp = $_FILES['image']['tmp_name'];
    
    $img = str_replace(' ','_',$img); //remplaza espacios 
    
	// can upload same image using rand function
    if($img != ''){
        $fech = date('j-m-y');
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION)); 
        $final_image = substr_replace($img, rand(1000,1000000), -4)."_".$fech.".".$ext; //ejem salida: nom_archivo1000000_19-09-16.jpg 
        
    }else{
        $final_image ="SIN ARCHIVO ADJUNTO";
    }
	
	
	// check's valid format
	if(in_array($ext, $valid_extensions)) 
	{					
		$path = $path.strtolower($final_image);	
			
		if(move_uploaded_file($tmp,$path)) 
		{
			echo "<img src='http://sedir.org.pe/cpanel/sum/$path' style= 'max-width: 100px';/>";
		}
	} 
	else 
	{
		echo 'invalid';
	}
} //FIN DE FILE        

       
//INSERTAR DATOS EN UNA TABLA
$ruta_img = 'https://sedir.org.pe/cpanel/sum/';
$q = "INSERT INTO notas_prensa (id, fecha, titulo, copete_bajada, img_noti, video_noti, detalle_noti, destacado, categ, tags, act, impresiones)
VALUES (NULL,'".$fecha."','".$titulo."','".$copete."','".$ruta_img."".$path."','".$video."','".$detalle."','".$destacado."','institucional','".$tags."','".$activado."','2')";

$rs = mysqli_query($link,$q);
if($rs == false) {
	echo '<p>Error al insertar los campos en la tabla.</p>';
}else{
	echo '<p>Los datos se han insertado correctamente.</p>';
    echo '<p> <a href="http://www.sedir.org.pe/cpanel/sum/ingreso.php">INGRESAR OTRA NOTICIA</a></p>';
    
}//fin INSERTAR DATOS EN UNA TABLA





?>