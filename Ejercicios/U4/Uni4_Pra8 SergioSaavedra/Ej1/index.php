<?php
// Se accede a la sesión
session_name("sesiones-1-11");
session_start();

// Si el número no está guardado en la sesión, lo pone a cero
if (!isset($_SESSION["numero"])) {
    $_SESSION["numero"] = 0;
}
?>

<!DOCTYPE html>

    
    <form action="action.php" method="post">
        
    <p>
        <button type="submit" name="accion" value="bajar" style="font-size: 4rem">-</button>

        <?php
        // Muestra el número, guardado en la sesión
        print "        <span style=\"font-size: 4rem\">$_SESSION[numero]</span>\n";
        ?>

        <button type="submit" name="accion" value="subir" style="font-size: 4rem">+</button>
    </p>
    </form>

</html>