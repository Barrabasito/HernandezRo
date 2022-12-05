document.getElementById("btnGet").addEventListener("click",async()=>{
  let res=await fetch('consultar.php');
  let dato=await res.json();
    document.getElementById("idItem").value=dato.id;
    document.getElementById("idNombre").value=dato.nombre;
    document.getElementById("idCantidad").value=dato.cantidad;
    document.getElementById("idColor").value=dato.color;
    document.getElementById("idCategoria").value=dato.categoria;
    document.getElementById("idDurabilidad").value=dato.durabilidad;
    document.getElementById("idMateriales").value=dato.materiales;
    document.getElementById("idCantidadT").value=dato.cantidadT;
    document.getElementById("idEfecto").value=dato.efecto;
    document.getElementById("idFecha").value=dato.fecha;
    document.getElementById("idDesc").value=dato.descripcion;
      });