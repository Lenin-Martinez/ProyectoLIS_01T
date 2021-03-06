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
<form method="POST">
<header>
    <div class="Logo">
        <img src="Imagenes/Index/royal.png" alt="error al cargar el logo" width="100%">
    </div>
    <div class="Textos">
        <div class="Nombre">
            <img src="Imagenes/Index/indextop.png" alt="error al cargar imagen" width="100%">
        </div>
    </div>
    <?php
        $basedatos = "pets";
        $conn = new mysqli('127.0.0.1', 'root', '',$basedatos);
        $sesion = "SELECT COUNT(*) AS total FROM usuarios WHERE estado='activo';";
        $Check = mysqli_query($conn,$sesion); 
        $row = mysqli_fetch_assoc($Check);   
        if($row['total'] == '0'){
            echo '<div class="Iniciar">
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
            </div>';

        }else{
            echo '<div class="Iniciar">
            <a href="Login.php" class="OpcionBarra"><img src="Imagenes/Index/servicios.png" alt="error al cargar inicio de sesion" width="50"></a>
            <label>Servicios</label>
            </div>
            
            <div class="Registrar">
            <a href="registrarse.php" class="OpcionBarra"><img src="Imagenes/Index/historial.png" alt="error al cargar inicio de sesion" width="50"></a>
            <label>Historial</label>
            </div>

            <div class="Informacion">
            <a href="login.php" class="OpcionBarra">
            <img src="Imagenes/Index/CerrarSesion.png"alt="error al cargar inicio de sesion" width="50"></a>
            <label>Cerrar sesión</label>
            </div>';
        }
?>
</header>

<body>
    <div class="BarraMenu">
        <a href="index.php" class="OpcionBarra">Inicio</a>
        <a href="Productos.php" class="OpcionBarra">Productos</a>
        <a href="Conocenos.php" class="OpcionBarra">Conocenos</a>
        <a href="contactanos.php" class="OpcionBarra">Contactanos</a>
    </div><br>

    
    <?php
     if(isset($_POST["btn2"]))
     {
         $basedatos = "pets";
         $conn = new mysqli('127.0.0.1', 'root', '',$basedatos);
         $cerrar="UPDATE usuarios SET estado='desactivado' WHERE estado='activo';";
         $CerrarS = mysqli_query($conn,$cerrar); 
         header('Location: http://localhost/xampp/ProyectoLIS_01T/Login.php');
     }
     ?>

    <div class="section1">
        <form method="POST">
        <p class="camponame">Confirmación. Desea cerrar sesión?</p>
        <div>
        <button type="submit" class="boton1" name="btn2" id="btn2">Cerrar Sesión</button>
    </div></div>
        
</form>
</body>

<footer>
    <div class="BarraMenu"><p>PET RESCUE</p></div>
    <div class="Copyright">
        <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a><br />Esta obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Licencia Creative Commons Atribución-NoComercial-CompartirIgual 4.0 Internacional</a>.
    </div>
    
    <div class="Contacto">
        <a href="contactanos.php" class="OpcionBarra"><img src="Imagenes/Index/Contactanosf.png" alt="error al cargar imagen" width="50"></a>        
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