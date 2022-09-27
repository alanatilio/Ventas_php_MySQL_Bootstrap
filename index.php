<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loguin de usuario</title>
    <link rel="stylesheet" type="text/css" href="librerias/css/bootstrap.css">
    <script src="librerias/jquery-3.3.0.min.js"> </script>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel panel-body">
                        <div class="center">
                            <img class="img_center" src="img/araho.png" width="" height="250" align="center">
                        </div>
                        <form id="frmLogin" method="post" action="Usuarios/index.php">
                            <label>Usuario</label>
                            <input class="form-control input-sm" type="text" name="usuario" id="usuario">
                            <label>Password</label>
                            <input class="form-control input-sm" type="password" name="password" id="password">
                            <p></p>
                            <button class="btn btn-outline-primary">Ingresar</button>
                            <a href="registro.php " class="btn btn-outline-warning" align="right">Registrase</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>

</body>

</html>