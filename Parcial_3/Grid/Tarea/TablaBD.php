<?php
//Conectarnos con el servidor
$servidor="localhost";
$basedatos="items";
$usuario="root";
$password="";

//Conexión Base de Datos y consulta
$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar al localhost");
$consulta ="select * from itemsminecraft";
$registros = mysqli_query($con,$consulta) or die("Problemas en el select");

//Traer los resultados con un Array
$result = mysqli_fetch_array($registros);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid de Base de Datos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>

    <table class="table table-sm">
        <thead>
        <tr align="center"><th colspan="12">Registros de Items de Minecraft</th></tr>
        <tr align="center"><th>Id</th><th>Nombre</th><th>Cantidad</th><th>Color</th><th>Categoria</th><th>Durabilidad</th><th>Efecto</th><th>Materiales Crafteo</th><th>Cantidad Materiales</th><th>Fecha Versión</th><th>Descripción</th></tr>
        </thead>
        <tbody>
          <?php 
          for($i=0; $i<$result; $i++){
            echo "<tr>";
            echo"<td>";
            echo $result['Id'];
            echo"</td>";
            echo"<td>";
            echo $result['Nombre'];
            echo"</td>";
            echo "<td>";
            echo $result['Cantidad'];
            echo "</td>";
            echo "<td>";
            echo $result['Color'];
            echo "</td>";
            echo "<td>";
            echo $result['Categoria'];
            echo "</td>";
            echo "<td>";
            echo $result['Durabilidad'];
            echo "</td>";
            echo "<td>";
            echo $result['Efecto'];
            echo "</td>";
            echo "<td>";
            echo $result['Materiales'];
            echo "</td>";
            echo "<td>";
            echo $result['Cantidad_Materiales'];
            echo "</td>";
            echo "<td>";
            echo $result['Fecha'];
            echo "</td>";
            echo "<td>";
            echo $result['Descripcion'];
            echo "</td>";
            echo "</tr>";
            $result = mysqli_fetch_array($registros);
          }
          ?>      
        </tbody>
    </table>
    
</body>
</html>