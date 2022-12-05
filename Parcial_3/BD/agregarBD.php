<?php
$nombre=$_POST['nombre'];
$cantidad=$_POST['cantidad'];
$color=$_POST['color'];
$categoria=$_POST['categoria'];
$durabilidad=$_POST['durabilidad'];
$efecto=$_POST['efecto'];
$materiales=$_POST['materiales'];
$cantidadT=$_POST['cantidadT'];
$fecha=$_POST['fecha'];
$descripcion=$_POST['descripcion'];

     $conexion= mysqli_connect("localhost","root","","items") or die("No se pudo conectar al localhost");
     $consulta= "INSERT INTO itemsminecraft(Nombre,Cantidad,Color,Categoria,Durabilidad,Materiales,Cantidad_Materiales,Efecto,Fecha,Descripcion) VALUES('$nombre','$cantidad','$color','$categoria','$durabilidad','$materiales','$cantidadT','$efecto','$fecha','$descripcion')";
     $rta=mysqli_query($conexion,$consulta);
     if(!$rta){
          echo "No se agrego correctamente";
     }
     else{
          header("Location: index.php");
     }
?>