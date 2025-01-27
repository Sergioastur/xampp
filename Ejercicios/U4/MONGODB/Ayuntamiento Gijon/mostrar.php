<?php
$servidor = "localhost:3307";
$usuario = "root";
$password = "";
$db = "ayugijon";

// Crear la conexión
$conn = new mysqli($servidor, $usuario, $password, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fecha'])) {
    $fecha = $_POST['fecha']; // Fecha enviada por el formulario
    $query = "SELECT * FROM noticias WHERE DATE(fecha) = '$fecha'";
    $result = $conn->query($query);

    // Verificar si hay resultados
    if ($result && $result->num_rows > 0) {
        echo "<h2>Resultados para la fecha: " . htmlspecialchars($fecha) . "</h2>";
        echo "<table border='1' cellpadding='10' cellspacing='0'>
                <thead>
                    <tr>";

        // Obtener los nombres de las columnas
        $columnas = $result->fetch_fields();
        foreach ($columnas as $columna) {
            echo "<th>" . htmlspecialchars($columna->name) . "</th>";
        }

        echo "    </tr>
                </thead>
                <tbody>";

        // Imprimir los datos de las filas
        while ($fila = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($fila as $valor) {
                echo "<td>" . htmlspecialchars($valor, ENT_QUOTES, 'UTF-8') . "</td>";
            }
            echo "</tr>";
        }

        echo "    </tbody>
              </table>";
    } else {
        echo "<p>No se encontraron resultados para la fecha: " . htmlspecialchars($fecha) . "</p>";
    }

    // Liberar memoria del resultado
    $result->free();
}

$conn->close();
