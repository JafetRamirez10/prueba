<?php 
session_start();
	Class Users{
		public function CreateUser(){
			if(isset($_POST["register"])){
				$datos=array("nombre"=>$_POST["nombreCompleto"],
							"tipo"=>$_POST["TipoIdentificacion"],
							"cedula"=>$_POST["cedula"],
							"telefono"=>$_POST["telefono"],
							"correo"=>$_POST["correo"],
							"usuario"=>$_POST["usuario"],
							"contrasena"=>$_POST["contra"],
							"planSelected"=>$_POST["planSelected1"]);
					$response=UsersModel::CreateUserModel($datos);
					if($response==1){
							echo "<script>swal(
  									'Se creo usuario con exito!',
  									'Puede iniciar sesión',
  									'success'
									)</script>";
					}else{
						echo "Ocurrio un error";
					}
			}
		}
		public function Session(){
			if(isset($_POST["enter"])){
				$datos=array("user"=>$_POST["SessionUser"],
							"pwd"=>$_POST["SessionPwd"]);
				$response=UsersModel::SessionModel($datos);
				echo $response;
				if($response==0){
					echo '<script>location.href="index.php?session&&error"</script>';

				}else{
					$response=UsersModel::QueryUser($datos);
					foreach ($response as $row => $item) {
						$id=$item["id"];
					}
					$_SESSION["user"]["id"]=$id;
					echo '<script>location.href="start.php?start"</script>';
				}
			}
		}
	}

 ?>