<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloIndex.CSS">
    <link rel="stylesheet" href="CSS/sesion.css?1.0">
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
            <img src="Imagenes/Index/Infof.png" alt="error al cargar inicio de sesion" width="50">
            <label>Información</label>
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

    <?php
if(isset($_POST["btnServicio"]))
{
        $nombre=$_POST["nombre"];
        $servicio=$_POST["servicio"];
        $dia=$_POST["dia"];
        $mes=$_POST["mes"];
        $anio=$_POST["anio"];
        $basedatos = "pets";
        $conn = new mysqli('127.0.0.1', 'root', '',$basedatos);
        $date = $anio."-".$mes."-".$dia;
        $fecha_entrada = strtotime($date,time());

        $fecha_actual = strtotime(date("Y-m-d H:i:00",time()));	
        if($fecha_actual > $fecha_entrada){
            echo '<p class="camponame">No es posible agendar una cita en la fecha seleccionada.</p>';
        }
        else{
            $resultado = mysqli_query($conn, "SELECT idusuario FROM usuarios WHERE estado='activo';");
            $user=0;
            while ($row = $resultado->fetch_assoc()) {$row["idusuario"];
           $user = $row["idusuario"];
            }
           $pet = 0;
           $idpet = mysqli_query($conn, "SELECT idmascota FROM  mascotas WHERE nombreM='$nombre' AND idusuario='$user';");
           while ($row2 = $idpet->fetch_assoc()) {$row2["idmascota"];
            $pet = $row2["idmascota"];}

            $consult1="SELECT COUNT(*) AS total FROM consultas WHERE idmascota='$pet' AND servicio='$servicio' AND fecha='$date';";
            $CheckDate = mysqli_query($conn,$consult1); 
            $row = mysqli_fetch_assoc($CheckDate);   
            if($row['total'] == '0'){
                $insertarconsulta = "INSERT INTO consultas (idmascota,nombreM,servicio,fecha) VALUES ('$pet','$nombre','$servicio','$date');";
                $InsertConsulta = mysqli_query($conn,$insertarconsulta);
                echo '<p class="camponame">Su cita fue agendada con exito!</p>';
            }else{
                echo '<p class="camponame">Usted ya posee una cita agendada para la fecha '.$dia.'/'.$mes.'/'.$anio.' con '.$nombre.'</p>';       
        }   
    }
}
?>
<form method="POST">
    <div class="section1">
            <label>
                <p class="camponame">Nombre de la Mascota:</p>
                <select class="campo" name="nombre" id="nombre">
                <?php
                    $basedatos = "pets";
                    $conn = new mysqli('127.0.0.1', 'root', '',$basedatos);
                    $resultado = mysqli_query($conn, "SELECT idusuario FROM usuarios WHERE estado='activo';");
                    while ($row = $resultado->fetch_assoc()) {$row["idusuario"];

                    $servicio = "SELECT nombreM FROM mascotas WHERE idusuario='$row[idusuario]';";
                    $ListaServicios = mysqli_query($conn,$servicio);
                    
                    while ($valores = mysqli_fetch_array($ListaServicios)) {
                        echo '<option value='.$valores['nombreM'].'>'.$valores['nombreM'].'</option>';
                    }}
                ?>
                </select>
            </label>
            <label>
                <p class="camponame">Tipo de Servicio:</p>
            </label>
                <select class="campo" name="servicio">
                    <option>Vacunas</option>
                    <option>Pet Grooming</option>
                    <option>Baños</option>
                    <option>Consulta Médica</option>
                </select>
                <label>
                <p class="camponame">Fecha de la cita: (Dia/Mes/Año)</p>
                <select class="cmb" name="dia">
                  <?php for($i=1;$i<=31;$i++){
                  ?>
                <option> <?php echo $i; ?> </option>";
                    <?php }; ?>
                </select>
                <select class="cmb" name="mes">
                <?php for($i=1;$i<=12;$i++){
                  ?>
                <option> <?php echo $i; ?> </option>";
                    <?php }; ?>
                </select>
                <select class="cmb" name="anio">
                  <option>2022</option>
                  <option>2023</option>
                  <option>2024</option>
                </select>
            </label>
            <div>
                <button type="submit" class="boton1" name="btnServicio" id="btnServicio">Agendar Cita</button>
            </div>
    </div>
    <br><br>
    <p class="camponame">Historial de consultas</p><br>
    <table class="tas">
    <tr class="titulostabla"><td>Nombre de Mascota</td><td>Tipo de Servicio</td><td>Fecha de Consulta</td></tr>
    </table class="tas">
    <table class="tas">
    <?php
        $basedatos = "pets";
        $user=0;
        $pet=0;

        $conn = new mysqli('127.0.0.1', 'root', '',$basedatos);
        $usuario = mysqli_query($conn, "SELECT idusuario FROM usuarios WHERE estado='activo';");
        while ($row = $usuario->fetch_assoc()) {$row["idusuario"];
        $user = $row["idusuario"];}
        
        $mascota = mysqli_query($conn, "SELECT idmascota FROM mascotas WHERE idusuario='$user';");
        while ($row = $mascota->fetch_assoc()) {$row["idmascota"];
        $pet = $row["idmascota"];
        
        $TablaServicio = mysqli_query($conn,"SELECT nombreM,servicio,fecha FROM consultas WHERE idmascota = '$pet'; ");
        while($row = mysqli_fetch_array($TablaServicio)){ 
        echo "<tr class='servi'>
        <td class='servi'>" . $row['nombreM'] . "</td>
        <td class='servi'>" . $row['servicio'] ."</td>
        <td class='servi'>" . $row['fecha'] . "</td></tr>";
        }
    }
    ?>
    </table>
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
