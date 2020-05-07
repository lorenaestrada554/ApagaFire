<?php

$hostname='ec2-18-210-51-239.compute-1.amazonaws.com';
$database='db8k6qk08f7njf';
$user='rlerwmudzipqma';
$pass='9dd7af7373d2134c6134814b1355856a65bf5ed339f0e2df78b8ad5a974c1c62';

$conexion = pg_connect("host='ec2-18-210-51-239.compute-1.amazonaws.com' dbname=db8k6qk08f7njf port=5432 user=rlerwmudzipqma password=9dd7af7373d2134c6134814b1355856a65bf5ed339f0e2df78b8ad5a974c1c62") or die ("Error de Conexión".pg_last_error());

$resp = pg_query($conexion,"Select * from reporte where cantidad = '56'");
$resp = pg_fetch_row($resp);
$can = $resp[0];
$consulta = "Select * from reporte where cantidad = '".$can."'";
$resultado = pg_query($conexion, $consulta);
$reporte = array();
$cont =0;
while ($fila = pg_fetch_array($resultado)){
    $reporte[$cont++] = array_map('utf8_encode',$fila);
}

echo json_encode($reporte);
pg_close($conexion);

?>