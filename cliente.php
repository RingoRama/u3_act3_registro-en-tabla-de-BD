<?php 
include("con_db.php");

if(isset($_POST['cliente'])){
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['direccion']) >= 1){
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
        $fecha_nac = $_POST['fecha_nac'];
        $direccion = $_POST['direccion'];

        $consulta = "INSERT INTO datos(nombre, apellidos, correo, fecha_nac, direccion) VALUES ('$nombre','$apellidos','$correo','$fecha_nac','$direccion')";
        $resultado = mysqli_query($con,$consulta);

        if($resultado){
            ?>
            <h3 class="ok">
                Se ha registrado correctamente
            </h3>
            <?php
        }
        else{
            ?>
            <h3 class="bad">
                Ha ocurrido un error en el registro
            </h3>
            <?php
        }
    }
    else {
        ?>
        <h3 class="bad">
            Por favor, complete los campos
        </h3>
        <?php
    }
}

?>