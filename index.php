<?php
    include 'db/db_connect.php';
    $query = mysqli_query($conn, "SELECT codigo_no,cedula,nombres,apellidos,fecha_n,sexo,fecha_i,cargo,dir,id FROM empleados");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'miscelarios/lat_bar.php';?>
        <div>
            hola
        </div>
    <?php include 'miscelarios/footer.php';?>
</body>
</html>
