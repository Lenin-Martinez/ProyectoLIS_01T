<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-signin-client_id" content="326246464465-m3r7rg6jkl67kd7hn8rflvue916r94lf.apps.googleusercontent.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estiloIndex.css">
    <link rel="stylesheet" href="CSS/sesion.css">
    <title>Pet Rescue</title>
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
        <label class="OpcionBarra">Información</label>
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
<form method="POST">
<?php

if(isset($_POST["btn1"]))
{
    if((!empty($_POST["nombre"])) && (!empty($_POST["contra"])))
    {

        $nombre=$_POST["nombre"];
        $contra=$_POST["contra"];
        $correo=$_POST["correo"];
        $basedatos = "pets";
        $conn = new mysqli('127.0.0.1', 'root', '',$basedatos);
        $consult1="SELECT COUNT(*) AS total FROM usuarios WHERE usuario='$nombre';";
        $CheckUser = mysqli_query($conn,$consult1); 
        $row = mysqli_fetch_assoc($CheckUser);   
        if($row['total'] == '0'){
            $consulta = "INSERT INTO usuarios (usuario, contrasenia,correo,estado) VALUES ('$nombre', '$contra','$correo','desactivado');";
            $InsertUserNew = mysqli_query($conn,$consulta);
            echo '<p class="camponame">Ingreso Exitoso!</p>';
        }else{
            echo '<p class="camponame">El nombre de usuario no esta disponible. Intente de nuevo.</p>';
        }
    }
    else
    {
    }
}
?>
   <h2 class="indextitle">Registro de Usuario</h2>
    <div class="section1">
            <label>
                <p class="camponame">Nombre:</p>
                <input type="text" id="nombre" name="nombre" class="campo" placeholder="Ingrese aqui su nombre" required>
            </label>
            <label>
                <p class="camponame">Contraseña:</p>
                <input type="text" id="contra" name="contra" class="campo" placeholder="Ingrese aqui su contraseña" required>
            </label>
            <label>
                <p class="camponame">Correo electronico:</p>
                <input type="email" id="correo" name="correo" class="campo" placeholder="Ingrese aqui su correo electronico" required>
            </label>
            <div>
                <button type="submit" class="boton1" name="btn1" id="btn1">Registrarse</button>
            </div>
           </div><br>
        <div class="acceder">
            <div  class="g-signin2" data-onsuccess="onSignIn"></div><br>
    </div><br>
    </div>
</form>
</body>
<br>
<footer>
    <div class="BarraMenu"><p>PET RESCUE</p></div>
    <div class="Copyright">
        <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a><br />Esta obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Licencia Creative Commons Atribución-NoComercial-CompartirIgual 4.0 Internacional</a>.
    </div>
    
    <div class="Contacto">
        <img src="Imagenes/Index/Contactanosf.png" alt="error al cargar inicio de sesion" width="50">
        <label>Contactanos</label>
    </div>
</footer>
</html>

<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
