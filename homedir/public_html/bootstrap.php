<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h2>Basic Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal o POPUP -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    
 <h2>Button Styles</h2>
  <button type="button" class="btn btn-default">Default</button>
  <button type="button" class="btn btn-primary">Primary</button>
  <button type="button" class="btn btn-success">Success</button>
  <button type="button" class="btn btn-info">Info</button>
  <button type="button" class="btn btn-warning">Warning</button>
  <button type="button" class="btn btn-danger">Danger</button>
  <button type="button" class="btn btn-link">Link</button>  
    
    
  <h2>Table</h2>
  <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>City</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
      </tr>
    </tbody>
  </table>
  </div>

    
<!--  Inicio de formulario-->
  <form class="form-horizontal"><!--form-inline-->
    <div class="form-group">
    	<label for="apaterno" class="col-sm-2">A.Paterno :</label>
    	<div class="col-sm-10">
    		<input type="text" class="form-control" id="apaterno" placeholder="A. Paterno">
    	</div>
    </div>
    <div class="form-group">
    	<label for="amaterno" class="col-sm-2">A.Materno :</label>
    	<div class="col-sm-10">
    		<input type="text" class="form-control" id="amaterno" placeholder="A. Materno">
    	</div>	
    </div>
    <div class="form-group">
    	<div class="col-offset-2 col-sm-2">
    		<button class="btn btn-primary">Enviar</button>
    	</div>
    </div>
    
     </form> 
    
    <div class="row">
    	<div class="col-xs-6 col-sm-2">
    		<input type="text" class="form-control input-lg" placeholder="Systemmm">rttrgg</input>    	
    	</div>
    	<div class="col-xs-4 col-sm-4">
    		<input type="text" class="form-control" placeholder="Systemmm">ffffff</input>    		
    	</div>
    	<div class="col-xs-2 col-sm-6">
    		<input type="text" class="form-control input-sm" placeholder="Systemmm">bffbfbfbf</input>    
    	</div>    	    	
    </div>
    
    <div class="row">
    	<div class="col-sm-2">
    		<label for="apaterno" >A.Paterno :</label>
    		<input type="text" class="form-control" id="apaterno" placeholder="A. Paterno">    		
    	</div>
    	<div class="col-sm-5">
    		<label for="amaterno" >A.Materno :</label>
    		<input type="text" class="form-control" id="amaterno"  placeholder="A. Materno">  		
    	</div>
    	<div class="col-sm-4">
    		<label for="nombres" >Nombres :</label>
    		<input type="text" class="form-control" id="nombres" placeholder="Nombres">   		
    	</div>    
		<div class="form-group">
			<div class="col-sm-2">
				<button class="btn btn-primary">Enviar</button>
			</div>
		</div>	    	
    	
    </div>
  
            


  
  
  
  
  
</div> <!--fin de container-->

</body>
</html>
