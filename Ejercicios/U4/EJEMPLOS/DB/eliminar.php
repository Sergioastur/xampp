<?php
    require_once 'login.php';
    $connection = new mysqli($hn, $un, $pw, $db);
    if ($connection->connect_error) die("Fatal Error");
    $query = "DELETE FROM usuarios WHERE ID= 1";
    $result = $connection->query($query);
    if (!$result) die("Fatal Error");

    

    $connection->close();
?>