<?php
var_dump($_POST);
    session_start();
            $servername = "localhost";
            $username = "admin";
            $password = "admin";
            $dbname = "c9";
        
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
        
            $sql = "SELECT * FROM usuario WHERE usuario = '".$_POST['user']."' and password = '".$_POST['password']."'";- //guion 
            //echo $sql;
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    //echo "id: " . $row["usuario"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                    //echo $row['idusuario']."<br>";
                    //echo $row['usuario']."<br>";
                    //echo $row['password']."<br>";
                    $_SESSION['idusuario']=$row['idusuario'];
                    $_SESSION['usuario']=$row['usuario'];
                    $_SESSION['password']=$row['password'];
                    echo $_SESSION['idusuario']."<br>";
                    echo $_SESSION['usuario']."<br>";
                    echo $_SESSION['password']."<br>";
                }
                echo "Successfull";
            } else {
                echo "Error en login";
            }
            $conn->close();
            

?>