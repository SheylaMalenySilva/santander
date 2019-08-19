<?php
include 'conexionDB.php';

class MetodosDB{
	public function ListP(){
		$cnx=new ConexionDB();
		$cn=$cnx->getConexion();

		$res=$cn->prepare("select * from productos");
		$res->execute();
		foreach($res as $row){
			$lista[]=$row;
		}
		return $lista;
	}

	public function ListPCD($cod){
		$cnx=new ConexionDB();
		$cn=$cnx->getConexion();

		$res=$cn->prepare("select * from productos where id=$cod");
		$res->execute();
		foreach($res as $row){
			$lista[]=$row;
		}
		return $lista;
	}

	public function AddPago($data){
		$cnx=new ConexionDB();
		$cn=$cnx->getConexion();

		$res=$cn->prepare("INSERT INTO ventas(usuario,pago) VALUES($data[0],$data[1])");
		$res->execute();
	}
}
?>