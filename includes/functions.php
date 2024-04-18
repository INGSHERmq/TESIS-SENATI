<?php
if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
            //casos de registros

        case 'insert_prof':
            insert_prof();
            break;

        case 'insert_alumno':
            insert_alumno();
            break;


        case 'editar_alum':
            editar_alum();
            break;

        case 'editar_user':
            editar_user();
            break;
    }
}



function insert_alumno()
{
    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta = "INSERT INTO empresas (nombre,ruc,correo,telefono,usuario) 
    VALUES ('$nombre','$ruc','$correo','$telefono', '$usuario')";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        $response = array(
            'status' => 'success',
            'message' => 'Los datos se guardaron correctamente'
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Ocurrió un error inesperado'
        );
    }

    echo json_encode($response);
}


function editar_profe()
{
    require_once("db.php");

    extract($_POST);


    $consulta = "UPDATE profesores SET cedula = '$cedula', nombres = '$nombres', apellidos = '$apellidos', correo = '$correo',
    curp = '$curp', edad='$edad', fecha_na = '$fecha_na',id_especialidad = '$id_especialidad' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo json_encode("correcto");
    } else {
        echo json_encode("error");
    }
}

function editar_alum()
{
    require_once("db.php");

    extract($_POST);


    $consulta = "UPDATE empresas SET nombre = '$nombre', ruc = '$ruc', correo = '$correo', telefono = '$telefono',
    usuario = '$usuario' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo json_encode("correcto");
    } else {
        echo json_encode("error");
    }
}



function editar_user()
{
    require_once("db.php");
    extract($_POST);
    $consulta = "UPDATE users SET usuario = '$usuario', correo = '$correo', id_rol='$id_rol' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo json_encode("correcto");
    } else {
        echo json_encode("error");
    }
}
