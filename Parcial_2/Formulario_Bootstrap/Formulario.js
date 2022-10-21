$('btnHoraAsincrona').click(function(){
    var solicitud=new XMLHttpRequest();
    solicitud.onload=function(){
        document.getElementById("hora").value=solicitud.response
    }
    solicitud.open("GET","")
});