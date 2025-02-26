<?php
// Se accede a la sesión
session_name("sesiones-1-11");
session_start();

// Si el número no está guardado en la sesión, vuelve al formulario
if (!isset($_SESSION["numero"])) {
    $_SESSION["numero"] = 0;
}

// Funciones auxiliares
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

// Recogida de acción
$accion  = recoge("accion");
$accionOk = false;

// Comprobación de acción
if ($accion != "cero" && $accion != "subir" && $accion != "bajar") {
    // Si no es una de las tres posibles acciones, se vuelve al formulario
    header("Location: index.php");
    exit;
} else {
    $accionOk = true;
}

// Si la acción recibida es válida ...
if ($accionOk) {
    // Cambia el valor del número
    if ($accion == "cero") {
        $_SESSION["numero"] = 0;
    } elseif ($accion == "subir") {
        $_SESSION["numero"]++;
    } elseif ($accion == "bajar") {
        $_SESSION["numero"]--;
    }

    // y vuelve al formulario
    header("Location: index.php");
    exit;
}
?>
