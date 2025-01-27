<?php
require '../mongoDB/vendor/autoload.php'; // Incluye el autoload de Composer

// Conectar a MongoDB
$servidor = "mongodb://localhost:27017"; 
$cliente = new MongoDB\Client($servidor);

// Seleccionar la base de datos
$nombreBaseDatos = "mibd";
$baseDatos = $cliente->$nombreBaseDatos;

// Seleccionar o crear la colección
$nombreColeccion = "micoleccion";
$coleccion = $baseDatos->$nombreColeccion;

// Insertar un documento
$documento = [
    "nombre" => "Juan Pérez"
];

$resultado = $coleccion->insertOne($documento);

// Confirmar inserción
if ($resultado->getInsertedCount() > 0) {
    echo "Documento insertado exitosamente con ID: " . $resultado->getInsertedId();
} else {
    echo "Error al insertar el documento.";
}

unset($cliente); // Cerrar la conexión
?>
