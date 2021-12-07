<?php
    echo '<nav> 
            <a href="index.html" class="logo-wrap">
                <img src="../../public/header-logo.webp" alt="Logo Libreria" id="header-logo">
                <h1>
                    Libreria Cervantes
                </h1>
            </a>

            <div id="links">
                <a href="../home" class="link">INICIO</a>
                <a href="" class="link">CATALOGO</a>
                <a href="" class="link">COMPRAR</a>
                <a href="" class="link">COMENTARIOS</a>
                <a href="../profile" class="link">PERFIL</a>
            </div>

            <div id="inicio-sesion">
                <h2>Iniciar sesion</h2>
                <form action="">
                    <input type="text" name="user" id="user" placeholder="Usuario">
                    <input type="password" name="password" id="password" placeholder="Contraseña">
                </form>
                <p>Aun no tienes cuenta? <a href="" style="text-decoration: underline;">Registrate</a></p>
            </div>
    </nav>';
?>