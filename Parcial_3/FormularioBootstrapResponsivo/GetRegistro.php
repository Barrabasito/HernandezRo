<?php 
//Arrays asociativo cuando es con cadena
$registro["fecha"]="2019-08";
$registro["marca"]="Puma";
$registro["nombre"]="Mochila escolar Puma unisex";
$registro["precio"]="720";
$registro["talla"]="*";
$registro["color"]="negro";
$registro["cantidad"]="59";
$registro["categoria"]="Mochilas";
$registro["desc"]="Tipo de correa ajustable, sin arnes, compartimientos 3, tipo escolar, tipo de asa fija, fijacion cierre.";
echo json_encode($registro);
?>