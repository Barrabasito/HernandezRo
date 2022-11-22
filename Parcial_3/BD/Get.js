document.getElementById("btnGet").addEventListener("click",async()=>{
    var datosFormulario=new FormData(document.getElementById("formulario"));
    let respuesta=await fetch('GetRegistroBD.php',{
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