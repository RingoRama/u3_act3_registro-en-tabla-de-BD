<!DOCTYPE html>

<html>
    <head>
        <title>
            Rivas Andrade Jesús Renato
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <center>
    <body>
        <form method="POST">
            <h1>Ingrese sus datos:</h1>
            <p>
                Introduzca su nombre:
                <input type="text" name="nombre" placeholder="Ej. Jonathan">
            </p>
            <p>
                Introduzca sus apellidos:
                <input type="text" name="apellidos" placeholder="Ej. Joestar López">
            </p>
            <p>
                Introduzca su correo electrónico:
                <input type="email" name="correo" placeholder="Ej. user@genshin.com">
            </p>
            <p>
                Introduzca su fecha de nacimiento:
                <input type="date" name="fecha_nac">
            </p>
            <p>
                Introduzca su dirección:
                <input type="text" name="direccion" placeholder="Ej. Liyue #312">
            </p>
            <p>
                <input type="submit" name="cliente">
                <input type="reset">
            </p>
        </form>
        <?php
        include("cliente.php");
        ?>
    </body>
    </center>
</html>