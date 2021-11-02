<?php
    echo "Hola mundo";

    $conexionMySQL = mysqli_connect("127.0.0.1:3306","root","","telefonia"); //host:puerto, user,password,DB
    mysqli_close($conexionMySQL); //importante cerrar la coneccion DB con esto
?>