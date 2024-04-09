 
<?php

try{

    $conexion = new PDO("sqlite:libreria.db");

    echo "la conexion fue un exito";
}catch(PDOException $e){

    echo "la conexion no funciona ";
}



