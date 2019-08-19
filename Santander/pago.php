<?php
session_start();
include 'MetodosDB/metodosDAO.php';

$data[0]=$_SESSION['login_user_sys'];
$data[1]=$_SESSION['total'];

$metodo=new MetodosDB();
$metodo->AddPago($data);


header("location: index.html");

?>