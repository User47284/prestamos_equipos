<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Préstamos de Equipo</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<footer>
        <header> 
        <h1>Saca Tus Equipos En Prestamos. </h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="prestamostabla.php">Prestamos</a></li>
                <li><a href="">Registro</a></li>
                <li><a href="">Intereses</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <section id="contacto">
    
    <h2>Contacto</h2>
    <p>¿Tienes dudas sobre los préstamos de equipos? Completa el formulario y nos pondremos en contacto contigo.</p>
    
    <form action="contacto.php" method="post">
        <label for="nombre">Nombre completo:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="correo">Correo electrónico:</label><br>
        <input type="email" id="correo" name="correo" required><br><br>

        <label for="telefono">Teléfono:</label><br>
        <input type="tel" id="telefono" name="telefono"><br><br>

        <label for="mensaje">Tu mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="5" cols="40" placeholder="Escribe aquí tu consulta..." required></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>
</section>
</footer>