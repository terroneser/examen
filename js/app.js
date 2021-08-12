function muestraSelect(str){
    let conexion;
    if(str == ""){
        document.getElementById("txtHint").innerHTML="";
        return;
    }
    if(window.XMLHttpRequest){
        conexion = new XMLHttpRequest();
    }
    conexion.open("GET", "./includes/_db.php?id=" +str, true);
    conexion.send();
}





/*$(document).ready(function(){
    $('#selectDestino').val(0);
    recargarLista();

    $('#selectDestino').change(function(){
        recargarLista();
    });
})
function recargarLista(){
    $.ajax({
        type:"POST",
        url:"mysql.js",
        data:"hoteles=" + $('#selectDestino').val(),
        success:function(res){
            $('#selectHoteles').html(res);
        }
    });
}*/