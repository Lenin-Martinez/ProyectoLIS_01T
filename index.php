<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estiloIndex.css">
    <title>Pet Rescue</title>
</head>

<header>
<?php
    $basedatos = "pets";
    $con = new mysqli('127.0.0.1', 'root', '');
    $SQL =  mysqli_query($con, "CREATE DATABASE IF NOT EXISTS `pets`"); 
    $conn = new mysqli('127.0.0.1', 'root', '',$basedatos);
    $Table1 = mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `usuarios` (
        `idusuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `usuario` varchar(25) NOT NULL UNIQUE,
        `contrasenia` varchar(25) NOT NULL,
        `correo` varchar(100),
        `estado` varchar(25),
        PRIMARY KEY (`idusuario`)
     ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23");

    $Table2 = mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `mascotas` (
        `idmascota` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `idusuario` int(10) NOT NULL,
        `nombreM` char(25) NOT NULL,
        `especie` char(25) NOT NULL,
        `edad` char(25),
        PRIMARY KEY (`idmascota`),
        INDEX (idusuario),
        FOREIGN KEY (idusuario) REFERENCES usuarios(idusuario)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

    $Table3 = mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `consultas` (
        `idconsulta` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `idmascota` int(10) unsigned NOT NULL,
        `nombreM` char(25) NOT NULL,
        `servicio` char(30) NOT NULL,
        `fecha` date NOT NULL,
        PRIMARY KEY (`idconsulta`),
        INDEX (idmascota),
        FOREIGN KEY (idmascota) REFERENCES mascotas(idmascota)
      ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;"); 

    $Table4 = mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `productos` (
        `idproducto` int(10) NOT NULL,
        `nombreP` char(25) NOT NULL,
        `img` char(25) NOT NULL,
        `precio` float NOT NULL,
        `descripcion` char(200) NOT NULL,
        PRIMARY KEY (`idproducto`)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8;");  
      
    $InsertP = mysqli_query($conn,"SELECT COUNT(*) AS total From `productos`"); 
    $row = mysqli_fetch_assoc($InsertP);   
    if($row['total'] == '0'){
        $NewProductos = mysqli_query($conn,"INSERT INTO `productos` (`idproducto`, `nombreP`, `img`, `precio`, `descripcion`) VALUES
        ('1', 'NUPEC', 'pr1.png', 24.82, 'Tratamiento con DHA que promueve la funcion cognitiva'),
        ('2', 'NEGARD', 'pr2.png', 20.51, 'Tratamiento masticable mata pulgas y garrapatas. Producto masticable'),
        ('3', 'CARDIAL B', 'pr3.png', 15.31, 'Es inhibidor de la enzima convertidora de la angiotensina'),
        ('4', 'DERMATRYL', 'pr4.png', 24.85, 'Es un shampoo y jabón dermatológico para infecciones en la piel'),
        ('5', 'UVITA', 'pr5.png', 33.82, 'Contiene Vitaminas, minerales y aminoacidos escenciales'),
        ('6', 'INMUNOL', 'pr6.png', 20.51, 'Fortalece el sistema inmunológico incrementando los títulos de anticuerpos'),
        ('7', 'ANXIVET', 'pr7.png', 17.31, 'ayuda a apaciguarlos en situaciones de miedo y estrés'),
        ('8', 'TOTALFULL', 'pr8.png', 44.85, 'Antiparasitario Interno de Amplio Espectro'),
        ('9', 'NUPEC', 'pr1.png', 24.82, 'Tratamiento con DHA que promueve la funcion cognitiva');");
    }else{
    }

   ?>

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

    <div>
                <h1 class="indextitle">PET RESCUE</h1>
                <p class="indexdesc">Tu veterinaria de confianza desde 1998. Contamos con servicios veterinarios, pet grooming y pet shop. Especializados en el cuidado felino, canino y de reptiles. Consulta por nuestras promociones de verano, y descuentos con nuestra tarjeta de cliente frecuente "PET LOVERS".</p>
    </div>

    <p class="indextitle">RESEÑAS DE NUESTROS AMIGUITOS PELUDOS</p>

    <div id="mainindex">
        <div class="columna4"><img src="Imagenes/Index/post5.jpeg" alt="error al cargar imagen" width=431></div>
        <div class="columna5"><img src="Imagenes/Index/post7.png" alt="error al cargar imagen" width=466></div>
        <div class="columna6"><img src="Imagenes/Index/post6.jpg" alt="error al cargar imagen" width=410></div>
    </div>

    <div>
        <table class="comentario">
            <tr>
                <td><img src="Imagenes/Index/comm1.png" alt="error al cargar imagen" width=225></td>
                <td width=200>
                    <p>@Thomas506</p>
                    <p>Tommy Junior, esta encantado con los servicios de Pet Rescue, sin duda una de las mejores veterinarias, siempre muy amables y serviciales.</p>
                </td>
                <td><img src="Imagenes/Index/comm2.png" alt="error al cargar imagen" width=225></td>
                <td width=200>
                    <p>@Clint456</p>
                    <p>Cuentan con excelentes instalanciones, amplio parqueo, y siempre en la pet shop encuentro todo lo que busco, totalmente recomendado.</p>
                </td>
                <td><img src="Imagenes/Index/comm3.png" alt="error al cargar imagen" width=225></td>
                <td width=175>
                    <p>@REX909</p>
                    <p>Una veterinaria que atienda las necesidades de los reptiles no se ve todos los dias, totalmente equipado y capacitado.</p>
                </td>
            </tr>
        </table>
    </div>

    <p class="indextitle">CONOCE NUESTRAS PROMOCIONES ESPECIALES PARA TI</p>
    <div id="mainindex">
        <div class="columna7"><img src="Imagenes/Index/post1.png" alt="error al cargar imagen" width="250"></div>
        <div class="columna7"><img src="Imagenes/Index/post8.png" alt="error al cargar imagen" width="250"></div>
        <div class="columna7"><img src="Imagenes/Index/post9.png" alt="error al cargar imagen" width="250"></div>
        <div class="columna8"><img src="Imagenes/Index/post10.png" alt="error al cargar imagen" width="250"></div>

    </div>
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
