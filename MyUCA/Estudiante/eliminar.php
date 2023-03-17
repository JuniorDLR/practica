<?php


if($_SERVER["REQUEST_METHOD"]=="DELETE"){

    require_once 'conexion.php';
    $query ="DELETE  FROM Estudiante WHERE Estudiante.id=2";

    $resultado = $mysql->query($query);

    if($resultado == true){

        echo 'Datos eliminados';

    }
    else{
        echo 'Error de eliminacion';
    }
}
else{
    echo 'Error no encontrado';
}



?>