<?php
    session_start();
    $_SESSION["color"] = $_POST["color"];
?>

<!DOCTYPE html>
<html lang="en">
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

    
</body>
</html>