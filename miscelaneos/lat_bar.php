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
<a href="dashboard.php"><img src="img/transporte.jpg" alt="logo" id="logo"></a>
        <ul>
            <a href="dashboard.php"><li>Ver Empleados</li></a>
            <a href="adduser.php"><li>Agregar Usuarios</li></a>
            <a href="addemp.php"><li>Agregar Empleados</li></a>
            <a href="addexpe.php"><li>Agregar Expedientes</li></a>
            <a href="conf.php"><li>Configuracion</li></a>
            <a href="logout.php"><li>Cerrar Sesion</li></a>
        </ul>
</div>
