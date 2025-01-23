<?php
// Datos de conexión
$servidor = "localhost:3307";
$usuario = "root";
$password = "";

// Crear la conexión
$conn = new mysqli($servidor, $usuario, $password);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Crear la base de datos
$nombreBaseDatos = "mibd";
$sql = "CREATE DATABASE $nombreBaseDatos";

if ($conn->query($sql) === TRUE) {
    echo "Base de datos creada exitosamente";
} else {
    echo "Error al crear la base de datos: " . $conn->error;
}

// Seleccionar la base de datos
$conn->select_db($nombreBaseDatos);

// Crear la tabla
$nombreTabla = "usuarios";
$sqlCrearTabla = "CREATE TABLE $nombreTabla (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL
)";
if ($conn->query($sqlCrearTabla) === TRUE) {
    echo "Tabla creada exitosamente.<br>";
} else {
    die("Error al crear la tabla: " . $conn->error);
}

// Insertar un registro
$sqlInsertar = "INSERT INTO $nombreTabla (nombre) VALUES ('Juan Pérez')";
if ($conn->query($sqlInsertar) === TRUE) {
    echo "Registro insertado exitosamente.";
} else {
    die("Error al insertar el registro: " . $conn->error);
}

// Cerrar la conexión
$conn->close();
