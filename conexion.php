<?php
$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');
if ($conexion->connect_errno) {
    die ('lo siento hubo un problema en la conexion');
    }else{
        $sql = "INSERT INTO usuarios(ID,nombre,edad) VALUES(null, 'cristian', 10), (null, 'robert', 15)";
        $resultado = $conexion->query($sql);
        if($conexion->affected_rows >=1){
            echo 'Filas Agregadas: ' .$conexion->affected_rows;
        }
    }
?> 