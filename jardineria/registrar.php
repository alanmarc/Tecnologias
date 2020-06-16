<?php include_once 'includes/templates/header.php' ?>
<!--   
-->

<!--   
-->

    <main class="contenedor">
        <h1 class="centrar-texto fw-300">Llena el formulario</h1>
        <div>
            <div>
                <form class="forms" method="post" action="regU.php">
                    <fieldset>
                        <legend>Ingresa</legend>
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>

                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" placeholder="Apellido"  required>

                        <label for="fecha-nacimiento">Fecha nacimiento</label>
                        <input type="date" id="fecha-nacimieto" name="fecha-nacimiento" required>

                        <label for="numero">Número</label>
                        <input type="number" id="numero" name="numero" placeholder="Número telefonico" required>

                        <label for="email">Correo</label>
                        <input type="email" id="email" name="email" placeholder="Tu email" required >

                        <label for="password">Contraseña</label>
                        <input type="password"  id="passw" name="passw" placeholder="Contraseña" required>
                    </fieldset>
                    <input type="submit" value="Crear" class="boton-aceptar bot">
                </form>
            </div>
        </div>
    </main>
    <section>
        
    </section>
    <?php include_once 'includes/templates/footer.php' ?>