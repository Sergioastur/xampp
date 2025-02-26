<?php
// Se accede a la sesión
session_name("sesiones-1-12");
session_start();

// Si la posición no está guardada en la sesión, la pone a cero
if (!isset($_SESSION["posicion"])) {
    $_SESSION["posicion"] = 0;
}
?>

<!DOCTYPE html>
<body>
    <svg width="600" height="100" viewBox="-300 0 600 100">
        <line x1="-300" y1="10" x2="600" y2="10" stroke="black" stroke-width="5" />

<?php
// Dibuja el círculo en su posición
print "        <circle cx=\"$_SESSION[posicion]\" cy=\"10\" r=\"8\" fill=\"red\" />\n";
?>
    </svg>
    <form action="action.php" method="post">
        <button type="submit" name="accion" value="izquierda">Izquierda</button>
        <button type="submit" name="accion" value="derecha">Derecha</button>
        <button type="submit" name="accion" value="centro">Centro</button>
    </form>
</body>
</html>
