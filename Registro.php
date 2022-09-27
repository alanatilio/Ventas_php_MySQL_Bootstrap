<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Administrador</title>
    <link rel="stylesheet" type="text/css" href="librerias/css/bootstrap.css">

    <script src="librerias/jquery-3.3.0.min.js"> </script>
</head>

<body >
    <br> <br> <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"> </div>
            <div class="col-sm-4">
                <div class=" panel panel-primary ">
                    <div class="panel panel-heading " align="center">
                        <h3>RESGISTRAR ADMINISTRADOR</h3>
                    </div>
                    <div class="panel panel-danger ">
                        <div class="panel panel-danger ">
                            <form method="post" id="frmRegistro" action="Usuarios/index.php">
                                <label> Nombre </label>
                                <input required type=" text " class="form-control input-sm " name="nombre" id="nombre">
                                <label> Apellido </label>
                                <input required type=" text " class="form-control input-sm " name="apellido" id=" apellido ">
                                <label> Usuario </label>
                                <input required type=" text " class="form-control input-sm " name="usuario" id="usuario">
                                <label> Password </label>
                                <input required type=" text " class="form-control input-sm" name="password" id=" password ">
                                <p> </p>
                                <input class="btn btn-outline-success" type="submit" value="Registrar">
                                <a href="index.php" class="btn btn-outline-danger "> Regresar login </a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=" col - sm - 4 "> </div>
            </div>
        </div>
    </div>
</body>

</html>

<script type="text/javascript">
    /*
    $(document).ready(function()) {
        $('#registro').click(function()) {
            vacios = validarFormVacio('frmRegistro');
            if (vacios > 0) {
                alert("Los campos no pueden estar vacios");
                return false;
            }

            datos = $('frmRegistro').serialize();
            $.ajax({
                type: "POST",
                data: datos,
                url: "Proyectos/Ventas/Registro.php",
                success: function(r) {

                }
            })
        }
    }*/
</script>