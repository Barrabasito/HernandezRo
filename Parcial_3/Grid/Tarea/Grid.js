
$(document).ready(async function(){
//Arreglo de objetos

let res=await fetch('connect.php')
let bdjson=await res.json();     
 
    $("#jsGrid").jsGrid({
        width: "100%",
        height: "400px",
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
        data: bdjson,
    
        fields: [
            { name: "Id", type: "number", width: 150, validate: "required" },
            { name: "Nombre", type: "text", width: 50 },
            { name: "Cantidad", type: "number", width: 200 },
            { name: "Color", type: "text", width: 50 },
            { name: "Categoria", type: "text", width: 150, validate: "required" },
            { name: "Durabilidad", type: "text", width: 150, validate: "required" },
            { name: "Materiales", type: "text", width: 150, validate: "required" },
            { name: "Cantidad_Materiales", type: "number", width: 200 },
            { name: "Efecto", type: "text", width: 150},
            { name: "Fecha", type: "date", width: 150, validate: "required" },
            { name: "Descripcion", type: "text", width: 150, validate: "required" },
            { type: "control" }
        ]
  });
});
