<!-- Crear un login y una pagina para registrar un nuevo usuario con los siguientes datos: Usuario y Contraseña 
El login tendra la opción para registrarse -->

<?php
//Se definen las variables de conexión a la base de datos
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "test2";
//Se define variable conn, como conexión a mysql ocupando las variables anteriores
        $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
//En caso de no conectar arroja error con mysqli_connect_error()
        if (!$conn) {
                die("No esta conectado" .mysqli_connect_error());
        }
?>