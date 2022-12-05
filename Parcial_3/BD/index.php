<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items de Minecraft</title>
    <link href="https://fonts.cdnfonts.com/css/minecraft-4" rel="stylesheet">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="Formulario.css">
</head>
<body>

    <div class="buscador">
        <form action="buscar.php" method="post">
        <div class="row">
        <div class="form-group col-sm-12 col-md-6 col-lg-3">
        <input type="text" class="form-control" name="buscar">
        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-3">
        <button type="submit" class="btn btn-secondary" id="buscar">Buscar</button>
        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
        <a class="agregar" href="agregar.php">Agregar</a>
        </div>
        </div>
        </form>
    </div>
    <div class="datos">
    <table class="table table-striped">
    <thead>
        <tr class="titulo" align="center"><th colspan="12">Registros de Items de Minecraft</th></tr>
        <tr align="center"><th>Id</th><th>Nombre</th><th>Cantidad</th><th></th></tr>
        </thead>
    <?php
     $conexion= mysqli_connect("localhost","root","","items") or die("No se pudo conectar al localhost");
     $consulta= "SELECT * FROM itemsminecraft";
     $rta=mysqli_query($conexion,$consulta);
     while($mostar = mysqli_fetch_row($rta)){
        ?>
        <tr align="center">
        <td><?php echo $mostar['0'] ?></td><td><?php echo $mostar['1'] ?></td><td><?php echo $mostar['2'] ?></td>
        <td>
        <a class="editar" href="editar.php? 
        id=<?php echo $mostar['0'] ?>&
        nombre=<?php echo $mostar['1'] ?>&
        cantidad=<?php echo $mostar['2'] ?>&
        color=<?php echo $mostar['3'] ?>&
        categoria=<?php echo $mostar['4'] ?>&
        durabilidad=<?php echo $mostar['5'] ?>&
        efecto=<?php echo $mostar['8'] ?>&
        materiales=<?php echo $mostar['6'] ?>&
        cantidadT=<?php echo $mostar['7'] ?>&
        fecha=<?php echo $mostar['9'] ?>&
        descripcion=<?php echo $mostar['10'] ?>
        ">Editar</a>
        <a class="eliminar" href="eliminarBD.php?
        id=<?php echo $mostar['0'] ?>
        ">Eliminar</a>
        </td>
        </tr>
       <?php
     }
     ?>
    </table>
    </div>
    <div class="consultar">
        <form id="formulario">
        <div class="row">
        <div class="form-group col-sm-12 col-md-6 col-lg-3">
        <input type="number" class="form-control" name="id">
        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-3">
        <button type="button" id="btnGet" data-bs-toggle="modal" data-bs-target="#modalRegistro">Consultar</button>  
        </div>
        </div>
        </form>
    </div>


<!-- Modal -->
<div class="padre">
<div class="modal fade" id="modalRegistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTRO</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
    <div>
    <div class="titulo"><h2>Consulta exitosa</h2></div>

        <form class="agregar">   
    <div class="row">
      <div class="form-group col-sm-12 col-md-6 col-lg-2">
        <label for="idItem" class="form-label">ID</label>
        <input type="number" name="id" class="form-control" id="idItem" readonly value="<?=$id?>">
    </div>

    <div class="form-group col-sm-12 col-md-6 col-lg-3">
      <label for="idNombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre" id="idNombre" readonly>
  </div>

      
    <div class="form-group col-sm-12 col-md-6 col-lg-2">
      <label for="idCantidad" class="form-label">Cantidad</label>
      <input type="number" class="form-control" name="cantidad" id="idCantidad" readonly>
  </div>

  <div class="form-group col-sm-12 col-md-6 col-lg-2">
    <label for="idColor" class="form-label">Color</label>
    <input type="text" class="form-control" name="color" id="idColor" readonly>
  </div>

<div class="form-group col-sm-12 col-md-6 col-lg-3">
  <label for="idCategoria" class="form-label">Categoria</label>
    <select class="form-control" name="categoria" id="idCategoria" readonly>
      <option value="Armaduras">Armaduras</option>
      <option value="Herramientas">Herramientas</option>
      <option value="Libros encantados">Libros encantados</option>
      <option value="Posiones">Posiones</option>
      <option value="Bloques de madera">Bloques de madera</option>
      <option value="Bloques de minerales">Bloques de minerales</option>
      <option value="Lozas de maderas">Lozas de madera</option>
      <option value="Lozas de minerales">Lozas de minerales</option>
      <option value="Mineral Individual">Mineral Individual</option>
      <option value="Comida">Comida</option>
      <option value="Otro">Otro</option>
    </select>
</div>
</div>

<div class="row">
  <div class="form-group col-sm-12 col-md-6 col-lg-6">
    <label for="idDurabilidad" class="form-label">Durabilidad</label>
    <input type="text" class="form-control" name="durabilidad" id="idDurabilidad" readonly>
</div>  

<div class="form-group col-sm-12 col-md-6 col-lg-6">
  <label for="idEfecto" class="form-label">Efecto*</label>
  <input type="text" class="form-control" name="efecto" id="idEfecto" readonly>
</div>
</div>

<div class="row">
  <div class="form-group col-sm-12 col-md-6 col-lg-6">
    <label for="idMateriales" class="form-label">Materiales utilizados para Craftear Item</label>
    <input type="text" class="form-control" name="materiales" id="idMateriales" readonly>
  </div>
  
  <div class="form-group col-sm-12 col-md-6 col-lg-3">
    <label for="idCantidadT" class="form-label">Cantidad Total de Items para Crafteo</label>
    <input type="number" class="form-control" name="cantidadT" id="idCantidadT" readonly>
    </div>

  <div class="form-group col-sm-12 col-md-6 col-lg-3">
    <label for="idFecha" class="form-label">Fecha de version de Salida</label>
    <input type="date" class="form-control" name="fecha" id="idFecha" readonly>
    </div>
  </div>

  <div class="row"> 
  <textarea id="idDesc" name="descripcion" rows="4" cols="50" readonly></textarea>
  </div>
        </form>
    </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>
</div>

<script>
  document.getElementById("btnGet").addEventListener("click",async()=>{
var datosFormulario=new FormData(document.getElementById("formulario"));
let respuesta=await fetch('consultar.php',{
  method: 'POST',
  body: datosFormulario
})
let dato=await respuesta.json();
document.getElementById("idItem").value=dato.Id;
document.getElementById("idNombre").value=dato.Nombre;
document.getElementById("idCantidad").value=dato.Cantidad;
document.getElementById("idColor").value=dato.Color;
document.getElementById("idCategoria").value=dato.Categoria;
document.getElementById("idDurabilidad").value=dato.Durabilidad;
document.getElementById("idMateriales").value=dato.Materiales;
document.getElementById("idCantidadT").value=dato.Cantidad_Materiales;
document.getElementById("idEfecto").value=dato.Efecto;
document.getElementById("idFecha").value=dato.Fecha;
document.getElementById("idDesc").value=dato.Descripcion;
  });
</script>


<script src="src/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>