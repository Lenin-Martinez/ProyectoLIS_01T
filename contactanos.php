<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloIndex.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/contactanos.css">
    <title>Inicio</title>
</head>
<header>
    <div class="Logo">
        <img src="Imagenes/Index/Tigre2.png" alt="error al cargar el logo" width="150">
    </div>
    <div class="Textos">
        <div class="Nombre">
            Nombre de la veterinaria.
        </div>
        <div class="Eslogan">
            Una frase o eslogan interesante para la pagina, algo que llame la atencion.
        </div>
    </div>
    <div class="Iniciar">
        <img src="Imagenes/Index/IniciarSesionf.png" alt="error al cargar inicio de sesion" width="50">
        <label>Iniciar sesión</label>
    </div>
    <div class="Registrar">
        <img src="Imagenes/Index/Registratef.png" alt="error al cargar inicio de sesion" width="50">
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
    </div><br>
    <section>
    <form class="form-contacto">
            <h2 class="encabezado">Dejanos tu mensaje y nosotros te daremos respuesta lo más pronto posible</h2>
            <h3 class="descripcion">Completa el formulario con tus datos y comentarios que quieres compartirnos, estamos para escucharte</h3>
            <label for="Nombre">
                <p>Nombre:</p>
                <input type="text" id="nombre" name="nombre" class="campo" placeholder="Ingrese aqui su nombre" required>
            </label>
            <label for="Correo">
                <p>Correo electronico:</p>
                <input type="email" id="correo" name="correo" class="campo" placeholder="Ingrese aqui su correo electronico" required>
            </label>
            <label for="mensaje">
                <p>Mensaje:</p>
                <textarea id="mensaje" name="mensaje" class="campo" placeholder="Escriba aqui sus opiniones y/o consultas"  required></textarea>
            </label>
            <div>
                <button type="submit" class="boton">Enviar</button>
            </div>
        </form>
    </section>
</body>
<footer>
    <div class="Copyright">
        copyright (C) ...
    </div>
    
    <div class="Contacto">
        <img src="Imagenes/Index/Contactanosf.png" alt="error al cargar inicio de sesion" width="50">
        <label>Contactanos</label>
    </div>
</footer>
</html>