<?php 
if(empty($_FILES['file']))
{
	exit();	
}

$img = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];
$img = str_replace(' ','_',$img); //remplaza espacios 

        $fech = date('j-m-y');
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION)); 
        $final_image = substr_replace($img, rand(10,1000), -4)."_".$fech.".".$ext;


$errorImgFile = "./img/img_upload_error.jpg";
$destinationFilePath = 'img-uploads/'.$final_image;
if(!move_uploaded_file($tmp, $destinationFilePath)){
	echo $errorImgFile;
}
else{
	echo "http://sedir.org.pe/cpanel/sum/".$destinationFilePath;
}





?>