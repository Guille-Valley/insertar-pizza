<table>
    <tr>
        <th>Especialidades de la casa</th>
    </tr>
    <?php
    include('conexion.php');
    // Consulta preparada
    $sql = "SELECT nombre FROM menu WHERE especialidad = 1";
    $consulta = $conexion->prepare($sql);
    $consulta->execute();
    //  Vincula variables a una sentencia preparada para el almacenamiento de resultados.
    $consulta->bind_result($nombre);

    /** Imprimimos el campo rescatado de la tabla de la BBDD
     *  Y tras cada campo, un botón de modifciar y otro de borrar.
     */
    while ($consulta->fetch()) {
        echo "<tr><td>$nombre</td></tr>";
    ?>
        <tr>
            <td>
                <!-- Modificar dato escogido -->
                <form action="modificacion.php" method="post">
                    <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
                    <input type="hidden" name="accion" value="modificar">
                    <input type="submit" value="Modificar">
                </form>
            </td>
            <td>
                <!-- Borrar dato escogido -->
                <form action="modificacion.php" method="post">
                    <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
                    <input type="hidden" name="accion" value="borrar">
                    <input type="submit" value="Borrar">
                </form>
            </td>
        </tr>
    <?php
    }
    $consulta->close();
    $conexion->close();
    ?>
</table>