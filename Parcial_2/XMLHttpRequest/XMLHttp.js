window.onload=function()
{

    document.getElementById("btnajax").addEventListener("click",pedirHeader);
    document.getElementById("btnreset").addEventListener("click",iniciarHeader);

    function pedirHeader()
    {
        var solicitud = new XMLHttpRequest();

        solicitud.onreadystatechange=function() {
        if(solicitud.readyState==4 && solicitud.status==200){
            document.getElementById("request").innerHTML=solicitud.responseText;
        }};
        solicitud.open("GET","Archivo.txt",true);
        solicitud.send();
}
function iniciarHeader(){
    document.getElementById("request").innerHTML="<h2>Este es un Header Nivel 2 <h2>";
}
}