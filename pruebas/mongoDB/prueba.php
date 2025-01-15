<?php
require '../../mongoDB/vendor/autoload.php'; // Asegúrate de incluir Composer autoload

use MongoDB\Client;

try {
    // Cambia 'mongodb://localhost:27017' por la URI de tu MongoDB
    $mongoClient = new Client("mongodb://localhost:27017");
    
    // Obtener la lista de bases de datos para verificar la conexión
    $databases = $mongoClient->listDatabases();
    
    echo "Conexión exitosa. Las bases de datos disponibles son:\n";
    foreach ($databases as $db) {
        echo $db->getName() . "\n";
    }
} catch (Exception $e) {
    echo "Error al conectar a MongoDB: " . $e->getMessage() . "\n";
}
?>
