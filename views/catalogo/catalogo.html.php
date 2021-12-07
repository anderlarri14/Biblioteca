<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/catalogo.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../../js/catalogo.js"></script>
    <title>Cat&aacutelogo</title>
</head>
<body>
    <?php
    //include_once "../include/header.html";
    ?>
    <div class="content">
        <div class="filtros">
            <h1>Filtros</h1>
            <div class="filtroTitulo">
                <h4>Titulo</h4>
                <input type="text" name="filtroTitulo" id="inputTitulo">
            </div>
            <div class="filtroAutor">
                <h4>Autor</h4>
                <input type="text" name="filtroAutor" id="inputAutor">
            </div>
            <div class="filtroGenero">
                <h4>G&eacutenero</h4>
                <input type="text" name="filtroGenero" id="inputGenero">
            </div>
            <div class="filtroPrecio">
                <h4>Precio</h4>
                <input type="radio" name="filtroPrecio" id="precioAscendente"><label for="filtroPrecio">Ascendente</label>
                <input type="radio" name="filtroPrecio" id="precioDescendente"><label for="filtroPrecio">Descendente</label>
            </div>
        </div>
        <div class="listaLibros">
            <?php
            
            foreach ($listaLibros as $libro) {
                echo '<div class="libro">
                <img src="../public/portadas/libro1.webp" alt="Portada del libro" class="book-cover">
                
                <h3 class="title">' . $libro['titulo'] . '</h3>
                <p class="author">' . $libro['autor'] . '</p>
                <p class="description">
                ' . $libro['descripcion'] . '
                </p>
                <p class="price">' . $libro['precio'] . ' $</p></div>';
            }
            
            ?>
        </div>
    </div>
    <div id="footer">
    
    </div>

</body>

</html>


<php ?>