<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estiloIndex.css">
    <link rel="stylesheet" href="CSS/sesion.css">
    <title>Inicio</title>
</head>

<header>
    <div class="Logo">
        <img src="Imagenes/Index/royal.png" alt="error al cargar el logo" width="100%">
    </div>
    <div class="Textos">
        <div class="Nombre">
            <img src="Imagenes/Index/indextop.png" alt="error al cargar imagen" width="100%">
        </div>
    </div>
    <div class="Iniciar">
        <a href="Login.php" class="OpcionBarra"><img src="Imagenes/Index/IniciarSesionf.png" alt="error al cargar inicio de sesion" width="50"></a>
        <label>Iniciar sesión</label>
    </div>

    <div class="Registrar">
        <a href="registrarse.php" class="OpcionBarra"><img src="Imagenes/Index/Registratef.png" alt="error al cargar inicio de sesion" width="50"></a>
        <label>Registrate</label>
    </div>

    <div class="Informacion">
        <img src="Imagenes/Index/Infof.png" alt="error al cargar inicio de sesion" width="50">
        <label>Información</label>
    </div>

</header>

<body>
    <div class="BarraMenu">
        <a href="index.php" class="OpcionBarra">Inicio</a>
        <a href="Servicios.php" class="OpcionBarra">Servicios</a>
        <a href="Productos.php" class="OpcionBarra">Productos</a>
        <a href="Conocenos.php" class="OpcionBarra">Conocenos</a>
        <a href="contactanos.php" class="OpcionBarra">Contactanos</a>
    </div><br>

<h2 class="indextitle">Inicio de Sesión</h2>
    <div class="section1">
            <label>
                <p class="camponame">Nombre:</p>
                <input type="text" id="nombre" name="nombre" class="campo" placeholder="Ingrese aqui su nombre" required>
            </label>
            <label>
                <p class="camponame">Contraseña:</p>
                <input type="text" id="contra" name="contra" class="campo" placeholder="Ingrese aqui su contraseña" required>
            </label>
            <div>
                <button type="submit" class="boton1">Iniciar Sesión</button>
            </div>
            <div>              
                <button type="submit" class="boton1">Iniciar con Google</button>
            </div>
    </div>
</body>

<footer>
    <div class="BarraMenu"><p>PET RESCUE</p></div>
    <div class="Copyright">
        Copyright (C) Todos los derechos reservados.
    </div>
    
    <div class="Contacto">
        <a href="contactanos.php" class="OpcionBarra"><img src="Imagenes/Index/Contactanosf.png" alt="error al cargar imagen" width="50"></a>        
        <label>Contactanos</label>
    </div>
</footer>
</html>