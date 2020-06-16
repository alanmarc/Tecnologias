<?php
    $servername = "localhost";
    $usuario = "root";
    $contrasena = "";
    $dbname = "jardineria";
//if(isset($_POST['nombre'])){
        $nombre = $_POST ['nombre'];
        $apellido = $_POST ['apellido'];
        $fecha = $_POST ['fecha-nacimiento'];
        $numero = $_POST ['numero'];
        $email = $_POST ['email'];
        $pass = $_POST ['passw'];
    
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usuario, $contrasena);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = " INSERT INTO usuarios (nombre, apellido, fecha_nacimiento, numero, email, password) VALUES ( '$nombre', '$apellido', '$fecha', '$numero', '$email', '$pass' ) ";
            // use exec() because no results are returned
            //echo $sql;
            $conn->exec($sql);
            echo "Cuenta creada correctamente";
            echo "Redireccionando";
            header( "refresh:3;url=sesion.php" );  
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }

        $conn = null;
     

?>