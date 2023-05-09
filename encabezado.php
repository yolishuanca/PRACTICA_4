<!DOCTYPE html>
<!--encabezado.php-->
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">

<style>
body {
padding-top: 70px;
padding-bottom: 70px;
}
</style>
<title>Control De Notas</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
<a class="navbar-brand" href="#">Control de Notas</a>
<div class="collapse navbar-collapse">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="mostrar_estudiantes.php">Estudiantes</a>
</li>
<li class="nav-item active">
<a class="nav-link" href="mostrar_materias.php">Materias</a>
</li>
</ul>
</div>
<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="nav-link" href="#">Tecnologia Web II - <?php echo date("Y");?></a>
</li>
</ul>
</div>
</nav>
<main class="container">