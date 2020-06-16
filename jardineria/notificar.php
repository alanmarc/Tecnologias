<?php include_once 'includes/templates/header.php' ?>

    <main class="contenedor">
        <h1 class="centrar-texto fw-300">Notificar Usuario</h1>
        <div>
            <div>
                <form class="forms" action="not.php" method="post">
                    <fieldset>
                        <legend>Ingresa</legend>
                        <label for="nombre">Id del cliente</label>
                        <input type="text" id="idcl" name="idcl" placeholder="Id del cliente" required>

                        <label for="mensaje">Notificación</label>
                        <input type="text" id="mensaje" name="mensaje" placeholder="Mensaje" required>

                    </fieldset>
                    <input type="submit" value="Notificar" class="boton-notificar bot">
                </form>
            </div>
        </div>
    </main>
    <section>
        
    </section>
    <?php include_once 'includes/templates/footer.php' ?>