<?php 
Class Connection{

	public static function ConectDB(){
		$db="localhost";
		$dbname="admin_facturelo";
		$user="root";
		$pwd="";

		$link = new PDO("mysql:host=localhost;dbname=atletismo","root","");
		// $link->exec("set names utf8");
		return $link;
	}
	public static function UrlAPi(){
		$url="http://ea3dcr.com/api.php";
		return $url;
	}
}



 ?>