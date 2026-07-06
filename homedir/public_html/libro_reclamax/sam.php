<?php
//INSERTAR DATOS EN UNA TABLA
$link = mysqli_connect("localhost", "munilapa_user001", "X3P=%{7%,4*1") or die ('Error es: '.mysqli_error());
mysqli_select_db($link, "munilapa_2016");

$q = "INSERT INTO reclamaciones (id, fecha, datos, a_paterno, a_materno, nombres, tipo_doc, n_doc, depart, prov, distr, tipo_via, nom_via, n_via, ubica_via, fono, celular, email, tit_reclamo, detalle_reclamo)
VALUES (NULL,'wwsws','dddddd','fffff','ererer','dfdfdf','vfvf','4555','vfvfv','edeeed','vfdwdw','fews','nunu','rfrhh','rbrbrb','dedexe','7685655','ytyyty','cescsc','vrmumumuumum')";

$rs = mysqli_query($link,$q);
if($rs == false) {
	echo '<p>Error al insertar los campos en la tabla.</p>';
}else{
	echo '<p>Los datos se han insertado correctamente.</p>';
}//fin INSERTAR DATOS EN UNA TABLA