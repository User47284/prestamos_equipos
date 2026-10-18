<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<script type="text/javascript">
    function preguntar() 
        {
         var res=confirm('¿Deseas eliminar el registro?');
            if (res == true)
                {
                return true;
                }
            else{
                return false;
                }
         }
</script>

    <h1>Lista de Usuarios</h1>
    <span>
        <!--<a class="agregar" href="crear.php">Agregar Usuario</a>-->
    </span>
    <br> <br>
    <table class="custom-table" border="1">
        <tr>
            <th>ID</th>
            <th>Nombre del solicitante</th>
            <th>Tipo de usuario</th>
            <th>Equipo solicitado</th>
            <th>Numero de inventario</th>
            <th>Fecha de prestamo</th>
            <th>Fecha de devolución</th>
            <th>Estado del prestamo</th>
            
        </tr>
        <?php
        include 'conexion.php';
        
        $sql = "SELECT * FROM usuarios";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_prestamo"] . "</td>";
                echo "<td>" . $row["nombre_solicitante"] . "</td>";
                echo "<td>" . $row["tipo_usuario"] . "</td>";
                echo "<td>" . $row["equipo_solicitado"] . "</td>";
                echo "<td>" . $row["numero_inventario"] . "</td>";
                echo "<td>" . $row["fecha_prestamo"] . "</td>";
                echo "<td>" . $row["fecha_devolucion"] . "</td>";
                echo "<td>" . $row["estado_prestamo"] . "</td>";
                ?> 
<td><a href="editar.php?id=<?php echo  $row['id'] ?>">Editar</a> | <a  href="eliminar.php?id=<?php echo  $row['id'] ?>" onclick="return preguntar()"  >Eliminar</a></td>
               <?php
            }
        } else {
            echo "<tr><td colspan='4'>No se encontraron usuarios.</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
