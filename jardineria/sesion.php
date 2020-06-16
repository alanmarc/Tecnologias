<?php include_once 'includes/templates/header.php' ?>
<!----------loggg       ----------->


<!----------loggg       ----------->

    <main class="contenedor">
    <h1 class="centrar-texto fw-300">Inicie sesion</h1>
        <div>
            <div>
                <form class="forms" action="login.php" method="post" >
                    <fieldset>
                        <legend>Ingresa</legend>
                        <label for="email">Correo</label>
                        <input type="email" name="email" placeholder="Tu email" required >

                        <label for="password">Contraseña</label>
                        <input type="password" name="passw" placeholder="Contraseña" required>
                    </fieldset>
                    <input type="submit" value="Aceptar" class="boton-aceptar bot">
                </form>
            </div>
        </div>

    </main>
    <section>
        <div class="centrar-texto fw-300 boton-centrado ">
            <h3 >Registrate</h3>
            <a href="registrar.php" class="boton-aceptar bot">Regstrar</a>
        </div>
        
    </section>
    <?php include_once 'includes/templates/footer.php' ?>