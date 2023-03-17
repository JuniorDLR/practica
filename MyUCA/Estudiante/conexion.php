<?php



$mysql = new mysqli("localhost","root","","DBUCA");

if($mysql->connect_error){

    echo 'Error al conectarse a la base de datos';
}
else{

    echo 'Conexion exitosa';
}




?>