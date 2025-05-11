<?php
    session_start();
    $user_session = $_SESSION['id'];
    if (!isset($user_session)){
        header("location:index.php");
    };
?>
<link rel="stylesheet" href="style/style.css"> 
<img src="./img/background.jpeg" id="fondo">
<div class="lat_bar">
<a href="dashboard.php"><img src="img/logo.jpg" alt="logo" id="logo"></a>
        <ul>
            <a href="#"><li>Inicio</li></a>
            <a href="#"><li>Compra</li></a>
            <a href="#"><li>Productos</li></a>
            <a href="#"><li>Usuarios</li></a>
            <a href="#"><li>Configuracion</li></a>
            <a href="#"><li>Cerrar Sesion</li></a>
        </ul>
</div>
