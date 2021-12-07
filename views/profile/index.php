<?php
    
    session_start();
    $_SESSION['username'] = 'hidalgo';
    if (isset($_SESSION['username'])){
        $perfil = simplexml_load_file('../../data/users/' . $_SESSION['username'] . '.xml');
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