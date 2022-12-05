<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
    <link href="https://fonts.cdnfonts.com/css/minecraft-4" rel="stylesheet">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="Formulario.css">
</head>
<body class="fondo">
    <div>
    <div class="titulo"><h2>Agrega un Nuevo Item de Minecraft</h2></div>

        <form action="agregarBD.php" method="post" class="agregar">   
    <div class="row">
    <div class="form-group col-sm-12 col-md-6 col-lg-3">
      <label for="idNombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre" id="idNombre">
  </div>

      
    <div class="form-group col-sm-12 col-md-6 col-lg-3">
      <label for="idCantidad" class="form-label">Cantidad</label>
      <input type="number" class="form-control" name="cantidad" id="idCantidad">
  </div>

  <div class="form-group col-sm-12 col-md-6 col-lg-3">
    <label for="idColor" class="form-label">Color</label>
    <input type="text" class="form-control" name="color" id="idColor">
  </div>

<div class="form-group col-sm-12 col-md-6 col-lg-3">
  <label for="idCategoria" class="form-label">Categoria</label>
    <select class="form-control" name="categoria" id="idCategoria">
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
    <input type="text" class="form-control" name="durabilidad" id="idDurabilidad">
</div>  

<div class="form-group col-sm-12 col-md-6 col-lg-6">
  <label for="idEfecto" class="form-label">Efecto*</label>
  <input type="text" class="form-control" name="efecto" id="idEfecto">
</div>
</div>

<div class="row">
  <div class="form-group col-sm-12 col-md-6 col-lg-6">
    <label for="idMateriales" class="form-label">Materiales utilizados para Craftear Item</label>
    <input type="text" class="form-control" name="materiales" id="idMateriales">
  </div>
  
  <div class="form-group col-sm-12 col-md-6 col-lg-3">
    <label for="idCantidadT" class="form-label">Cantidad Total de Items para Crafteo</label>
    <input type="number" class="form-control" name="cantidadT" id="idCantidadT">
    </div>

  <div class="form-group col-sm-12 col-md-6 col-lg-3">
    <label for="idFecha" class="form-label">Fecha de version de Salida</label>
    <input type="date" class="form-control" name="fecha" id="idFecha">
    </div>
  </div>

  <div class="row"> 
  <textarea id="idDesc" name="descripcion" rows="4" cols="50" placeholder="Descripcion de uso aqui"></textarea>
  </div>
   <div>
        <button type="submit" class="btnCapturar">Capturar</button> 
        <input type="reset" value="Borrar">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
        </form>
    </div>
</body>
</html>