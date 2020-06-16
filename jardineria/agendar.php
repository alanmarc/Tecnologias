<?php include_once 'includes/templates/header.php' ?>

    <main class="contenedor">
        <h1 class="centrar-texto fw-300">Agende un cita</h1>
            <div>
                <form class="forms" action="agnCita.php" method="post">
                    <fieldset>
                        <legend>Completa el formulario</legend>
                        <label for="nombre">Numero de cliente</label>
                        <input type="text" name="id-cliente" id="id-cliente" placeholder="su numero" required >

                        <label for="direccion">Dirección</label>
                        <input type="text" name="direccion" id="direccion" placeholder="Direccion del jardin">

                        <label for="fecha-cita">Fecha </label>
                        <input type="date" name="fecha-cita" id="fecha-cita" placeholder="Seleccione el dia">

                        <label for="hora">Hora</label>
                        <input type="time" name="hora-cita" id="hora-cita" placeholder="Hora de la cita">

                        <label for="asunto"> Asunto</label>
                        <input type="asunto" name="asunto" id="asunto" placeholder="asunto">

                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="descripcion"></textarea>

                    </fieldset>
                    <input name="submit" type="submit" value="submit" class="boton-aceptar bot" >
                </form>
            </div>
    </main>
    <section>
        
    </section>
    <?php include_once 'includes/templates/footer.php' ?>