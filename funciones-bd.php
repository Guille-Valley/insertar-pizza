<?php
/* Uso de un switch para filtrar la función a trabajar según de donde provenga el formulariode ataque */
switch ($_POST['modificador']) {
    case 'modificar_campo':
        modificar_campo();
        break;
    case 'borrar':
        borrar();
        break;
    case 'insertar_campo':
        insertar_campo();
        break;
}
/* Función para actualizar los datos modificados en la tabla de la BBDD */
function modificar_campo()
{
    include('conexion.php');

    $nombre = $_POST['nombre'];
    $especialidad = $_POST['especialidad'];
    $clasica = $_POST['clasica'];
    $picante = $_POST['picante'];
    $gourmet = $_POST['gourmet'];
    $familiar = $_POST['familiar'];
    $aperitivo = $_POST['aperitivo'];

    // Almacena la consulta SQL en una variable.
    $sql = "UPDATE menu SET nombre = '$nombre', especialidad = '$especialidad', clasica = '$clasica', picante = '$picante', gourmet = '$gourmet', familiar = '$familiar', aperitivo = '$aperitivo' WHERE nombre = '" . $_POST['nombre_viejo'] . "'";
    $conexion->query($sql);
    $conexion->close();
    header("Location:index.php");
}
/* Función para insertar nuevos datos a la tabla de la BBDD. */
function insertar_campo()
{
    include('conexion.php');

    $nombre = $_POST['nombre'];
    $especialidad = $_POST['especialidad'];
    $clasica = $_POST['clasica'];
    $picante = $_POST['picante'];
    $gourmet = $_POST['gourmet'];
    $familiar = $_POST['familiar'];
    $aperitivo = $_POST['aperitivo'];

    // Almacena la consulta SQL en una variable.
    $sql = "INSERT INTO menu (nombre, especialidad, clasica, picante, gourmet, familiar, aperitivo) VALUES ('$nombre', '$especialidad', '$clasica', '$picante', '$gourmet', '$familiar', '$aperitivo') ";
    $conexion->query($sql);
    $conexion->close();
    header("Location:index.php");
}
