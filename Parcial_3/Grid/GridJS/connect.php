<?php
$servidor="localhost";
$basedatos="items";
$usuario="root";
$password="";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar al localhost");
$consulta ="select * from itemsminecraft";
$registros = mysqli_query($con,$consulta) or die("Problemas en el select");

$result = mysqli_fetch_all($registros);//Arrays de arrays

mysqli_close($con);
echo json_encode($result); //Se convierte a json y se lo pasamos al cliente
?>