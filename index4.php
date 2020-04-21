<?php

$hostname='ec2-18-210-51-239.compute-1.amazonaws.com';
$database='db8k6qk08f7njf';
$user='rlerwmudzipqma';
$pass='9dd7af7373d2134c6134814b1355856a65bf5ed339f0e2df78b8ad5a974c1c62';

$conexion = pg_connect("host='ec2-18-210-51-239.compute-1.amazonaws.com' dbname=db8k6qk08f7njf port=5432 user=rlerwmudzipqma password=9dd7af7373d2134c6134814b1355856a65bf5ed339f0e2df78b8ad5a974c1c62") or die ("Error de Conexión".pg_last_error());

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$pais = $_POST['pais'];
$cc = $_POST['cc'];
$total = "'".$nombre."','".$descripcion."','".$cantidad."','".$pais."','".$cc."'";
$querycont = pg_query($conexion, "INSERT INTO reporte(nombre,descripcion,cantidad,pais,cc) VALUES (".$total.");");

pg_close($conexion);

?>