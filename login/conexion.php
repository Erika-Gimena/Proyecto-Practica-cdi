<?php
    
    class conexion{
        private $user = "root";
        private $pass ="";

        function conectar(){

            try{

                $pdo = new PDO('mysql:host=localhost;dbname=mundo');
                echo "conexion correcta :)";

            
            }catch(PDOException $error){
                echo "no me pude conectar" . $error->getmessage();
            }
        }

        $nuevaconexion = new conexion();
        $nuevaconexion->conectar();