<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Consultar Comentarios</title>
</head>
<body>

    <nav>
        <a href="index.html" id="logo-wrap">
            <img src="../public/img1.webp" alt="Logo Libreria" id="logo">
            <h1>
                Libreria Cervantes
            </h1>
        </a>

        <div id="enlaces">
            <a href="index.html" class="enlace">MENU PRINCIPAL</a>
            <a href="" class="enlace">CATALOGO</a>
            <a href="" class="enlace">COMPRAR</a>
            <a href="listComentarios.php" class="enlace">COMENTARIOS</a>
        </div>

        <div id="inicio-sesion">
            <p>Iniciar sesion</p>
            <form action="">
                <input type="text" name="user" id="user" placeholder="Usuario">
                <input type="password" name="password" id="password" placeholder="Password">
            </form>
        </div>
    </nav>

    <a href="addComentario.html" class="btn-flotante">Añadir comentario</a>

<br>

    <?php
    $comentarios = simplexml_load_file("../data/comments.xml");
    foreach($comentarios->comentario as $comentario){
        echo('<div class="comentario">');
        echo('<div class="header-comentario">');
        echo('<p>' . $comentario->fecha . '</p>');
        echo('<h2>' . $comentario->nombre . '</h2>');
        echo('</div>');
        echo('<div class="texto-comentario">');
        echo('<p>' . $comentario->texto . '</p>');
        echo('</div>');
        echo('</div>');
    }
    ?>



</body>
</html>