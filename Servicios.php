<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estiloIndex.CSS">
    <link rel="stylesheet" href="CSS/sesion.CSS">
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

    <div class="section1">
            <label>
                <p class="camponame">Nombre de la Mascota:</p>
                <input type="text" id="nombremascota" name="nombre" class="campo" placeholder="Ingrese aqui el nombre de su mascota" required>
            </label>
            <label>
                <p class="camponame">Especie:</p>
                <input type="text" id="especie" name="especie" class="campo" placeholder="Ingrese aqui la especie de su mascota" required>
            </label>
            <label>
                <p class="camponame">Tipo de Servicio:</p>
                <select class="cmb">
                  <option>Vacunas</option>
                  <option>Consulta Veterinaria</option>
                  <option>Baño Completo</option>
                  <option>Corte de Pelo</option>
                </select>
            </label>

            <label>
                <p class="camponame">Fecha de la cita:</p>
                <select class="cmb">
                  <?php for($i=1;$i<=31;$i++){
                  ?>
                <option> <?php echo $i; ?> </option>";
                    <?php }; ?>
                </select>
                <select class="cmb">
                  <option>Enero</option>
                  <option>Febrero</option>
                  <option>Marzo</option>
                  <option>Abril</option>
                  <option>Mayo</option>
                  <option>Junio</option>
                  <option>Julio</option>
                  <option>Agosto</option>
                  <option>Septiembre</option>
                  <option>Octubre</option>
                  <option>Noviembre</option>
                  <option>Dicembre</option>
                </select>
                <select class="cmb">
                  <option>2022</option>
                  <option>2023</option>
                  <option>2024</option>
                </select>
            </label>
            <div>
                <button type="submit" class="boton1">Agendar Cita</button>
            </div>
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