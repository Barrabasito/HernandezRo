<?php 
$id=$_GET['id'];

//Arrays asociativo cuando es con cadena
$registro["d"]=$id;

echo json_encode($registro);
?>