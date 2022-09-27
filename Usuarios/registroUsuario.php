<?php
//require_once "../clases/conexion.php";
//require_once "../clases/usuarios.php";
include '../clases/conexion.php';
include '../clases/usuarios.php';

$obj=new usuarios();

$pass = sha1($_POST['password']);

$datos=array(
    $_POST['nombre'],
    $_POST['apellido'],
    $_POST['email'],
    $pass
)

?>