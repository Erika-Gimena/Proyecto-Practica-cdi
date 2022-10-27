<?php
 $pdo = new PDO('mysql:host=localhost;dbname=cdi;charset=utf8','root','');
 echo 'conexion lograda';    

 //recuperar variables del formulario - tutor
 $NombreT=$_POST['NombreT'];
 $ApellidoT=$_POST['ApellidoT'];
 $dniT=$_POST['dniT'];
 $telefonoT=$_POST['telefonoT'];
 $correo=$_POST['correo'];

 //insertar datos del tutor a la base de datos
 $sql=$pdo->prepare("INSERT INTO tutor(dniT, ApellidoT, NombreT,telefonoT,correo) values(:dniT, :ApellidoT, :NombreT, :telefonoT, :correo )");

 $sql->bindParam(':dniT', $dniT);
 $sql->bindParam(':ApellidoT', $ApellidoT);
 $sql->bindParam(':NombreT', $NombreT);
 $sql->bindParam(':telefonoT', $telefonoT);
 $sql->bindParam(':correo', $correo);

  //ejecutar sentencia
  
if ($sql->execute()){
    echo "datos tutor guardados";
}else{
    echo "error";
}




?>
