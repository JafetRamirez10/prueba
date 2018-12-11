<!DOCTYPE html>
<html>
<head>
	<title>Start - Atletismo Virtual</title>
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
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/card.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.0/sweetalert2.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.0/sweetalert2.all.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	body{
	background: url(img/wallpaper.jpg) no-repeat center top;
	background-size: cover;
}
</style>
</head>
<body>
	<?php 
	if(isset($_GET["start"])){
		echo "<script>swal({
                                          position: 'top-end',
                                           type: 'success',
                                          title: 'Se inicio sesión con exito',
                                          showConfirmButton: false,
                                        timer: 2500
                              })</script>";
	}


	 ?>
	<nav class="navbar navbar-inverse sidebar texto" role="navigation" style="background-color:#391547">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#" style="color:white">Menu</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Fechas<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
				<li ><a href="#">Tiempo restante <i  style="font-size:16px;" class="fas fa-stopwatch"></i></a></li>
				<li ><a href="#">Historial de Pago <i style="font-size:16px;" class="fas fa-history"></i></a></li>
				<li ><a href="end.php">Cerrar Sesion <i style="font-size:16px;"  class="fas fa-sign-in-alt"></i></a></li>
				<li style="visibility: hidden;" ><a href="#">Historial de Pago<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
				<li style="visibility: hidden;" ><a href="#">Historial de Pago<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
			<!-- 	<li ><a href="#">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li> -->
			<!-- 	<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li> -->
				<!-- <li><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
				<li ><a href="#">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
				<li ><a href="#">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li> -->
			<!-- 	<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li> -->
			</ul>
		</div>
	</div>
</nav>
<div class="main ">
	<div class="col-12 col-sm-4" style="margin-right: -10%">
		<!-- <h2><i class="fas fa-running"></i></h2>
		<p class="texto">Te Faltan 2 Dias para terminar</p> -->
	<img src="img/raking.png" style="width:200px">
	


	</div>
	<div class="col-12 col-sm-4">
		<!-- <h2><i class="fas fa-running"></i></h2>
		<p class="texto">Te Faltan 2 Dias para terminar</p> -->
	<img src="img/iniciar.png" data-toggle="modal" data-target="#nuevopago" style="width:200px">

	</div>
	</div>
<!-- Content Here -->
</div>
<script>
	    function htmlbodyHeightUpdate(){
		var height3 = $( window ).height()
		var height1 = $('.nav').height()+50
		height2 = $('.main').height()
		if(height2 > height3){
			$('html').height(Math.max(height1,height3,height2)+10);
			$('body').height(Math.max(height1,height3,height2)+10);
		}
		else
		{
			$('html').height(Math.max(height1,height3,height2));
			$('body').height(Math.max(height1,height3,height2));
		}
		
	}
	$(document).ready(function () {
		htmlbodyHeightUpdate()
		$( window ).resize(function() {
			htmlbodyHeightUpdate()
		});
		$( window ).scroll(function() {
			height2 = $('.main').height()
  			htmlbodyHeightUpdate()
		});
	});
</script>
<?php 
	include "modales/nuevopago.php";
	
 ?>
</body>
</html>