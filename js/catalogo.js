$( document ).ready(function() {
    $('#inputTitulo').keyup(function () {
        peticionAjax();    
    });
    $('#inputAutor').keyup(function () {
        peticionAjax();   
    });
    $('#inputGenero').keyup(function () {
        peticionAjax();
    });
    $('input[name=filtroPrecio]').click(function () {
        peticionAjax();   
    });
});

function peticionAjax() {
    var titulo = $('#inputTitulo').val();
    var autor = $('#inputAutor').val();
    var genero = $('#inputGenero').val();
    var precio = $('input[name=filtroPrecio]:checked').attr('id');
    var data = {"inputTitulo" : titulo, "inputAutor" : autor, "inputGenero" : genero, "inputPrecio" : precio}
    $.ajax({
        url : '../../ajax/filtros.php',
        data : data,
        type : 'POST',
        success : function(data) {
            if(data == ""){
                $('.listaLibros').html("<h1>No hay resultados</h1>");
            } else {
                $('.listaLibros').html(data);  
            }
            
        },
        error : function(error) {
            console.log('Error' + error);
        }
    });
}
