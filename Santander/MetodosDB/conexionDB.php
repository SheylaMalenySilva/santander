<?php
	class conexionDB{
		public function getConexion(){
			$cnx=new PDO("mysql:host=127.0.0.1;dbname=restaurante_bd","root","");
			return $cnx;
		}
	}
?>