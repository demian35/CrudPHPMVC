<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <title>
        <?php 
        echo (empty($_GET['idEmpleados']))?(((strpos($_SERVER['REQUEST_URI'],'agregar'))?"Agrega Usuario":"Inicio")):((strpos($_SERVER['REQUEST_URI'],'show'))?"Detalles empleado".$_GET['idEmpleados']:"Editar Registro".$_GET['idEmpleados']);

        ?>

    </title>
</head>

<body>

    <div class="container-fluid">

        <nav class="navbar navbar-expand navbar-dark bg-primary">
            <div class="container-fluid">


                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Cerrar Sesion </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/views/index.php">Inicio</a>
                    </li>


                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <br>
        <div class="row">