<?php

    function getHash($userPath){
        $file = simplexml_load_file($userPath);
        return $file->contrasena;
    }
    
    session_start();
    //$_SESSION['username'] = 'hidalgo';
    if (isset($_SESSION['idUsuario'])){
        include_once "../clases/conexion.php";
        $userPath = '../../data/users/' . $_SESSION['username'] . '.xml';
        $user = simplexml_load_file($userPath);
        $query = 'CALL `getLibrosComprados`('.$_SESSION['idUsuario'].');';
        $conexion = new conexion();
        $libros = $conexion->query($query);
        $libros = $libros->fetchAll();
        include_once('../includes/navbar.html.php');
        include_once('profile.html.php');
        include_once('../includes/footer.html.php');
    }
    else{
        $message = "Inicia sesion para ver tu perfil.";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../home';</script>";
    }

    
?>