<?php
try{
    $conexion=new pdo('mysql:host=localhost;dbname=cdi;charset=utf8','root','');
}catch(PDOException $e){
    echo "Error de conexion!";
    exit;
}
return $conexion;

?>