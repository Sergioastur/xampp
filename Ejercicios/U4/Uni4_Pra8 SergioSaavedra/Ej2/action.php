<?php
// Se accede a la sesión
session_name("sesiones-1-12");
session_start();

// Si la posición no está guardada en la sesión, la pone a cero
if (!isset($_SESSION["posicion"])) {
    $_SESSION["posicion"] = 0;
}

// Funciones auxiliares
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var])) ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8")) : "";
    return $tmp;
}

// Recogida de accion
$accion = recoge("accion");
$accionOk = true;

// Comprobación de accion
if ($accion != "centro" && $accion != "izquierda" && $accion != "derecha") {
    // Si no es una de las tres posibles acciones, se vuelve al formulario
    header("Location: sindex.php");
    exit;
} else {
    $accionOk = true;
}

// Si la accion recibibida es válida ...
if ($accionOk) {
    //se mueve el punto
    if ($accion == "centro") {
        $_SESSION["posicion"] = 0;
    } elseif ($accion == "izquierda") {
        $_SESSION["posicion"] -= 20;
    } elseif ($accion == "derecha") {
        $_SESSION["posicion"] += 20;
    }

    // si sale por un lado, entra por el otro
    if ($_SESSION["posicion"] > 300) {
        $_SESSION["posicion"] = -300;
    } elseif ($_SESSION["posicion"] < -300) {
        $_SESSION["posicion"] = 300;
    }

    // y vuelve al formulario
    header("Location: index.php");
    exit;
}
