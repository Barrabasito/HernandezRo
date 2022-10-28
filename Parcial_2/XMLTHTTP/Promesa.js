let promesa =new Promise(function(resolve,reject){
console.log('Ejecutando promesa...');
if(1==2)
});

promesa.then(
    function(result){console.log()}
)

promesa.then(
    (result)=>{console.log(result)}
    ()=>{console.log()}
);

let solicitud=fetch("url");
solicitud.then(function(respuesta){

});
