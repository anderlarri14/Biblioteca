<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../public/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/profile.css">
    <title>Perfil</title>
</head>
<body>
    <?php
    session_start();
    $_SESSION['username'] = 'hidalgo';
    if (isset($_SESSION['username'])){
        $perfil = simplexml_load_file('../data/users/' . $_SESSION['username'] . '.xml');
        echo('<h2> Mi perfil </h2>');
        echo('<div class="profile">');
        echo('<img id="profile-pic" src="../public/profile.webp" alt="Foto de perfil">');
        echo('<div class="profile-info">');
        echo('<p id="user">Usuario: ' . $perfil->info->usuario . '</p>');
        echo('<p id="email">Email: ' . $perfil->info->email . '</p>');
        echo('</div>');
        echo('</div>');
        echo('<h2>Lista de Libros</h2>');
        if(isset($perfil->libros->libro)){
            foreach($perfil->libros->libro as $libro){
            echo('<div class="libro">');
            echo('<img src="../public/portadas/' . $libro->foto . '" alt="Portada del libro" class="book-cover">' );
            echo('<h3 class="title">' . $libro->titulo .'</h3>');
            echo('<p class="author">' . $libro->autor . '</p>');
            echo('<p class="description">' . $libro->descripcion . '</p>');
            echo('<p class="price">' . $libro->precio . ' $</p>');
            echo('</div>');
            }
        }
        else{
            echo('<p id ="empty">Ooops, todavía no tienes ningun libro.<br>');
            echo('Echa un vistazo a nuestro <a href="">Catalogo</a></p>');
        }
        
    }
    else{
        echo("Inicia sesión para ver tu perfil.");
    }
    ?>
</body>
</html>