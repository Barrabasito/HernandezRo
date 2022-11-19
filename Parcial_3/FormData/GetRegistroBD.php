<?php
//$id=$_POST['idN'];
$id=2;

$servidor="localhost";
$basedatos="automatas";
$usuario="root";
$password="";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar al localhost");
$consulta ="select * from matriz where Estado=$id";
$registros = mysqli_query($con,$consulta) or die("Problemas en el select");


$result = mysqli_fetch_array($registros,MYSQLI_ASSOC);

echo json_encode($result); //Se convierte a json y se lo pasamos al cliente
?>