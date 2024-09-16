<?php
$nombre = $_GET["nombre"];
$prefijo = $_GET["prefijo"];
$posicion  = strpos($nombre, $prefijo);
$primera = stripos($nombre, "a");
echo trim($nombre, "/");
echo "<hr>";
echo strlen($nombre);
echo "<hr>";
echo strtoupper($nombre);
echo "<hr>";
echo strtolower($nombre);
    echo "<hr>";
if ($posicion != false && $posicion == 0) {
    echo "Si empieza";
}else{
    echo "No empieza";
}
echo "<hr>";
echo substr_count(strtolower($nombre), "a");
echo "<hr>";
if ($primera != false){
    echo $primera;
}else{
    echo "No existe";
}
echo "<hr>";
echo str_ireplace("o", "0", $nombre);
?>