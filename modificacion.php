<?php
/* Uso de un switch para filtrar la función a trabajar según de donde provenga el formulariode ataque */
switch ($_POST['accion']) {
    case 'modificar':
        modificar();
        break;
    case 'borrar':
        borrar();
        break;
}
/* Función con formulario para modificar los datos deseados en la tabla de la BBDD. */
function modificar()
{
?>
    <form action="funciones-bd.php" method="post">
        <!-- Campo para poder filtrar en el switch de funciones-bd.php -->
        <input type="hidden" name="modificador" value="modificar_campo">
        <!-- Campo para conseguir el campo correcto a modificar. -->
        <input type="hidden" name="nombre_viejo" value="<?php echo $_POST['nombre']; ?>">

        <label for="nombre">Nombre del plato:</label>
        <input type="text" name="nombre" value="<?php echo $_POST['nombre']; ?>">
        <hr>
        <p>¿Es una especialidad de la casa?</p>
        <label for="especialidad_1">Sí</label>
        <input type="radio" id="especialidad_1" name="especialidad" value="1">
        <label for="especialidad_0">No</label>
        <input type="radio" id="especialidad_0" name="especialidad" value="0">
        <hr>
        <hr>
        <p>¿Es una clá1ca?</p>
        <label for="clasica">Sí</label>
        <input type="radio" id="clasica_1" name="clasica" value="1">
        <label for="clasica_0">No</label>
        <input type="radio" id="clasica_0" name="clasica" value="0">
        <hr>
        <hr>
        <p>¿Es picante?</p>
        <label for="picante_1">Sí</label>
        <input type="radio" id="picante_1" name="picante" value="1">
        <label for="picante_0">No</label>
        <input type="radio" id="picante_0" name="picante" value="0">
        <hr>
        <hr>
        <p>¿Es una gourmet?</p>
        <label for="gourmet_1">Sí</label>
        <input type="radio" id="gourmet_1" name="gourmet" value="1">
        <label for="gourmet_0">No</label>
        <input type="radio" id="gourmet_0" name="gourmet" value="0">
        <hr>
        <hr>
        <p>¿Es una familiar?</p>
        <label for="familiar_1">Sí</label>
        <input type="radio" id="familiar_1" name="familiar" value="1">
        <label for="familiar_0">No</label>
        <input type="radio" id="familiar_0" name="familiar" value="0">
        <hr>
        <hr>
        <p>¿Es un aperitvo?</p>
        <label for="aperitivo_1">Sí</label>
        <input type="radio" id="aperitivo_1" name="aperitivo" value="1">
        <label for="aperitivo_0">No</label>
        <input type="radio" id="aperitivo_0" name="aperitivo" value="0">
        <hr>
        <input type="submit" value="Modificar">
    </form>
<?php
}

/* Función para borrar la fila desea de la tabla de la BBDD. */
function borrar()
{
    include('conexion.php');
    // Consulta preparada
    $sql = "DELETE FROM menu WHERE nombre ='" . $_POST['nombre'] . "' ";
    $conexion->query($sql);
    //$consulta->execute();
    //$consulta->close();
    $conexion->close();
    header("Location:index.php");
}
