<?php
$contraseña="";
$servidor="localhost";
$BasedeDatos="basketballinsale";

$conexion=mysqli_connect($servidor,'root');
$database=mysqli_select_db($conexion,$BasedeDatos) or die("No se puede conectar a la Base de Datos");

$nombre= $_POST['nombre'];
$apellidos= $_POST['apellidos'];
$edad= $_POST['edad'];
$cumple=$_POST['cumple'];
$ciudadorigen=$_POST['ciudad'];
$direccion=$_POST['direccion'];
$Sexo=$_POST['sexo'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];


$Insertar=("insert into usuario (nombre,apellidos,ciudadorigen,sexo,fechanacimiento,edad,
direccion,correo,contrasena)Values('$nombre','$apellidos','$edad','$cumple','$ciudadorigen',
'$direccion','$Sexo','$correo','$contrasena')");

$consulta=mysqli_query($conexion,$Insertar);
