<?php
    $servername = "localhost";
    $usuario = "root";
    $contrasena = "";
    $dbname = "jardineria";
//if(isset($_POST['nombre'])){
    $idcl = $_POST ['idcl'];
    $mensaje = $_POST ['mensaje'];
    $fechan = date('Y-m-d');
        
    
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usuario, $contrasena);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = " INSERT INTO mensaje (usuario_id, mensaje, fecha_mensaje) VALUES ('$idcl', '$mensaje', '$fechan' ) ";
            // use exec() because no results are returned
            //echo $sql;
            $conn->exec($sql);
            echo "Notificacion creada correctamente\n";
            echo "Redireccionando";
            //header( "refresh:3;url=menuAdm.html" );  
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }

        $conn = null;
     

?>