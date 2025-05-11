<?php
    session_start();
    $user_session = $_SESSION['id'];
    if (!isset($user_session)){
        header("location:index.php");
    };
?>
<link rel="stylesheet" href="style/style.css"> 
<img src="./img/background.jpeg" id="fondo">
