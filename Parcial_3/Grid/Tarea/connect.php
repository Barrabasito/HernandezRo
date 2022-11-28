<?php
$servidor="localhost";
$basedatos="items";
$usuario="root";
$password="";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar al localhost");
$consulta ="select * from itemsminecraft";
$registros = mysqli_query($con,$consulta) or die("Problemas en el select");

//Resultado como array asociativo
//while(%reg=mysqli_fetch_array($registros,MYSQLI_ASSOC)){
  //  printf($reg['nombre'].' '.$reg['apPaterno'].'<br>');
//}

$result = mysqli_fetch_all($registros,MYSQLI_ASSOC);

mysqli_close($con);
echo json_encode($result); //Se convierte a json y se lo pasamos al cliente
?>