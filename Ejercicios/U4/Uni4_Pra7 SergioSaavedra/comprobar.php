<?php
require_once 'login.php';
$connection = new mysqli($hn, $un, $pw, $db);
$usu = $_POST["login"];
$psw = $_POST["clave"];
if ($connection->connect_error) die("Fatal Error");
$query = "SELECT * FROM usuarios WHERE usuario='$usu' AND password='$psw'";
$result = $connection->query($query);
if (!$result) die("Fatal Error");
$rows = $result->num_rows;
if ($rows > 0) {
    $result->data_seek(0);
    echo "Se esta intentando validar como el usuario ".htmlspecialchars($result->fetch_assoc()['usuario']);
    $result->data_seek(0);
    echo " con el rol ".htmlspecialchars($result->fetch_assoc()['rol']);
    $result->data_seek(0);
    $rol = htmlspecialchars($result->fetch_assoc()['rol']);

} else {
    echo "El usuario introducido no existe, validese de nuevo";
    echo "<a href='index.php'>volver</a>";
}

if (!isset($rol)) {
    $result->close();
    $connection->close();
} else if ($rol == 'consultor') {
    echo "Ha conectado a la BD como CONSULTOR";
    echo "<a href='verArticulos.php'>visualizar artículos en la tabla artículos</a>";
} else {
    $result->close();
    $connection->close();
    $un = 'administrador';
    $pw = 'administrador';
    $connection = new mysqli($hn, $un, $pw, $db);
    echo "Ha conectado a la BD como ADMINISTRADOR<br>";
    echo "<a href='newArticulos.php'>introducir nuevos artículos</a>";
    echo "<a href='verArticulos.php'>visualizar artículos en la tabla artículos</a>";

}

?>