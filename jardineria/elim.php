<?php
        $servername = "localhost";
        $usuario = "root";
        $contrasena = "";
        $dbname = "jardineria";

        $nombre = $_POST ['nombre'];
        $apellido = $_POST ['apellido'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usuario, $contrasena);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // sql to delete a record
        $sql = " DELETE FROM usuarios WHERE nombre='$nombre' AND apellido='$apellido' ";
        //echo $sql;
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Usuario eliminado correctamente";
        header( "refresh:3;url=menuAdm.html" );  
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }

    $conn = null;
    

?>