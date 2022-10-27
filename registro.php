<?php

    $pdo = new PDO('mysql:host=localhost;dbname=cdi;charset=utf8','root','');
    echo 'conexion lograda';    
    include ("registrotutor.php");
    //recuperar variables del formulario  
    $DNI=$_POST['DNI'];
    $nomAlumno=$_POST['nomAlumno'];
    $apellAlumno=$_POST['apellAlumno'];
    $FchNac=$_POST['FchNac'];
    $edad=$_POST['edad'];
    $domicilio=$_POST['DNI'];

  
    //insertar en la bd con la sentencia sql
    $sql=$pdo->prepare("INSERT INTO alumnos(DNI, nomAlumno, apellAlumno,FchNac,edad,domicilio) values(:DNI, :nomAlumno, :apellAlumno, :FchNac, :edad, :domicilio)");

    $sql->bindParam(':DNI', $DNI);
    $sql->bindParam(':nomAlumno', $nomAlumno);
    $sql->bindParam(':apellAlumno', $apellAlumno);
    $sql->bindParam(':FchNac', $FchNac);
    $sql->bindParam(':edad', $edad);
    $sql->bindParam(':domicilio', $domicilio); 

   
    //ejecutar sentencia
  
if ($sql->execute()){
    echo "datos alumnos guardados";
}else{
    echo "error";
}


?>