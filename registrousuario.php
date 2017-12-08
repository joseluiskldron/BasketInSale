<?php
$servidor="localhost";
$BasedeDatos="basketballinsale";

$conexion=mysqli_connect($servidor,$usuario);
$database=mysqli_select_database($conexion,$BasedeDatos) or die("No se puede conectar a la Base de Datos");

$email=$_POST['correo']
$contraseña=$_POST['contraseña']

$Insertar=("insert into sesion (email,contraseña)Values('$email','$contraseña')");

$consulta=mysqli_query($conexion,$Insertar);
