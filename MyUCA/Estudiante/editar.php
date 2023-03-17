<?php

require_once 'conexion.php';

$data = json_decode(file_get_contents("php://input"),true);

$query ="UPDATE Estudiante SET Nombres = '".$data["Nombres"]"', Apellidos= '".$data["Apellidos"]"', Carrera= '".$data["Carrera"]"', Año='".$data["Año"]"' Where id=1";
$resultado =$mysql->query($query);


if ($resultado==true) {
    echo "Datos actualizados correctamente.";
} else {
    echo "Error al actualizar los datos: ";
}



?>