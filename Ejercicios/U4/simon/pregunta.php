<?php
    session_start();
    $_SESSION["color"] = $_POST["color"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .circulo {
            width: 100px;       
            height: 100px;      
            background-color: <?php echo $color;?>; 
            border-radius: 50%; 
        }
    </style>
</head>
<body>
<div class="circulo"></div>
<form action="#" method="post">
        
</form>
    
</body>
</html>