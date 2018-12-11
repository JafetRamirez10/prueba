<?php 
	require "models/users.models.php";
	require "controllers/users.controller.php";

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Atletismo Virtual</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
	<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
	<script src="js/scripts.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.0/sweetalert2.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.0/sweetalert2.all.js"></script>
</head>
<body>
	

	<nav class="navbar navbar-expand-lg " style="background: transparent;">
  <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-fluid" style="width:20%"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"  style="color:white;font-size:1.5em">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?session" style="color:white;font-size:1.5em"><i class="fas fa-user"></i>Iniciar Sesion</a>
      </li>
      
    </ul>
  </div>
</nav>
<?php 
	$Create= new Users();
	$Create->CreateUser();

 ?>
<div class="row" style="margin:2%">
	<div class=" col-12 col-sm-4 " style="background-color: #44748C ;width: 100%"> 
		<div class="d-flex justify-content-center texto align-items-center mt-3 mb-3">
		<img src="img/atletismo.png" style="width:50%;height:50%">	
		<h2 class="text-center selectedPlan">Plan 1</h2>

		</div>
		<div class="d-flex  justify-content-center mt-3 mb-3">
			<button class="btn btn-lg solicitar " style="background:#391547;color:white" data-toggle="modal" data-target="#exampleModal">Solicitar</button>
			<input type="hidden" name="" class="plan" value="Plan 1">
		</div>
		
	</div>
	<div class="col-12 col-sm-4" style="background-color: #4A0D66;width: 100%;">
		<div class="d-flex justify-content-center texto align-items-center  mt-3 mb-3">
		<img src="img/atletismo1.png" style="width:50%;height:50%">	
		<h2 class="text-center selectedPlan">Plan 2</h2>
		</div>
		<div class="d-flex  justify-content-center mt-3 mb-3">
			<button class="btn btn-lg solicitar " style="background-color:#44748C;color:white" data-toggle="modal" data-target="#exampleModal">Solicitar</button>
			<input type="hidden" name="" class="plan" value="Plan 2">
		</div>
		 </div>
	<div class="col-12 col-sm-4" style="background-color:#3FD5AE;width: 100%">
		<div class="d-flex justify-content-center texto align-items-center  mt-3 mb-3">
		<img src="img/atletismo2.png" style="width:50%;height:50%">	
		<h2 class="text-center selectedPlan">Plan 3</h2>

		</div>
			<div class="d-flex  justify-content-center mt-3 mb-3">
			<button class="btn btn-lg solicitar " style="background:#391547;color:white" data-toggle="modal" data-target="#exampleModal">Solicitar</button>
			<input type="hidden" name="" class="plan" value="Plan 3">
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #4A0D66;color:white;">
        <h5 class="modal-title texto" id="exampleModalLabel">Registrar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body texto">
      	<h1 class="planSelected">Plan 1</h1>
        <form method="post">
        	<input type="hidden" name="planSelected1" id="planSelectedOnly">
        	<div class="form-group">
        		<label>Nombre Completo</label>
        		<input type="text" required class="form-control" name="nombreCompleto">
        	</div>
        	<div class="form-group">
        		<label>Tipo de Identificacion</label>
        		<select class="form-control" required name="TipoIdentificacion">
        			<option value="1">Fisico</option>
        			<option value="2">Juridico</option>
        		</select>
        	</div>
        	<div class="form-group">
        		<label>Cedula</label>
        		<input type="text"   required class="form-control" name="cedula">
        	</div>
        

        	<div class="form-group">
        		<label>Teléfono</label>
        		<input type="text"   required class="form-control" name="telefono">
        	</div>
        		<div class="form-group">
        		<label>Correo</label>
        		<input type="text"   required class="form-control" name="correo">
        	</div>

        		<div class="form-group">
        		<label>Usuario</label>
        		<input type="text"  required  class="form-control" name="usuario">
        	</div>
        		<div class="form-group">
        		<label>Contraseña</label>
        		<input type="password"   required class="form-control" name="contra">
        	</div>
        	<button type="submit" class="btn btn-primary" name="register">Guardar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
<!--End Modal-->
<?php 
	$session = new Users();
	$session->Session();

 ?>
<?php 


	if(isset($_GET["session"])){
		echo '<!-- Modal -->
<div class="modal fade" id="session" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #4A0D66;color:white;">
        <h5 class="modal-title texto" id="exampleModalLabel">Iniciar Sesion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body texto">
        <form method="post">
        	<div class="form-group">
        		<label>Usuario:</label>
        		<input type="text" required class="form-control" name="SessionUser">
        	</div>
        		<div class="form-group">
        		<label>Contraseña</label>
        		<input type="password"   required class="form-control" name="SessionPwd">
        	</div>';
          if(isset($_GET["error"])){
            echo '<div class="alert alert-danger" role="alert">
                  <strong>Error!</strong> Usuario o Contraseña incorrectos
                 </div>';
          }
        	echo '<button type="submit" class="btn btn-primary" name="enter">Entrar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
<!--End Modal-->
<script>
$(document).ready(function(){
	$("#session").modal("show");
	})
</script>';
	}

 ?>


</body>
</html>