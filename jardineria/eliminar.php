<?php include_once 'includes/templates/header.php' ?>

    <main class="contenedor">
        <h1 class="centrar-texto fw-300">Eliminar Usuario</h1>
        <div>
            <div>
                <form class="forms" action="elim.php" method="post">
                    <fieldset>
                        <legend>Ingresa</legend>
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>

                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>

                    </fieldset>
                    <input type="submit" value="Eliminar" class="boton-eliminar bot">
                </form>
            </div>
        </div>
    </main>
    <section>
        
    </section>
    <?php include_once 'includes/templates/footer.php' ?>