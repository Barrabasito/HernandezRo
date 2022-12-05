<?php
$id=$_POST['id'];
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
     $consulta= "UPDATE itemsminecraft SET Nombre='$nombre',Cantidad='$cantidad',Color='$color',Categoria='$categoria',Durabilidad='$durabilidad',Materiales='$materiales',Cantidad_Materiales='$cantidadT',Efecto='$efecto',Fecha='$fecha',Descripcion='$descripcion' WHERE Id LIKE $id";
     $rta=mysqli_query($conexion,$consulta);
     if(!$rta){
          echo "No se actualizó correctamente";
     }
     else{
          header("Location: index.php");
     }
?>