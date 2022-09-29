<?php
$url = "http://".$_SERVER['HTTP_HOST']."/gestion_documental";
?>
<!doctype html>
<html lang="en">
<head>
  <title>Admin Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo $url;?>/admin">Files Manager</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
      
      <li class="nav-item">
        <a class="nav-link active " href="<?php echo $url; ?>/admin/section/file_manager.php">Gestión Documental</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="<?php echo $url; ?>/admin/section/hiring_manager.php">Gestión de Contrataciones</a>
      </li>


      <li class="nav-item">
        <a class="nav-link active" href="<?php echo $url; ?>/admin/section/logout.php">Desconectar</a>
      </li>

      </ul>

      <form class="d-flex">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
          <a class="nav-link active" href="<?php echo $url;?>">Documentos</a>
          </li>
        </ul>
      </form>
    </div>
  </div>
</nav>

<br/>

<div class="container">
<div class="row">