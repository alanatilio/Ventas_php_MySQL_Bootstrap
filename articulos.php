<!DOCTYPE html>
<html>

<head>
    <title>articulos</title>
    <?php  ?>
    <?php 
    //require_once "menu.php";
    /*require_once "clases/conexion.php";
    $c = new conectar();
    $conexion = $c->conexion();
    $sql = "SELECT id_categoria,nombreCategoria
        from categoria";
    $result = mysqli_query($conexion, $sql);*/
    ?>
    <link rel="stylesheet" type="text/css" href="librerias/css/bootstrap.css">
    <script src="librerias/jquery-3.3.0.min.js"> </script>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="container">
        <h1>Articulos</h1>
        <div class="row">
            <div class="col-sm-4">
                <form id="frmArticulos" enctype="multipart/form-data">
                    <label>Categoria</label>
                    <select class="form-control input-sm" id="categoriaSlect" name="categoriaSelect">
                        <option value="A">Selecciona Categoria</option>
                        <?php while ($ver = mysqli_fetch_row($result)) : ?>
                            <option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
                        <?php endwhile; ?>
                    </select>
                    <label>Nombre</label>
                    <input type="text" class="form-control input-sm" id="nombre" name="nombre">
                    <label>Descripcion</label>
                    <input type="text" class="form-control input-sm" id="descripcion" name="descripcion">
                    <label>Cantidad</label>
                    <input type="text" class="form-control input-sm" id="cantidad" name="cantidad">
                    <label>Precio</label>
                    <input type="text" class="form-control input-sm" id="precio" name="precio">
                    <label>Imagen</label>
                    <input type="file" id="imagen" name="imagen">
                    <p></p>
                    <span id="btnAgregaArticulo" class="btn btn-primary">Agregar</span>
                </form>
            </div>
            <div>
                <div id="tablaArticulosLoad"></div>
            </div>
        </div>
    </div>
</body>

</html>