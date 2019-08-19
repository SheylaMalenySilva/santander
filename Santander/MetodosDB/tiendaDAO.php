<?php
session_start();
include 'metodosDAO.php';
$op=$_REQUEST['op'];

switch($op){
	case 1:
		unset($_SESSION['lista']);
		$objMetodo=new MetodosDB();
		$lista=$objMetodos->ListP();
		$_SESSION['lista']=$lista;
		header("Location:../ventanas/carrito.php");
		break;
	case 2:
		unset($_SESSION['lista']);
		$objMetodo=new MetodosDB();
		$lista=$objMetodo->ListPCD();
		$_SESSION['lista']=$lista;
		header("Location:../ventanas/carrito.php");
		break;
}
?>