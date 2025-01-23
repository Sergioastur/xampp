<?php
// Datos de conexión
$servidor = "localhost:3307";
$usuario = "root";
$password = "";
$db = "migracion";

// Crear la conexión
$conn = new mysqli($servidor, $usuario, $password, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$query = "SELECT * FROM empleados";
$result = $conn->query($query);
if (!$result) die("Fatal Error");
$rows = $result->num_rows;

require '../mongoDB/vendor/autoload.php';
use MongoDB\Client;

for ($i=0; $i < $rows; $i++) {
    $result->data_seek($i);
    $nombre = htmlspecialchars($result->fetch_assoc()['Nombre']);
    $result->data_seek($i);
    $apellido1 = htmlspecialchars($result->fetch_assoc()['Apellido1']);
    $result->data_seek($i);
    $apellido2 = htmlspecialchars($result->fetch_assoc()['Apellido2']);
    $result->data_seek($i);
    $departamento = htmlspecialchars($result->fetch_assoc()['Departamento']);

    // Conectar a MongoDB
    $servidor = "mongodb://localhost:27017"; 
    $cliente = new MongoDB\Client($servidor);

    // Seleccionar la base de datos
    $nombreBaseDatos = "EJ9";
    $baseDatos = $cliente->$nombreBaseDatos;

    // Seleccionar o crear la colección
    $nombreColeccion = "empleados";
    $coleccion = $baseDatos->$nombreColeccion;

    // Insertar un documento
    $documento = [
        "nombre" => $nombre,
        "apellido1" => $apellido1,
        "apellido2" => $apellido2,
        "departamento" => $departamento
    ];

    $resultado = $coleccion->insertOne($documento);

    // Confirmar inserción
    if ($resultado->getInsertedCount() > 0) {
        echo "Documento insertado exitosamente con ID: " . $resultado->getInsertedId();
    } else {
        echo "Error al insertar el documento.";
    }

}
?>