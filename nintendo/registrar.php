<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "nintendo_db";

$conexion = new mysqli($host, $user, $password, $dbname);

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$sexo = $_POST['sexo'];
$pais = $_POST['pais'];

$sql = "INSERT INTO usuarios (nombre, correo, password, fecha_nacimiento, sexo, pais) 
        VALUES ('$nombre', '$correo', '$contraseña', '$fecha_nacimiento', '$sexo', '$pais')";

if ($conexion->query($sql) === TRUE) {
    echo "<h2>¡Registro guardado exitosamente!</h2>";
    echo "<a href='login.html'>Volver al registro</a>";
} else {
    echo "Error al registrar: " . $conexion->error;
}

$conexion->close();
?>