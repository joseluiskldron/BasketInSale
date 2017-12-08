<?php
$servidor="localhost";
$BasedeDatos="basketballinsale";

$conexion=mysqli_connect($servidor,$usuario);
$database=mysqli_select_database($conexion,$BasedeDatos) or die("No se puede conectar a la Base de Datos");

$nombre= $_POST['nombre'];
$apellidos= $_POST['apellidos']
$edad=$_POST['edad']
$fechanacimiento=$_POST['fechanacimiento']
$ciudadorigen=$_POST['ciudadorigen']
$Sexo=$_POST['sexo']
$direccion=$_POST['direccion']
$email=$_POST['correo']


?>
