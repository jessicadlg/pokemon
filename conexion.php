<?php
$archivoConfig = "Recursos/config.ini";
$configuracion = parse_ini_file($archivoConfig, true);

$host = $configuracion["bd"]["host"];
$usuario = $configuracion["bd"]["usuario"];
$clave = $configuracion["bd"]["password"];
$bd = $configuracion["bd"]["basededatos"];

$conexion = new mysqli($host, $usuario, $clave, $bd);
if ($conexion->connect_error) { // connect error me da el num del error
    echo $conexion->connect_error . "<br>";//SI DA CERO ENTRA CORRECTAMENTE EN EL IF OPCION FALSA DSP DEL ELSE.
    die("Ha ocurrido un error");
} else {
    echo "se ha conectado bien ";
}
