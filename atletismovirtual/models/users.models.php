<?php 
require 'models/connection.models.php';
Class UsersModel{
	public function CreateUserModel($data){
		$stmt=Connection::ConectDB()->prepare("INSERT INTO usuarios (nombre,tipo_cedula,cedula,usuario,contrasena,telefono,plan) VALUES(:nombre,:tipo_cedula,:cedula,:usuario,:contrasena,:telefono,:plan)");
		$stmt->bindParam(":nombre",$data["nombre"]);
		$stmt->bindParam(":tipo_cedula",$data["tipo"]);
		$stmt->bindParam(":cedula",$data["cedula"]);
		$stmt->bindParam(":usuario",$data["usuario"]);
		$stmt->bindParam(":contrasena",$data["contrasena"]);
		$stmt->bindParam(":telefono",$data["telefono"]);
		$stmt->bindParam(":plan",$data["planSelected"]);
		if($stmt->execute()){
			return 1;
		}else{
			return 2;
		}
	}
	public static function SessionModel($data){
		$stmt=Connection::ConectDB()->prepare("SELECT * FROM `usuarios` WHERE usuario=:usuario AND contrasena=:contrasena");
		$stmt->bindParam(":usuario",$data["user"]);
		$stmt->bindParam(":contrasena",$data["pwd"]);
		if($stmt->execute()){
			if($stmt->rowCount()!=0){
				return 1;
			}else{
				return 0;
			}
		}else{
		print_r($stmt->errorInfo());
		}
	}
	public function QueryUser($data){
			$stmt=Connection::ConectDB()->prepare("SELECT * FROM `usuarios` WHERE usuario=:usuario AND contrasena=:contrasena");
			$stmt->bindParam(":usuario",$data["user"]);
		     $stmt->bindParam(":contrasena",$data["pwd"]);
		if($stmt->execute()){
			return $stmt->fetchAll();
		}
	}

}


 ?>