<?php
// Archivo donde se guardarán las IPs
$archivo_registro = 'visitas.txt';

// Obtener la IP del visitante
$ip = $_SERVER['REMOTE_ADDR'];

// Obtener fecha y hora actual
$fecha_hora = date('Y-m-d H:i:s');

// Crear el registro (IP + fecha/hora)
$registro = $ip . ' - ' . $fecha_hora . PHP_EOL;

// Guardar el registro en el archivo
file_put_contents($archivo_registro, $registro, FILE_APPEND);

// Mostrar mensaje al usuario
echo "¡Gracias por visitarnos! Tu IP ($ip) ha sido registrada.";
?>