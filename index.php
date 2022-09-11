<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mi pagina</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
            $mysqli = new mysqli('localhost','root','','dbempresa');
            $query = "SELECT * FROM usuarios";
            if($mysqli->connect_error){
                die("Error: NO se puede conectar al servidor: ".$conn->connect_error);
            }else{
                echo 'Conectado a la base de datos <br>';
            }
        ?>
        <h1>Proyecto PHP</h1>
        <div class="sectionTable">
            <table>
            <table>
            <tr>
                <th>IdUser</th>
                <th>Username</th>
                <th>Phono</th>
                <th>Profile</th>
            </tr>
            
            <?php     
            $result = $mysqli->query("SELECT * FROM tbusuarios");
            while ($row = $result->fetch_assoc()){
                $id = $row["idusuario"];
                $usuario = $row["usuario"];
                $fono = $row["fono"];
                $perfil = $row["perfil"];
                echo "
                <tr>
                    <td>$id</td>
                    <td>$usuario</td>
                    <td>$fono</td>
                    <td>$perfil</td>
                </tr>
                ";
            }
            ?>
            </table>
            <p>
            <?php
                echo "Numero de registros: $result->num_rows <br>";
                $result->close();
                $mysqli->close();
            ?>
            </p>
        </div>
    </body>
</html>
