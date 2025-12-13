<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Controlity - Portada</title>

<style>

    body {
        margin: 0;
        background: #05080f;
        font-family: Arial, sans-serif;
        color: white;
    }

    /* --- Menú futurista --- */
    header {
        position: fixed;
        top: 0;
        width: 100%;
        background: rgba(10, 15, 25, 0.8);
        backdrop-filter: blur(10px);
        padding: 18px 0;
        z-index: 1000;
        border-bottom: 1px solid rgba(0, 200, 255, 0.2);
    }

    nav {
        display: flex;
        justify-content: center;
        gap: 40px;
    }

    nav a {
        color: #4de2ff;
        font-size: 18px;
        text-decoration: none;
        position: relative;
        font-weight: bold;
        transition: 0.3s;
    }

    nav a::after {
        content: "";
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 0%;
        height: 3px;
        background: #00eaff;
        box-shadow: 0 0 10px #00eaff;
        transition: 0.3s;
    }

    nav a:hover {
        color: white;
        text-shadow: 0 0 8px #00eaff;
    }

    nav a:hover::after {
        width: 100%;
    }

    /* Portada */
    .container {
        text-align: center;
        margin-top: 140px;
        padding: 20px;
    }

    .logo {
        width: 240px;
        filter: drop-shadow(0 0 15px #00cfff);
    }

    .card {
        background: rgba(255, 255, 255, 0.07);
        width: 70%;
        margin: auto;
        margin-top: 40px;
        padding: 25px;
        border-radius: 15px;
        backdrop-filter: blur(6px);
        border: 1px solid rgba(0, 200, 255, 0.2);
        box-shadow: 0 0 20px rgba(0,255,255,0.1);
    }

</style>
</head>
<body>

<header>
    <nav>
        <a href="index.html">Portada</a>
        <a href="vision.html">Visión</a>
        <a href="mision.html">Misión</a>
        <a href="quienes.html">Quiénes Somos</a>
    </nav>
</header>

<div class="container">

    <!-- Logo integrado en base64 -->
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABAAAAAQACAIAAADwf7zUAADeIWNhQlgAAN4hanV...f2NGEz" class="logo">

    <h1>CONTROLITY</h1>
    <p>Sistema profesional de control de inventarios con tecnología RFID.</p>

    <div class="card">
        <h2>Contacto</h2>
        <p><strong>Teléfono:</strong> +52 000 000 0000</p>
        <p><strong>Correo:</strong> contacto@controlity.com</p>
    </div>

</div>

</body>
</html>
