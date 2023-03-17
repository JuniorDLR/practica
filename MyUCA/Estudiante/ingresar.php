<?php


if($_SERVER["REQUEST_METHOD"]=="POST"){

    require_once 'conexion.php';

    $Nombres =$_POST["Nombres"];
    $Apellidos =$_POST["Apellido"];
    $Carrera =$_POST["Carrera"];
    $Año =$_POST["Año"];

    $query ="INSERT INTO Estudiante(Nombres,Apellidos,Carrera,Año)values($Nombres,$Apellidos,$Carrera,$Año)";
    $resultado =$mysql->query($query);

    if($resultado == true){

        echo 'Datos ingresados';
    }
    else{
        echo 'Error al ingresar los datos';
    }
}
else{
    echo 'Error no encontrado';
}






?>