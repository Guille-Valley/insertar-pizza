<!-- Menú de navegación -->
<nav>
    <ul>
        <li><a href="especiales.php">Especialidades de la casa</a></li>
        <li><a href="clasicas.php">Las clásicas</a></li>
        <li><a href="picantes.php">Las más picantes</a></li>
        <li><a href="gourmets.php">Para los más gourmets</a></li>
        <li><a href="familiares.php">Familiares</a></li>
        <li><a href="aperitivos.php">Aperitivos</a></li>
    </ul>
</nav>

<h2>Insertar nuevo plato:</h2>
<!-- Formulario para insertar nuevos campos a la tabla de la BBDD, estos datos se envian a funciones-bd.php -->
<form action="funciones-bd.php" method="post">
    <input type="hidden" name="modificador" value="insertar_campo">
    <label for="nombre">Nombre del plato:</label>
    <input type="text" name="nombre">
    <hr>
    <p>¿Es una especialidad de la casa?</p>
    <label for="especialidad_1">Sí</label>
    <input type="radio" id="especialidad_1" name="especialidad" value="1">
    <label for="especialidad_0">No</label>
    <input type="radio" id="especialidad_0" name="especialidad" value="0">
    <hr>
    <p>¿Es una clásica?</p>
    <label for="clasica">Sí</label>
    <input type="radio" id="clasica_1" name="clasica" value="1">
    <label for="clasica_0">No</label>
    <input type="radio" id="clasica_0" name="clasica" value="0">
    <hr>
    <p>¿Es picante?</p>
    <label for="picante_1">Sí</label>
    <input type="radio" id="picante_1" name="picante" value="1">
    <label for="picante_0">No</label>
    <input type="radio" id="picante_0" name="picante" value="0">
    <hr>
    <p>¿Es una gourmet?</p>
    <label for="gourmet_1">Sí</label>
    <input type="radio" id="gourmet_1" name="gourmet" value="1">
    <label for="gourmet_0">No</label>
    <input type="radio" id="gourmet_0" name="gourmet" value="0">
    <hr>
    <p>¿Es una familiar?</p>
    <label for="familiar_1">Sí</label>
    <input type="radio" id="familiar_1" name="familiar" value="1">
    <label for="familiar_0">No</label>
    <input type="radio" id="familiar_0" name="familiar" value="0">
    <hr>
    <p>¿Es un aperitvo?</p>
    <label for="aperitivo_1">Sí</label>
    <input type="radio" id="aperitivo_1" name="aperitivo" value="1">
    <label for="aperitivo_0">No</label>
    <input type="radio" id="aperitivo_0" name="aperitivo" value="0">
    <hr>
    <input type="submit" value="Insertar">
</form>