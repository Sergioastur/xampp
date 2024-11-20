<?php
session_start();
if ($_POST["psw"] == $_POST["reppsw"]) {
    $_SESSION["usu"] = $_POST['usu'];
    $_SESSION["psw"] = $_POST["psw"];
    $_SESSION["rol"] = $_POST["rol"];
}
?>