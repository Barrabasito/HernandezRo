let active=true;
$(document).ready(function(){ 
    $('#menu').click(function(){
    if(active){
        $('#sideBar').hide(function(){
            alert('Se desaparecio el SideBar con la libreria Query');                          
            active=false;
        });
    }else{
        $('#sideBar').show(function(){
            alert('Se mostro el SideBar con la libreria Query');
            active=true;
        });
    }
    });
}); 
