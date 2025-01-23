<?php
require '../mongoDB/vendor/autoload.php';

use MongoDB\Client;

// Conectar a MongoDB
$client = new Client("mongodb://localhost:27017");
$collection = $client->AyuGijon->noticias;

// Leer el contenido del archivo JSON
$jsonFile = 'noticias.json';
$jsonData = file_get_contents($jsonFile);

// Convertir JSON a un array asociativo de PHP
$dataArray = json_decode($jsonData, true);

// Insertar datos en MongoDB
$result = $collection->insertMany($dataArray);

echo "Insertados " . $result->getInsertedCount() . " documentos.\n";
?>
