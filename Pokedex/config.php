<?php

$archivoConfig = "recursos/config.ini";
$configuracion = parse_ini_file($archivoConfig, true);

$host = $configuracion["bd"]["host"];
$usuario = $configuracion["bd"]["usuario"];
$clave = $configuracion["bd"]["password"];
$bd = $configuracion["bd"]["basededatos"];

$conexion = mysqli_connect($host,$usuario, $clave,$bd);

if ($conexion->connect_error) {
    die('No se pudo conectar a la base de datos!' . $conexion->connect_error);
}