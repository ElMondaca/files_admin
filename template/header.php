<?php 
 $url="HTTP://".$_SERVER['HTTP_HOST']."/gestion_documental/admin";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestión Documental</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand">Files Manager</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active " href="files.php">Gestión Documental</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Gestión de Contrataciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="about_us.php">Departamento</a>
      </li>
      </ul>
      <form class="d-flex">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
          <a class="nav-link active" href="admin/index.php">AdminDocumentos</a>
          </li>
        </ul>
      </form>
    </div>
  </div>
</nav>


<div class="container">
  <br/>
<div class="row">