<?php

$host = "localhost";
$user = "id21850571_root";
$password = "956491467S#her";
$database = "id21850571_bdcontador";


$conexion = mysqli_connect($host, $user, $password, $database);
if (!$conexion) {
    echo "No se realizo la conexion a la basa de datos, el error fue:" .
        mysqli_connect_error();
}
