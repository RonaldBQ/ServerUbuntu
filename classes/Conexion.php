<?php
        $mysqli = new mysqli('localhost','root','','dbempresa');
        $query = "SELECT * FROM usuarios";
        if($mysqli->connect_error){
            die("Error: NO se puede conectar al servidor: ".$conn->connect_error);
        }else{
            echo 'Conectado a la base de datos <br>';
        }
?>