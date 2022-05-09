<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estiloIndex.CSS">
    <link rel="stylesheet" href="CSS/sesion.CSS">
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
            <a href="Conocenos.php"><img src="Imagenes/Index/Infof.png" alt="error al cargar inicio de sesion" width="50">
            <label class="OpcionBarra">Información</label>
            </div>';

        }else{
            echo '<div class="Iniciar">
            <a href="registrarMascota.php" class="OpcionBarra"><img src="Imagenes/Index/servicios.png" alt="error al cargar inicio de sesion" width="50"></a>
            <label>Registrar Mascota</label>
            </div>
            
            <div class="Registrar">
            <a href="Servicios.php" class="OpcionBarra"><img src="Imagenes/Index/historial.png" alt="error al cargar inicio de sesion" width="50"></a>
            <label>Servicios Médicos</label>
            </div>

            <div class="Informacion">
            <a href="cerrars.php" class="OpcionBarra">
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
    <H2 class="indextitle">PRODUCTOS DISPONIBLES EN TIENDA</H2>
    <p class="camponame">Cuidando de la salud de tus mascotas desde 1990</p>
    <hr>
    <div><table class="tablamayor"><tr><td>
    <?php
        $basedatos = "pets";
        $conn = new mysqli('127.0.0.1', 'root', '',$basedatos);
        
        $TablaProductos = mysqli_query($conn,"SELECT img,nombreP,precio,descripcion FROM productos;");
        while($row = mysqli_fetch_array($TablaProductos)){ 
        echo 
        "<table class='tas2'>
        <tr><td class='prodimg'><img src='Imagenes/Productos/". $row['img']."' class='imagenes'/></td></tr>
        <tr><td class='prodname'>" . $row['nombreP'] ."</td></tr>
        <tr><td class='prod'>$". $row['precio'] ."</td></tr>
        <tr><td class='prod'>" . $row['descripcion'] . "</td></tr></table>";
        }
        
    ?>
    </div>
    </td></tr></table>
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
