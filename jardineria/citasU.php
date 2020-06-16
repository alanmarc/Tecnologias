<?php include_once 'includes/templates/header.php' ?>

    <main class="seccion contenedor">
        <h2 class="centrar-texto fw-300">Citas creadas</h2>
        <?php error_reporting (0);?>
        <?php 
            try{
                require_once('includes/funciones/bd_conexion.php');
                $sql = " SELECT id_cita, nombre, apellido, direccion, fecha_cita, hora_cita, asunto, descripcion ";
                $sql .=" FROM citas ";
                $sql .=" WHERE  ";
                $sql .=" ORDER BY fecha_cita ";
                $resultado = $conn->query($sql);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }

        ?>

        <div class="calendario">
            <?php
                $calendario = array();
                while( $eventos = $resultado->fetch_assoc() ) {

                    $fecha = $eventos['fecha_cita'];
                    $evento = array(
                        'nombre' => $eventos['nombre'] ." ". $eventos['apellido'],
                        'direccion' => $eventos['direccion'],
                        'fecha' => $eventos['fecha_cita'],
                        'hora' => $eventos['hora_cita'],
                        'asunto' => $eventos['asunto'],
                        'descripcion' => $eventos['descripcion']
                    );
                    $calendario[$fecha][] = $evento
                    ?>
            <?php } //while de fetch_assoc ?>

            <?php
                foreach($calendario as $dia => $lista_eventos) { ?>
                    <h3>
                        <i class="Calendar"></i>
                        <?php
                            setlocale(LC_TIME, 'es_ES.UTF-8');
                            setlocale(LC_TIME, 'spanish');
                            echo strftime( "%A, %d de %B del %Y", strtotime($dia) ); ?>
                    </h3>
                    <?php foreach($lista_eventos as $evento) {?>
                        <div class="diam">
                            <p class="name"><?php echo $evento['nombre']; ?> </p>
                            <p class="dir"><?php echo $evento['direccion']; ?> </p>
                            <p class="fecha"><?php echo $evento['fecha']; ?> </p>
                            <p class="hora"><?php echo $evento['hora']; ?> </p>
                            <p class="asunto"><?php echo $evento['asunto']; ?> </p>
                            <p class="descripcion"><?php echo $evento['descripcion']; ?> </p>

                        </div>
                    <?php  }  ?>
                <?php } ?>

            
        </div>
        <?php
            $conn->close();
        ?>

    </main>

    <?php include_once 'includes/templates/footer.php' ?>