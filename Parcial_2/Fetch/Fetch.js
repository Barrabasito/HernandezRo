const btnPeticion = document.getElementById('btnPeticion');

var image = document.querySelector('img');

function random(){
   return Math.floor(Math.random() * (200 - 1) + 1);
}
var rand = random();

const llamarApi = () => {

     fetch('https://pokeapi.co/api/v2/pokemon/'+random())
     .then(res => res.json())
     .then(data => {
        
      console.log(data);
      console.log(data.sprites.front_default); 
        image.src=data.sprites.front_default;
     }) 
     .catch(e => console.error(new Error(e)));
}

btnPeticion.addEventListener('click', llamarApi);
    /*document.getElementById("btnPeticion").addEventListener("click",function(){
        fetch("https://pokeapi.co/api/v2/pokemon/ditto")
        .then(respuesta => respuesta.json())
        .then(datoJson => document.getElementById("broma").innerText=datoJson.value);
        });*/