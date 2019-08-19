<?php
session_start();
//session_destroy();
//unset($_SESSION['carrito']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Complementos</title>
  <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Restaurant Santanders</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Menú</a></li>
      <li><a href="ventanas/carrito.php" target="_black">Carrito</a></li>
      <li><a href="paquetes.html">Paquetes</a></li>
      <li><a href="complementos.php">Adicionales</a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a href="inicios.php">Login</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>

 
<div class="container">
  <h2 align="center">Complementos</h2>
  <div class="complementos">
  <div align="center" class="papas" style="width:300px">
    <img align="center" class="card-img-top" src="img/coca_cola.jpg" alt="coca cola" style="width:70%">
    <div class="card-body">
      <h4 class="card-title">Coca Cola 330ml.</h4>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="enviar(1)">Añadir</button>
    </div>
  </div>
  <br>
  
  <div align="center" class="papas" style="width:300px">
    <img align="center" class="card-img-top" src="img/papas.jpg" alt="coca cola" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Papas de Gajo.</h4>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="enviar(3)">Añadir</button>
    </div>
  </div>
  <br>

  <div align="center" class="papas" style="width:300px">
    <img  class="card-img-top" src="img/papas_francesa.jpg" alt="coca cola" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Papas a la Francesa.</h4>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="enviar(4)">Añadir</button>
    </div>
  </div>
  </div>
  <br>
<div class="complementos">
<div align="center" class="papas" style="width:300px">
    <img align="center" class="card-img-top" src="img/pepsi.jpg" alt="coca cola" style="width:70%">
    <div class="card-body">
      <h4 class="card-title">Pepsi 330ml.</h4>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="enviar(5)">Añadir</button>
    </div>
  </div>
  <br>

<div align="center" class="papas" style="width:300px">
    <img align="center" class="card-img-top" src="img/dip.jpg" alt="coca cola" style="width:95%">
    <div class="card-body">
      <h4 class="card-title">Dip de Chipotle.</h4>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="enviar(6)">Añadir</button>
    </div>
  </div>
  <br>

  <div align="center" class="papas" style="width:300px">
    <img align="center" class="card-img-top" src="img/botanas.jpg" alt="coca cola" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Botanas.</h4>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="enviar(7)">Añadir</button>
    </div>
  </div>
  </div>
  <br>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="mostrar">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="js/script.js"></script>
</body>
</html>
