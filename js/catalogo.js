$( document ).ready(function() {
    

    $('#inputTitulo').keyup(function () {
        var valor = $('#inputTitulo').val();
        console.log("valor es "+ valor);

        $.ajax({
            url : '../../ajax/filtroTitulo.php',
            data : { "inputTitulo" : valor },
            type : 'POST',
            success : function(data) {
                
                $('.listaLibros').html(data);
                
            },
            error : function(error) {
                console.log('Error' + error);
            }
        });
        
    });
    $('inputAutor').keyup(function () {
        var valor = $('#inputAutor').val();
        
    });
    $('inputGenero').keyup(function () {
        var valor = $('#inputGenero').val();
        
    });

});

/*$(document).ready(function () {
    // >>>>>>>>>>>>>>>>> INFO TEMPORAL COORDENADAS
    $("body").mousemove(function (event) {
        var m = $(".mapa");
        var bodyX = event.pageX;
        var bodyY = event.pageY;
        var mapX = event.pageX - m.offset().left;
        var mapY = event.pageY - m.offset().top;
        var coord = "paginaX: " + bodyX + ", paginaY: " + bodyY + "-----  MapaX " + mapX + ", MapaY: " + mapY;
        var mapHeight = m.innerHeight();
        var mapWidth = m.innerWidth();
        var datMapa = "Height: " + mapHeight + " Width: " + mapWidth;
        var puntoX = parseFloat(mapX / mapWidth * 100).toFixed(2) + "%";
        var puntoY = parseFloat(mapY / mapHeight * 100).toFixed(2) + "%";
        var punto = "X: " + puntoX + " Y: " + puntoY;
        $("header").html(coord + " <br>" + datMapa + "<br> " + punto);
    }); 
    $(function () {
        $.datepicker.setDefaults({
            beforeShowDay: $.datepicker.noWeekends,
            showOn: "button",
            buttonText: "Cambiar dia",
            onClose: function(date){
                escribirFecha(date);
            }
        }); 
        $("#fecha").datepicker();
    });
 


    $(".aula").click(function(){
        var id = $(this).attr("id");
        var pos = id.indexOf("-")+1;
        id = id.substr(pos);
        $(".datos-aula").css("display","none");
        $(".datos-aula-"+id).css("display","grid");

    });

});
function escribirFecha(valor){
    console.log(valor);
}*/