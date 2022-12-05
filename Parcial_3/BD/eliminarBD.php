<?php
$id=$_GET['id'];

     $conexion= mysqli_connect("localhost","root","","items") or die("No se pudo conectar al localhost");
     $consulta= "DELETE FROM itemsminecraft  WHERE Id LIKE $id";
     $rta=mysqli_query($conexion,$consulta);
     if(!$rta){
          echo "No se eliminó correctamente";
     }
     else{
          header("Location: index.php");
     }
?>