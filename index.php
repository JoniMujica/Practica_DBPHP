<?php
    //echo "Hola mundo";

    $conexionMySQL = mysqli_connect("127.0.0.1:3306","root","","telefonia"); //host:puerto, user,password,DB

    $resultado = mysqli_query($conexionMySQL,'select * from usuario;');
    /*
    print_r(mysqli_fetch_assoc($resultado));
    echo "<br>";
    print_r(mysqli_fetch_assoc($resultado));*/   

    //vimos que con cada llamado, me trae el siguiente registro, para traer todos los registros uso un bucle
    while($unaFila = mysqli_fetch_assoc($resultado)) {
        print_r($unaFila);
        echo "<br>";
    }
    mysqli_close($conexionMySQL); //importante cerrar la coneccion DB con esto
?>