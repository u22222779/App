<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://munilapampa.gob.pe/web/libro_reclama/estilos.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body class="bg-success">

<div class="container bg-warning" style="border: 1px solid #ccc; border-radius: 4px;">
<h2 class="text-primary">Libro de reclamaciones</h2>
 
    
<!--  Inicio de formulario-->

    <form class="form-horizontal"><!--form-inline-->
		<div class="form-group">
			<div class="col-sm-7">
				<label for="buscarv" >Datos del vecino:</label>
				<input type="text" class="form-control" id="buscarv" placeholder="Buscar vecino">    		
			</div>
            <div class="col-sm-3">
				<label for="fecha">Fecha:</label>
				<input type="date" class="form-control" id="fecha">    		
			</div>            
		</div>
			    
			    	    	    
		<div class="form-group">
			<div class="col-sm-4">
				<label for="apaterno" >A.Paterno:</label>
				<input type="text" class="form-control" id="apaterno" placeholder="A. Paterno">    		
			</div>
			<div class="col-sm-4">
				<label for="amaterno" >A.Materno:</label>
				<input type="text" class="form-control" id="amaterno"  placeholder="A. Materno">  		
			</div>
			<div class="col-sm-4">
				<label for="nombres" >Nombres:</label>
				<input type="text" class="form-control" id="nombres" placeholder="Nombres">   		
			</div>
		</div>	
		

		<div class="form-group">
			<div class="col-sm-4">
				<label for="tipodoc" >Tipo Doc.:</label>
				<select name="tipo_documento" id="tipodoc" class="form-control">
					<option value="0" selected="selected">Tipo de Documento</option>
					<option value="1">DNI</option>
					<option value="2">POLICIA</option>
					<option value="3">RUC</option>
					<option value="4">CIF (RR.AA)</option>
					<option value="5">CARNET EXTRANJERIA</option>
					<option value="6">PARTIDA DE NACIMIENTO</option>
					<option value="7">PART. O FICHA REGISTRAL</option>
					<option value="8">REGISTRO ADMINISTRATIVO</option>
					<option value="9">LIBRETA MILITAR</option>
					<option value="10">BOLETA MILITAR</option>
					<option value="11">OTROS</option>
					<option value="12">PASAPORTE</option>
					<option value="13">PARTIDA DEFUNCION</option>
				</select>
  			</div>
			<div class="col-sm-offset-1 col-sm-4">
				<label for="ndoc" >N° Doc:</label>
				<input type="text" class="form-control" id="ndoc"  placeholder="Num de doc.">  		
			</div>
		</div>					


		<div class="form-group">
			<div class="col-sm-4">
				<label for="departamento_id" >Departamento:</label>
				<select name="departamento_id" class="form-control" id="departamento_id">
					<option value="0">Departamento</option>
					<option value="01">AMAZONAS</option>
					<option value="02">ANCASH</option>
					<option value="03">APURIMAC</option>
					<option value="04">AREQUIPA</option>
					<option value="05">AYACUCHO</option>
					<option value="06">CAJAMARCA</option>
					<option value="07">PROV. CONST. DEL CALLAO</option>
					<option value="08">CUSCO</option>
					<option value="09">HUANCAVELICA</option>
					<option value="10">HUANUCO</option>
					<option value="11">ICA</option>
					<option value="12">JUNIN</option>
					<option value="13">LA LIBERTAD</option>
					<option value="14">LAMBAYEQUE</option>
					<option value="15">LIMA</option>
					<option value="16">LORETO</option>
					<option value="17">MADRE DE DIOS</option>
					<option value="18">MOQUEGUA</option>
					<option value="19">PASCO</option>
					<option value="20">PIURA</option>
					<option value="21">PUNO</option>
					<option value="22">SAN MARTIN</option>
					<option value="23">TACNA</option>
					<option value="24">TUMBES</option>
					<option value="25">UCAYALI</option>
				</select>
			</div>	
			<div class="col-sm-offset-1 col-sm-3">
				<label for="provincia_id" >Provincia:</label>
				<select name="provincia_id" class="form-control" id="provincia_id">
					<option value="0" selected="selected">Seleccione</option>
				</select>
			</div>
			<div class="col-sm-offset-1 col-sm-3">
				<label for="distrito_id" >Distrito:</label>
				<select name="distrito_id" class="form-control" id="distrito_id">
					<option value="0" selected="selected">Seleccione</option>
				</select>
			</div>			

		</div>				
		
		
		<div class="form-group">
			<div class="col-sm-3">
				<label for="tipodoc" >Tipo Vía:</label>
				<select name="tipo_via" class="form-control" id="tipo_via">
					<option value="0" selected="selected">Tipo de Via</option>
					<option value="01 ">AVENIDA</option>
					<option value="02 ">JIRON</option>
					<option value="03 ">CALLE</option>
					<option value="04 ">PASAJE</option>
					<option value="05 ">PLAZA</option>
					<option value="06 ">MANZANA</option>
					<option value="07 ">PARQUE</option>
					<option value="08 ">OVALO</option>
					<option value="09 ">CARRETERA</option>
					<option value="10 ">OTRO</option>
				</select>
  			</div>
		</div>		
		

		<div class="form-group">
			<div class="col-sm-5">
				<label for="nom_via" >Nombre Vía:</label>
				<input type="text" class="form-control" id="nom_via" placeholder="Nombre de la Vía">    		
			</div>
			<div class="col-sm-2">
				<label for="num_via" >N° Vía:</label>
				<input type="text" class="form-control" id="num_via"  placeholder="Núm Vía">  		
			</div>
			<div class="col-sm-4">
				<label for="ubicacion" >Ubicación:</label>
				<input type="text" class="form-control" id="ubicacion" placeholder="Ubicación">   		
			</div>
		</div>			
						


		<div class="form-group">
			<div class="col-sm-5">
				<label for="fono_dom" >Fono de Domicilio:</label>
				<input type="text" class="form-control" id="fono_dom" placeholder="Fono de Domicilio">    		
			</div>
			<div class="col-sm-2">
				<label for="celular" >Celular:</label>
				<input type="text" class="form-control" id="celular"  placeholder="Celular">  		
			</div>
			<div class="col-sm-4">
				<label for="email" >Email:</label>
				<input type="text" class="form-control" id="email" placeholder="Email">   		
			</div>
		</div>				
		
<h2>Datos del reclamo</h2>		
		<div class="form-group">
			<div class="col-sm-6">
				<label for="tit_reclamo" >Título del Reclamo:</label>
				<input type="text" class="form-control" id="tit_reclamo" placeholder="Título del Reclamo">    		
			</div>
		</div>		
		<div class="form-group">
			<div class="col-sm-6">
				<label for="det_reclamo" >Detalle del Reclamo:</label>
				<textarea class="form-control" name="det_reclamo" id="det_reclamo"></textarea>	
			</div>
		</div>			
		
		
		
		<div class="form-group">  
			<div class="col-xs-2 col-sm-2">
				<button class="btn btn-primary" id="enviar_reclam">Enviar</button>
			</div>
			<div class="col-xs-2 col-sm-2">
				<button class="btn btn-danger">Borrar</button>
			</div>
            <div class="msg"></div>
            
		</div>	 
	</form>    	

     


  
  
  
  
  
</div> <!--fin de container-->
    
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="http:///munilapampa.gob.pe/web/libro_reclama/funciones.js"></script>
</body>
</html>
