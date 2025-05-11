<?php
include 'db/db_connect.php';
session_start();
$user_session = $_SESSION['id'];
    if (!isset($user_user_sessionid)){
        header("location:index.php");
    };
session_unset();
session_destroy();

echo "<script>
            alert('sesion cerrada correctamente');
            window.location = 'index.php';
            </script>";


?>