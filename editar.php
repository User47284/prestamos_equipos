<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Préstamo</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <h1>Editar Préstamo</h1>
    <?php
    include 'conexion.php';

    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $sql = "SELECT * FROM prestamos_equipos WHERE id_prestamo=$id";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $nombre_solicitante = $row["nombre_solicitante"];
            $tipo_usuario = $row["tipo_usuario"];
            $equipo_solicitado = $row["equipo_solicitado"];
            $numero_inventario = $row["numero_inventario"];
            $fecha_prestamo = $row["fecha_prestamo"];
            $fecha_devolucion = $row["fecha_devolucion"];
            $estado_prestamo = $row["estado_prestamo"];
        } else {
            echo "Préstamo no encontrado.";
            exit;
        }
    } else {
        echo "ID de préstamo no especificado.";
        exit;
    }
    ?>

    <form action="actualizar.php" method="post">
        <input type="hidden" name="id_prestamo" value="<?php echo $id; ?>">

        <label for="nombre_solicitante">Nombre:</label>
        <input type="text" id="nombre_solicitante" name="nombre_solicitante" value="<?php echo $nombre_solicitante; ?>" required><br><br>

        <label for="tipo_usuario">Tipo de Usuario:</label>
        <input type="text" id="tipo_usuario" name="tipo_usuario" value="<?php echo $tipo_usuario; ?>" required><br><br>

        <label for="equipo_solicitado">Equipo:</label>
        <input type="text" id="equipo_solicitado" name="equipo_solicitado" value="<?php echo $equipo_solicitado; ?>" required><br><br>

        <label for="numero_inventario">Número de Inventario:</label>
        <input type="text" id="numero_inventario" name="numero_inventario" value="<?php echo $numero_inventario; ?>" required><br><br>

        <label for="fecha_prestamo">Fecha de Préstamo:</label>
        <input type="date" id="fecha_prestamo" name="fecha_prestamo" value="<?php echo $fecha_prestamo; ?>" required><br><br>

        <label for="fecha_devolucion">Fecha de Devolución:</label>
        <input type="date" id="fecha_devolucion" name="fecha_devolucion" value="<?php echo $fecha_devolucion; ?>"><br><br>

        <label for="estado_prestamo">Estado:</label>
        <input type="text" id="estado_prestamo" name="estado_prestamo" value="<?php echo $estado_prestamo; ?>" required><br><br>

        <input type="submit" value="Actualizar">
    </form>

    <br><br>
    <a class="agregar" href="prestamostabla.php">Volver a la lista</a>
</body>
</html>
