<?php
//Se incluye la conexión a la base de datos
include("conexion.php");
//Se declaran y define variables traidas de HTML.
$nombre = $_POST["usuario"];
$pass = $_POST["pass"];

//Login
//Si se presióna ingresar 
if (isset($_POST["btningresar"])) {
        //Se aplica consulta a tabla login y a usuario y password igual a usuario y contraseña
        $query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '$nombre' AND password='$pass' " );
        //consulta a query por cada fila
        $nr = mysqli_num_rows($query);
        //Si valor es como resultado 1 envia un script  alert. y te lleva a pantalla inicial
        if ($nr==1) {
                echo "<script> alert('Bienvenido $nombre'); window.location='principal.html'</script> ";
        }else {
                echo "<script> alert('Usuario no existe'); window.location='index.html' </script> ";
        }
}
//Registrar
//Si se presiona registrar
if (isset($_POST["btnregistrar"])) {
        //Se define variable que inserta nombre y usuario a la base de datos. 
        $sqlgrabar = "INSERT INTO login(usuario, password) values ('$nombre','$pass')";
        //Si  se graba/guarda se envia notificación
        if (mysqli_query($conn,$sqlgrabar)) {
                echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='index.html'</script>";
        }else {
                echo "Error: ".$sql."<br>".mysql_error($conn);
        }
}
?>