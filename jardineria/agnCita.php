<?php
    $servername = "localhost";
    $usuario = "root";
    $contrasena = "";
    $dbname = "jardineria";

    $id_cl = $_POST ['id-cliente'];
    $direccion = $_POST ['direccion'];
    $fecha_cita = $_POST ['fecha-cita'];
    $hora_cita = $_POST ['hora-cita'];
    $asunto = $_POST ['asunto'];
    $descripcion = $_POST ['descripcion'];
    
    
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usuario, $contrasena);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = " INSERT INTO citas (usuario_id, direccion, fecha_cita, hora_cita, asunto, descripcion) VALUES ( '$id_cl', '$direccion', '$fecha_cita', '$hora_cita', '$asunto', '$descripcion' ) ";
            // use exec() because no results are returned
            //echo $sql;
            $conn->exec($sql);
            echo "Cita creada correctamente";
            header( "refresh:3;url=menuG.html" );  
            
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }

        $conn = null;
?>        