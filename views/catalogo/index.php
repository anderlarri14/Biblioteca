<?php
    
    include_once "../../data/clases/libros.php";
    $libro = new libroClass();

    $listaLibros = $libro->getLibroList();

    unset($libro);
    //echo $listaLibros;
    /*
    foreach ($listaLibros as $aux) {
        echo $aux['id'].' '. $aux['titulo'] .' '. $aux['autor'] .' '. $aux['genero'] .' '. $aux['precio'] .'<br>';
    }
    */
    /*
    if (isset($_GET['idCity'])) {
        $city = new cityClass();
        
        unset($city);
    }

    include_once "viewCity.html.php";
    */

    include_once "compras.html.php";
?>