<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanguardia Segura</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #020000;
            background-image: url('imagenes/fondo3.jpg');
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
        }
        header, footer {
            background-color: #ec7e00;
            color: #f8f8f8;
            padding: 10px 20px;
            text-align: center;
        }
        nav {
            text-align: center;
            background-color: #000000;
            padding: 10px;
        }
        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            cursor: pointer;
            font-size: 16px;
        }
        section {
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .action-button {
            background-color: #ec7e00;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px;
            text-align: center;
            display: inline-block;
        }
        .action-button:hover {
            background-color: #d68a00;
        }
    </style>
</head>
<body>
    <header>
        <h1>Seguridad Cibernética</h1>
    </header>

    <nav>
        <a onclick="showSection('quienes-somos')">Quienes Somos</a>
        <a onclick="showSection('soluciones-servicios')">Servicios</a>
        <a onclick="showSection('contacto')">Contacto</a>
    </nav>

    <section id="contacto">
        <h2>Contacto</h2>
        <form id="contact-form" action="guardar_comentario.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
            </div>

            <button type="submit" class="action-button">Enviar</button>
        </form>

        <h3>Comentarios de los Clientes</h3>
        <div id="comentarios">
            <?php include 'mostrar_comentarios.php'; ?>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Seguridad Cibernética. Todos los derechos reservados.</p>
    </footer>
</body>
</html>