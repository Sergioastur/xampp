<?php
    $usu = "pepito";
    $contra = "123";

    if ($_POST['usu'] == $usu && $_POST['psw'] == $contra) {
        echo "Correcto";
    } else {
        echo "Usuario y/o Contraseña erronea";
    }
?>