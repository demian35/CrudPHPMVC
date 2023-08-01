<?php

include("../controllers/controladorlogin.php");

    




?>

<!doctype html>
<html lang="en">

<head>
    <title>Inicia Sesion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   
</head>

<body>
    <div class="container">
        <div class="row">

        <div class="col-md-4">

        </div>
            <div class="col-md-4">
                <br>
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="" method="post">

                        <div class = "form-group">
                        <label>Usuario</label>
                        <input  type="text" class="form-control" name="usuario" aria-describedby="emailHelp" placeholder="Ingrese su usuario">
                        <small  class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>

                        <div class="form-group">
                        <label >Password</label>
                        <input  type="password" class="form-control" name="contrasena" placeholder="Password">
                        </div>
                        <br>

                        <input class="btn btn-primary" name="btningresar" type="submit" value="Inicia sesion">
                        </form>
                        
                        

                    </div>
                    <div class="card-footer">
                        <?php if(isset($notificacion)){ ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $notificacion; ?>

                        </div>
                        <?php } ?>

                        <?php if(isset($mensaje)){ ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $mensaje; ?>

                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>