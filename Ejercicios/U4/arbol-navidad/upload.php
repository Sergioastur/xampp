<?php
session_start();
$target_dir = "uploads/";
$uploadOk = 1;
if (isset($_FILES["f1"]["name"])) {
$tiposImagen = array("jpg", "jpeg", "png", "gif"); 
$arbol = [];

for ($i = 1; $i <= 10; $i++) {
    $file_name = $_FILES["f" . $i]["name"];
    $file_tmp = $_FILES["f" . $i]["tmp_name"];
    $file_size = $_FILES["f" . $i]["size"];
    $file_error = $_FILES["f" . $i]["error"];
    
    
    if ($file_name) {
        
        $extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        
        if (!in_array($extension, $tiposImagen)) {
            echo "Solo se permiten archivos JPG, JPEG, PNG y GIF.";
            $uploadOk = 0;
        }

        
        if ($file_error !== 0) {
            echo "Hubo un error al cargar el archivo.";
            $uploadOk = 0;
        }

        
        if ($file_size > 5000000) { 
            echo "El archivo es demasiado grande.";
            $uploadOk = 0;
        }

        
        if ($uploadOk === 1) {
            $target_file = $target_dir . basename($file_name);
            
            
            if (file_exists($target_file)) {
                $target_file = $target_dir . uniqid() . "-" . basename($file_name);
            }

            
            if (move_uploaded_file($file_tmp, $target_file)) {
                /* echo "El archivo " . basename($file_name) . " se ha subido correctamente."; */
                array_push($arbol, $file_name);
            } else {
                echo "Hubo un error al guardar el archivo.";
            }
        }
    }
}
$_SESSION["arbol"] = $arbol;
}
if ($uploadOk != 0) {
$arbol = $_SESSION["arbol"];

if(isset($_GET["action"])) {
    switch ($_GET["action"]) {
        case "up":
            $_SESSION["top"]++;
        break;
        case "down":
            $_SESSION["top"]--;
        break;
        case "left":
            $_SESSION["left"]++;
        break;
        case "right":
            $_SESSION["left"]--;
        break;
    }
} else{
    $_SESSION["top"]=30;
    $_SESSION["left"]=15;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            margin: 15vh;
            
        }
        table {
            border-collapse: collapse;
            text-align: center;
        }
        tr {
            display: flex;
            justify-content: center;
        }
        td {
            padding: 10px;
        }
        td img {
            max-width: 100px;
            max-height: 100px;
        }
        tr:first-child td {
            grid-column: span 4;
        }
        tr:nth-child(2) td {
            grid-column: span 2;
        }
        #tocon {
            height: 100px;
            width: 50px;
            background-color: brown;
            position: absolute;
            top: 69vh;
        }
        #botones {
            position: absolute;
            left: 30vh;
        }
        #estrella {
            position: absolute;
            left: <?php echo $_SESSION["left"]."vh";?>;
            top: <?php echo $_SESSION["top"]."vh";?>;
        }
    </style>
</head>
<body>
<table>
            <tr>
                <td colspan="4">
                    <!-- <img src="uploads/<?php echo  $arbol[0];?>"> -->
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <img src="uploads/<?php echo  $arbol[1];?>">
                </td>
                <td colspan="2">
                <img src="uploads/<?php echo  $arbol[2];?>">
                </td>
            </tr>
            <tr>
                <td>
                <img src="uploads/<?php echo  $arbol[3];?>">
                </td>
                <td colspan="2">
                <img src="uploads/<?php echo  $arbol[4];?>">
                </td>
                <td>
                <img src="uploads/<?php echo  $arbol[5];?>">
                </td>
            </tr>
            <tr>
                <td>
                <img src="uploads/<?php echo  $arbol[6];?>">
                </td>
                <td>
                <img src="uploads/<?php echo  $arbol[7];?>">
                </td>
                <td>
                <img src="uploads/<?php echo  $arbol[8];?>">
                </td>
                <td>
                <img src="uploads/<?php echo  $arbol[9];?>">
                </td>
            </tr>
        </table>
        <div id="tocon">

        </div>
        <img src="uploads/<?php echo  $arbol[0];?>" id="estrella" width="100px">
        <form id="botones" action="#" method="get">
            <button id="up" type="submit" name="action" value="up">🢁</button>
            <button id="down" type="submit" name="action" value="down">🢃</button>
            <button id="left" type="submit" name="action" value="left">🢀</button>
            <button id="right" type="submit" name="action" value="right">🢂</button>
        </form>
</body>
</html>

<?php }?>
