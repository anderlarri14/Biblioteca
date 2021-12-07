<?php
    
    include_once "../data/clases/conexion.php";
    $conexion = new conexion();

    $inputTitulo = $_POST['inputTitulo'];


    $result = $conexion->query("SELECT * FROM `catalogo` WHERE titulo LIKE '%$inputTitulo%';");

    
    foreach ($result->fetchAll() as $libro) {
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