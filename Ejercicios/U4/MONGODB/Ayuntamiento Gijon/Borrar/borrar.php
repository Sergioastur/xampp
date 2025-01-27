<?php
    require '../../mongoDB/vendor/autoload.php';

    use MongoDB\Client;
    
    // Conectar a MongoDB
    $client = new Client("mongodb://localhost:27017");
    $collection = $client->AyuGijon->noticias;

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fecha'])) {
        $fecha = $_POST['fecha']; // Fecha enviada por el formulario

        // Borrar documentos que coincidan con un criterio
        $result = $collection->deleteMany(['fecha' => $fecha]);

        // Confirmar el resultado
        echo $result->getDeletedCount() . " documento(s) eliminado(s).";
    }

    
?>