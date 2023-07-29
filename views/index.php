<?php
include("./templates/header.php")
?>


    <style>
        .center-screen {
            text-align: center;
        }
        h1{
            text-align: center;
            color: white;
        }
    </style>


    <h1>Registra empleado</h1>
    <br>
    <div class="center-screen">
        <a class="btn btn-primary" href="agregar.php" role="button">Agregar</a>
    </div>

    <br>

    <div class="col-md-12 ">
        <div class="table-responsive table-bordered">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Matricula</th>
                        <th scope="col">Correo Electronico</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">Fulanito</td>
                        <td>Perez Salgado</td>
                        <td>R1C3</td>
                        <td>ful@correo.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>




<?php
include("./templates/footer.php")
?>